@props([
    'type' => 'text',
    'id' => null,
    'name' => null,
    'value' => null,
    'placeholder' => null,
    'size' => null,
    'seamless' => false,
    'disabled' => false,
    'readonly' => false,
    'invalid' => false,
    'required' => false,
    'vars' => [],
])

@php
    $classes = $seamless ? 'input--seamless' : 'input';

    if (! $seamless) {
        if ($size === 'sm') {
            $classes .= ' input--sm';
        } elseif ($size === 'lg') {
            $classes .= ' input--lg';
        }
    }

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--input-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $inputAttrs = [
        'type' => $type,
        'class' => $classes,
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
    if ($placeholder !== null) {
        $inputAttrs['placeholder'] = $placeholder;
    }
    if ($disabled) {
        $inputAttrs['disabled'] = 'disabled';
    }
    if ($readonly) {
        $inputAttrs['readonly'] = 'readonly';
    }
    if ($required) {
        $inputAttrs['required'] = 'required';
    }
    if ($invalid) {
        $inputAttrs['aria-invalid'] = 'true';
    }
@endphp

<input {{ $attributes->merge($inputAttrs)->merge(['style' => trim($styleString)]) }} />
