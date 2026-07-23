@props([
    'id' => null,
    'name' => null,
    'value' => null,
    'placeholder' => null,
    'size' => null,
    'options' => null,
    'datalist' => null,
    'minLength' => null,
    'disabled' => false,
    'invalid' => false,
    'vars' => [],
])

@php
    $id = $id ?? 'stisla-auto-' . \Illuminate\Support\Str::random(8);

    $classes = 'autocomplete';
    if ($size === 'sm') {
        $classes .= ' autocomplete--sm';
    } elseif ($size === 'lg') {
        $classes .= ' autocomplete--lg';
    }

    $datalistItems = null;
    $datalistId = null;

    if (is_array($datalist) || $datalist instanceof \Illuminate\Support\Collection) {
        $datalistItems = $datalist;
        $datalistId = $id . '-list';
    } elseif (is_string($datalist) && !empty($datalist)) {
        $datalistId = $datalist;
    }

    $optionsAttr = null;
    if ($options !== null) {
        $optionsAttr = is_array($options) || $options instanceof \Illuminate\Support\Collection
            ? json_encode(array_values(is_array($options) ? $options : $options->toArray()))
            : $options;
    }

    $styleString = '';
    if (!empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--autocomplete-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $extraAttrs = [
        'type' => 'text',
        'class' => $classes,
        'id' => $id,
        'data-stisla-autocomplete' => '',
    ];

    if ($name) {
        $extraAttrs['name'] = $name;
    }
    if ($value) {
        $extraAttrs['value'] = $value;
    }
    if ($placeholder) {
        $extraAttrs['placeholder'] = $placeholder;
    }
    if ($datalistId) {
        $extraAttrs['list'] = $datalistId;
    }
    if ($optionsAttr !== null) {
        $extraAttrs['data-options'] = $optionsAttr;
    }
    if ($minLength !== null) {
        $extraAttrs['data-stisla-autocomplete-min-length'] = $minLength;
    }
    if ($disabled) {
        $extraAttrs['disabled'] = 'disabled';
    }
    if ($invalid) {
        $extraAttrs['aria-invalid'] = 'true';
    }
@endphp

<input {{ $attributes->merge($extraAttrs)->merge(['style' => trim($styleString)]) }} />

@if ($datalistItems !== null)
    <datalist id="{{ $datalistId }}">
        @foreach ($datalistItems as $optValue => $optLabel)
            @if (is_array($optLabel) || is_object($optLabel))
                <option value="{{ data_get($optLabel, 'value', data_get($optLabel, 'id', $optValue)) }}">
                    {{ data_get($optLabel, 'label', data_get($optLabel, 'name', '')) }}
                </option>
            @elseif (is_int($optValue))
                <option value="{{ $optLabel }}">
            @else
                <option value="{{ $optValue }}">{{ $optLabel }}</option>
            @endif
        @endforeach
    </datalist>
@endif

{{ $slot }}
