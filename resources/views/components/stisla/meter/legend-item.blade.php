@props([
    'dotTone' => null,
    'dotVars' => [],
])

<span {{ $attributes->merge(['class' => 'meter__legend-item']) }}>
    <stisla::meter.legend-dot :tone="$dotTone" :vars="$dotVars" />
    {{ $slot }}
</span>
