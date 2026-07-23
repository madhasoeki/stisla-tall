@props([
    'divider' => false,
])

@php
    $classes = null;
    if ($divider) {
        $classes = 'table__body--divider';
    }
@endphp

<tbody {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</tbody>
