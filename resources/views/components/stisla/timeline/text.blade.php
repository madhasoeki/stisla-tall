@props([
    'as' => 'div',
])

<{{ $as }} {{ $attributes->merge(['class' => 'timeline__text']) }}>
    {{ $slot }}
</{{ $as }}>
