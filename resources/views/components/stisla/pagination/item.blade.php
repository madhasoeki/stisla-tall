@props([
    'href' => null,
    'as' => null,
    'active' => false,
    'disabled' => false,
    'icon' => null,
    'iconPosition' => 'left',
])

@php
    $tag = $as ?? ($href && ! $disabled ? 'a' : ($href ? 'span' : 'button'));
    if ($disabled && $tag === 'a') {
        $tag = 'span';
    }

    $buttonAttrs = ['class' => 'pagination__button'];
    if ($href && ! $disabled && $tag === 'a') {
        $buttonAttrs['href'] = $href;
    }
    if ($tag === 'button') {
        $buttonAttrs['type'] = 'button';
    }
    if ($active) {
        $buttonAttrs['data-state'] = 'active';
        $buttonAttrs['aria-current'] = 'page';
    }
    if ($disabled) {
        $buttonAttrs['aria-disabled'] = 'true';
    }
@endphp

<li>
    <{{ $tag }} {{ $attributes->merge($buttonAttrs) }}>
        @if ($icon && $iconPosition === 'left')
            <i data-lucide="{{ $icon }}"></i>
        @endif

        @if ($slot->isNotEmpty())
            <span>{{ $slot }}</span>
        @endif

        @if ($icon && $iconPosition === 'right')
            <i data-lucide="{{ $icon }}"></i>
        @endif
    </{{ $tag }}>
</li>
