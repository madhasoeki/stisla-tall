@props([
    'tone' => null,
    'size' => null,
    'icon' => null,
    'title' => null,
    'description' => null,
    'vars' => [],
])

@php
    $classes = 'empty-state';
    if ($tone) {
        $classes .= " empty-state--{$tone}";
    }
    if ($size === 'sm') {
        $classes .= ' empty-state--sm';
    }

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--empty-state-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<div {{ $attributes->merge(['class' => $classes])->merge(['style' => trim($styleString)]) }}>
    @if ($icon && ! \Illuminate\Support\Str::contains($slot, 'empty-state__media'))
        <stisla::empty-state.media :icon="$icon" />
    @endif
    @if ($title && ! \Illuminate\Support\Str::contains($slot, 'empty-state__title'))
        <stisla::empty-state.title>{{ $title }}</stisla::empty-state.title>
    @endif
    @if ($description && ! \Illuminate\Support\Str::contains($slot, 'empty-state__text'))
        <stisla::empty-state.text>{{ $description }}</stisla::empty-state.text>
    @endif

    {{ $slot }}
</div>
