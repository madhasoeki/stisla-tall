@props([
    'src' => null,
    'alt' => '',
])

<img src="{{ $src }}" alt="{{ $alt }}" {{ $attributes->merge(['class' => 'card__image']) }} />
