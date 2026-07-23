@props([
    'as' => 'ol',
    'alternate' => false,
    'vars' => [],
])

@php
    $classes = 'timeline';
    if ($alternate) {
        $classes .= ' timeline--alternate';
    }

    $vars = is_array($vars) ? $vars : [];
    $styleString = '';
    if (! empty($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--timeline-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes])->merge(['style' => trim($styleString)]) }}>
    {{ $slot }}
</{{ $as }}>
