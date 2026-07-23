@props([
    'as' => 'h1',
])

<{{ $as }} {{ $attributes->merge(['class' => 'page__title']) }}>
    {{ $slot }}
</{{ $as }}>
