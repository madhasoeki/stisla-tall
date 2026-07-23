@props([
    'as' => 'ul',
    'seamless' => false,
    'horizontal' => false,
    'vars' => [],
])

@php
    $classes = 'list-group';
    if ($seamless) {
        $classes .= ' list-group--seamless';
    }
    if ($horizontal) {
        if ($horizontal === true) {
            $classes .= ' list-group--horizontal';
        } else {
            $classes .= " list-group--horizontal-{$horizontal}";
        }
    }

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--list-group-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes])->merge(['style' => trim($styleString)]) }}>
    {{ $slot }}
</{{ $as }}>
