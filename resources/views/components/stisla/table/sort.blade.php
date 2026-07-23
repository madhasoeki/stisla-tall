@props([
    'state' => null,
    'type' => 'button',
])

@php
    $attrs = ['class' => 'table__sort', 'type' => $type];
    if ($state) {
        $attrs['data-state'] = $state;
    }
@endphp

<button {{ $attributes->merge($attrs) }}>
    {{ $slot }}
</button>
