@props([
    'icon' => 'x',
])

<button type="button" {{ $attributes->merge(['class' => 'drawer__close', 'data-stisla-drawer-dismiss' => '', 'aria-label' => 'Close']) }}>
    @if ($icon)
        <i data-lucide="{{ $icon }}"></i>
    @endif
    {{ $slot }}
</button>
