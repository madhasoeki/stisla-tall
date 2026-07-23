@props([
    'id' => null,
    'placement' => null,
    'autoClose' => null,
    'open' => false,
    'vars' => [],
])

@php
    $vars = is_array($vars) ? $vars : [];
    $styleString = '';
    if (! empty($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--menu-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $attrs = [
        'class' => 'menu__popup',
        'data-stisla-menu' => '',
        'role' => 'menu',
        'data-state' => $open ? 'open' : 'closed',
    ];

    if ($id) {
        $attrs['id'] = $id;
    }

    if ($placement) {
        $attrs['data-stisla-menu-placement'] = $placement;
    }

    if ($autoClose !== null) {
        $attrs['data-stisla-menu-auto-close'] = is_bool($autoClose) ? ($autoClose ? 'true' : 'false') : $autoClose;
    }
@endphp

<div {{ $attributes->merge($attrs)->merge(['style' => trim($styleString)]) }}>
    {{ $slot }}
</div>
