@props([
    'as' => 'div',
    'id' => null,
    'placement' => null,
    'floating' => false,
    'scroll' => false,
    'backdrop' => null,
    'keyboard' => null,
    'open' => false,
    'vars' => [],
])

@php
    $classes = 'drawer';
    if ($placement) {
        $classes .= " drawer--{$placement}";
    }
    if ($floating) {
        $classes .= ' drawer--floating';
    }

    $vars = is_array($vars) ? $vars : [];
    $styleString = '';
    if (! empty($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--drawer-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $attrs = [
        'class' => $classes,
        'data-stisla-drawer' => '',
        'data-state' => $open ? 'open' : 'closed',
        'aria-hidden' => $open ? 'false' : 'true',
    ];

    if ($id) {
        $attrs['id'] = $id;
    }

    if ($scroll) {
        $attrs['data-stisla-drawer-scroll'] = 'true';
    }

    if ($backdrop !== null) {
        $attrs['data-stisla-drawer-backdrop'] = is_bool($backdrop) ? ($backdrop ? 'true' : 'false') : $backdrop;
    }

    if ($keyboard !== null) {
        $attrs['data-stisla-drawer-keyboard'] = is_bool($keyboard) ? ($keyboard ? 'true' : 'false') : $keyboard;
    }

    if ($open) {
        $styleString .= ' display: block;';
    }
@endphp

<{{ $as }} {{ $attributes->merge($attrs)->merge(['style' => trim($styleString)]) }}>
    {{ $slot }}
</{{ $as }}>
