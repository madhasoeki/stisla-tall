@props([
    'for' => null,
    'tone' => 'primary',
    'mode' => null,
    'size' => null,
    'icon' => null,
])

@php
    $attrs = [];
    if ($for) {
        $attrs['data-stisla-drawer-trigger'] = $for;
    }
@endphp

<stisla::button :tone="$tone" :mode="$mode" :size="$size" :icon="$icon" {{ $attributes->merge($attrs) }}>
    {{ $slot }}
</stisla::button>
