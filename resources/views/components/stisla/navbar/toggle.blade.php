@props([
    'icon' => 'menu',
])

<button {{ $attributes->merge(['class' => 'navbar__toggle', 'data-stisla-navbar-toggle' => true, 'type' => 'button', 'aria-label' => 'Toggle menu', 'aria-expanded' => 'false']) }}>
    @if ($icon)
        <i data-lucide="{{ $icon }}"></i>
    @endif
    {{ $slot }}
</button>
