@props([
    'as' => 'div',
    'overflowX' => null,
    'overflowY' => null,
    'autoHide' => null,
    'vars' => [],
])

@php
    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--scroll-area-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $attrs = [
        'class' => 'scroll-area',
        'data-stisla-scroll-area' => 'data-stisla-scroll-area',
    ];

    if ($overflowX) {
        $attrs['data-stisla-scroll-area-overflow-x'] = $overflowX;
    }
    if ($overflowY) {
        $attrs['data-stisla-scroll-area-overflow-y'] = $overflowY;
    }
    if ($autoHide) {
        $attrs['data-stisla-scroll-area-auto-hide'] = $autoHide;
    }
@endphp

<{{ $as }} {{ $attributes->merge($attrs)->merge(['style' => trim($styleString)]) }}>
    {{ $slot }}
</{{ $as }}>
