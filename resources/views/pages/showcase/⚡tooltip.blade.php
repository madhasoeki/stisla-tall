<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto min-h-[600px]">
    {{-- 1. Basic --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Basic</h2>
            <p class="text-sm text-gray-500">A small inverse-surface chip that labels the control it points at. Shows on hover or focus.</p>
        </div>

        <div class="flex justify-center py-10">
            <stisla::button tone="neutral" data-stisla-tooltip data-stisla-tooltip-title="Saved to your library" data-stisla-tooltip-delay="150">Hover me</stisla::button>
        </div>
    </section>

    {{-- 2. Keyboard --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Keyboard</h2>
            <p class="text-sm text-gray-500">Tooltip activation is tied to focus. Press <code>Tab</code> to focus and open, <code>Escape</code> to close without losing focus.</p>
        </div>

        <div class="flex justify-center py-10">
            <stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-title="Press Escape to dismiss" data-stisla-tooltip-delay="150">Tab to focus me</stisla::button>
        </div>
    </section>

    {{-- 3. Placements --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Placements</h2>
            <p class="text-sm text-gray-500"><code>placement</code> picks resting side (top, right, bottom, left, top-start, top-end, bottom-start, bottom-end).</p>
        </div>

        <div class="flex flex-wrap items-center justify-center gap-3 py-12">
            <stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-placement="top" data-stisla-tooltip-title="Anchored above" data-stisla-tooltip-delay="150">Top</stisla::button>
            <stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-placement="right" data-stisla-tooltip-title="Anchored right" data-stisla-tooltip-delay="150">Right</stisla::button>
            <stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-placement="bottom" data-stisla-tooltip-title="Anchored below" data-stisla-tooltip-delay="150">Bottom</stisla::button>
            <stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-placement="left" data-stisla-tooltip-title="Anchored left" data-stisla-tooltip-delay="150">Left</stisla::button>
            <stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-placement="top-start" data-stisla-tooltip-title="Top, aligned to the trigger's start edge" data-stisla-tooltip-delay="150">Top start</stisla::button>
            <stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-placement="top-end" data-stisla-tooltip-title="Top, aligned to the trigger's end edge" data-stisla-tooltip-delay="150">Top end</stisla::button>
            <stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-placement="bottom-start" data-stisla-tooltip-title="Bottom, aligned to the trigger's start edge" data-stisla-tooltip-delay="150">Bottom start</stisla::button>
            <stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-placement="bottom-end" data-stisla-tooltip-title="Bottom, aligned to the trigger's end edge" data-stisla-tooltip-delay="150">Bottom end</stisla::button>
        </div>
    </section>

    {{-- 4. Triggers --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Triggers</h2>
            <p class="text-sm text-gray-500">Default trigger is <code>hover focus</code>. Specify <code>trigger="hover"</code> or <code>trigger="focus"</code> to restrict activation.</p>
        </div>

        <div class="flex flex-wrap items-center justify-center gap-3 py-10">
            <stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-trigger="hover" data-stisla-tooltip-title="Hover only. Keyboard focus skips this.">Hover only</stisla::button>
            <stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-trigger="focus" data-stisla-tooltip-title="Focus only. Try Tab to reach this.">Focus only</stisla::button>
            <stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-title="Default. Opens on hover or focus.">Hover and focus</stisla::button>
        </div>
    </section>

    {{-- 5. Delay --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Delay</h2>
            <p class="text-sm text-gray-500">Custom opening delay in ms: instant (0ms), default (600ms), or lazy (1200ms).</p>
        </div>

        <div class="flex flex-wrap items-center justify-center gap-3 py-10">
            <stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-delay="0" data-stisla-tooltip-title="Instant. No open delay.">Instant</stisla::button>
            <stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-delay="600" data-stisla-tooltip-title="Default. 600ms before opening.">Default</stisla::button>
            <stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-delay="1200" data-stisla-tooltip-title="Lazy. 1.2s before opening.">Lazy</stisla::button>
        </div>
    </section>

    {{-- 6. On a link --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. On a link</h2>
            <p class="text-sm text-gray-500">Tooltips work on inline anchors for jargon, acronyms, or external pointers.</p>
        </div>

        <div class="prose py-10">
            <p class="m-0">
                The release pipeline runs on
                <stisla::link href="#" data-stisla-tooltip data-stisla-tooltip-title="GitHub Actions">CI</stisla::link>
                and announces the cut in
                <stisla::link href="#" data-stisla-tooltip data-stisla-tooltip-title="#releases on Slack">the release channel</stisla::link>.
            </p>
        </div>
    </section>

    {{-- 7. Icon-only triggers --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Icon-only triggers</h2>
            <p class="text-sm text-gray-500">Pair tooltips on icon buttons with matching <code>aria-label</code> for accessibility.</p>
        </div>

        <div class="flex flex-wrap items-center justify-center gap-3 py-10">
            <stisla::button mode="outline" tone="neutral" :icon-only="true" icon="pencil" data-stisla-tooltip data-stisla-tooltip-title="Edit" aria-label="Edit" />
            <stisla::button mode="outline" tone="neutral" :icon-only="true" icon="copy" data-stisla-tooltip data-stisla-tooltip-title="Duplicate" aria-label="Duplicate" />
            <stisla::button mode="outline" tone="neutral" :icon-only="true" icon="archive" data-stisla-tooltip data-stisla-tooltip-title="Archive" aria-label="Archive" />
            <stisla::button mode="outline" tone="danger" :icon-only="true" icon="trash-2" data-stisla-tooltip data-stisla-tooltip-title="Delete" aria-label="Delete" />
        </div>
    </section>

    {{-- 8. HTML content --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. HTML content</h2>
            <p class="text-sm text-gray-500">Set <code>data-stisla-tooltip-html="true"</code> to render formatted HTML inside the chip.</p>
        </div>

        <div class="flex justify-center py-10">
            <stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-html="true" data-stisla-tooltip-title="Press <kbd>Cmd</kbd>+<kbd>K</kbd> to search">Search</stisla::button>
        </div>
    </section>

    {{-- 9. Long content --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">9. Long content</h2>
            <p class="text-sm text-gray-500">Text wrapping occurs when title length exceeds <code>--tooltip-max-width</code>.</p>
        </div>

        <div class="flex justify-center py-10">
            <stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-title="Only workspace owners can change billing details and downgrade the plan">Hover for the rule</stisla::button>
        </div>
    </section>

    {{-- 10. Disabled trigger --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">10. Disabled trigger</h2>
            <p class="text-sm text-gray-500">Wrap disabled buttons inside a focusable container (<code>&lt;stisla::tooltip&gt;</code>) to capture hover/focus.</p>
        </div>

        <div class="flex justify-center py-10">
            <stisla::tooltip title="Upgrade to enable exports" class="inline-block" tabindex="0">
                <stisla::button tone="primary" :disabled="true" style="pointer-events: none;">Export CSV</stisla::button>
            </stisla::tooltip>
        </div>
    </section>

    {{-- 11. Events --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">11. Events</h2>
            <p class="text-sm text-gray-500">Listening to <code>stisla:tooltip:opening</code>, <code>opened</code>, <code>closing</code>, and <code>closed</code> events.</p>
        </div>

        <div class="flex flex-col items-center gap-3 py-6">
            <stisla::button id="tooltip-event-trigger" tone="primary" data-stisla-tooltip data-stisla-tooltip-title="Event Demo Tooltip" data-stisla-tooltip-delay="100">Hover or focus for events</stisla::button>
            <pre id="tooltip-event-log" class="p-3 bg-slate-900 text-slate-100 rounded text-xs w-full max-w-md">Listening for stisla:tooltip events…</pre>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var btn = document.getElementById('tooltip-event-trigger');
                var log = document.getElementById('tooltip-event-log');
                if (!btn || !log) return;
                ['opening', 'opened', 'closing', 'closed'].forEach(function (evt) {
                    btn.addEventListener('stisla:tooltip:' + evt, function () {
                        log.textContent = 'Event triggered: stisla:tooltip:' + evt;
                    });
                });
            });
        </script>
    </section>

    {{-- 12. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">12. Customization</h2>
            <p class="text-sm text-gray-500">Retuning tooltip background fill and font size via <code>:vars</code>.</p>
        </div>

        <div class="flex justify-center py-10">
            <stisla::tooltip title="Custom retuned tooltip" :vars="['bg' => 'oklch(0.35 0.15 250)', 'font-size' => '0.85rem']">
                <stisla::button mode="outline" tone="neutral">Custom Styled Tooltip</stisla::button>
            </stisla::tooltip>
        </div>
    </section>
</div>
