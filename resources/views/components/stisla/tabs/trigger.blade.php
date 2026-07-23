@props([
    'as' => 'button',
    'value' => null,
    'state' => 'inactive',
    'disabled' => false,
    'icon' => null,
])

@php
    $attrs = [
        'class' => 'tabs__trigger',
    ];

    if ($as === 'button') {
        $attrs['type'] = 'button';
    }

    if ($value) {
        $attrs['data-value'] = $value;
    }

    $attrs['data-state'] = $state;

    if ($disabled) {
        $attrs['data-disabled'] = '';
        if ($as === 'button') {
            $attrs['disabled'] = 'disabled';
        }
    }
@endphp

<{{ $as }} {{ $attributes->merge($attrs) }}>
    @if ($icon)
        <i data-lucide="{{ $icon }}"></i>
    @endif
    {{ $slot }}
</{{ $as }}>
