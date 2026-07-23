@props([
    'label' => null,
    'size' => null,
    'vertical' => false,
    'vars' => [],
])

<stisla::button-group
    :label="$label"
    :size="$size"
    :vertical="$vertical"
    :vars="$vars"
    {{ $attributes }}
>
    {{ $slot }}
</stisla::button-group>
