@props([
    'alt' => false,
])

@php
    $classes = null;
    if ($alt) {
        $classes = 'table__head--alt';
    }
@endphp

<thead {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</thead>
