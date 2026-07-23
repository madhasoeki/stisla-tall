@props([
    'label' => null,
    'size' => null,
    'vertical' => false,
    'vars' => [],
])

@php
    $baseClass = $vertical ? 'button-group--vertical' : 'button-group';
    $classes = $baseClass;
    if ($size) {
        $classes .= " button-group--{$size}";
    }

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--button-group-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $groupAttrs = [
        'role' => 'group',
        'class' => $classes,
    ];
    if ($label) {
        $groupAttrs['aria-label'] = $label;
    }
@endphp

<div {{ $attributes->merge($groupAttrs)->merge(['style' => trim($styleString)]) }}>
    {{ $slot }}
</div>
