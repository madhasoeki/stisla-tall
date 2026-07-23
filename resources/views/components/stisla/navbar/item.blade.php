@props([
    'as' => 'li',
])

<{{ $as }} {{ $attributes->merge([]) }}>
    {{ $slot }}
</{{ $as }}>
