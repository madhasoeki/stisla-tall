<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto">
    {{-- Basic --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Basic</h2>
            <p class="text-sm text-gray-500">Add <code>.separator</code> to an <code>&lt;hr&gt;</code> for a full-width rule. The bare element stays untouched by reboot, so the class is the opt-in; the color tracks the border token.</p>
        </div>

        <div class="max-w-md">
            <p class="m-0">Backed up to iCloud just now.</p>
            <stisla::separator class="my-3" />
            <p class="m-0 text-muted-foreground">Local snapshot on this Mac. 2 days ago.</p>
        </div>
    </section>

    {{-- Vertical --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Vertical</h2>
            <p class="text-sm text-gray-500">Drop the <code>--vertical</code> modifier on a <code>&lt;div&gt;</code> inside a flex row. The rule stretches to the row's cross axis. Add <code>role="separator"</code> and <code>aria-orientation="vertical"</code> when the divide carries meaning.</p>
        </div>

        <div class="inline-flex items-center gap-3 text-xs text-muted-foreground">
            <span>By Maya Tanaka</span>
            <stisla::separator orientation="vertical" :decorative="false" />
            <span>5 min read</span>
            <stisla::separator orientation="vertical" :decorative="false" />
            <span>Tutorial</span>
        </div>
    </section>

    {{-- Inside a card body --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Inside a card body</h2>
            <p class="text-sm text-gray-500">Use a separator to break a card into thematic blocks without a header or footer. The rule reaches the body padding's edge, matching the card's cadence.</p>
        </div>

        <stisla::card class="max-w-sm w-full">
            <stisla::card.body>
                <h5 class="card__title m-0">Invoice #2026-04-118</h5>
                <p class="card__subtitle m-0 text-muted-foreground">Due July 1, 2026</p>
            </stisla::card.body>
            <stisla::separator />
            <stisla::card.body class="space-y-1">
                <div class="flex flex-wrap items-center justify-between">
                    <span>Annual plan</span><span class="font-medium">$96.00</span>
                </div>
                <div class="flex flex-wrap items-center justify-between">
                    <span>Three additional seats</span><span class="font-medium">$36.00</span>
                </div>
                <div class="flex flex-wrap items-center justify-between text-muted-foreground">
                    <span>Estimated tax</span><span class="font-medium">$8.40</span>
                </div>
            </stisla::card.body>
            <stisla::separator />
            <stisla::card.body>
                <div class="flex flex-wrap items-center justify-between text-lg font-semibold">
                    <span>Total</span><span>$140.40</span>
                </div>
            </stisla::card.body>
        </stisla::card>
    </section>

    {{-- Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Customization</h2>
            <p class="text-sm text-gray-500">These variables retune <code>.separator</code> without touching component CSS. Override on the element, a parent scope, or <code>:root</code>.</p>
        </div>

        <div class="max-w-md space-y-4">
            <stisla::separator thickness="2px" color="var(--color-primary)" />
            <stisla::separator :vars="['thickness' => '3px', 'color' => 'var(--color-success)']" />
        </div>
    </section>
</div>
