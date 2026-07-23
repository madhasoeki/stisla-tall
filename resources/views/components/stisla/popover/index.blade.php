@props([
    'id' => null,
    'placement' => null,
    'triggerMode' => null,
    'menu' => false,
    'open' => false,
    'role' => 'dialog',
    'vars' => [],
])

@php
    $classes = 'popover';
    if ($menu) {
        $classes .= ' popover--menu';
    }

    $vars = is_array($vars) ? $vars : [];
    $styleString = '';
    if (! empty($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--popover-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $attrs = [
        'class' => $classes,
        'data-stisla-popover' => '',
        'role' => $role,
        'data-state' => $open ? 'open' : 'closed',
    ];

    if ($id) {
        $attrs['id'] = $id;
    }

    if ($placement) {
        $attrs['data-stisla-popover-placement'] = $placement;
    }

    if ($triggerMode) {
        $attrs['data-stisla-popover-trigger-mode'] = $triggerMode;
    }
@endphp

<div {{ $attributes->merge($attrs)->merge(['style' => trim($styleString)]) }}>
    {{ $slot }}
</div>
