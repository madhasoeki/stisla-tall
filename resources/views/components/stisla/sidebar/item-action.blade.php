@props([
    'reveal' => false,
    'toggleSubmenu' => false,
    'controls' => null,
    'expanded' => null,
    'label' => null,
    'type' => 'button',
    'as' => null,
])

@php
    $classes = 'sidebar__item-action';
    if ($reveal) {
        $classes .= ' sidebar__item-action--reveal';
    }

    $isButton = $toggleSubmenu || $as === 'button';
    $tag = $isButton ? 'button' : ($as ?? 'span');

    $attrs = ['class' => $classes];

    if ($isButton) {
        $attrs['type'] = $type;
        if ($toggleSubmenu) {
            $attrs['data-stisla-sidebar-submenu-toggle'] = 'data-stisla-sidebar-submenu-toggle';
        }
        if ($label) {
            $attrs['aria-label'] = $label;
        }
        if ($controls) {
            $attrs['aria-controls'] = $controls;
        }
        if ($expanded !== null) {
            $attrs['aria-expanded'] = is_bool($expanded) ? ($expanded ? 'true' : 'false') : $expanded;
        }
    }
@endphp

<{{ $tag }} {{ $attributes->merge($attrs) }}>
    @if ($toggleSubmenu && $slot->isEmpty())
        <stisla::sidebar.caret />
    @else
        {{ $slot }}
    @endif
</{{ $tag }}>
