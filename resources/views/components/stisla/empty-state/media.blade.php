@props([
    'icon' => null,
])

<span {{ $attributes->merge(['class' => 'empty-state__media']) }}>
    @if ($icon)
        <i data-lucide="{{ $icon }}"></i>
    @endif
    {{ $slot }}
</span>
