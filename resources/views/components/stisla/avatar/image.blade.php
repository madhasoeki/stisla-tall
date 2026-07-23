@props([
    'src' => '',
    'alt' => '',
])

<img {{ $attributes->merge(['class' => 'avatar__image', 'src' => $src, 'alt' => $alt]) }} />
