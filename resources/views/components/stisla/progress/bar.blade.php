@props([
    'value' => null,
    'tone' => null,
    'animated' => false,
])

@php
    $classes = 'progress__bar';
    if ($tone) {
        $classes .= " progress__bar--{$tone}";
    }
    if ($animated) {
        $classes .= ' progress__bar--animated';
    }

    $attrs = ['class' => $classes];
    if ($value !== null) {
        $attrs['style'] = "width: {$value}%";
    }
@endphp

<div {{ $attributes->merge($attrs) }}>
    {{ $slot }}
</div>
