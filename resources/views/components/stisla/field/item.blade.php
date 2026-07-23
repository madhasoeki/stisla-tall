@props([
    'label' => null,
    'for' => null,
    'id' => null,
    'reverse' => false,
])

@php
    $targetFor = $for ?? $id;
    $classes = 'field__item' . ($reverse ? ' field__item--reverse' : '');
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}

    @if ($label)
        <label class="field__label" @if ($targetFor) for="{{ $targetFor }}" @endif>
            {{ $label }}
        </label>
    @endif
</div>
