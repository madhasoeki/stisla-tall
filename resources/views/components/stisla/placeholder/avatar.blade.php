@props([
    'size' => 'md',
    'animation' => null,
    'tone' => null,
    'shape' => 'circle',
])

@php
    $sizeClasses = match ($size) {
        'xs' => 'w-6 h-6',
        'sm' => 'w-8 h-8',
        'lg' => 'w-12 h-12',
        'xl' => 'w-16 h-16',
        default => 'w-10 h-10',
    };

    $shapeClass = $shape === 'circle' ? 'rounded-full' : 'rounded-md';
@endphp

<stisla::placeholder
    :animation="$animation"
    :tone="$tone"
    class="{{ $sizeClasses }} {{ $shapeClass }} shrink-0"
    {{ $attributes }}
/>
