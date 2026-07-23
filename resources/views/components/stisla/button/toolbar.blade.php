@props([
    'label' => null,
    'vars' => [],
])

<stisla::button-toolbar
    :label="$label"
    :vars="$vars"
    {{ $attributes }}
>
    {{ $slot }}
</stisla::button-toolbar>
