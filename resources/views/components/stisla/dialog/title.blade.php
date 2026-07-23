@props([
    'as' => 'h2',
])

<{{ $as }} {{ $attributes->merge(['class' => 'dialog__title']) }}>
    {{ $slot }}
</{{ $as }}>
