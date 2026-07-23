<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto">
    {{-- 1. Basic Primary --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Primary Button</h2>
            <p class="text-sm text-gray-500">Main call to action for the primary user goal.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::button tone="primary">Primary</stisla::button>
        </div>
    </section>

    {{-- 2. Neutral --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Neutral &amp; Outline</h2>
            <p class="text-sm text-gray-500">Quieter button tone sitting beside primary.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::button tone="neutral">Neutral</stisla::button>
            <stisla::button mode="outline" tone="neutral">Outline</stisla::button>
            <stisla::button tone="primary">Save changes</stisla::button>
            <stisla::button mode="outline" tone="neutral">Cancel</stisla::button>
        </div>
    </section>

    {{-- 3. Tertiary --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Tertiary</h2>
            <p class="text-sm text-gray-500">Theme-adaptive contrast fill button.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::button tone="tertiary">Tertiary</stisla::button>
        </div>
    </section>

    {{-- 4. Danger --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Danger &amp; Soft</h2>
            <p class="text-sm text-gray-500">Destructive actions with filled, outline, and soft modes.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::button tone="danger">Danger</stisla::button>
            <stisla::button mode="outline" tone="danger">Outline</stisla::button>
            <stisla::button mode="soft" tone="danger">Soft</stisla::button>
        </div>
    </section>

    {{-- 5. Ghost --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Ghost Mode</h2>
            <p class="text-sm text-gray-500">No background, no border, soft tint on hover.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::button mode="ghost" tone="neutral">Cancel</stisla::button>
            <stisla::button mode="ghost" tone="primary">View details</stisla::button>
            <stisla::button mode="ghost" tone="danger">Remove</stisla::button>
        </div>
    </section>

    {{-- 6. Custom Color --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Custom Color Knobs</h2>
            <p class="text-sm text-gray-500">One-off custom tone override via <code>:vars</code>.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::button :vars="['tone' => 'oklch(0.55 0.18 149)', 'color' => 'white']">Custom green</stisla::button>
            <stisla::button :vars="['tone' => 'oklch(0.55 0.15 285)', 'color' => 'white']">Custom violet</stisla::button>
            <stisla::button :vars="['tone' => 'oklch(0.65 0.18 55)', 'color' => 'white']">Custom orange</stisla::button>
        </div>
    </section>

    {{-- 7. Sizes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Sizes</h2>
            <p class="text-sm text-gray-500">Small, default (md), large, and XL button heights.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::button tone="primary" size="sm">Small</stisla::button>
            <stisla::button tone="primary">Default</stisla::button>
            <stisla::button tone="primary" size="lg">Large</stisla::button>
            <stisla::button tone="primary" size="xl">XL</stisla::button>
        </div>
    </section>

    {{-- 8. With Icons --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. With Icons</h2>
            <p class="text-sm text-gray-500">Leading and trailing Lucide icons via props.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::button tone="primary" icon="plus">Leading icon</stisla::button>
            <stisla::button tone="primary" icon-trailing="arrow-right">Trailing icon</stisla::button>
        </div>
    </section>

    {{-- 9. Icon Only --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">9. Icon Only &amp; Pill</h2>
            <p class="text-sm text-gray-500">Square or circular icon buttons using <code>:icon-only="true"</code> and <code>:pill="true"</code>.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::button tone="primary" size="sm" :icon-only="true" icon="plus" aria-label="Add small" />
            <stisla::button tone="primary" :icon-only="true" icon="plus" aria-label="Add default" />
            <stisla::button tone="primary" size="lg" :icon-only="true" icon="plus" aria-label="Add large" />
            <stisla::button mode="outline" tone="danger" :icon-only="true" icon="trash-2" aria-label="Delete" />
            <stisla::button mode="outline" tone="neutral" :icon-only="true" icon="pencil" aria-label="Edit" />
            <stisla::button mode="ghost" tone="neutral" :icon-only="true" :pill="true" icon="pencil" aria-label="Edit pill" />
        </div>
    </section>

    {{-- 10. States --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">10. States (Pressed, Disabled, Busy)</h2>
            <p class="text-sm text-gray-500">Pressed, disabled, and loading spinner states.</p>
        </div>

        <div class="flex flex-wrap items-center gap-3">
            <stisla::button tone="primary" :pressed="true">Pressed</stisla::button>
            <stisla::button tone="primary" :disabled="true">Disabled button</stisla::button>
            <stisla::button tone="primary" href="#" :disabled="true">Disabled link</stisla::button>
            <stisla::button tone="primary" size="sm" :busy="true">Saving</stisla::button>
            <stisla::button tone="primary" :busy="true">Saving</stisla::button>
            <stisla::button tone="primary" size="lg" :busy="true">Saving</stisla::button>
            <stisla::button mode="outline" tone="neutral" :busy="true">Loading</stisla::button>
        </div>
    </section>

    {{-- 11. Rendered as Link --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">11. Rendered as Link (&lt;a&gt;)</h2>
            <p class="text-sm text-gray-500">Passing <code>href="..."</code> renders an anchor tag styled as a button.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::button tone="primary" href="https://stisla.dev">Go to Stisla</stisla::button>
            <stisla::button mode="outline" tone="neutral" href="#">Secondary Link</stisla::button>
        </div>
    </section>
</div>
