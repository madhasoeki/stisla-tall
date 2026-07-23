@props([
    'as' => 'div',
    'icon' => null,
])

<{{ $as }} {{ $attributes->merge(['class' => 'media__figure']) }}>
    @if ($icon)
        <stisla::icon-box :icon="$icon" />
    @endif
    {{ $slot }}
</{{ $as }}>
