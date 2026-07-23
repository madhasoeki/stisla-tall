@props([
    'prevLabel' => 'Previous slide',
    'nextLabel' => 'Next slide',
])

<button type="button" class="carousel__control carousel__control--prev" aria-label="{{ $prevLabel }}">
    <i data-lucide="chevron-left"></i>
</button>
<button type="button" class="carousel__control carousel__control--next" aria-label="{{ $nextLabel }}">
    <i data-lucide="chevron-right"></i>
</button>
