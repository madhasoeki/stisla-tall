@props([
    'as' => 'a',
    'href' => '#',
])

<{{ $as }} {{ $attributes->merge(['class' => 'navbar__brand', 'href' => $as === 'a' ? $href : null]) }}>
    {{ $slot }}
</{{ $as }}>
