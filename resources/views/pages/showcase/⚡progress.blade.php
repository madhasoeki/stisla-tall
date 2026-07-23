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
            <h2 class="text-xl font-bold">1. Basic Progress Bar</h2>
            <p class="text-sm text-gray-500">Horizontal bar carrying a caption label and percentage value.</p>
        </div>

        <stisla::progress :value="72" label="Uploading" :show-value="true" :block="true" />
    </section>

    {{-- 2. Intents --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Tone Intents</h2>
            <p class="text-sm text-gray-500">Recoloring the fill bar with intent modifiers (primary, success, warning, danger, info).</p>
        </div>

        <div class="space-y-4 max-w-xl">
            <stisla::progress :value="60" tone="primary" aria-label="Primary Progress" />
            <stisla::progress :value="75" tone="success" aria-label="Success Progress" />
            <stisla::progress :value="45" tone="warning" aria-label="Warning Progress" />
            <stisla::progress :value="90" tone="danger" aria-label="Danger Progress" />
            <stisla::progress :value="30" tone="info" aria-label="Info Progress" />
        </div>
    </section>

    {{-- 3. Sizes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Sizes</h2>
            <p class="text-sm text-gray-500">Hairline (<code>size="sm"</code>), default strip, and label-friendly (<code>size="lg"</code>) height.</p>
        </div>

        <div class="space-y-6 max-w-xl">
            <stisla::progress size="sm" :value="60" aria-label="Small progress" />
            <stisla::progress :value="60" aria-label="Default progress" />
            <stisla::progress size="lg" :value="60" aria-label="Large progress" />
        </div>
    </section>

    {{-- 4. Animated --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Animated Sheen</h2>
            <p class="text-sm text-gray-500">Soft sheen sweeping across the fill bar (<code>:animated="true"</code>).</p>
        </div>

        <div class="space-y-4 max-w-xl">
            <stisla::progress size="lg" :value="60" :animated="true" aria-label="Animated progress" />
            <stisla::progress size="lg" :value="80" tone="success" :animated="true" aria-label="Animated success progress" />
        </div>
    </section>

    {{-- 5. Indeterminate --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Indeterminate Loading</h2>
            <p class="text-sm text-gray-500">Sliding partial bar when work duration is unknown (<code>:indeterminate="true"</code>).</p>
        </div>

        <div class="space-y-4 max-w-xl">
            <stisla::progress :indeterminate="true" aria-label="Loading..." />
            <stisla::progress size="lg" tone="success" :indeterminate="true" aria-label="Loading success..." />
        </div>
    </section>

    {{-- 6. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Flattening corner radius and increasing height via <code>:vars</code>.</p>
        </div>

        <div class="max-w-xl space-y-4">
            <stisla::progress
                :value="85"
                tone="primary"
                label="Custom Squared Progress"
                :show-value="true"
                :block="true"
                :vars="['radius' => '0px', 'height' => '0.75rem']"
            />
        </div>
    </section>
</div>
