@props([
    'as' => 'kbd',
    'vars' => [],
])

@php
    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--kbd-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<{{ $as }} {{ $attributes->merge(['class' => 'kbd'])->merge(['style' => trim($styleString)]) }}>
    {{ $slot }}
</{{ $as }}>
