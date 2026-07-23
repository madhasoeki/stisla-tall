@props([
    'as' => 'button',
    'value' => null,
    'active' => false,
    'role' => null,
    'icon' => null,
    'iconOnly' => false,
    'circle' => false,
    'disabled' => false,
    'vars' => [],
])

@php
    $classes = 'toggle';
    if ($iconOnly) {
        $classes .= ' toggle--icon-only';
    }
    if ($circle) {
        $classes .= ' toggle--circle';
    }

    $vars = is_array($vars) ? $vars : [];
    $styleString = '';
    if (! empty($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--toggle-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $valString = $value !== null ? (string) $value : '';
    $initialActive = $active ? 'true' : 'false';

    $attrs = [
        'class' => $classes,
        'type' => 'button',
        'data-value' => $valString,
        'x-bind:data-state' => "isActive('{$valString}', {$initialActive}) ? 'active' : 'inactive'",
        'x-bind:tabindex' => "isActive('{$valString}', {$initialActive}) ? '0' : '-1'",
        '@click' => "select('{$valString}', \$el)",
    ];

    if ($role) {
        $attrs['role'] = $role;
        if ($role === 'radio') {
            $attrs['x-bind:aria-checked'] = "isActive('{$valString}', {$initialActive}) ? 'true' : 'false'";
        } else {
            $attrs['x-bind:aria-pressed'] = "isActive('{$valString}', {$initialActive}) ? 'true' : 'false'";
        }
    } else {
        $attrs['x-bind:aria-pressed'] = "isActive('{$valString}', {$initialActive}) ? 'true' : 'false'";
    }

    if ($disabled) {
        $attrs['disabled'] = 'disabled';
    }
@endphp

<{{ $as }} {{ $attributes->merge($attrs)->merge(['style' => trim($styleString)]) }}>
    @if ($icon)
        <i data-lucide="{{ $icon }}"></i>
    @endif
    {{ $slot }}
</{{ $as }}>
