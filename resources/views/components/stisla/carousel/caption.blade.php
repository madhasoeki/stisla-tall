@props([
    'title' => null,
    'description' => null,
])

<div {{ $attributes->merge(['class' => 'carousel__caption']) }}>
    @if ($title)
        <h3 class="m-0 mb-1 text-lg font-semibold">{{ $title }}</h3>
    @endif
    @if ($description)
        <p class="m-0 text-sm">{{ $description }}</p>
    @endif
    {{ $slot }}
</div>
