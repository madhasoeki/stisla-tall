@props([
    'id' => null,
    'open' => false,
    'vars' => [],
])

@php
    $id = $id ?? 'stisla-collapsible-' . \Illuminate\Support\Str::random(8);
    $state = $open ? 'open' : 'closed';

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--collapsible-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<div
    id="{{ $id }}"
    data-stisla-collapsible
    data-state="{{ $state }}"
    role="region"
    {{ $attributes->merge(['class' => 'collapsible'])->merge(['style' => trim($styleString)]) }}
>
    {{ $slot }}
</div>
