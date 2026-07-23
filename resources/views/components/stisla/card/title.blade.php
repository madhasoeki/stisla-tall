@props([
    'as' => 'h5',
])

<{{ $as }} {{ $attributes->merge(['class' => 'card__title']) }}>
    {{ $slot }}
</{{ $as }}>
