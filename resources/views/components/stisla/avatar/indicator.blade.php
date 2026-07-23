@props([
    'position' => null,
    'size' => null,
    'bg' => null,
    'color' => null,
    'icon' => null,
    'vars' => [],
])

@php
    $classes = 'avatar__indicator';
    if ($position === 'top') {
        $classes .= ' avatar__indicator--top';
    }
    if ($size) {
        $classes .= " avatar__indicator--{$size}";
    }

    $styleString = '';
    if ($bg) {
        $styleString .= "--avatar-indicator-bg: {$bg}; ";
    }
    if ($color) {
        $styleString .= "--avatar-indicator-color: {$color}; ";
    }
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--avatar-indicator-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<span {{ $attributes->merge(['class' => $classes])->merge(['style' => trim($styleString)]) }}>
    @if ($icon)
        <i data-lucide="{{ $icon }}"></i>
    @else
        {{ $slot }}
    @endif
</span>
