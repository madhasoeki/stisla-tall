@props([
    'title' => '',
    'placement' => null,
    'trigger' => null,
    'delay' => null,
    'html' => false,
    'as' => 'span',
    'vars' => [],
])

@php
    $vars = is_array($vars) ? $vars : [];
    $styleString = '';
    if (! empty($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--tooltip-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $attrs = [
        'data-stisla-tooltip' => '',
        'data-stisla-tooltip-title' => $title,
    ];

    if ($placement) {
        $attrs['data-stisla-tooltip-placement'] = $placement;
    }
    if ($trigger) {
        $attrs['data-stisla-tooltip-trigger'] = $trigger;
    }
    if ($delay !== null) {
        $attrs['data-stisla-tooltip-delay'] = (string) $delay;
    }
    if ($html) {
        $attrs['data-stisla-tooltip-html'] = 'true';
    }
@endphp

@if ($as)
    <{{ $as }} {{ $attributes->merge($attrs)->merge(['style' => trim($styleString)]) }}>
        {{ $slot }}
    </{{ $as }}>
@else
    <span {{ $attributes->merge($attrs)->merge(['style' => trim($styleString)]) }}>
        {{ $slot }}
    </span>
@endif
