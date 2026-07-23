@props([
    'state' => null,
])

@php
    $attrs = ['class' => 'sidebar__item'];
    if ($state) {
        $attrs['data-state'] = $state;
    }
@endphp

<li {{ $attributes->merge($attrs) }}>
    {{ $slot }}
</li>
