@props([
    'scrollable' => false,
    'position' => null,
])

@php
    $classes = 'dialog__panel';
    if ($scrollable) {
        $classes .= ' dialog__panel--scrollable';
    }
    if ($position) {
        $classes .= " dialog__panel--{$position}";
    }
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
