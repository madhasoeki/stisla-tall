@props([
    'href' => null,
    'disabled' => false,
    'label' => 'Next',
    'icon' => 'chevron-right',
])

<stisla::pagination.item
    :href="$href"
    :disabled="$disabled"
    :icon="$icon"
    icon-position="right"
    aria-label="{{ $label }}"
    {{ $attributes }}
>
    {{ $label }}
</stisla::pagination.item>
