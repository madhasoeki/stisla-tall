@props([
    'active' => false,
    'label' => null,
])

<button
    type="button"
    @if ($active) data-state="active" aria-current="true" @endif
    @if ($label) aria-label="{{ $label }}" @endif
    {{ $attributes->merge(['class' => 'carousel__indicator']) }}
></button>
