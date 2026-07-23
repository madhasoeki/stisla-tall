@props([
    'as' => 'a',
    'href' => '#',
    'tone' => null,
    'icon' => null,
    'iconTrailing' => null,
    'vars' => [],
])

@php
    $styleString = '';
    $computedVars = $vars ?? [];

    if ($tone) {
        $colorVal = \Illuminate\Support\Str::startsWith($tone, 'var(') || \Illuminate\Support\Str::startsWith($tone, '#') || \Illuminate\Support\Str::startsWith($tone, 'oklch(') || \Illuminate\Support\Str::startsWith($tone, 'rgb')
            ? $tone
            : "var(--color-{$tone})";
        $computedVars['color'] = $colorVal;
    }

    if (! empty($computedVars) && is_array($computedVars)) {
        foreach ($computedVars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--link-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $attrs = ['class' => 'link'];
    if ($as === 'a') {
        $attrs['href'] = $href ?? '#';
    }
@endphp

<{{ $as }} {{ $attributes->merge($attrs)->merge(['style' => trim($styleString)]) }}>
    @if ($icon)
        <i data-lucide="{{ $icon }}"></i>
    @endif
    {{ $slot }}
    @if ($iconTrailing)
        <i data-lucide="{{ $iconTrailing }}"></i>
    @endif
</{{ $as }}>
