@props([
    'direction' => 'prev',
    'type' => null,
    'label' => null,
])

@php
    $dir = $type ?? $direction;
    $isNext = $dir === 'next';
    $defaultLabel = $isNext ? 'Next slide' : 'Previous slide';
    $iconName = $isNext ? 'chevron-right' : 'chevron-left';
    $controlClass = 'carousel__control carousel__control--' . $dir;
@endphp

<button type="button" {{ $attributes->merge(['class' => $controlClass]) }} aria-label="{{ $label ?? $defaultLabel }}">
    @if ($slot->isNotEmpty())
        {{ $slot }}
    @else
        <i data-lucide="{{ $iconName }}"></i>
    @endif
</button>
