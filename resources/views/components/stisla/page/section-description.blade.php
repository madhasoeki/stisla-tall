@props([
    'as' => 'p',
])

<{{ $as }} {{ $attributes->merge(['class' => 'page__section-description']) }}>
    {{ $slot }}
</{{ $as }}>
