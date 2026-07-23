@props([
    'as' => 'span',
    'animation' => null,
    'size' => null,
    'tone' => null,
    'vars' => [],
])

@php
    $classes = 'placeholder';
    if ($animation) {
        $classes .= " placeholder--{$animation}";
    }
    if ($size) {
        $classes .= " placeholder--{$size}";
    }

    $vars = is_array($vars) ? $vars : [];
    if ($tone) {
        $vars['bg'] = "var(--color-{$tone})";
    }

    $styleString = '';
    if (! empty($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--placeholder-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes])->merge(['style' => trim($styleString)]) }}></{{ $as }}>
