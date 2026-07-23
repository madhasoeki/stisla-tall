@props([
    'as' => 'div',
    'type' => 'single',
    'size' => null,
    'vertical' => false,
    'value' => null,
    'label' => null,
    'vars' => [],
])

@php
    $classes = 'toggle-group';
    if ($vertical) {
        $classes .= ' toggle-group--vertical';
    }
    if ($size) {
        $classes .= " toggle-group--{$size}";
    }

    $vars = is_array($vars) ? $vars : [];
    $styleString = '';
    if (! empty($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--toggle-group-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $role = $type === 'single' ? 'radiogroup' : 'group';

    $initialValue = $value;
    if ($type === 'multiple' && ! is_array($initialValue)) {
        $initialValue = $initialValue !== null ? [$initialValue] : [];
    }

    $attrs = [
        'class' => $classes,
        'data-stisla-toggle-group' => '',
        'role' => $role,
        'x-data' => "stislaToggleGroup({ type: '{$type}', initialValue: " . json_encode($initialValue) . ' })',
    ];

    if ($label) {
        $attrs['aria-label'] = $label;
    }
@endphp

<{{ $as }} {{ $attributes->merge($attrs)->merge(['style' => trim($styleString)]) }}>
    {{ $slot }}
</{{ $as }}>

@once
    <script>
        document.addEventListener('alpine:init', function() {
            Alpine.data('stislaToggleGroup', function(config) {
                return {
                    type: config.type || 'single',
                    value: config.initialValue || (config.type === 'multiple' ? [] : null),
                    select(val, el) {
                        if (this.type === 'single') {
                            const prev = this.value;
                            this.value = val;
                            this.$dispatch('stisla:toggle-group:changed', {
                                value: this.value,
                                member: el,
                                previousValue: prev
                            });
                        } else {
                            if (!Array.isArray(this.value)) this.value = [];
                            const idx = this.value.indexOf(val);
                            let action = 'pressed';
                            if (idx > -1) {
                                this.value.splice(idx, 1);
                                action = 'unpressed';
                            } else {
                                this.value.push(val);
                            }
                            this.$dispatch('stisla:toggle-group:changed', {
                                value: this.value,
                                member: el,
                                action: action
                            });
                        }
                    },
                    isActive(val, isInitialActive) {
                        if (this.value === null || (Array.isArray(this.value) && this.value.length === 0)) {
                            if (isInitialActive) {
                                if (this.type === 'single') {
                                    this.value = val;
                                } else if (Array.isArray(this.value) && !this.value.includes(val)) {
                                    this.value.push(val);
                                }
                                return true;
                            }
                            return false;
                        }
                        if (this.type === 'single') {
                            return this.value === val;
                        }
                        return Array.isArray(this.value) && this.value.includes(val);
                    }
                };
            });
        });
    </script>
@endonce
