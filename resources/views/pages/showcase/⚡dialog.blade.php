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
            <p class="text-sm text-gray-500">A centered modal over a frosted backdrop that dims the page.</p>
        </div>

        <stisla::dialog.trigger tone="primary" for="dlg-basic">Invite a teammate</stisla::dialog.trigger>

        <stisla::dialog id="dlg-basic" aria-labelledby="dlg-basic-label">
            <stisla::dialog.backdrop />
            <stisla::dialog.panel>
                <stisla::dialog.content>
                    <stisla::dialog.close />
                    <stisla::dialog.header>
                        <stisla::dialog.title id="dlg-basic-label">Invite a teammate</stisla::dialog.title>
                    </stisla::dialog.header>
                    <stisla::dialog.body>
                        <p class="mt-0 text-muted-foreground">Send a link by email. The invite expires in seven days.</p>
                        <stisla::field label="Email" for="dlg-basic-email">
                            <stisla::input type="email" id="dlg-basic-email" placeholder="name@example.com" autocomplete="email" autofocus />
                        </stisla::field>
                    </stisla::dialog.body>
                    <stisla::dialog.footer>
                        <stisla::button mode="ghost" tone="neutral" data-stisla-dialog-dismiss>Cancel</stisla::button>
                        <stisla::button tone="primary" data-stisla-dialog-dismiss>Send invite</stisla::button>
                    </stisla::dialog.footer>
                </stisla::dialog.content>
            </stisla::dialog.panel>
        </stisla::dialog>
    </section>

    {{-- 2. Keyboard --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Keyboard</h2>
            <p class="text-sm text-gray-500">Focus is trapped inside the dialog while open. <code>Tab</code> / <code>Shift+Tab</code> cycle focus, and <code>Escape</code> dismisses it.</p>
        </div>

        <stisla::dialog.trigger mode="outline" tone="neutral" for="dlg-keyboard">Keyboard Focus Demo</stisla::dialog.trigger>

        <stisla::dialog id="dlg-keyboard">
            <stisla::dialog.backdrop />
            <stisla::dialog.panel>
                <stisla::dialog.content>
                    <stisla::dialog.close />
                    <stisla::dialog.header>
                        <stisla::dialog.title>Keyboard Navigation</stisla::dialog.title>
                    </stisla::dialog.header>
                    <stisla::dialog.body>
                        <p class="text-muted-foreground">Focus lands on the autofocus element or close chip on open, and returns to the trigger on close.</p>
                    </stisla::dialog.body>
                    <stisla::dialog.footer>
                        <stisla::button tone="primary" data-stisla-dialog-dismiss>Understood</stisla::button>
                    </stisla::dialog.footer>
                </stisla::dialog.content>
            </stisla::dialog.panel>
        </stisla::dialog>
    </section>

    {{-- 3. Scrollable body --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Scrollable body</h2>
            <p class="text-sm text-gray-500">Add <code>:scrollable="true"</code> on the panel so long body content scrolls while header and footer stay pinned.</p>
        </div>

        <stisla::dialog.trigger tone="neutral" for="dlg-scroll">Review terms</stisla::dialog.trigger>

        <stisla::dialog id="dlg-scroll">
            <stisla::dialog.backdrop />
            <stisla::dialog.panel :scrollable="true">
                <stisla::dialog.content>
                    <stisla::dialog.close />
                    <stisla::dialog.header>
                        <stisla::dialog.title>Terms of service</stisla::dialog.title>
                    </stisla::dialog.header>
                    <stisla::dialog.body>
                        <p class="mt-0 text-muted-foreground">Please review the terms before continuing.</p>
                        <p class="text-muted-foreground">Membership grants a non-exclusive licence to access the service for personal or business use, subject to the limits described in your plan.</p>
                        <p class="text-muted-foreground">You are responsible for activity under your account and for keeping your credentials secure.</p>
                        <p class="text-muted-foreground">We may update these terms from time to time; continued use after a change constitutes acceptance.</p>
                        <p class="text-muted-foreground">Either party may end the agreement at any time. On termination your data stays available for export for thirty days.</p>
                        <p class="mb-0 text-muted-foreground">Questions about these terms can be sent to support at any time.</p>
                    </stisla::dialog.body>
                    <stisla::dialog.footer>
                        <stisla::button mode="ghost" tone="neutral" data-stisla-dialog-dismiss>Decline</stisla::button>
                        <stisla::button tone="primary" data-stisla-dialog-dismiss>Accept</stisla::button>
                    </stisla::dialog.footer>
                </stisla::dialog.content>
            </stisla::dialog.panel>
        </stisla::dialog>
    </section>

    {{-- 4. Fullscreen --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Fullscreen</h2>
            <p class="text-sm text-gray-500"><code>size="fullscreen"</code> takes the whole viewport for immersive flows.</p>
        </div>

        <stisla::dialog.trigger tone="neutral" for="dlg-full">Compose</stisla::dialog.trigger>

        <stisla::dialog id="dlg-full" size="fullscreen">
            <stisla::dialog.backdrop />
            <stisla::dialog.panel>
                <stisla::dialog.content>
                    <stisla::dialog.close />
                    <stisla::dialog.header>
                        <stisla::dialog.title>Compose</stisla::dialog.title>
                    </stisla::dialog.header>
                    <stisla::dialog.body>
                        <p class="m-0 text-muted-foreground">A fullscreen surface for focused, long-form tasks such as composing or editing.</p>
                    </stisla::dialog.body>
                    <stisla::dialog.footer>
                        <stisla::button mode="ghost" tone="neutral" data-stisla-dialog-dismiss>Discard</stisla::button>
                        <stisla::button tone="primary" data-stisla-dialog-dismiss>Save</stisla::button>
                    </stisla::dialog.footer>
                </stisla::dialog.content>
            </stisla::dialog.panel>
        </stisla::dialog>
    </section>

    {{-- 5. Sizes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Sizes</h2>
            <p class="text-sm text-gray-500">Panel widths: <code>sm</code>, default, <code>lg</code>, <code>xl</code>, and <code>almost-fullscreen</code>.</p>
        </div>

        <div class="flex flex-wrap items-center gap-3">
            <stisla::dialog.trigger mode="outline" tone="neutral" for="dlg-sm">Small</stisla::dialog.trigger>
            <stisla::dialog.trigger mode="outline" tone="neutral" for="dlg-default">Default</stisla::dialog.trigger>
            <stisla::dialog.trigger mode="outline" tone="neutral" for="dlg-lg">Large</stisla::dialog.trigger>
            <stisla::dialog.trigger mode="outline" tone="neutral" for="dlg-xl">Extra large</stisla::dialog.trigger>
            <stisla::dialog.trigger mode="outline" tone="neutral" for="dlg-afs">Almost fullscreen</stisla::dialog.trigger>
        </div>

        <stisla::dialog id="dlg-sm" size="sm">
            <stisla::dialog.backdrop />
            <stisla::dialog.panel>
                <stisla::dialog.content>
                    <stisla::dialog.close />
                    <stisla::dialog.header><stisla::dialog.title>Small</stisla::dialog.title></stisla::dialog.header>
                    <stisla::dialog.body><p class="m-0 text-muted-foreground">A narrow panel for a short prompt.</p></stisla::dialog.body>
                    <stisla::dialog.footer><stisla::button mode="ghost" tone="neutral" data-stisla-dialog-dismiss>Close</stisla::button></stisla::dialog.footer>
                </stisla::dialog.content>
            </stisla::dialog.panel>
        </stisla::dialog>

        <stisla::dialog id="dlg-default">
            <stisla::dialog.backdrop />
            <stisla::dialog.panel>
                <stisla::dialog.content>
                    <stisla::dialog.close />
                    <stisla::dialog.header><stisla::dialog.title>Default</stisla::dialog.title></stisla::dialog.header>
                    <stisla::dialog.body><p class="m-0 text-muted-foreground">The default width sits in the middle of the scale.</p></stisla::dialog.body>
                    <stisla::dialog.footer><stisla::button mode="ghost" tone="neutral" data-stisla-dialog-dismiss>Close</stisla::button></stisla::dialog.footer>
                </stisla::dialog.content>
            </stisla::dialog.panel>
        </stisla::dialog>

        <stisla::dialog id="dlg-lg" size="lg">
            <stisla::dialog.backdrop />
            <stisla::dialog.panel>
                <stisla::dialog.content>
                    <stisla::dialog.close />
                    <stisla::dialog.header><stisla::dialog.title>Large</stisla::dialog.title></stisla::dialog.header>
                    <stisla::dialog.body><p class="m-0 text-muted-foreground">A wider panel for forms or richer content.</p></stisla::dialog.body>
                    <stisla::dialog.footer><stisla::button mode="ghost" tone="neutral" data-stisla-dialog-dismiss>Close</stisla::button></stisla::dialog.footer>
                </stisla::dialog.content>
            </stisla::dialog.panel>
        </stisla::dialog>

        <stisla::dialog id="dlg-xl" size="xl">
            <stisla::dialog.backdrop />
            <stisla::dialog.panel>
                <stisla::dialog.content>
                    <stisla::dialog.close />
                    <stisla::dialog.header><stisla::dialog.title>Extra large</stisla::dialog.title></stisla::dialog.header>
                    <stisla::dialog.body><p class="m-0 text-muted-foreground">The widest fixed size, for dense layouts.</p></stisla::dialog.body>
                    <stisla::dialog.footer><stisla::button mode="ghost" tone="neutral" data-stisla-dialog-dismiss>Close</stisla::button></stisla::dialog.footer>
                </stisla::dialog.content>
            </stisla::dialog.panel>
        </stisla::dialog>

        <stisla::dialog id="dlg-afs" size="almost-fullscreen">
            <stisla::dialog.backdrop />
            <stisla::dialog.panel>
                <stisla::dialog.content>
                    <stisla::dialog.close />
                    <stisla::dialog.header><stisla::dialog.title>Almost fullscreen</stisla::dialog.title></stisla::dialog.header>
                    <stisla::dialog.body><p class="m-0 text-muted-foreground">Fills the viewport but keeps a strip of page around it.</p></stisla::dialog.body>
                    <stisla::dialog.footer><stisla::button mode="ghost" tone="neutral" data-stisla-dialog-dismiss>Close</stisla::button></stisla::dialog.footer>
                </stisla::dialog.content>
            </stisla::dialog.panel>
        </stisla::dialog>
    </section>

    {{-- 6. Positioning --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Positioning</h2>
            <p class="text-sm text-gray-500">Panel vertical alignment: <code>position="top"</code>, default center, or <code>position="bottom"</code>.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::dialog.trigger mode="outline" tone="neutral" for="dlg-top">Top</stisla::dialog.trigger>
            <stisla::dialog.trigger mode="outline" tone="neutral" for="dlg-center">Center</stisla::dialog.trigger>
            <stisla::dialog.trigger mode="outline" tone="neutral" for="dlg-bottom">Bottom</stisla::dialog.trigger>
        </div>

        <stisla::dialog id="dlg-top">
            <stisla::dialog.backdrop />
            <stisla::dialog.panel position="top">
                <stisla::dialog.content>
                    <stisla::dialog.close />
                    <stisla::dialog.header><stisla::dialog.title>Pinned to top</stisla::dialog.title></stisla::dialog.header>
                    <stisla::dialog.body><p class="m-0 text-muted-foreground">This panel drops in from the top edge.</p></stisla::dialog.body>
                    <stisla::dialog.footer><stisla::button mode="ghost" tone="neutral" data-stisla-dialog-dismiss>Close</stisla::button></stisla::dialog.footer>
                </stisla::dialog.content>
            </stisla::dialog.panel>
        </stisla::dialog>

        <stisla::dialog id="dlg-center">
            <stisla::dialog.backdrop />
            <stisla::dialog.panel>
                <stisla::dialog.content>
                    <stisla::dialog.close />
                    <stisla::dialog.header><stisla::dialog.title>Centered</stisla::dialog.title></stisla::dialog.header>
                    <stisla::dialog.body><p class="m-0 text-muted-foreground">The default vertical position.</p></stisla::dialog.body>
                    <stisla::dialog.footer><stisla::button mode="ghost" tone="neutral" data-stisla-dialog-dismiss>Close</stisla::button></stisla::dialog.footer>
                </stisla::dialog.content>
            </stisla::dialog.panel>
        </stisla::dialog>

        <stisla::dialog id="dlg-bottom">
            <stisla::dialog.backdrop />
            <stisla::dialog.panel position="bottom">
                <stisla::dialog.content>
                    <stisla::dialog.close />
                    <stisla::dialog.header><stisla::dialog.title>Anchored to bottom</stisla::dialog.title></stisla::dialog.header>
                    <stisla::dialog.body><p class="m-0 text-muted-foreground">This panel sits against the lower edge.</p></stisla::dialog.body>
                    <stisla::dialog.footer><stisla::button mode="ghost" tone="neutral" data-stisla-dialog-dismiss>Close</stisla::button></stisla::dialog.footer>
                </stisla::dialog.content>
            </stisla::dialog.panel>
        </stisla::dialog>
    </section>

    {{-- 7. Static backdrop --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Static backdrop</h2>
            <p class="text-sm text-gray-500">Backdrop click shakes panel instead of dismissing when <code>backdrop="static"</code>.</p>
        </div>

        <stisla::dialog.trigger tone="primary" for="dlg-static">Begin setup</stisla::dialog.trigger>

        <stisla::dialog id="dlg-static" backdrop="static" :keyboard="false">
            <stisla::dialog.backdrop />
            <stisla::dialog.panel>
                <stisla::dialog.content>
                    <stisla::dialog.header><stisla::dialog.title>Finish setup</stisla::dialog.title></stisla::dialog.header>
                    <stisla::dialog.body><p class="m-0 text-muted-foreground">Clicking outside won't dismiss this. Choose an action to continue.</p></stisla::dialog.body>
                    <stisla::dialog.footer>
                        <stisla::button mode="ghost" tone="neutral" data-stisla-dialog-dismiss>Skip</stisla::button>
                        <stisla::button tone="primary" data-stisla-dialog-dismiss>Done</stisla::button>
                    </stisla::dialog.footer>
                </stisla::dialog.content>
            </stisla::dialog.panel>
        </stisla::dialog>
    </section>

    {{-- 8. Confirmation --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. Confirmation</h2>
            <p class="text-sm text-gray-500">Alert-dialog pattern for destructive actions using <code>role="alertdialog"</code>.</p>
        </div>

        <stisla::dialog.trigger mode="outline" tone="danger" for="dlg-confirm">Delete workspace</stisla::dialog.trigger>

        <stisla::dialog id="dlg-confirm" size="sm" role="alertdialog" aria-labelledby="dlg-confirm-label" aria-describedby="dlg-confirm-desc">
            <stisla::dialog.backdrop />
            <stisla::dialog.panel>
                <stisla::dialog.content>
                    <stisla::dialog.close />
                    <stisla::dialog.body class="text-center pt-6">
                        <stisla::icon-box tone="danger" shape="circle" icon="trash-2" class="mb-3" :vars="['size' => '3rem', 'icon-size' => '1.25rem']" />
                        <stisla::dialog.title as="h3" class="m-0 mb-1" id="dlg-confirm-label">Delete this workspace?</stisla::dialog.title>
                        <p class="text-muted-foreground m-0" id="dlg-confirm-desc">This removes every project, file, and member. The action can't be undone.</p>
                    </stisla::dialog.body>
                    <stisla::dialog.footer class="justify-center">
                        <stisla::button mode="ghost" tone="neutral" data-stisla-dialog-dismiss>Cancel</stisla::button>
                        <stisla::button tone="danger" data-stisla-dialog-dismiss>Delete</stisla::button>
                    </stisla::dialog.footer>
                </stisla::dialog.content>
            </stisla::dialog.panel>
        </stisla::dialog>
    </section>

    {{-- 9. Success --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">9. Success</h2>
            <p class="text-sm text-gray-500">End-of-flow state with success icon, centered message, and block action button.</p>
        </div>

        <stisla::button tone="success" data-stisla-dialog-trigger="dlg-success">Submit order</stisla::button>

        <stisla::dialog id="dlg-success" size="sm" aria-labelledby="dlg-success-label">
            <stisla::dialog.backdrop />
            <stisla::dialog.panel>
                <stisla::dialog.content>
                    <stisla::dialog.close />
                    <stisla::dialog.body class="text-center pt-6">
                        <stisla::icon-box tone="success" shape="circle" icon="check" class="mb-3" :vars="['size' => '3.5rem', 'icon-size' => '1.5rem']" />
                        <stisla::dialog.title as="h3" class="m-0 mb-1" id="dlg-success-label">Order placed</stisla::dialog.title>
                        <p class="text-muted-foreground m-0">We've emailed the receipt and a tracking link. Delivery lands in two to three business days.</p>
                    </stisla::dialog.body>
                    <stisla::dialog.footer>
                        <stisla::button tone="success" :block="true" data-stisla-dialog-dismiss>View order</stisla::button>
                    </stisla::dialog.footer>
                </stisla::dialog.content>
            </stisla::dialog.panel>
        </stisla::dialog>
    </section>

    {{-- 10. Media hero --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">10. Media hero</h2>
            <p class="text-sm text-gray-500">Leading row media content with floating close chip overlay.</p>
        </div>

        <stisla::dialog.trigger tone="primary" for="dlg-hero">What's new</stisla::dialog.trigger>

        <stisla::dialog id="dlg-hero" aria-labelledby="dlg-hero-label">
            <stisla::dialog.backdrop />
            <stisla::dialog.panel>
                <stisla::dialog.content>
                    <stisla::dialog.close />
                    <img class="block w-full" src="https://picsum.photos/seed/stisla-autumn/1200/520" alt="Autumn release" />
                    <stisla::dialog.body>
                        <stisla::dialog.title as="h3" class="m-0 mb-1" id="dlg-hero-label">Autumn release</stisla::dialog.title>
                        <p class="text-muted-foreground m-0">A round-up of what's new this season, with notes on what's still in flight.</p>
                    </stisla::dialog.body>
                </stisla::dialog.content>
            </stisla::dialog.panel>
        </stisla::dialog>
    </section>

    {{-- 11. Lightbox --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">11. Lightbox</h2>
            <p class="text-sm text-gray-500">Overriding surface variables to turn dialog into a media lightbox frame.</p>
        </div>

        <a class="inline-block cursor-zoom-in" href="#" data-stisla-dialog-trigger="dlg-lightbox">
            <img src="https://picsum.photos/seed/stisla-shot/480/320" alt="Open image" width="240" height="160" class="rounded-md object-cover" />
        </a>

        <stisla::dialog id="dlg-lightbox" size="xl" :vars="['bg' => 'transparent', 'border-color' => 'transparent', 'shadow' => 'none']">
            <stisla::dialog.backdrop />
            <stisla::dialog.panel>
                <stisla::dialog.content>
                    <stisla::dialog.close />
                    <img class="block w-full max-h-[calc(100dvh-5rem)] object-contain rounded-md" src="https://picsum.photos/seed/stisla-shot/1600/1066" alt="Full view" />
                </stisla::dialog.content>
            </stisla::dialog.panel>
        </stisla::dialog>
    </section>

    {{-- 12. Events --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">12. Events</h2>
            <p class="text-sm text-gray-500">Listening to <code>stisla:dialog:opening</code>, <code>opened</code>, <code>closing</code>, and <code>closed</code> events.</p>
        </div>

        <div class="flex flex-col gap-3 max-w-md">
            <stisla::dialog.trigger tone="primary" for="dlg-event-demo">Open Event Dialog</stisla::dialog.trigger>
            <pre id="dialog-event-log" class="p-3 bg-slate-900 text-slate-100 rounded text-xs">Listening for stisla:dialog events…</pre>
        </div>

        <stisla::dialog id="dlg-event-demo">
            <stisla::dialog.backdrop />
            <stisla::dialog.panel>
                <stisla::dialog.content>
                    <stisla::dialog.close />
                    <stisla::dialog.header><stisla::dialog.title>Event Listener Demo</stisla::dialog.title></stisla::dialog.header>
                    <stisla::dialog.body><p class="m-0 text-muted-foreground">Close this dialog to observe event logs updating below.</p></stisla::dialog.body>
                    <stisla::dialog.footer><stisla::button tone="primary" data-stisla-dialog-dismiss>Dismiss</stisla::button></stisla::dialog.footer>
                </stisla::dialog.content>
            </stisla::dialog.panel>
        </stisla::dialog>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var dlg = document.getElementById('dlg-event-demo');
                var log = document.getElementById('dialog-event-log');
                if (!dlg || !log) return;
                ['opening', 'opened', 'closing', 'closed'].forEach(function (evt) {
                    dlg.addEventListener('stisla:dialog:' + evt, function () {
                        log.textContent = 'Event triggered: stisla:dialog:' + evt;
                    });
                });
            });
        </script>
    </section>

    {{-- 13. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">13. Customization</h2>
            <p class="text-sm text-gray-500">Retuning dialog radius, background, and width using <code>:vars</code>.</p>
        </div>

        <stisla::dialog.trigger mode="outline" tone="neutral" for="dlg-custom">Custom Styled Dialog</stisla::dialog.trigger>

        <stisla::dialog id="dlg-custom" :vars="['radius' => '1.5rem', 'bg' => 'oklch(0.96 0.02 260)']">
            <stisla::dialog.backdrop />
            <stisla::dialog.panel>
                <stisla::dialog.content>
                    <stisla::dialog.close />
                    <stisla::dialog.header><stisla::dialog.title>Custom Retuned Surface</stisla::dialog.title></stisla::dialog.header>
                    <stisla::dialog.body><p class="m-0 text-muted-foreground">This dialog uses custom corner radius and tinted background via <code>:vars</code>.</p></stisla::dialog.body>
                    <stisla::dialog.footer><stisla::button tone="primary" data-stisla-dialog-dismiss>Great</stisla::button></stisla::dialog.footer>
                </stisla::dialog.content>
            </stisla::dialog.panel>
        </stisla::dialog>
    </section>
</div>
