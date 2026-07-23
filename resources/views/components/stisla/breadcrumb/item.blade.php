@props([
    'href' => null,
    'active' => false,
    'current' => false,
    'icon' => null,
])

@php
    $isCurrent = $active || $current;
@endphp

<li
    {{ $attributes->merge(['class' => 'breadcrumb__item']) }}
    @if ($isCurrent) aria-current="page" @endif
>
    @if ($href && ! $isCurrent)
        <a href="{{ $href }}">
            @if ($icon)
                <i data-lucide="{{ $icon }}"></i>
            @endif
            @if ($slot->isNotEmpty())
                <span>{{ $slot }}</span>
            @endif
        </a>
    @else
        @if ($icon)
            <i data-lucide="{{ $icon }}"></i>
        @endif
        @if ($slot->isNotEmpty())
            <span>{{ $slot }}</span>
        @endif
    @endif
</li>
