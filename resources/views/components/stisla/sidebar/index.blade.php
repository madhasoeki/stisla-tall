@props([
    'as' => 'aside',
    'size' => null,
    'collapsed' => false,
    'vars' => [],
])

@php
    $classes = 'sidebar';
    if ($size) {
        $classes .= " sidebar--{$size}";
    }

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--sidebar-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $attrs = [
        'class' => $classes,
        'data-stisla-sidebar' => 'data-stisla-sidebar',
    ];

    if ($collapsed) {
        $attrs['data-collapsed'] = 'data-collapsed';
    }
@endphp

<{{ $as }} {{ $attributes->merge($attrs)->merge(['style' => trim($styleString)]) }}>
    {{ $slot }}
</{{ $as }}>
