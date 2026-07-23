@props([
    'type' => null,
    'seamless' => false,
    'vars' => [],
])

@php
    $classes = 'accordion' . ($seamless ? ' accordion--seamless' : '');
    $typeAttr = $type ? ['data-stisla-accordion-type' => $type] : [];

    $styleString = '';
    if (!empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--accordion-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<div {{ $attributes->merge(array_merge(['class' => $classes, 'data-stisla-accordion' => ''], $typeAttr))->merge(['style' => trim($styleString)]) }}>
    {{ $slot }}
</div>
