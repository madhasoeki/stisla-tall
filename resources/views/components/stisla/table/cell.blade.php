@props([
    'as' => 'td',
    'alignEnd' => false,
    'scope' => null,
])

@php
    $classes = null;
    if ($alignEnd) {
        $classes = 'text-end';
    }

    $attrs = [];
    if ($classes) {
        $attrs['class'] = $classes;
    }
    if ($scope) {
        $attrs['scope'] = $scope;
    }
@endphp

<{{ $as }} {{ $attributes->merge($attrs) }}>
    {{ $slot }}
</{{ $as }}>
