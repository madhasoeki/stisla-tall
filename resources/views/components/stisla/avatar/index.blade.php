@props([
    'src' => null,
    'alt' => '',
    'fallback' => null,
    'initials' => null,
    'icon' => null,
    'shape' => null,
    'size' => null,
    'delay' => null,
    'status' => null,
    'vars' => [],
])

@php
    $classes = 'avatar';
    if ($shape === 'circle') {
        $classes .= ' avatar--circle';
    }
    if ($size) {
        $classes .= " avatar--{$size}";
    }

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--avatar-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $hasImage = ! empty($src);
    $fallbackContent = $fallback ?? $initials;
@endphp

<span
    @if ($hasImage) data-stisla-avatar @endif
    @if ($delay) data-stisla-avatar-delay="{{ $delay }}" @endif
    @if ($status) data-status="{{ $status }}" @endif
    {{ $attributes->merge(['class' => $classes])->merge(['style' => trim($styleString)]) }}
>
    @if ($hasImage)
        <img class="avatar__image" src="{{ $src }}" alt="{{ $alt }}" />
        <span class="avatar__fallback">
            @if ($icon)
                <i data-lucide="{{ $icon }}"></i>
            @else
                {{ $fallbackContent }}
            @endif
        </span>
        {{ $slot }}
    @elseif ($icon && ! $slot->isNotEmpty() && ! $fallbackContent)
        <i data-lucide="{{ $icon }}"></i>
    @else
        {{ $fallbackContent }}
        {{ $slot }}
    @endif
</span>
