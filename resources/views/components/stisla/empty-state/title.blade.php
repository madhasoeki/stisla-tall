@props([
    'as' => 'h3',
])

<{{ $as }} {{ $attributes->merge(['class' => 'empty-state__title']) }}>
    {{ $slot }}
</{{ $as }}>
