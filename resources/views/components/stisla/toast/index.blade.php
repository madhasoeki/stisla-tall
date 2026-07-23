@props([
    'tone' => null,
    'open' => true,
    'role' => null,
    'vars' => [],
])

@php
    $classes = 'toast';
    if ($tone) {
        $classes .= " toast--{$tone}";
    }

    $vars = is_array($vars) ? $vars : [];
    $styleString = '';
    if (! empty($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--toast-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $attrs = [
        'class' => $classes,
        'data-stisla-toast' => '',
        'data-state' => $open ? 'open' : 'closed',
        'role' => $role ?? ($tone === 'danger' ? 'alert' : 'status'),
    ];
@endphp

<div {{ $attributes->merge($attrs)->merge(['style' => trim($styleString)]) }}>
    {{ $slot }}
</div>
