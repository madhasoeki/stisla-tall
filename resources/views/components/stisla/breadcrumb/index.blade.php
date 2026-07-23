@props([
    'label' => 'breadcrumb',
    'divider' => null,
    'vars' => [],
])

@php
    $styleString = '';
    if ($divider) {
        $divValue = (\Illuminate\Support\Str::startsWith($divider, 'url(') || \Illuminate\Support\Str::startsWith($divider, "'") || \Illuminate\Support\Str::startsWith($divider, '"'))
            ? $divider
            : "'{$divider}'";
        $styleString .= "--breadcrumb-divider: {$divValue}; ";
    }
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--breadcrumb-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<nav aria-label="{{ $label }}" {{ $attributes->merge(['style' => trim($styleString)]) }}>
    <ol class="breadcrumb">
        {{ $slot }}
    </ol>
</nav>
