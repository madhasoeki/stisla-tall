@props([
    'label' => null,
    'vars' => [],
])

@php
    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--button-toolbar-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $toolbarAttrs = [
        'role' => 'toolbar',
        'class' => 'button-toolbar',
    ];
    if ($label) {
        $toolbarAttrs['aria-label'] = $label;
    }
@endphp

<div {{ $attributes->merge($toolbarAttrs)->merge(['style' => trim($styleString)]) }}>
    {{ $slot }}
</div>
