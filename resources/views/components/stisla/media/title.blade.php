@props([
    'as' => 'div',
])

<{{ $as }} {{ $attributes->merge(['class' => 'media__title']) }}>
    {{ $slot }}
</{{ $as }}>
