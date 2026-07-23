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
            <h2 class="text-xl font-bold">1. Basic Indicator</h2>
            <p class="text-sm text-gray-500">Small status dot for presence, liveness, and unread signals.</p>
        </div>

        <div class="flex items-center gap-3">
            <span class="inline-flex items-center gap-2">
                <stisla::indicator /> Offline
            </span>
        </div>
    </section>

    {{-- 2. Tone Intents --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Tone Intents</h2>
            <p class="text-sm text-gray-500">Color intent modifiers for different status signals.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::indicator tone="primary" />
            <stisla::indicator tone="success" />
            <stisla::indicator tone="warning" />
            <stisla::indicator tone="danger" />
            <stisla::indicator tone="info" />
        </div>
    </section>

    {{-- 3. Pulse --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Pulse Animation</h2>
            <p class="text-sm text-gray-500">Expanding halo for live or active signals using <code>:pulse="true"</code>.</p>
        </div>

        <div class="flex items-center gap-6">
            <span class="inline-flex items-center gap-2">
                <stisla::indicator tone="success" :pulse="true" /> Online
            </span>
            <span class="inline-flex items-center gap-2">
                <stisla::indicator tone="danger" :pulse="true" /> Live
            </span>
            <span class="inline-flex items-center gap-2">
                <stisla::indicator tone="info" :pulse="true" /> Streaming
            </span>
        </div>
    </section>

    {{-- 4. Sizes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Sizes</h2>
            <p class="text-sm text-gray-500">Small, default, and large indicator sizes.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::indicator tone="success" size="sm" />
            <stisla::indicator tone="success" />
            <stisla::indicator tone="success" size="lg" />
        </div>
    </section>

    {{-- 5. Pinned to Host --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Pinned to a Host</h2>
            <p class="text-sm text-gray-500">Overlay dot on a corner with absolute positioning on buttons or hosts.</p>
        </div>

        <div class="flex items-center gap-4">
            <span class="relative inline-flex">
                <stisla::button mode="outline" tone="neutral" :icon-only="true" icon="bell" aria-label="Notifications" />
                <stisla::indicator tone="danger" class="absolute -top-1 -right-1" :vars="['ring-width' => '2px']" />
            </span>

            <span class="relative inline-flex">
                <stisla::button mode="outline" tone="neutral" :icon-only="true" icon="mail" aria-label="Messages" />
                <stisla::indicator tone="primary" :pulse="true" class="absolute -top-1 -right-1" :vars="['ring-width' => '2px']" />
            </span>
        </div>
    </section>

    {{-- 6. Corners --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Corners</h2>
            <p class="text-sm text-gray-500">Pin dots to any corner of a host box.</p>
        </div>

        <div class="flex items-center gap-4">
            <span class="relative inline-flex size-12 bg-surface-3 rounded-md">
                <stisla::indicator tone="success" class="absolute -top-1 -left-1" />
                <stisla::indicator tone="warning" class="absolute -top-1 -right-1" />
                <stisla::indicator tone="info" class="absolute -bottom-1 -left-1" />
                <stisla::indicator tone="danger" class="absolute -bottom-1 -right-1" />
            </span>
        </div>
    </section>

    {{-- 7. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Custom indicator size and color via <code>:vars</code>.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::indicator :vars="['size' => '1rem', 'color' => 'oklch(0.6 0.25 140)']" />
        </div>
    </section>
</div>
