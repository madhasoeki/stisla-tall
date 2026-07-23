@props([
    'id' => null,
    'name' => null,
    'checked' => false,
    'disabled' => false,
])

@php
    $attrs = [
        'type' => 'checkbox',
        'class' => 'toggle-input',
    ];

    if ($id) {
        $attrs['id'] = $id;
    }
    if ($name) {
        $attrs['name'] = $name;
    }
    if ($checked) {
        $attrs['checked'] = 'checked';
    }
    if ($disabled) {
        $attrs['disabled'] = 'disabled';
    }
@endphp

<input {{ $attributes->merge($attrs) }} />
