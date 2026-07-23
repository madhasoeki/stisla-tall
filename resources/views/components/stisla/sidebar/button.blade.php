@props([
    'href' => null,
    'icon' => null,
    'active' => false,
    'toggleSubmenu' => false,
    'toggleCollapse' => false,
    'controls' => null,
    'expanded' => null,
    'type' => 'button',
])

@php
    $tag = $href !== null ? 'a' : 'button';

    $attrs = ['class' => 'sidebar__button'];

    if ($href !== null) {
        $attrs['href'] = $href;
        if ($active) {
            $attrs['aria-current'] = 'page';
        }
    } else {
        $attrs['type'] = $type;
        if ($active) {
            $attrs['data-state'] = 'active';
        }
    }

    if ($toggleSubmenu) {
        $attrs['data-stisla-sidebar-submenu-toggle'] = 'data-stisla-sidebar-submenu-toggle';
    }

    if ($toggleCollapse) {
        $attrs['data-stisla-sidebar-toggle'] = 'collapse';
    }

    if ($controls) {
        $attrs['aria-controls'] = $controls;
    }

    if ($expanded !== null) {
        $attrs['aria-expanded'] = is_bool($expanded) ? ($expanded ? 'true' : 'false') : $expanded;
    }
@endphp

<{{ $tag }} {{ $attributes->merge($attrs) }}>
    @if ($icon)
        <i data-lucide="{{ $icon }}"></i>
    @endif
    @if ($slot->isNotEmpty())
        <span>{{ $slot }}</span>
    @endif
    @if ($toggleSubmenu)
        <stisla::sidebar.caret />
    @endif
</{{ $tag }}>
