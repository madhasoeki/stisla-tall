@props([
    'role' => 'dialog',
    'ariaModal' => 'true',
])

<div {{ $attributes->merge(['class' => 'drawer__content', 'tabindex' => '-1', 'role' => $role, 'aria-modal' => $ariaModal]) }}>
    {{ $slot }}
</div>
