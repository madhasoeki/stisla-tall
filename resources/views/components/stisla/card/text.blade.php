@props([
    'as' => 'p',
])

<{{ $as }} {{ $attributes->merge(['class' => 'card__text']) }}>
    {{ $slot }}
</{{ $as }}>
