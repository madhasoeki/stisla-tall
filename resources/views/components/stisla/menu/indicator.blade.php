@props([
    'icon' => 'check',
])

<span {{ $attributes->merge(['class' => 'menu__indicator']) }}>
    @if ($icon)
        <i data-lucide="{{ $icon }}"></i>
    @endif
    {{ $slot }}
</span>
