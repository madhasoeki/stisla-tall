@props([
    'href' => '#',
])

<a {{ $attributes->merge(['class' => 'alert__link', 'href' => $href]) }}>
    {{ $slot }}
</a>
