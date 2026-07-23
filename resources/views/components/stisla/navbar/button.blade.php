@props([
    'as' => 'a',
    'href' => '#',
    'active' => false,
    'disabled' => false,
])

@php
    $attrs = ['class' => 'navbar__button'];
    if ($as === 'a' && ! $disabled) {
        $attrs['href'] = $href;
    }
    if ($active) {
        $attrs['data-state'] = 'active';
    }
    if ($disabled) {
        $attrs['aria-disabled'] = 'true';
    }
@endphp

<{{ $as }} {{ $attributes->merge($attrs) }}>
    {{ $slot }}
</{{ $as }}>
