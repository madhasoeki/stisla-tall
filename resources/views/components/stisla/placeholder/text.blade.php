@props([
    'lines' => 3,
    'animation' => null,
    'size' => null,
    'tone' => null,
])

@php
    $widths = ['w-1/2', 'w-full', 'w-3/4', 'w-5/6', 'w-2/3'];
@endphp

<div {{ $attributes->merge(['class' => 'flex flex-col gap-2 w-full']) }} aria-hidden="true">
    @for ($i = 0; $i < (int) $lines; $i++)
        @php
            $w = $widths[$i % count($widths)];
        @endphp
        <stisla::placeholder
            :animation="$animation"
            :size="$size"
            :tone="$tone"
            class="{{ $w }}"
        />
    @endfor
</div>
