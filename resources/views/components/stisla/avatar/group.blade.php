@props([
    'overlap' => null,
    'ringWidth' => null,
    'ringColor' => null,
    'vars' => [],
])

<stisla::avatar-group
    :overlap="$overlap"
    :ring-width="$ringWidth"
    :ring-color="$ringColor"
    :vars="$vars"
    {{ $attributes }}
>
    {{ $slot }}
</stisla::avatar-group>
