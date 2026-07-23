@props([
    'href' => '#',
    'icon' => null,
    'as' => 'a',
])

<{{ $as }} {{ $attributes->merge(['class' => 'sidebar__brand', 'href' => $href]) }}>
    @if ($icon)
        <i data-lucide="{{ $icon }}"></i>
    @endif
    @if ($slot->isNotEmpty())
        <span>{{ $slot }}</span>
    @endif
</{{ $as }}>
