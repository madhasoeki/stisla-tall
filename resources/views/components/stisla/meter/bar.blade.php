@props([
    'tone' => null,
    'value' => null,
    'vars' => [],
])

@php
    $classes = 'meter__bar';
    if ($tone) {
        $classes .= " meter__bar--{$tone}";
    }

    $styleString = '';
    if ($value !== null) {
        $valNum = (float) $value;
        $styleString .= "width: {$valNum}%; ";
    }

    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--meter-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<div {{ $attributes->merge(['class' => $classes])->merge(['style' => trim($styleString)]) }}></div>
