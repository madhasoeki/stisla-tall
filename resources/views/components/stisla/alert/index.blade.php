@props([
    'tone' => 'neutral',
    'icon' => null,
    'title' => null,
    'description' => null,
    'dismissible' => false,
    'vars' => [],
])

@php
    $classes = 'alert';
    if ($tone) {
        $classes .= " alert--{$tone}";
    }

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--alert-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<div
    @if ($dismissible) x-data="{ open: true }" x-show="open" @endif
    {{ $attributes->merge(['class' => $classes])->merge(['style' => trim($styleString)]) }}
>
    @if ($icon)
        <i data-lucide="{{ $icon }}"></i>
    @endif

    @if ($title)
        <div class="alert__title">{{ $title }}</div>
    @endif

    @if ($description)
        <div class="alert__description">{{ $description }}</div>
    @endif

    {{ $slot }}

    @if ($dismissible)
        <div class="alert__action">
            <button
                type="button"
                class="button button--ghost button--neutral button--icon-only button--sm"
                aria-label="Dismiss"
                @click="open = false"
            >
                <i data-lucide="x"></i>
            </button>
        </div>
    @endif
</div>
