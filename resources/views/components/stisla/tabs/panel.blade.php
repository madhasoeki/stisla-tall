@props([
    'as' => 'div',
    'value' => null,
    'state' => 'inactive',
])

@php
    $attrs = [
        'class' => 'tabs__panel',
    ];

    if ($value) {
        $attrs['data-value'] = $value;
    }

    $attrs['data-state'] = $state;
@endphp

<{{ $as }} {{ $attributes->merge($attrs) }}>
    {{ $slot }}
</{{ $as }}>
