@props([
    'as' => 'h6',
])

<{{ $as }} {{ $attributes->merge(['class' => 'card__subtitle']) }}>
    {{ $slot }}
</{{ $as }}>
