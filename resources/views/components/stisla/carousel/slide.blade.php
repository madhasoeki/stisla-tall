@props([
    'label' => null,
])

<div
    role="group"
    aria-roledescription="slide"
    @if ($label) aria-label="{{ $label }}" @endif
    {{ $attributes->merge(['class' => 'carousel__slide']) }}
>
    {{ $slot }}
</div>
