@props([
    'for' => null,
])

<label {{ $attributes->merge(['class' => 'field__label'])->merge($for ? ['for' => $for] : []) }}>
    {{ $slot }}
</label>
