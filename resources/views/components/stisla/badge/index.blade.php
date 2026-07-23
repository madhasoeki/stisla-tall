@props([
    'tone' => null,
    'soft' => false,
    'icon' => null,
    'iconTrailing' => null,
    'busy' => false,
    'vars' => [],
])

@php
    $classes = 'badge';
    if ($soft) {
        $classes .= ' badge--soft';
    }
    if ($tone) {
        $classes .= " badge--{$tone}";
    }

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--badge-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<span {{ $attributes->merge(['class' => $classes])->merge(['style' => trim($styleString)]) }}>
    @if ($busy)
        <span class="spinner spinner--sm" role="status" aria-hidden="true"></span>
    @endif
    @if ($icon)
        <i data-lucide="{{ $icon }}"></i>
    @endif
    {{ $slot }}
    @if ($iconTrailing)
        <i data-lucide="{{ $iconTrailing }}"></i>
    @endif
</span>
