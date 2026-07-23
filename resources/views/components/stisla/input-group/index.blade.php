@props([
    'size' => null,
    'vars' => [],
])

@php
    $classes = 'input-group';
    if ($size === 'sm') {
        $classes .= ' input-group--sm';
    } elseif ($size === 'lg') {
        $classes .= ' input-group--lg';
    }

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--input-group-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<div {{ $attributes->merge(['class' => $classes])->merge(['style' => trim($styleString)]) }}>
    {{ $slot }}
</div>
