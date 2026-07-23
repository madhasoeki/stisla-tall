@props([
    'label' => null,
    'for' => null,
    'id' => null,
    'description' => null,
    'descriptionId' => null,
    'error' => null,
    'errorId' => null,
    'inline' => false,
    'vars' => [],
])

@php
    $targetFor = $for ?? $id;

    $classes = 'field' . ($inline ? ' field--inline' : '');

    $styleString = '';
    if (!empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--field-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<div {{ $attributes->merge(['class' => $classes])->merge(['style' => trim($styleString)]) }}>
    @if ($label)
        <label class="field__label" @if ($targetFor) for="{{ $targetFor }}" @endif>
            {{ $label }}
        </label>
    @endif

    {{ $slot }}

    @if ($description)
        <p @if ($descriptionId) id="{{ $descriptionId }}" @endif class="field__description">
            {{ $description }}
        </p>
    @endif

    @if ($error)
        <p @if ($errorId) id="{{ $errorId }}" @endif class="field__error">
            {{ $error }}
        </p>
    @endif
</div>
