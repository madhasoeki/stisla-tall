@props([
    'state' => 'closed',
])

<div {{ $attributes->merge(['class' => 'navbar__menu', 'data-state' => $state]) }}>
    {{ $slot }}
</div>
