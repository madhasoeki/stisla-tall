@props([
    'as' => 'div',
    'vars' => [],
])

@php
    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--page-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<{{ $as }} {{ $attributes->merge(['class' => 'page'])->merge(['style' => trim($styleString)]) }}>
    {{ $slot }}
</{{ $as }}>
