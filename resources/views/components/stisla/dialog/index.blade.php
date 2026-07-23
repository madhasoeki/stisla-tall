@props([
    'id' => null,
    'size' => null,
    'backdrop' => null,
    'keyboard' => null,
    'role' => 'dialog',
    'open' => false,
    'vars' => [],
])

@php
    $classes = 'dialog';
    if ($size) {
        $classes .= " dialog--{$size}";
    }

    $vars = is_array($vars) ? $vars : [];
    $styleString = '';
    if (! empty($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--dialog-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $attrs = [
        'class' => $classes,
        'data-stisla-dialog' => '',
        'role' => $role,
        'data-state' => $open ? 'open' : 'closed',
        'aria-hidden' => $open ? 'false' : 'true',
    ];

    if ($id) {
        $attrs['id'] = $id;
    }

    if ($backdrop !== null) {
        $attrs['data-stisla-dialog-backdrop'] = is_bool($backdrop) ? ($backdrop ? 'true' : 'false') : $backdrop;
    }

    if ($keyboard !== null) {
        $attrs['data-stisla-dialog-keyboard'] = is_bool($keyboard) ? ($keyboard ? 'true' : 'false') : $keyboard;
    }

    if ($open) {
        $styleString .= ' display: flex;';
    }
@endphp

<div {{ $attributes->merge($attrs)->merge(['style' => trim($styleString)]) }}>
    {{ $slot }}
</div>
