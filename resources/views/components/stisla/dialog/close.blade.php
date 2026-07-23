@props([
    'icon' => 'x',
])

<button type="button" {{ $attributes->merge(['class' => 'dialog__close', 'data-stisla-dialog-dismiss' => '', 'aria-label' => 'Close']) }}>
    @if ($icon)
        <i data-lucide="{{ $icon }}"></i>
    @endif
    {{ $slot }}
</button>
