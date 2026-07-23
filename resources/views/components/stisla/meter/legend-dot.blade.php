@props([
    'tone' => null,
    'vars' => [],
])

@php
    $classes = 'meter__legend-dot';
    if ($tone) {
        $classes .= " meter__legend-dot--{$tone}";
    }

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--meter-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<span {{ $attributes->merge(['class' => $classes])->merge(['style' => trim($styleString)]) }}></span>
