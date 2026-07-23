@props([
    'dismiss' => true,
])

@php
    $attrs = [
        'class' => 'dialog__backdrop',
    ];
    if ($dismiss) {
        $attrs['data-stisla-dialog-dismiss'] = '';
    }
@endphp

<div {{ $attributes->merge($attrs) }}></div>
