@props([
    'as' => 'div',
])

<{{ $as }} {{ $attributes->merge(['class' => 'timeline__body']) }}>
    {{ $slot }}
</{{ $as }}>
