@props([
    'label' => null,
    'id' => null,
    'name' => null,
    'value' => null,
    'checked' => false,
    'disabled' => false,
    'invalid' => false,
    'reverse' => false,
    'required' => false,
    'vars' => [],
])

@php
    $hasLabel = ! empty($label) || $slot->isNotEmpty();
    $id = $id ?? ($hasLabel ? 'stisla-radio-' . \Illuminate\Support\Str::random(8) : null);

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--radio-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $inputAttrs = [
        'type' => 'radio',
        'class' => 'radio',
    ];

    if ($id) {
        $inputAttrs['id'] = $id;
    }
    if ($name) {
        $inputAttrs['name'] = $name;
    }
    if ($value !== null) {
        $inputAttrs['value'] = $value;
    }
    if ($checked) {
        $inputAttrs['checked'] = 'checked';
    }
    if ($disabled) {
        $inputAttrs['disabled'] = 'disabled';
    }
    if ($required) {
        $inputAttrs['required'] = 'required';
    }
    if ($invalid) {
        $inputAttrs['aria-invalid'] = 'true';
    }
@endphp

@if ($hasLabel)
    <div class="field__item{{ $reverse ? ' field__item--reverse' : '' }}">
        <input {{ $attributes->merge($inputAttrs)->merge(['style' => trim($styleString)]) }} />
        <label class="field__label" @if ($id) for="{{ $id }}" @endif>
            {{ $label ?? $slot }}
        </label>
    </div>
@else
    <input {{ $attributes->merge($inputAttrs)->merge(['style' => trim($styleString)]) }} />
@endif
