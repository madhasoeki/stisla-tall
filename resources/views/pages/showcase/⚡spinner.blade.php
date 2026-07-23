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
            <h2 class="text-xl font-bold">1. Basic</h2>
            <p class="text-sm text-gray-500">Default spinning border ring with accessible screen reader label.</p>
        </div>

        <stisla::spinner />
    </section>

    {{-- 2. Grow --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Grow</h2>
            <p class="text-sm text-gray-500">Pulsing dot variant using <code>:grow="true"</code>.</p>
        </div>

        <stisla::spinner :grow="true" />
    </section>

    {{-- 3. Colors --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Colors</h2>
            <p class="text-sm text-gray-500">Spinners inherit <code>currentColor</code>, recolored via semantic tones.</p>
        </div>

        <div class="space-y-4">
            <div class="flex items-center gap-4">
                <stisla::spinner tone="primary" />
                <stisla::spinner tone="success" />
                <stisla::spinner tone="danger" />
                <stisla::spinner tone="warning" />
                <stisla::spinner tone="info" />
                <stisla::spinner tone="muted" />
            </div>

            <div class="flex items-center gap-4">
                <stisla::spinner :grow="true" tone="primary" />
                <stisla::spinner :grow="true" tone="success" />
                <stisla::spinner :grow="true" tone="danger" />
                <stisla::spinner :grow="true" tone="warning" />
                <stisla::spinner :grow="true" tone="info" />
                <stisla::spinner :grow="true" tone="muted" />
            </div>
        </div>
    </section>

    {{-- 4. Sizes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Sizes</h2>
            <p class="text-sm text-gray-500">Compact (<code>size="sm"</code>), default, and hero (<code>size="lg"</code>) spinners.</p>
        </div>

        <div class="space-y-4">
            <div class="flex items-center gap-4">
                <stisla::spinner size="sm" />
                <stisla::spinner />
                <stisla::spinner size="lg" />
            </div>

            <div class="flex items-center gap-4">
                <stisla::spinner :grow="true" size="sm" />
                <stisla::spinner :grow="true" />
                <stisla::spinner :grow="true" size="lg" />
            </div>

            <div class="flex items-center gap-6 pt-2">
                <stisla::spinner size-value="3rem" width-value="4px" />
                <stisla::spinner :grow="true" size-value="3rem" />
            </div>
        </div>
    </section>

    {{-- 5. Alignment --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Alignment</h2>
            <p class="text-sm text-gray-500">Inline placement paired alongside text content.</p>
        </div>

        <span class="inline-flex items-center gap-2 text-sm">
            <stisla::spinner size="sm" :aria-hidden="true" />
            <span>Syncing inbox</span>
        </span>
    </section>

    {{-- 6. In buttons --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. In buttons</h2>
            <p class="text-sm text-gray-500">Button busy loading states and leading spinner icons inside buttons.</p>
        </div>

        <div class="space-y-4">
            <div class="flex flex-wrap items-center gap-4">
                <stisla::button tone="primary" :busy="true">Saving</stisla::button>
                <stisla::button mode="outline" tone="neutral" :busy="true">Loading</stisla::button>
            </div>

            <div class="flex flex-wrap items-center gap-4">
                <stisla::button tone="primary" :disabled="true">
                    <stisla::spinner size="sm" :aria-hidden="true" as="span" />
                    Loading
                </stisla::button>
                <stisla::button tone="primary" :disabled="true">
                    <stisla::spinner :grow="true" size="sm" :aria-hidden="true" as="span" />
                    Loading
                </stisla::button>
            </div>
        </div>
    </section>

    {{-- 7. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Customization</h2>
            <p class="text-sm text-gray-500">Overriding diameter and stroke width via <code>:vars</code>.</p>
        </div>

        <div class="flex items-center gap-6">
            <stisla::spinner :vars="['size' => '3rem', 'width' => '4px']" />
            <stisla::spinner :grow="true" :vars="['size' => '3rem']" />
        </div>
    </section>
</div>
