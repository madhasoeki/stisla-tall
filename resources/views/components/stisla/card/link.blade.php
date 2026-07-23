@props([
    'href' => '#',
])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'card__link']) }}>
    {{ $slot }}
</a>
