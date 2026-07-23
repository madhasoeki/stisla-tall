@props([
    'as' => 'div',
])

<{{ $as }} {{ $attributes->merge(['class' => 'page__body']) }}>
    {{ $slot }}
</{{ $as }}>
