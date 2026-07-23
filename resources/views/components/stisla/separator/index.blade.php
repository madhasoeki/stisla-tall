@props([
    'orientation' => 'horizontal',
    'as' => null,
    'decorative' => true,
    'thickness' => null,
    'color' => null,
    'minHeight' => null,
    'vars' => [],
])

@php
    $classes = 'separator';
    if ($orientation === 'vertical') {
        $classes .= ' separator--vertical';
    }

    $vars = is_array($vars) ? $vars : [];
    if ($thickness) {
        $vars['thickness'] = $thickness;
    }
    if ($color) {
        $vars['color'] = $color;
    }
    if ($minHeight) {
        $vars['min-height'] = $minHeight;
    }

    $styleString = '';
    if (! empty($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--separator-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $tag = $as ?? ($orientation === 'vertical' ? 'div' : 'hr');

    $attrs = ['class' => $classes];
    if ($decorative) {
        $attrs['role'] = 'none';
        $attrs['aria-hidden'] = 'true';
    } else {
        $attrs['role'] = 'separator';
        $attrs['aria-orientation'] = $orientation;
    }
@endphp

<{{ $tag }} {{ $attributes->merge($attrs)->merge(['style' => trim($styleString)]) }}></{{ $tag }}>
