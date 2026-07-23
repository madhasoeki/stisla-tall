@props([
    'as' => 'li',
    'icon' => null,
    'active' => false,
    'disabled' => false,
])

@php
    $classes = 'list-group__item';
    if ($active) {
        $classes .= ' list-group__item--active';
    }
    if ($disabled) {
        $classes .= ' list-group__item--disabled';
    }
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>
    @if ($icon)
        <i data-lucide="{{ $icon }}"></i>
    @endif
    {{ $slot }}
</{{ $as }}>
