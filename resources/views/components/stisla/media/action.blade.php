@props([
    'as' => 'div',
])

<{{ $as }} {{ $attributes->merge(['class' => 'media__action']) }}>
    {{ $slot }}
</{{ $as }}>
