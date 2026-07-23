@props([
    'href' => null,
    'disabled' => false,
    'label' => 'Previous',
    'icon' => 'chevron-left',
])

<stisla::pagination.item
    :href="$href"
    :disabled="$disabled"
    :icon="$icon"
    icon-position="left"
    aria-label="{{ $label }}"
    {{ $attributes }}
>
    {{ $label }}
</stisla::pagination.item>
