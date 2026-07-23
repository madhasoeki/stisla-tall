@props([
    'as' => 'div',
])

<{{ $as }} {{ $attributes->merge(['class' => 'media__description']) }}>
    {{ $slot }}
</{{ $as }}>
