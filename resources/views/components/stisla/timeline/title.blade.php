@props([
    'as' => 'div',
])

<{{ $as }} {{ $attributes->merge(['class' => 'timeline__title']) }}>
    {{ $slot }}
</{{ $as }}>
