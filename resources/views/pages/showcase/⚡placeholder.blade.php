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
            <h2 class="text-xl font-bold">1. Basic Placeholders</h2>
            <p class="text-sm text-gray-500">Skeleton stand-ins for loading text content.</p>
        </div>

        <div class="max-w-sm w-full space-y-2" aria-hidden="true">
            <stisla::placeholder class="w-1/2" />
            <stisla::placeholder class="w-full" />
            <stisla::placeholder class="w-3/4" />
        </div>
    </section>

    {{-- 2. Colors --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Color Tints (tone)</h2>
            <p class="text-sm text-gray-500">Tinting bars using semantic tone tokens.</p>
        </div>

        <div class="flex flex-col gap-2 max-w-sm w-full" aria-hidden="true">
            <stisla::placeholder class="w-full" />
            <stisla::placeholder tone="primary" class="w-full" />
            <stisla::placeholder tone="success" class="w-full" />
            <stisla::placeholder tone="danger" class="w-full" />
            <stisla::placeholder tone="warning" class="w-full" />
            <stisla::placeholder tone="info" class="w-full" />
        </div>
    </section>

    {{-- 3. Animated --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Animated (glow &amp; wave)</h2>
            <p class="text-sm text-gray-500">Pulse animation (<code>animation="glow"</code>) and shimmer wave sweep (<code>animation="wave"</code>).</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-xl w-full" aria-hidden="true">
            <div class="space-y-2">
                <h3 class="text-sm font-semibold mb-2">Glow Pulse</h3>
                <stisla::placeholder animation="glow" class="w-full" />
                <stisla::placeholder animation="glow" class="w-3/4" />
            </div>
            <div class="space-y-2">
                <h3 class="text-sm font-semibold mb-2">Wave Sweep</h3>
                <stisla::placeholder animation="wave" class="w-full" />
                <stisla::placeholder animation="wave" class="w-3/4" />
            </div>
        </div>
    </section>

    {{-- 4. Sizes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Sizes</h2>
            <p class="text-sm text-gray-500">Font-relative height scaling using <code>size="sm"</code> and <code>size="lg"</code>.</p>
        </div>

        <div class="flex flex-col gap-3 max-w-sm w-full" aria-hidden="true">
            <stisla::placeholder size="sm" class="w-full" />
            <stisla::placeholder class="w-full" />
            <stisla::placeholder size="lg" class="w-full" />
        </div>
    </section>

    {{-- 5. Composed Component Skeletons --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Composed Skeletons</h2>
            <p class="text-sm text-gray-500">Combining <code>&lt;stisla::placeholder.avatar&gt;</code> and <code>&lt;stisla::placeholder.text&gt;</code> inside a Card.</p>
        </div>

        <stisla::card class="max-w-sm w-full" aria-hidden="true">
            <stisla::card.body class="flex items-center gap-3">
                <stisla::placeholder.avatar size="lg" animation="glow" />
                <stisla::placeholder.text :lines="2" animation="glow" />
            </stisla::card.body>
        </stisla::card>
    </section>

    {{-- 6. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning height and corner radius via <code>:vars</code>.</p>
        </div>

        <div class="max-w-sm w-full space-y-3" aria-hidden="true">
            <stisla::placeholder animation="glow" :vars="['height' => '1.5rem', 'radius' => '9999px']" class="w-full" />
        </div>
    </section>
</div>
