@props([
    'striped' => false,
    'hover' => false,
    'grid' => false,
    'seamless' => false,
    'size' => null,
    'align' => null,
    'responsive' => false,
    'vars' => [],
])

@php
    $classes = 'table';
    if ($striped) {
        if ($striped === 'cols') {
            $classes .= ' table--striped-cols';
        } else {
            $classes .= ' table--striped';
        }
    }
    if ($hover) {
        $classes .= ' table--hover';
    }
    if ($grid) {
        $classes .= ' table--grid';
    }
    if ($seamless) {
        $classes .= ' table--seamless';
    }
    if ($size) {
        $classes .= " table--{$size}";
    }
    if ($align) {
        $classes .= " table--align-{$align}";
    }

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--table-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $wrapperClass = null;
    if ($responsive) {
        if ($responsive === true) {
            $wrapperClass = 'table-responsive';
        } else {
            $wrapperClass = "table-responsive-{$responsive}";
        }
    }
@endphp

@if ($wrapperClass)
    <div class="{{ $wrapperClass }}">
        <table {{ $attributes->merge(['class' => $classes])->merge(['style' => trim($styleString)]) }}>
            {{ $slot }}
        </table>
    </div>
@else
    <table {{ $attributes->merge(['class' => $classes])->merge(['style' => trim($styleString)]) }}>
        {{ $slot }}
    </table>
@endif
