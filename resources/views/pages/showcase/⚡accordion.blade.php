<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto">
    {{-- 1. Basic Accordion --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Basic Accordion</h2>
            <p class="text-sm text-gray-500">Default multiple open accordion.</p>
        </div>

        <stisla::accordion>
            <stisla::accordion.item title="What is a design system?" :open="true">
                A shared vocabulary of tokens, primitives, and patterns that lets every screen in a product look like it was made by the same hand. Stisla is one of them, implemented first as a vanilla CSS + JS layer, with React and Vue layers to follow.
            </stisla::accordion.item>

            <stisla::accordion.item title="How are corners kept concentric?">
                The frame owns a single radius. Each item subtracts the wrapper padding from that radius so the inner arc shares a center with the outer arc. Change <code>--accordion-radius</code> on a parent and every nested item keeps the rhythm.
            </stisla::accordion.item>

            <stisla::accordion.item title="Does it animate?">
                The chevron rotates and the panel slides open and closed. Both transitions follow the standard Stisla motion curve and ease at the same duration.
            </stisla::accordion.item>
        </stisla::accordion>
    </section>

    {{-- 2. Single Open Accordion --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Single Open Accordion</h2>
            <p class="text-sm text-gray-500">Enforce one-open-at-a-time using <code>type="single"</code>.</p>
        </div>

        <stisla::accordion type="single">
            <stisla::accordion.item title="Section one" :open="true">
                Opening section two will close this panel.
            </stisla::accordion.item>

            <stisla::accordion.item title="Section two">
                Each trigger acts like a radio in a group.
            </stisla::accordion.item>

            <stisla::accordion.item title="Section three">
                Closing the current one without opening another is fine too. Just click an open trigger again.
            </stisla::accordion.item>
        </stisla::accordion>
    </section>

    {{-- 3. Seamless in a Card --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Seamless in a Card</h2>
            <p class="text-sm text-gray-500">Edge-to-edge accordion inside a card using <code>:seamless="true"</code>.</p>
        </div>

        <div class="card w-full">
            <div class="card__header">
                <h4 class="card__title">Frequently asked</h4>
            </div>
            <stisla::accordion :seamless="true">
                <stisla::accordion.item title="Can I deploy to my own domain?" :open="true" heading="h4">
                    Point your domain at the build output. Any static host works.
                </stisla::accordion.item>

                <stisla::accordion.item title="Do you ship a CLI?" heading="h4">
                    Not in 3.0. The starter templates download as zips.
                </stisla::accordion.item>

                <stisla::accordion.item title="Is there a React wrapper?" heading="h4">
                    Pair <code>@stisla/css</code> with Radix or Base UI today. A first-party wrapper is post-3.0.
                </stisla::accordion.item>
            </stisla::accordion>
        </div>
    </section>

    {{-- 4. With Leading Icon --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. With Leading Icon</h2>
            <p class="text-sm text-gray-500">Icon before title using <code>icon="..."</code> prop.</p>
        </div>

        <stisla::accordion>
            <stisla::accordion.item title="Shipping" icon="truck" :open="true">
                Free standard shipping on orders over $50. Express options at checkout.
            </stisla::accordion.item>

            <stisla::accordion.item title="Returns" icon="trash-2">
                30-day window from delivery. Bring your order number.
            </stisla::accordion.item>

            <stisla::accordion.item title="Order tracking" icon="clock">
                A tracking link emails out once your package leaves the warehouse.
            </stisla::accordion.item>
        </stisla::accordion>
    </section>

    {{-- 5. Disabled Item --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Disabled Item</h2>
            <p class="text-sm text-gray-500">Disabled item using <code>:disabled="true"</code>.</p>
        </div>

        <stisla::accordion>
            <stisla::accordion.item title="Active section">
                This one opens.
            </stisla::accordion.item>

            <stisla::accordion.item title="Locked section" :disabled="true">
                Body sits hidden; the trigger refuses interaction.
            </stisla::accordion.item>
        </stisla::accordion>
    </section>

    {{-- 6. Customization Examples --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Customization (CSS Variables / Scoped Overrides)</h2>
            <p class="text-sm text-gray-500">Customized using <code>:vars="..."</code> prop or inline styles.</p>
        </div>

        <stisla::accordion :vars="['gap' => '1rem', 'radius' => '0px', 'item-open-bg' => 'oklch(0.92 0.08 280)']">
            <stisla::accordion.item title="Brutalist Custom Radius & Gap" :open="true">
                Overridden via <code>:vars="['gap' => '1rem', 'radius' => '0px', 'item-open-bg' => '...']"</code>.
            </stisla::accordion.item>

            <stisla::accordion.item title="Customized Trigger Color" :vars="['trigger-color' => 'oklch(0.5 0.2 280)']">
                Item-level customization via <code>:vars="['trigger-color' => '...']"</code>.
            </stisla::accordion.item>
        </stisla::accordion>
    </section>
</div>