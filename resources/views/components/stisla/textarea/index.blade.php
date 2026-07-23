@props([
    'id' => null,
    'name' => null,
    'value' => null,
    'rows' => null,
    'placeholder' => null,
    'size' => null,
    'disabled' => false,
    'readonly' => false,
    'invalid' => false,
    'required' => false,
    'minlength' => null,
    'maxlength' => null,
    'vars' => [],
])

@php
    $classes = 'textarea';
    if ($size === 'sm') {
        $classes .= ' textarea--sm';
    } elseif ($size === 'lg') {
        $classes .= ' textarea--lg';
    }

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--textarea-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $textareaAttrs = [
        'class' => $classes,
    ];

    if ($id) {
        $textareaAttrs['id'] = $id;
    }
    if ($name) {
        $textareaAttrs['name'] = $name;
    }
    if ($rows !== null) {
        $textareaAttrs['rows'] = $rows;
    }
    if ($placeholder !== null) {
        $textareaAttrs['placeholder'] = $placeholder;
    }
    if ($minlength !== null) {
        $textareaAttrs['minlength'] = $minlength;
    }
    if ($maxlength !== null) {
        $textareaAttrs['maxlength'] = $maxlength;
    }
    if ($disabled) {
        $textareaAttrs['disabled'] = 'disabled';
    }
    if ($readonly) {
        $textareaAttrs['readonly'] = 'readonly';
    }
    if ($required) {
        $textareaAttrs['required'] = 'required';
    }
    if ($invalid) {
        $textareaAttrs['aria-invalid'] = 'true';
    }
@endphp

<textarea {{ $attributes->merge($textareaAttrs)->merge(['style' => trim($styleString)]) }}>{{ $value ?? $slot }}</textarea>
