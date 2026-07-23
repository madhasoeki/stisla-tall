@props([
    'icon' => 'x',
])

<button type="button" {{ $attributes->merge(['class' => 'popover__close', 'data-stisla-popover-dismiss' => '', 'aria-label' => 'Dismiss']) }}>
    @if ($icon)
        <i data-lucide="{{ $icon }}"></i>
    @endif
    {{ $slot }}
</button>
