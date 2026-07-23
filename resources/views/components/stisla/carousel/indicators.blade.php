@props([
    'count' => 0,
    'active' => 0,
    'label' => 'Slides',
])

<div {{ $attributes->merge(['class' => 'carousel__indicators', 'role' => 'group']) }} aria-label="{{ $label }}">
    @if ((int) $count > 0)
        @for ($i = 0; $i < (int) $count; $i++)
            <button
                type="button"
                class="carousel__indicator"
                @if ($i === (int) $active) data-state="active" aria-current="true" @endif
                aria-label="Go to slide {{ $i + 1 }}"
            ></button>
        @endfor
    @else
        {{ $slot }}
    @endif
</div>
