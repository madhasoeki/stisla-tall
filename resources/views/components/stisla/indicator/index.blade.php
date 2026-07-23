@props([
    'tone' => null,
    'pulse' => false,
    'size' => null,
    'vars' => [],
])

@php
    $classes = 'indicator';
    if ($tone) {
        $classes .= " indicator--{$tone}";
    }
    if ($pulse) {
        $classes .= ' indicator--pulse';
    }
    if ($size) {
        $classes .= " indicator--{$size}";
    }

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--indicator-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<span {{ $attributes->merge(['class' => $classes])->merge(['style' => trim($styleString)]) }}>{{ $slot }}</span>
