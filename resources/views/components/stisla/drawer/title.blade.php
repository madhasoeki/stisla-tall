@props([
    'as' => 'h2',
])

<{{ $as }} {{ $attributes->merge(['class' => 'drawer__title']) }}>
    {{ $slot }}
</{{ $as }}>
