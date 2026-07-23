@props([
    'name' => null,
    'accent' => null,
    'badge' => null,
    'animated' => false,
    'vars' => [],
])

@php
    $id = 'illo-' . \Illuminate\Support\Str::random(8);

    $styleString = '';
    if ($accent) {
        $styleString .= "--illus-accent: {$accent}; ";
    }
    if ($badge) {
        $styleString .= "--illus-badge: {$badge}; ";
    }
    if (!empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--illus-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $classes = 'illustration';
    if ($animated) {
        $classes .= ' illustration--animated';
    }

    $mergedAttributes = $attributes->merge([
        'class' => $classes,
        'style' => trim($styleString)
    ]);
@endphp

@if($name)
    @include('components.stisla.illustration.svg.' . $name, ['id' => $id, 'attributes' => $mergedAttributes])
@else
    {{-- Generic SVG container/wrapper that applies dynamic variables to the custom child SVG --}}
    <span {{ $mergedAttributes }}>
        {{ $slot }}
    </span>
@endif
