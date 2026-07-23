@props([
    'id' => null,
    'name' => null,
    'value' => null,
    'min' => null,
    'max' => null,
    'step' => null,
    'valueText' => null,
    'size' => null,
    'disabled' => false,
    'invalid' => false,
    'vars' => [],
])

@php
    $valText = $valueText ?? $attributes->get('value-text');

    $classes = 'slider';
    if ($size === 'sm') {
        $classes .= ' slider--sm';
    } elseif ($size === 'lg') {
        $classes .= ' slider--lg';
    }

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--slider-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $sliderAttrs = [
        'class' => $classes,
        'data-stisla-slider' => true,
    ];

    if ($id) {
        $sliderAttrs['id'] = $id;
    }
    if ($value !== null) {
        $sliderAttrs['data-value'] = $value;
    }
    if ($min !== null) {
        $sliderAttrs['data-min'] = $min;
    }
    if ($max !== null) {
        $sliderAttrs['data-max'] = $max;
    }
    if ($step !== null) {
        $sliderAttrs['data-step'] = $step;
    }
    if ($valText !== null) {
        $sliderAttrs['data-value-text'] = $valText;
    }
    if ($disabled) {
        $sliderAttrs['data-disabled'] = 'true';
    }
    if ($invalid) {
        $sliderAttrs['aria-invalid'] = 'true';
    }
@endphp

<div {{ $attributes->merge($sliderAttrs)->merge(['style' => trim($styleString)]) }}>
    <div class="slider__track"><div class="slider__range"></div></div>
    <div class="slider__thumb"></div>
    <input type="hidden" class="slider__input" @if ($name) name="{{ $name }}" @endif @if ($disabled) disabled @endif @if ($value !== null) value="{{ $value }}" @endif />
</div>
