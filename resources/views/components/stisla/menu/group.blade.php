@props([
    'label' => null,
    'id' => null,
])

@php
    $attrs = [
        'class' => 'menu__group',
        'role' => 'group',
    ];
    if ($id) {
        $attrs['aria-labelledby'] = $id;
    }
@endphp

<div {{ $attributes->merge($attrs) }}>
    @if ($label)
        <h3 class="menu__group-label" @if ($id) id="{{ $id }}" @endif>{{ $label }}</h3>
    @endif
    {{ $slot }}
</div>
