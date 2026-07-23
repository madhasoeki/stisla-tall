@props([
    'value' => null,
    'min' => 0,
    'max' => 100,
    'label' => null,
    'valueText' => null,
    'tone' => null,
    'size' => null,
    'block' => false,
    'vars' => [],
])

@php
    $hasHeaderOrLegend = $label || $valueText || $block;
    $classes = 'meter';
    if ($hasHeaderOrLegend) {
        $classes .= ' meter--block';
    }
    if ($size) {
        $classes .= " meter--{$size}";
    }

    $pct = null;
    if ($value !== null) {
        $valNum = (float) $value;
        $minNum = (float) $min;
        $maxNum = (float) $max;
        $range = max(0.0001, $maxNum - $minNum);
        $pct = round((($valNum - $minNum) / $range) * 100, 2);
    }

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--meter-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $ariaAttrs = [
        'role' => 'meter',
        'aria-valuenow' => $value ?? 0,
        'aria-valuemin' => $min,
        'aria-valuemax' => $max,
    ];
    if ($valueText) {
        $ariaAttrs['aria-valuetext'] = $valueText;
    }
@endphp

<div {{ $attributes->merge(['class' => $classes])->merge($ariaAttrs)->merge(['style' => trim($styleString)]) }}>
    @if ($label && ! \Illuminate\Support\Str::contains($slot, 'meter__label'))
        <stisla::meter.label>{{ $label }}</stisla::meter.label>
    @endif
    @if ($valueText && ! \Illuminate\Support\Str::contains($slot, 'meter__value'))
        <stisla::meter.value>{{ $valueText }}</stisla::meter.value>
    @endif

    @if (\Illuminate\Support\Str::contains($slot, 'meter__track'))
        {{ $slot }}
    @else
        <stisla::meter.track>
            <stisla::meter.bar :tone="$tone" :value="$pct !== null ? $pct : 0" />
        </stisla::meter.track>
        {{ $slot }}
    @endif
</div>
