<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto min-h-[800px]">
    {{-- 1. Basic --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Basic</h2>
            <p class="text-sm text-gray-500">A surface-tier panel anchored to a trigger, holding rich content.</p>
        </div>

        <div class="relative">
            <stisla::popover.trigger tone="neutral" for="pop-basic">Details</stisla::popover.trigger>

            <stisla::popover id="pop-basic" placement="bottom">
                <stisla::popover.title>Storage almost full</stisla::popover.title>
                <stisla::popover.body as="p">You have used 92% of your plan. Archive old projects or upgrade to keep syncing.</stisla::popover.body>
            </stisla::popover>
        </div>
    </section>

    {{-- 2. Keyboard --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Keyboard</h2>
            <p class="text-sm text-gray-500">Open with <code>Enter</code> / <code>Space</code> when focused. <code>Escape</code> closes popover and restores focus to trigger.</p>
        </div>

        <div class="relative">
            <stisla::popover.trigger mode="outline" tone="neutral" for="pop-keyboard">Keyboard Navigation</stisla::popover.trigger>

            <stisla::popover id="pop-keyboard" placement="bottom">
                <stisla::popover.title>Keyboard Affordance</stisla::popover.title>
                <stisla::popover.body as="p">Press Escape to close or Tab to cycle through focusable elements.</stisla::popover.body>
            </stisla::popover>
        </div>
    </section>

    {{-- 3. With a close chip --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. With a close chip</h2>
            <p class="text-sm text-gray-500">Drop in <code>&lt;stisla::popover.close&gt;</code> for a corner dismiss affordance.</p>
        </div>

        <div class="relative">
            <stisla::popover.trigger tone="neutral" for="pop-close">What's new</stisla::popover.trigger>

            <stisla::popover id="pop-close" placement="bottom">
                <stisla::popover.close />
                <stisla::popover.title>Faster exports</stisla::popover.title>
                <stisla::popover.body as="p">Exports now stream in the background so you can keep working while they finish.</stisla::popover.body>
            </stisla::popover>
        </div>
    </section>

    {{-- 4. Placements --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Placements</h2>
            <p class="text-sm text-gray-500"><code>placement</code> picks resting side (top, right, bottom, left). Floating UI flips automatically.</p>
        </div>

        <div class="flex flex-wrap items-center justify-center gap-3 pt-2 pb-48">
            <stisla::popover.trigger mode="outline" tone="neutral" for="pop-place-top">Top</stisla::popover.trigger>
            <stisla::popover.trigger mode="outline" tone="neutral" for="pop-place-right">Right</stisla::popover.trigger>
            <stisla::popover.trigger mode="outline" tone="neutral" for="pop-place-bottom">Bottom</stisla::popover.trigger>
            <stisla::popover.trigger mode="outline" tone="neutral" for="pop-place-left">Left</stisla::popover.trigger>

            <stisla::popover id="pop-place-top" placement="top">
                <stisla::popover.title>Top</stisla::popover.title>
                <stisla::popover.body as="p">Anchors above the trigger.</stisla::popover.body>
            </stisla::popover>

            <stisla::popover id="pop-place-right" placement="right">
                <stisla::popover.title>Right</stisla::popover.title>
                <stisla::popover.body as="p">Anchors to the right of the trigger.</stisla::popover.body>
            </stisla::popover>

            <stisla::popover id="pop-place-bottom" placement="bottom">
                <stisla::popover.title>Bottom</stisla::popover.title>
                <stisla::popover.body as="p">Anchors below the trigger.</stisla::popover.body>
            </stisla::popover>

            <stisla::popover id="pop-place-left" placement="left">
                <stisla::popover.title>Left</stisla::popover.title>
                <stisla::popover.body as="p">Anchors to the left of the trigger.</stisla::popover.body>
            </stisla::popover>
        </div>
    </section>

    {{-- 5. Hover trigger --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Hover trigger</h2>
            <p class="text-sm text-gray-500">Set <code>triggerMode="hover focus"</code> to open on mouse hover and keyboard focus.</p>
        </div>

        <div class="flex justify-center pt-2 pb-40">
            <stisla::popover.trigger mode="outline" tone="neutral" for="pop-hover">Hover or focus me</stisla::popover.trigger>

            <stisla::popover id="pop-hover" triggerMode="hover focus" placement="bottom">
                <stisla::popover.title>Read-only</stisla::popover.title>
                <stisla::popover.body as="p">Members with the viewer role can browse but not edit shared boards.</stisla::popover.body>
            </stisla::popover>
        </div>
    </section>

    {{-- 6. Rich content --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Rich content</h2>
            <p class="text-sm text-gray-500">Author body with inputs, buttons, and custom HTML content.</p>
        </div>

        <div class="flex justify-center pt-2 pb-48">
            <stisla::popover.trigger tone="primary" for="pop-rich">Invite teammate</stisla::popover.trigger>

            <stisla::popover id="pop-rich" placement="bottom-start" style="min-width: 17rem;">
                <stisla::popover.title>Invite by email</stisla::popover.title>
                <stisla::popover.body class="text-foreground">
                    <div class="flex flex-col gap-2">
                        <stisla::input type="email" placeholder="name@example.com" aria-label="Email address" />
                        <div class="flex flex-wrap items-center gap-2 justify-end">
                            <stisla::button size="sm" mode="ghost" tone="neutral" data-stisla-popover-dismiss>Cancel</stisla::button>
                            <stisla::button size="sm" tone="primary">Send invite</stisla::button>
                        </div>
                    </div>
                </stisla::popover.body>
            </stisla::popover>
        </div>
    </section>

    {{-- 7. Panel --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Panel</h2>
            <p class="text-sm text-gray-500">Structured header, body list, and footer. Add <code>:menu="true"</code> for notification list items.</p>
        </div>

        <div class="flex justify-center pt-2 pb-72">
            <stisla::popover.trigger mode="outline" tone="neutral" for="pop-notify">Notifications</stisla::popover.trigger>

            <stisla::popover id="pop-notify" :menu="true" placement="bottom-end" style="width: 20rem; max-width: 100%;">
                <stisla::popover.header>
                    <stisla::popover.title>Notifications</stisla::popover.title>
                    <stisla::popover.action>
                        <stisla::link href="#">Mark all as read</stisla::link>
                    </stisla::popover.action>
                </stisla::popover.header>
                <stisla::popover.body>
                    <stisla::media as="a" href="#" class="media--unread items-start">
                        <div class="media__figure"><stisla::icon-box tone="primary" icon="shopping-cart" /></div>
                        <div class="media__content">
                            <div class="media__title">New order #10428</div>
                            <div class="media__description">Acme Corp placed an order for 12 items.</div>
                            <div class="media__meta">5 minutes ago</div>
                        </div>
                    </stisla::media>
                    <stisla::media as="a" href="#" class="items-start">
                        <div class="media__figure"><stisla::icon-box tone="danger" icon="alert-triangle" /></div>
                        <div class="media__content">
                            <div class="media__title">Low stock alert</div>
                            <div class="media__description">Headphone Blitz is down to 4 units.</div>
                            <div class="media__meta">1 hour ago</div>
                        </div>
                    </stisla::media>
                    <stisla::media as="a" href="#" class="items-start">
                        <div class="media__figure">
                            <stisla::avatar size="sm" shape="circle"><stisla::avatar.fallback text="PP" /></stisla::avatar>
                        </div>
                        <div class="media__content">
                            <div class="media__title">Priya Patel</div>
                            <div class="media__description">Started following your store.</div>
                            <div class="media__meta">3 hours ago</div>
                        </div>
                    </stisla::media>
                </stisla::popover.body>
                <stisla::popover.footer>
                    <stisla::button mode="outline" tone="neutral" :block="true">View all notifications</stisla::button>
                </stisla::popover.footer>
            </stisla::popover>
        </div>
    </section>

    {{-- 8. Imperative --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. Imperative</h2>
            <p class="text-sm text-gray-500">Programmatic open via <code>Stisla.Popover.getOrCreate(el).open()</code>.</p>
        </div>

        <div class="flex flex-wrap items-center justify-center gap-3 pt-2 pb-40">
            <stisla::button tone="neutral" data-demo-popover-open="pop-imperative">Open via JS</stisla::button>
            <stisla::popover.trigger mode="outline" tone="neutral" for="pop-imperative">Anchor</stisla::popover.trigger>

            <stisla::popover id="pop-imperative" placement="bottom">
                <stisla::popover.title>Programmatic</stisla::popover.title>
                <stisla::popover.body as="p">Opened by a script, anchored to the marked trigger.</stisla::popover.body>
            </stisla::popover>

            <script>
                document.addEventListener('click', function (e) {
                    var openBtn = e.target.closest('[data-demo-popover-open]');
                    if (!openBtn || !window.Stisla) return;
                    var el = document.getElementById(openBtn.getAttribute('data-demo-popover-open'));
                    if (!el) return;
                    var inst = window.Stisla.get(el) || new window.Stisla.Popover(el);
                    inst.open();
                    e.stopImmediatePropagation();
                });
            </script>
        </div>
    </section>

    {{-- 9. Events --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">9. Events</h2>
            <p class="text-sm text-gray-500">Listening to <code>stisla:popover:opening</code>, <code>opened</code>, <code>closing</code>, and <code>closed</code> events.</p>
        </div>

        <div class="flex flex-col gap-3 max-w-md">
            <stisla::popover.trigger tone="primary" for="pop-event-demo">Open Event Popover</stisla::popover.trigger>

            <stisla::popover id="pop-event-demo" placement="bottom">
                <stisla::popover.close />
                <stisla::popover.title>Event Listener Demo</stisla::popover.title>
                <stisla::popover.body as="p">Dismiss this popover to observe event logs below.</stisla::popover.body>
            </stisla::popover>

            <pre id="popover-event-log" class="p-3 bg-slate-900 text-slate-100 rounded text-xs">Listening for stisla:popover events…</pre>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var pop = document.getElementById('pop-event-demo');
                var log = document.getElementById('popover-event-log');
                if (!pop || !log) return;
                ['opening', 'opened', 'closing', 'closed'].forEach(function (evt) {
                    pop.addEventListener('stisla:popover:' + evt, function () {
                        log.textContent = 'Event triggered: stisla:popover:' + evt;
                    });
                });
            });
        </script>
    </section>

    {{-- 10. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">10. Customization</h2>
            <p class="text-sm text-gray-500">Retuning popover background and radius via <code>:vars</code>.</p>
        </div>

        <div class="flex justify-center pt-2 pb-40">
            <stisla::popover.trigger mode="outline" tone="neutral" for="pop-custom">Custom Styled Popover</stisla::popover.trigger>

            <stisla::popover id="pop-custom" placement="bottom" :vars="['bg' => 'oklch(0.96 0.02 260)', 'radius' => '1rem']">
                <stisla::popover.title>Custom Retuned Panel</stisla::popover.title>
                <stisla::popover.body as="p">This popover uses custom background tint and corner radius via <code>:vars</code>.</stisla::popover.body>
            </stisla::popover>
        </div>
    </section>
</div>
