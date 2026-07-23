@props([
    'as' => 'button',
    'role' => 'menuitem',
    'checked' => null,
    'active' => false,
    'disabled' => false,
    'danger' => false,
    'icon' => null,
    'shortcut' => null,
    'autoClose' => null,
])

@php
    $classes = 'menu__item';
    if ($danger) {
        $classes .= ' menu__item--danger';
    }

    $attrs = [
        'class' => $classes,
        'role' => $role,
    ];

    if ($as === 'button') {
        $attrs['type'] = 'button';
        if ($disabled) {
            $attrs['disabled'] = true;
        }
    } else {
        if ($disabled) {
            $attrs['aria-disabled'] = 'true';
        }
    }

    if ($active) {
        $attrs['data-state'] = 'active';
        $attrs['aria-current'] = 'true';
    }

    if ($checked !== null) {
        $attrs['data-state'] = $checked ? 'checked' : 'unchecked';
        $attrs['aria-checked'] = $checked ? 'true' : 'false';
    }

    if ($autoClose !== null) {
        $attrs['data-stisla-menu-auto-close'] = is_bool($autoClose) ? ($autoClose ? 'true' : 'false') : $autoClose;
    }
@endphp

<{{ $as }} {{ $attributes->merge($attrs) }}>
    @if ($role === 'menuitemcheckbox' || $role === 'menuitemradio')
        <span class="menu__indicator"><i data-lucide="check"></i></span>
    @elseif ($icon)
        <i data-lucide="{{ $icon }}"></i>
    @endif

    {{ $slot }}

    @if ($shortcut)
        <span class="menu__shortcut">{{ $shortcut }}</span>
    @endif
</{{ $as }}>
