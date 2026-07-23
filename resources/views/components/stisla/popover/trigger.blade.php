@props([
    'for' => null,
    'tone' => 'neutral',
    'mode' => null,
    'size' => null,
    'icon' => null,
])

@php
    $attrs = [
        'aria-haspopup' => 'dialog',
        'aria-expanded' => 'false',
    ];
    if ($for) {
        $attrs['data-stisla-popover-trigger'] = $for;
        $attrs['aria-controls'] = $for;
    }
@endphp

<stisla::button :tone="$tone" :mode="$mode" :size="$size" :icon="$icon" {{ $attributes->merge($attrs) }}>
    {{ $slot }}
</stisla::button>
