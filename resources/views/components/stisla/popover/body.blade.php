@props([
    'as' => 'div',
])

<{{ $as }} {{ $attributes->merge(['class' => 'popover__body']) }}>
    {{ $slot }}
</{{ $as }}>
