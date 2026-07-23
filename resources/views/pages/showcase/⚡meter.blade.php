<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto">
    {{-- 1. Basic --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Basic Meter</h2>
            <p class="text-sm text-gray-500">Visualizing a scalar value within a known range with caption label and value text.</p>
        </div>

        <stisla::meter :block="true" value="14.2" min="0" max="16" aria-label="Memory" valueText="14.2 GB of 16 GB used" class="max-w-md">
            <stisla::meter.label>Memory</stisla::meter.label>
            <stisla::meter.value>14.2 GB of 16 GB</stisla::meter.value>
            <stisla::meter.track>
                <stisla::meter.bar tone="warning" value="89" />
            </stisla::meter.track>
        </stisla::meter>
    </section>

    {{-- 2. Intents --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Intent Tones</h2>
            <p class="text-sm text-gray-500">Recoloring the fill bar using intent modifiers.</p>
        </div>

        <div class="flex flex-col gap-4 w-full max-w-md">
            <stisla::meter value="60" tone="primary" aria-label="Primary" />
            <stisla::meter value="60" tone="success" aria-label="Success" />
            <stisla::meter value="60" tone="warning" aria-label="Warning" />
            <stisla::meter value="60" tone="danger" aria-label="Danger" />
            <stisla::meter value="60" tone="info" aria-label="Info" />
        </div>
    </section>

    {{-- 3. Sizes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Sizes</h2>
            <p class="text-sm text-gray-500">Hairline strip (<code>size="sm"</code>), default, and hero height (<code>size="lg"</code>).</p>
        </div>

        <div class="flex flex-col gap-4 w-full max-w-md">
            <stisla::meter value="60" size="sm" aria-label="Small" />
            <stisla::meter value="60" aria-label="Default" />
            <stisla::meter value="60" size="lg" aria-label="Large" />
        </div>
    </section>

    {{-- 4. Stacked --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Stacked Segmented Track</h2>
            <p class="text-sm text-gray-500">Multiple bars inside a single track breaking the value into segments.</p>
        </div>

        <stisla::meter size="lg" :block="true" value="78" min="0" max="100" aria-label="Monthly budget" valueText="$3,120 of $4,000 spent" class="max-w-lg">
            <stisla::meter.label>Monthly budget</stisla::meter.label>
            <stisla::meter.value>$3,120 of $4,000</stisla::meter.value>
            <stisla::meter.track>
                <stisla::meter.bar tone="primary" value="32" />
                <stisla::meter.bar tone="info" value="24" />
                <stisla::meter.bar tone="success" value="12" />
                <stisla::meter.bar tone="warning" value="10" />
            </stisla::meter.track>
        </stisla::meter>
    </section>

    {{-- 5. Legend --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Stacked Meter with Legend</h2>
            <p class="text-sm text-gray-500">Pairing stacked segmented meters with custom color dots and legend labels.</p>
        </div>

        <stisla::meter size="lg" :block="true" value="83" min="0" max="100" aria-label="Macintosh HD" valueText="203.95 GB of 245.11 GB used" class="max-w-lg">
            <stisla::meter.label>Macintosh HD</stisla::meter.label>
            <stisla::meter.value>203.95 GB of 245.11 GB used</stisla::meter.value>
            <stisla::meter.track>
                <stisla::meter.bar tone="danger" value="2" />
                <stisla::meter.bar tone="warning" value="6" />
                <stisla::meter.bar value="7" :vars="['bar-bg' => 'oklch(0.86 0.18 95)']" />
                <stisla::meter.bar value="60" :vars="['bar-bg' => 'var(--color-surface-3)']" />
                <stisla::meter.bar value="8" :vars="['bar-bg' => 'var(--color-muted-foreground)']" />
            </stisla::meter.track>
            <stisla::meter.legend>
                <stisla::meter.legend-item dotTone="danger">Trash</stisla::meter.legend-item>
                <stisla::meter.legend-item dotTone="warning">Music</stisla::meter.legend-item>
                <stisla::meter.legend-item :dotVars="['bar-bg' => 'oklch(0.86 0.18 95)']">Documents</stisla::meter.legend-item>
                <stisla::meter.legend-item :dotVars="['bar-bg' => 'var(--color-surface-3)']">Calculating…</stisla::meter.legend-item>
                <stisla::meter.legend-item :dotVars="['bar-bg' => 'var(--color-muted-foreground)']">macOS</stisla::meter.legend-item>
            </stisla::meter.legend>
        </stisla::meter>
    </section>

    {{-- 6. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning track height, corner radius, and background color via <code>:vars</code>.</p>
        </div>

        <stisla::meter value="75" tone="primary" :vars="['height' => '1rem', 'radius' => '4px', 'bg' => 'var(--color-surface-3)']" aria-label="Custom" class="max-w-md" />
    </section>
</div>
