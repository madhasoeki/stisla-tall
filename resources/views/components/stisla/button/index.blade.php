@props([
    'tone' => null,
    'mode' => null,
    'size' => null,
    'icon' => null,
    'iconTrailing' => null,
    'iconOnly' => false,
    'pill' => false,
    'flush' => null,
    'block' => false,
    'disabled' => false,
    'busy' => false,
    'pressed' => false,
    'href' => null,
    'type' => 'button',
    'vars' => [],
])

@php
    $classes = 'button';
    if ($tone && in_array($tone, ['primary', 'danger', 'neutral'])) {
        $classes .= " button--{$tone}";
    }
    if ($mode) {
        $classes .= " button--{$mode}";
    }
    if ($size) {
        $classes .= " button--{$size}";
    }
    if ($iconOnly) {
        $classes .= ' button--icon-only';
    }
    if ($pill) {
        $classes .= ' button--pill';
    }
    if ($block) {
        $classes .= ' button--block';
    }
    if ($flush) {
        if ($flush === true) {
            $classes .= ' button--flush';
        } else {
            $classes .= " button--flush-{$flush}";
        }
    }

    $styleString = '';
    if ($tone && ! in_array($tone, ['primary', 'danger', 'neutral'])) {
        $styleString .= "--button-tone: var(--color-{$tone}); --button-tone-emphasis: var(--color-{$tone}-emphasis); --button-color: var(--color-{$tone}-foreground); ";
    }

    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--button-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $commonAttrs = [];
    if ($busy) {
        $commonAttrs['aria-busy'] = 'true';
    }
    if ($pressed) {
        $commonAttrs['aria-pressed'] = 'true';
    }
@endphp

@if ($href)
    @php
        $linkAttrs = array_merge($commonAttrs, [
            'href' => $href,
            'role' => 'button',
            'class' => $classes,
        ]);
        if ($disabled) {
            $linkAttrs['aria-disabled'] = 'true';
            $linkAttrs['tabindex'] = '-1';
        }
    @endphp
    <a {{ $attributes->merge($linkAttrs)->merge(['style' => trim($styleString)]) }}>
        @if ($icon)
            <i data-lucide="{{ $icon }}"></i>
        @endif
        {{ $slot }}
        @if ($iconTrailing)
            <i data-lucide="{{ $iconTrailing }}"></i>
        @endif
    </a>
@else
    @php
        $btnAttrs = array_merge($commonAttrs, [
            'type' => $type,
            'class' => $classes,
        ]);
        if ($disabled) {
            $btnAttrs['disabled'] = 'disabled';
        }
    @endphp
    <button {{ $attributes->merge($btnAttrs)->merge(['style' => trim($styleString)]) }}>
        @if ($icon)
            <i data-lucide="{{ $icon }}"></i>
        @endif
        {{ $slot }}
        @if ($iconTrailing)
            <i data-lucide="{{ $iconTrailing }}"></i>
        @endif
    </button>
@endif
