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
            <h2 class="text-xl font-bold">1. Basic Inline Link</h2>
            <p class="text-sm text-gray-500">Inline anchor opting into primary-colored underline and hover tint.</p>
        </div>

        <div class="p-4 bg-surface rounded-lg border border-border">
            <p class="text-sm">
                Settings have moved under <stisla::link href="#">Workspace preferences</stisla::link>.
            </p>
        </div>
    </section>

    {{-- 2. With Icon --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. With Icons</h2>
            <p class="text-sm text-gray-500">Leading or trailing icons lining up inline with label text and link color.</p>
        </div>

        <div class="flex flex-wrap items-center gap-6">
            <stisla::link href="#" iconTrailing="arrow-up-right">
                Documentation
            </stisla::link>

            <stisla::link href="#" icon="external-link">
                Open in new tab
            </stisla::link>

            <stisla::link href="#" icon="download" iconTrailing="chevron-right">
                Download report
            </stisla::link>
        </div>
    </section>

    {{-- 3. Retune Color / Intent Tones --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Intent Tones</h2>
            <p class="text-sm text-gray-500">Pairing link color tone with intent (e.g., success, danger, warning).</p>
        </div>

        <div class="p-4 bg-surface rounded-lg border border-border">
            <p class="text-sm leading-relaxed">
                Pair tone with intent:
                <stisla::link href="#" tone="success">Backup succeeded</stisla::link>,
                <stisla::link href="#" tone="danger">three checks failed</stisla::link>,
                <stisla::link href="#" tone="warning">two queued</stisla::link>.
            </p>
        </div>
    </section>

    {{-- 4. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning underline thickness, offset, and custom colors via <code>:vars</code>.</p>
        </div>

        <div class="flex flex-wrap items-center gap-6">
            <stisla::link href="#" :vars="['color' => 'var(--color-info)', 'decoration-thickness' => '2px', 'decoration-offset' => '4px']">
                Thick Info Link
            </stisla::link>

            <stisla::link href="#" :vars="['color' => 'oklch(0.6 0.25 300)', 'color-hover' => 'oklch(0.4 0.25 300)']">
                Purple Custom Hover Link
            </stisla::link>
        </div>
    </section>
</div>
