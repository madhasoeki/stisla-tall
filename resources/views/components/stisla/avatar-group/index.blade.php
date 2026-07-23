@props([
    'overlap' => null,
    'ringWidth' => null,
    'ringColor' => null,
    'vars' => [],
])

@php
    $styleString = '';
    if ($overlap) {
        $styleString .= "--avatar-group-overlap: {$overlap}; ";
    }
    if ($ringWidth) {
        $styleString .= "--avatar-group-ring-width: {$ringWidth}; ";
    }
    if ($ringColor) {
        $styleString .= "--avatar-group-ring-color: {$ringColor}; ";
    }
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--avatar-group-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<div {{ $attributes->merge(['class' => 'avatar-group'])->merge(['style' => trim($styleString)]) }}>
    {{ $slot }}
</div>
