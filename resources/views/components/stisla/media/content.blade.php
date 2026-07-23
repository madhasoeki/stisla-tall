@props([
    'as' => 'div',
    'title' => null,
    'description' => null,
    'meta' => null,
])

<{{ $as }} {{ $attributes->merge(['class' => 'media__content']) }}>
    @if ($title && ! \Illuminate\Support\Str::contains($slot, 'media__title'))
        <stisla::media.title :as="$as === 'span' ? 'span' : 'div'">{{ $title }}</stisla::media.title>
    @endif
    @if ($description && ! \Illuminate\Support\Str::contains($slot, 'media__description'))
        <stisla::media.description :as="$as === 'span' ? 'span' : 'div'">{{ $description }}</stisla::media.description>
    @endif
    @if ($meta && ! \Illuminate\Support\Str::contains($slot, 'media__meta'))
        <stisla::media.meta :as="$as === 'span' ? 'span' : 'div'">{{ $meta }}</stisla::media.meta>
    @endif

    {{ $slot }}
</{{ $as }}>
