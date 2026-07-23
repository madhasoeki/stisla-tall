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
            <p class="text-sm text-gray-500">A two-state press button: outline-neutral at rest, highlight-filled when active.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::toggle :pressed="true" icon="bell">Notifications on</stisla::toggle>
            <stisla::toggle :pressed="false" icon="bell-off">Off</stisla::toggle>
        </div>
    </section>

    {{-- 2. Keyboard --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Keyboard</h2>
            <p class="text-sm text-gray-500">Behaves like a native button with sticky pressed state. Focus with <code>Tab</code>, flip with <code>Space</code> or <code>Enter</code>.</p>
        </div>

        <stisla::toggle :pressed="false">Toggle Focus</stisla::toggle>
    </section>

    {{-- 3. Form data --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Form data</h2>
            <p class="text-sm text-gray-500">Pairing a hidden <code>&lt;stisla::toggle.input&gt;</code> with a sibling label <code>&lt;stisla::toggle as="label"&gt;</code>.</p>
        </div>

        <div class="flex items-center gap-2">
            <stisla::toggle.input id="newsletterToggle" name="newsletter" :checked="true" />
            <stisla::toggle as="label" for="newsletterToggle" icon="mail">Subscribe to newsletter</stisla::toggle>
        </div>
    </section>

    {{-- 4. Sizes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Sizes</h2>
            <p class="text-sm text-gray-500">Small (<code>size="sm"</code>), default, and large (<code>size="lg"</code>) toggle buttons.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::toggle size="sm" :pressed="true">Bold</stisla::toggle>
            <stisla::toggle :pressed="true">Bold</stisla::toggle>
            <stisla::toggle size="lg" :pressed="true">Bold</stisla::toggle>
        </div>
    </section>

    {{-- 5. Icon-only --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Icon-only</h2>
            <p class="text-sm text-gray-500">Square icon toggle slots using <code>:iconOnly="true"</code>.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::toggle :iconOnly="true" :pressed="false" icon="bold" aria-label="Bold" />
            <stisla::toggle :iconOnly="true" :pressed="true" icon="italic" aria-label="Italic" />
            <stisla::toggle :iconOnly="true" :pressed="false" icon="underline" aria-label="Underline" />
        </div>
    </section>

    {{-- 6. Circle --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Circle</h2>
            <p class="text-sm text-gray-500">Circular silhouette combining <code>:iconOnly="true"</code> and <code>:circle="true"</code>.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::toggle :iconOnly="true" :circle="true" :pressed="false" icon="thumbs-up" aria-label="Like" />
            <stisla::toggle :iconOnly="true" :circle="true" :pressed="true" icon="heart" aria-label="Love" />
            <stisla::toggle :iconOnly="true" :circle="true" :pressed="false" icon="star" aria-label="Star" />
        </div>
    </section>

    {{-- 7. Disabled --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Disabled</h2>
            <p class="text-sm text-gray-500">Native <code>:disabled="true"</code> dims the chip and blocks pointer events.</p>
        </div>

        <div class="flex flex-wrap items-center gap-4">
            <stisla::toggle :pressed="false" :disabled="true">Off, disabled</stisla::toggle>
            <stisla::toggle :pressed="true" :disabled="true">On, disabled</stisla::toggle>
            <div class="flex items-center gap-2">
                <stisla::toggle.input id="toggleDisabledForm" :disabled="true" />
                <stisla::toggle as="label" for="toggleDisabledForm" :disabled="true">Form, disabled</stisla::toggle>
            </div>
        </div>
    </section>

    {{-- 8. Events --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. Events</h2>
            <p class="text-sm text-gray-500">Listening to <code>stisla:toggle:changing</code> and <code>stisla:toggle:changed</code>.</p>
        </div>

        <div class="flex flex-col gap-3 max-w-md">
            <stisla::toggle id="toggle-event-demo" :pressed="false" icon="power">Toggle Event Demo</stisla::toggle>
            <pre id="toggle-event-log" class="p-3 bg-slate-900 text-slate-100 rounded text-xs">Listening for stisla:toggle:changed…</pre>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var btn = document.getElementById('toggle-event-demo');
                var log = document.getElementById('toggle-event-log');
                if (!btn || !log) return;
                btn.addEventListener('stisla:toggle:changed', function (e) {
                    log.textContent = 'Event triggered: stisla:toggle:changed -> pressed = ' + e.detail.pressed;
                });
            });
        </script>
    </section>

    {{-- 9. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">9. Customization</h2>
            <p class="text-sm text-gray-500">Retuning active fills and colors using <code>:vars</code>.</p>
        </div>

        <stisla::toggle :pressed="true" :vars="['bg-active' => 'oklch(0.55 0.22 260)', 'color-active' => '#ffffff']">
            Custom Active Color
        </stisla::toggle>
    </section>
</div>
