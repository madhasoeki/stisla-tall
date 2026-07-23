@props([
    'tone' => null,
    'shape' => null,
    'size' => null,
    'icon' => null,
    'vars' => [],
])

@php
    $classes = 'icon-box';
    if ($tone) {
        $classes .= " icon-box--{$tone}";
    }
    if ($shape === 'circle') {
        $classes .= ' icon-box--circle';
    }
    if ($size) {
        $classes .= " icon-box--{$size}";
    }

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--icon-box-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<span {{ $attributes->merge(['class' => $classes])->merge(['style' => trim($styleString)]) }}>
    @if ($icon)
        <i data-lucide="{{ $icon }}"></i>
    @endif
    {{ $slot }}
</span>
