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
            <h2 class="text-xl font-bold">1. Basic Icon Box</h2>
            <p class="text-sm text-gray-500">Muted neutral tile container for a single icon.</p>
        </div>

        <div class="flex items-center gap-4">
            <stisla::icon-box icon="zap" />
        </div>
    </section>

    {{-- 2. Intent variants --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Intent Variants</h2>
            <p class="text-sm text-gray-500">Tinted tile with solid intent color icon (15% background tint).</p>
        </div>

        <div class="flex flex-wrap items-center gap-4">
            <stisla::icon-box tone="primary" icon="zap" />
            <stisla::icon-box tone="success" icon="check" />
            <stisla::icon-box tone="warning" icon="clock" />
            <stisla::icon-box tone="danger" icon="triangle-alert" />
            <stisla::icon-box tone="info" icon="info" />
        </div>
    </section>

    {{-- 3. Shape --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Shape Variants</h2>
            <p class="text-sm text-gray-500">Square tile by default, circle with <code>:circle="true"</code>.</p>
        </div>

        <div class="flex items-center gap-4">
            <stisla::icon-box tone="primary" icon="bell" />
            <stisla::icon-box tone="primary" :circle="true" icon="bell" />
        </div>
    </section>

    {{-- 4. Sizes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Sizes</h2>
            <p class="text-sm text-gray-500">Small (<code>size="sm"</code>), default, and large (<code>size="lg"</code>).</p>
        </div>

        <div class="flex items-end gap-4">
            <stisla::icon-box tone="primary" size="sm" icon="zap" />
            <stisla::icon-box tone="primary" icon="zap" />
            <stisla::icon-box tone="primary" size="lg" icon="zap" />
        </div>
    </section>

    {{-- 5. Custom color --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Custom Color</h2>
            <p class="text-sm text-gray-500">One-off colors via <code>:vars="['tone' => '...']"</code>.</p>
        </div>

        <div class="flex items-center gap-4">
            <stisla::icon-box icon="sparkles" :vars="['tone' => 'oklch(0.62 0.20 295)']" />
            <stisla::icon-box icon="heart" :vars="['tone' => 'oklch(0.62 0.21 0)']" />
            <stisla::icon-box icon="leaf" :vars="['tone' => 'oklch(0.65 0.13 175)']" />
        </div>
    </section>
</div>
