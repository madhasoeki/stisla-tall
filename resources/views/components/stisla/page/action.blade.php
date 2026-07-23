@props([
    'as' => 'div',
])

<{{ $as }} {{ $attributes->merge(['class' => 'page__action']) }}>
    {{ $slot }}
</{{ $as }}>
