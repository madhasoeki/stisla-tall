@props([
    'id' => null,
])

<div {{ $attributes->merge(['class' => 'sidebar__submenu', 'id' => $id]) }}>
    {{ $slot }}
</div>
