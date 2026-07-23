@props([
    'vars' => [],
])

@php
    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--card-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<div {{ $attributes->merge(['class' => 'card'])->merge(['style' => trim($styleString)]) }}>
    {{ $slot }}
</div>
