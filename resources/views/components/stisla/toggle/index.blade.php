@props([
    'as' => 'button',
    'pressed' => false,
    'size' => null,
    'iconOnly' => false,
    'circle' => false,
    'icon' => null,
    'disabled' => false,
    'for' => null,
    'vars' => [],
])

@php
    $classes = 'toggle';
    if ($size) {
        $classes .= " toggle--{$size}";
    }
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

    $initialPressed = $pressed ? 'true' : 'false';

    $attrs = [
        'class' => $classes,
    ];

    if ($as === 'button') {
        $attrs['type'] = 'button';
        $attrs['data-stisla-toggle'] = '';
        $attrs['aria-pressed'] = $initialPressed;
        $attrs['data-state'] = $pressed ? 'active' : 'inactive';
        $attrs['x-data'] = "{ pressed: {$initialPressed} }";
        $attrs[':aria-pressed'] = "pressed ? 'true' : 'false'";
        $attrs[':data-state'] = "pressed ? 'active' : 'inactive'";
        if (! $disabled) {
            $attrs['@click'] = "pressed = !pressed; \$dispatch('stisla:toggle:changed', { pressed: pressed })";
        } else {
            $attrs['disabled'] = 'disabled';
        }
    } elseif ($as === 'label') {
        if ($for) {
            $attrs['for'] = $for;
        }
        if ($disabled) {
            $attrs['data-disabled'] = '';
        }
    } else {
        $attrs['data-stisla-toggle'] = '';
        $attrs['aria-pressed'] = $initialPressed;
        $attrs['data-state'] = $pressed ? 'active' : 'inactive';
        $attrs['x-data'] = "{ pressed: {$initialPressed} }";
        $attrs[':aria-pressed'] = "pressed ? 'true' : 'false'";
        $attrs[':data-state'] = "pressed ? 'active' : 'inactive'";
        if (! $disabled) {
            $attrs['@click'] = "pressed = !pressed; \$dispatch('stisla:toggle:changed', { pressed: pressed })";
        }
    }
@endphp

<{{ $as }} {{ $attributes->merge($attrs)->merge(['style' => trim($styleString)]) }}>
    @if ($icon)
        <i data-lucide="{{ $icon }}"></i>
    @endif
    {{ $slot }}
</{{ $as }}>
