@props([
    'icon' => 'x',
])

<button type="button" {{ $attributes->merge(['class' => 'toast__close', 'data-stisla-toast-dismiss' => '', 'aria-label' => 'Dismiss']) }}>
    @if ($icon)
        <i data-lucide="{{ $icon }}"></i>
    @endif
    {{ $slot }}
</button>
