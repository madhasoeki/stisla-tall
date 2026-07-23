@props([
    'as' => 'div',
])

<{{ $as }} {{ $attributes->merge(['class' => 'timeline__time']) }}>
    {{ $slot }}
</{{ $as }}>
