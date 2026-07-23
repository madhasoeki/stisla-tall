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
            <h2 class="text-xl font-bold">1. Basic Collapsible</h2>
            <p class="text-sm text-gray-500">Primitive panel that opens and closes from a trigger button.</p>
        </div>

        <div class="flex flex-col items-center">
            <stisla::collapsible.trigger target="collapsible-basic">Toggle details</stisla::collapsible.trigger>
            <stisla::collapsible id="collapsible-basic">
                <div class="rounded-md border border-border bg-surface p-4 mt-2">
                    A collapsible is a region whose visibility flips between open and closed. The state lives on the element itself; the height transition runs around the flip so the panel does not jump.
                </div>
            </stisla::collapsible>
        </div>
    </section>

    {{-- 2. Open by default --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Open by Default</h2>
            <p class="text-sm text-gray-500">Panel rendered with <code>:open="true"</code> to start open.</p>
        </div>

        <div class="flex flex-col items-center">
            <stisla::collapsible.trigger target="collapsible-open" :open="true">Toggle details</stisla::collapsible.trigger>
            <stisla::collapsible id="collapsible-open" :open="true">
                <div class="rounded-md border border-border bg-surface p-4 mt-2">
                    This region started open. Click the trigger to close it. The opening transition is the same one the trigger fires.
                </div>
            </stisla::collapsible>
        </div>
    </section>

    {{-- 3. Inside a card --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Inside a Card</h2>
            <p class="text-sm text-gray-500">Hiding extra detail inside a card behind a trigger.</p>
        </div>

        <stisla::card class="max-w-96">
            <stisla::card.body>
                <stisla::card.title as="h4">API token</stisla::card.title>
                <stisla::card.text class="text-muted-foreground">Created two weeks ago. Last used yesterday.</stisla::card.text>

                <div class="mt-3 flex flex-wrap items-center gap-2">
                    <stisla::collapsible.trigger target="collapsible-card" size="sm" mode="ghost" tone="neutral" flush="start">
                        Show permissions
                    </stisla::collapsible.trigger>
                </div>

                <stisla::collapsible id="collapsible-card">
                    <ul class="m-0 text-muted-foreground">
                        <li>read:repo</li>
                        <li>write:issues</li>
                        <li>read:user</li>
                    </ul>
                </stisla::collapsible>
            </stisla::card.body>
        </stisla::card>
    </section>

    {{-- 4. Programmatic control --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Programmatic Control</h2>
            <p class="text-sm text-gray-500">Driving a collapsible region from JS using <code>Stisla.Collapsible.getOrCreate(el)</code>.</p>
        </div>

        <div class="flex flex-col items-center space-y-3">
            <div class="flex flex-wrap items-center gap-2">
                <stisla::button size="sm" tone="neutral" id="btn-demo-open">Open</stisla::button>
                <stisla::button size="sm" tone="neutral" id="btn-demo-close">Close</stisla::button>
                <stisla::button size="sm" tone="neutral" id="btn-demo-toggle">Toggle</stisla::button>
            </div>

            <stisla::collapsible id="collapsible-programmatic">
                <div class="rounded-md border border-border bg-surface p-4 mt-2">
                    This region is opened and closed by the buttons above through the imperative API.
                </div>
            </stisla::collapsible>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var el = document.getElementById('collapsible-programmatic');
                if (!el || !window.Stisla) return;
                var inst = window.Stisla.Collapsible.getOrCreate(el);

                var btnOpen = document.getElementById('btn-demo-open');
                var btnClose = document.getElementById('btn-demo-close');
                var btnToggle = document.getElementById('btn-demo-toggle');

                if (btnOpen) btnOpen.addEventListener('click', function () { inst.open(); });
                if (btnClose) btnClose.addEventListener('click', function () { inst.close(); });
                if (btnToggle) btnToggle.addEventListener('click', function () { inst.toggle(); });
            });
        </script>
    </section>

    {{-- 5. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning animation timing via <code>:vars</code>.</p>
        </div>

        <div class="flex flex-col items-center">
            <stisla::collapsible.trigger target="collapsible-custom">Custom duration</stisla::collapsible.trigger>
            <stisla::collapsible id="collapsible-custom" :vars="['transition-duration' => '300ms']">
                <div class="rounded-md border border-border bg-surface p-4 mt-2">
                    This collapsible uses a custom 300ms height transition.
                </div>
            </stisla::collapsible>
        </div>
    </section>
</div>
