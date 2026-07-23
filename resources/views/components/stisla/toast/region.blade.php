@props([
    'placement' => 'top-end',
    'name' => 'default',
    'vars' => [],
])

@php
    $classes = 'toast-region';
    if ($placement) {
        $classes .= " toast-region--{$placement}";
    }

    $vars = is_array($vars) ? $vars : [];
    $styleString = '';
    if (! empty($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--toast-region-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $attrs = [
        'class' => $classes,
        'role' => 'region',
        'aria-label' => 'Notifications',
        'data-stisla-toast-region' => $name,
    ];
@endphp

<div {{ $attributes->merge($attrs)->merge(['style' => trim($styleString)]) }}>
    {{ $slot }}
</div>
