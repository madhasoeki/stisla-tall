@props([
    'as' => 'div',
    'vertical' => false,
    'seamless' => false,
    'selectable' => false,
    'vars' => [],
])

@php
    $classes = 'media';
    if ($vertical) {
        $classes .= ' media--vertical';
    }
    if ($seamless) {
        $classes .= ' media--seamless';
    }
    if ($selectable) {
        $classes .= ' media--selectable';
    }

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--media-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes])->merge(['style' => trim($styleString)]) }}>
    {{ $slot }}
</{{ $as }}>
