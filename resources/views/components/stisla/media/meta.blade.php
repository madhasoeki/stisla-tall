@props([
    'as' => 'div',
])

<{{ $as }} {{ $attributes->merge(['class' => 'media__meta']) }}>
    {{ $slot }}
</{{ $as }}>
