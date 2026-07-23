@props([
    'count' => null,
    'shape' => null,
    'size' => null,
    'bg' => null,
    'color' => null,
    'vars' => [],
])

@php
    $classes = 'avatar avatar-group__more';
    if ($shape === 'circle') {
        $classes .= ' avatar--circle';
    }
    if ($size) {
        $classes .= " avatar--{$size}";
    }

    $styleString = '';
    if ($bg) {
        $styleString .= "--avatar-bg: {$bg}; ";
    }
    if ($color) {
        $styleString .= "--avatar-color: {$color}; ";
    }
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--avatar-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<span {{ $attributes->merge(['class' => $classes])->merge(['style' => trim($styleString)]) }}>
    {{ $count ?? $slot }}
</span>
