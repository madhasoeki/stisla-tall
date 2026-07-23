@props([
    'tag' => 'span',
    'for' => null,
    'icon' => null,
])

@php
    $htmlTag = $for ? 'label' : $tag;
@endphp

<{{ $htmlTag }} {{ $attributes->merge(['class' => 'input-group__text'])->merge($for ? ['for' => $for] : []) }}>
    @if ($icon)
        <i data-lucide="{{ $icon }}"></i>
    @endif
    {{ $slot }}
</{{ $htmlTag }}>
