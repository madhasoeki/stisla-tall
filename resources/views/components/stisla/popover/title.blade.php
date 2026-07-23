@props([
    'as' => 'h3',
])

<{{ $as }} {{ $attributes->merge(['class' => 'popover__title']) }}>
    {{ $slot }}
</{{ $as }}>
