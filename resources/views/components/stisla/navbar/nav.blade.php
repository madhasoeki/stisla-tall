@props([
    'as' => 'ul',
])

<{{ $as }} {{ $attributes->merge(['class' => 'navbar__nav']) }}>
    {{ $slot }}
</{{ $as }}>
