@props([
    'tone' => null,
    'active' => false,
])

@php
    $classes = null;
    if ($tone) {
        $classes = "table__row--{$tone}";
    }

    $attrs = [];
    if ($classes) {
        $attrs['class'] = $classes;
    }
    if ($active) {
        $attrs['data-state'] = 'active';
    }
@endphp

<tr {{ $attributes->merge($attrs) }}>
    {{ $slot }}
</tr>
