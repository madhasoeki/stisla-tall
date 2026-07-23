@props([
    'as' => 'div',
    'vertical' => false,
    'block' => false,
    'defaultValue' => null,
    'activationMode' => null,
    'id' => null,
    'vars' => [],
])

@php
    $id = $id ?? 'stisla-tabs-' . \Illuminate\Support\Str::random(8);

    $classes = 'tabs';
    if ($vertical) {
        $classes .= ' tabs--vertical';
    }
    if ($block) {
        $classes .= ' tabs--block';
    }

    $vars = is_array($vars) ? $vars : [];
    $styleString = '';
    if (! empty($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--tabs-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $attrs = [
        'id' => $id,
        'class' => $classes,
        'data-stisla-tabs' => '',
    ];

    if ($defaultValue) {
        $attrs['data-value'] = $defaultValue;
    }
    if ($activationMode) {
        $attrs['data-stisla-tabs-activation-mode'] = $activationMode;
    }
@endphp

<{{ $as }} {{ $attributes->merge($attrs)->merge(['style' => trim($styleString)]) }}>
    {{ $slot }}
</{{ $as }}>

@once
    <script>
        (function() {
            if (window.Stisla && window.Stisla.Tabs) return;
            window.Stisla = window.Stisla || {};

            class StislaTabsInstance {
                constructor(el) {
                    this.el = el;
                }

                getValue() {
                    const active = this.el.querySelector('.tabs__trigger[data-state="active"], .tabs__panel[data-state="active"]');
                    return active ? active.getAttribute('data-value') : null;
                }

                setValue(val) {
                    const prev = this.getValue();
                    if (prev === val) return;

                    const changeEvt = new CustomEvent('stisla:tabs:changing', {
                        detail: { value: val, previousValue: prev },
                        cancelable: true,
                        bubbles: true
                    });
                    if (!this.el.dispatchEvent(changeEvt)) return;

                    // Update internal triggers
                    this.el.querySelectorAll('.tabs__trigger').forEach(trig => {
                        const isActive = trig.getAttribute('data-value') === val;
                        trig.setAttribute('data-state', isActive ? 'active' : 'inactive');
                        if (isActive && document.activeElement && document.activeElement.classList.contains('tabs__trigger')) {
                            trig.focus();
                        }
                    });

                    // Update internal panels
                    this.el.querySelectorAll('.tabs__panel').forEach(panel => {
                        const isActive = panel.getAttribute('data-value') === val;
                        panel.setAttribute('data-state', isActive ? 'active' : 'inactive');
                    });

                    // Update external triggers matching this ID
                    if (this.el.id) {
                        document.querySelectorAll(`[aria-controls="${this.el.id}"][data-stisla-tabs-value]`).forEach(ext => {
                            const isActive = ext.getAttribute('data-stisla-tabs-value') === val;
                            ext.setAttribute('data-state', isActive ? 'active' : 'inactive');
                            if (isActive) {
                                ext.setAttribute('aria-current', 'page');
                            } else {
                                ext.removeAttribute('aria-current');
                            }
                        });
                    }

                    const changedEvt = new CustomEvent('stisla:tabs:changed', {
                        detail: { value: val, previousValue: prev },
                        bubbles: true
                    });
                    this.el.dispatchEvent(changedEvt);
                }
            }

            window.Stisla.Tabs = {
                instances: new WeakMap(),
                getOrCreate(el) {
                    if (!el) return null;
                    if (this.instances.has(el)) return this.instances.get(el);
                    const inst = new StislaTabsInstance(el);
                    this.instances.set(el, inst);
                    return inst;
                }
            };

            // Event delegation for clicks
            document.addEventListener('click', function(e) {
                // Internal trigger click
                const trigger = e.target.closest('[data-stisla-tabs] .tabs__trigger');
                if (trigger) {
                    if (trigger.hasAttribute('disabled') || trigger.hasAttribute('data-disabled')) return;
                    const root = trigger.closest('[data-stisla-tabs]');
                    if (root) {
                        const inst = window.Stisla.Tabs.getOrCreate(root);
                        const val = trigger.getAttribute('data-value');
                        if (val) {
                            inst.setValue(val);
                        }
                    }
                    return;
                }

                // External trigger click
                const extTrigger = e.target.closest('[aria-controls][data-stisla-tabs-value]');
                if (extTrigger) {
                    const targetId = extTrigger.getAttribute('aria-controls');
                    const val = extTrigger.getAttribute('data-stisla-tabs-value');
                    const targetEl = document.getElementById(targetId);
                    if (targetEl && val) {
                        const inst = window.Stisla.Tabs.getOrCreate(targetEl);
                        inst.setValue(val);
                    }
                }
            });

            // Keyboard navigation delegation
            document.addEventListener('keydown', function(e) {
                const trigger = e.target.closest('[data-stisla-tabs] .tabs__trigger');
                if (!trigger) return;

                const root = trigger.closest('[data-stisla-tabs]');
                if (!root) return;

                const triggers = Array.from(root.querySelectorAll('.tabs__trigger:not([disabled]):not([data-disabled])'));
                if (!triggers.length) return;

                const index = triggers.indexOf(trigger);
                if (index === -1) return;

                const isVertical = root.classList.contains('tabs--vertical');
                const prevKey = isVertical ? 'ArrowUp' : 'ArrowLeft';
                const nextKey = isVertical ? 'ArrowDown' : 'ArrowRight';

                let nextIndex = null;
                if (e.key === nextKey) {
                    nextIndex = (index + 1) % triggers.length;
                } else if (e.key === prevKey) {
                    nextIndex = (index - 1 + triggers.length) % triggers.length;
                } else if (e.key === 'Home') {
                    nextIndex = 0;
                } else if (e.key === 'End') {
                    nextIndex = triggers.length - 1;
                }

                if (nextIndex !== null) {
                    e.preventDefault();
                    const targetTrig = triggers[nextIndex];
                    const mode = root.getAttribute('data-stisla-tabs-activation-mode');
                    if (mode === 'manual') {
                        targetTrig.focus();
                    } else {
                        const inst = window.Stisla.Tabs.getOrCreate(root);
                        const val = targetTrig.getAttribute('data-value');
                        if (val) {
                            inst.setValue(val);
                        }
                    }
                }
            });
        })();
    </script>
@endonce
