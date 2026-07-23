@props([
    'as' => 'h3',
])

<{{ $as }} {{ $attributes->merge(['class' => 'menu__group-label']) }}>
    {{ $slot }}
</{{ $as }}>
