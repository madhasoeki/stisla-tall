@props([
    'size' => null,
    'align' => null,
    'ariaLabel' => 'Page navigation',
    'vars' => [],
])

@php
    $classes = 'pagination';
    if ($size) {
        $classes .= " pagination--{$size}";
    }
    if ($align) {
        $classes .= " pagination--{$align}";
    }

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--pagination-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<nav aria-label="{{ $ariaLabel }}">
    <ul {{ $attributes->merge(['class' => $classes])->merge(['style' => trim($styleString)]) }}>
        {{ $slot }}
    </ul>
</nav>
