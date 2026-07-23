@props([
    'type' => 'radio',
    'name' => null,
    'id' => null,
    'value' => null,
    'checked' => false,
    'disabled' => false,
])

@php
    $attrs = [
        'type' => $type,
        'class' => 'toggle-input',
    ];

    if ($name) {
        $attrs['name'] = $name;
    }
    if ($id) {
        $attrs['id'] = $id;
    }
    if ($value !== null) {
        $attrs['value'] = $value;
    }
    if ($checked) {
        $attrs['checked'] = 'checked';
    }
    if ($disabled) {
        $attrs['disabled'] = 'disabled';
    }
@endphp

<input {{ $attributes->merge($attrs) }} />
