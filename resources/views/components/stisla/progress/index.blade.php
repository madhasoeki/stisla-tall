@props([
    'value' => null,
    'min' => 0,
    'max' => 100,
    'label' => null,
    'showValue' => false,
    'tone' => null,
    'size' => null,
    'block' => false,
    'animated' => false,
    'indeterminate' => false,
    'ariaLabel' => null,
    'vars' => [],
])

@php
    $classes = 'progress';
    if ($block) {
        $classes .= ' progress--block';
    }
    if ($size) {
        $classes .= " progress--{$size}";
    }

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--progress-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $attrs = [
        'class' => $classes,
        'role' => 'progressbar',
        'aria-valuemin' => $min,
        'aria-valuemax' => $max,
    ];

    if ($ariaLabel) {
        $attrs['aria-label'] = $ariaLabel;
    } elseif ($label) {
        $attrs['aria-label'] = $label;
    }

    if (! $indeterminate && $value !== null) {
        $attrs['aria-valuenow'] = $value;
    }

    if ($indeterminate) {
        $attrs['data-indeterminate'] = 'data-indeterminate';
    }

    $displayValue = $showValue ? ($value !== null ? "{$value}%" : '') : null;
@endphp

<div {{ $attributes->merge($attrs)->merge(['style' => trim($styleString)]) }}>
    @if ($slot->isNotEmpty())
        {{ $slot }}
    @else
        @if ($label || $showValue)
            @if ($label)
                <stisla::progress.label>{{ $label }}</stisla::progress.label>
            @endif
            @if ($showValue && $displayValue)
                <stisla::progress.value>{{ $displayValue }}</stisla::progress.value>
            @endif
        @endif

        <stisla::progress.track>
            <stisla::progress.bar
                :value="$value"
                :tone="$tone"
                :animated="$animated"
            />
        </stisla::progress.track>
    @endif
</div>
