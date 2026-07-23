@props([
    'as' => 'div',
])

<{{ $as }} {{ $attributes->merge(['class' => 'page__headline']) }}>
    {{ $slot }}
</{{ $as }}>
