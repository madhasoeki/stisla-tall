@props([
    'label' => 'Gallery',
    'aspect' => true,
    'autoplay' => false,
    'loop' => false,
    'controls' => false,
    'indicators' => false,
    'vars' => [],
])

@php
    $classes = 'carousel';
    if (! $aspect) {
        $classes .= ' carousel--no-aspect';
    }

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--carousel-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<div
    data-stisla-carousel
    @if ($autoplay) data-stisla-carousel-autoplay="true" @endif
    @if ($loop) data-stisla-carousel-loop="true" @endif
    tabindex="0"
    role="region"
    aria-roledescription="carousel"
    aria-label="{{ $label }}"
    {{ $attributes->merge(['class' => $classes])->merge(['style' => trim($styleString)]) }}
>
    @if (\Illuminate\Support\Str::contains($slot, 'carousel__viewport'))
        {{ $slot }}
    @else
        <div class="carousel__viewport">
            <div class="carousel__track">
                {{ $slot }}
            </div>
        </div>
    @endif

    @if ($controls)
        <stisla::carousel.controls />
    @endif

    @if ($indicators)
        <stisla::carousel.indicators :count="is_numeric($indicators) ? (int) $indicators : 0" />
    @endif
</div>
