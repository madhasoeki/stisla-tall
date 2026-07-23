@props([
    'as' => 'div',
])

<{{ $as }} {{ $attributes->merge(['class' => 'tabs__list', 'role' => 'tablist']) }}>
    {{ $slot }}
</{{ $as }}>
