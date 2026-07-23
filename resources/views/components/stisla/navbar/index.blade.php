@props([
    'expand' => true,
    'block' => true,
    'ariaLabel' => 'Main',
    'vars' => [],
])

@php
    $classes = 'navbar';
    if ($block) {
        $classes .= ' navbar--block';
    }
    if ($expand === true) {
        $classes .= ' navbar--expand';
    } elseif (is_string($expand) && $expand !== '') {
        $classes .= " navbar--expand-{$expand}";
    }

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--navbar-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<nav {{ $attributes->merge(['class' => $classes, 'data-stisla-navbar' => true, 'aria-label' => $ariaLabel])->merge(['style' => trim($styleString)]) }}>
    {{ $slot }}
</nav>
