@props([
    'as' => 'h2',
])

<{{ $as }} {{ $attributes->merge(['class' => 'page__section-title']) }}>
    {{ $slot }}
</{{ $as }}>
