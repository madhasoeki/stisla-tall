@props([
    'target' => null,
    'for' => null,
    'controls' => null,
    'open' => false,
    'tone' => 'neutral',
    'mode' => null,
    'size' => null,
    'flush' => null,
    'icon' => null,
])

@php
    $targetId = $target ?? $for ?? $controls;
    $expanded = $open ? 'true' : 'false';
@endphp

<stisla::button
    type="button"
    data-stisla-collapsible-trigger="{{ $targetId }}"
    aria-controls="{{ $targetId }}"
    aria-expanded="{{ $expanded }}"
    :tone="$tone"
    :mode="$mode"
    :size="$size"
    :flush="$flush"
    :icon="$icon"
    {{ $attributes }}
>
    {{ $slot }}
</stisla::button>
