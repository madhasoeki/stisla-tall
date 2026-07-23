@props([
    'icon' => null,
])

<span {{ $attributes->merge(['class' => 'toast__icon']) }}>
    @if ($icon)
        <i data-lucide="{{ $icon }}"></i>
    @endif
    {{ $slot }}
</span>
