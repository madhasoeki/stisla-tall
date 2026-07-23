@props([
    'alt' => false,
    'size' => null,
])

@php
    $classes = 'card__header';
    if ($alt) {
        $classes .= ' card__header--alt';
    }
    if ($size === 'sm') {
        $classes .= ' card__header--sm';
    }
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
