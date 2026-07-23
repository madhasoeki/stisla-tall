@props([
    'as' => 'p',
])

<{{ $as }} {{ $attributes->merge(['class' => 'empty-state__text']) }}>
    {{ $slot }}
</{{ $as }}>
