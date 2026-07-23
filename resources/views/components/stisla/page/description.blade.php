@props([
    'as' => 'p',
])

<{{ $as }} {{ $attributes->merge(['class' => 'page__description']) }}>
    {{ $slot }}
</{{ $as }}>
