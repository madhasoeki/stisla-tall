@props([
    'dismiss' => true,
])

@php
    $attrs = [
        'class' => 'drawer__backdrop',
    ];
    if ($dismiss) {
        $attrs['data-stisla-drawer-dismiss'] = '';
    }
@endphp

<div {{ $attributes->merge($attrs) }}></div>
