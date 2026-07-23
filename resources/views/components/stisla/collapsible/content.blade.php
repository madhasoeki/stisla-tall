@props([
    'id' => null,
    'open' => false,
    'vars' => [],
])

<stisla::collapsible :id="$id" :open="$open" :vars="$vars" {{ $attributes }}>
    {{ $slot }}
</stisla::collapsible>
