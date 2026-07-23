@props([
    'as' => 'span',
    'tone' => null,
    'icon' => null,
])

@php
    $classes = 'timeline__marker';
    if ($tone) {
        $classes .= " timeline__marker--{$tone}";
    }
    $hasContent = ! empty($icon) || $slot->isNotEmpty();
@endphp

@if (! $hasContent)<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}></{{ $as }}>@else<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>@if ($icon)<i data-lucide="{{ $icon }}"></i>@endif{{ $slot }}</{{ $as }}>@endif
