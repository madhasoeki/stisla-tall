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
            <p class="text-sm text-gray-500">An edge-anchored panel for side drawers, filters, and quick captures.</p>
        </div>

        <stisla::drawer.trigger tone="primary" for="drawerBasic">New task</stisla::drawer.trigger>

        <stisla::drawer id="drawerBasic" aria-labelledby="drawerBasicLabel">
            <stisla::drawer.backdrop />
            <stisla::drawer.content>
                <stisla::drawer.header>
                    <stisla::drawer.title id="drawerBasicLabel">New task</stisla::drawer.title>
                    <stisla::drawer.close />
                </stisla::drawer.header>
                <stisla::drawer.body>
                    <stisla::field label="Title" for="taskTitle" class="mb-4">
                        <stisla::input id="taskTitle" placeholder="Write the launch announcement" />
                    </stisla::field>
                    <stisla::field label="Description" for="taskDesc" class="mb-4">
                        <stisla::textarea id="taskDesc" rows="4" placeholder="Anything the assignee should know before they start." />
                    </stisla::field>
                    <div class="grid grid-cols-2 gap-3">
                        <stisla::field label="Due" for="taskDue">
                            <stisla::input type="date" id="taskDue" />
                        </stisla::field>
                        <stisla::field label="Priority" for="taskPriority">
                            <stisla::select id="taskPriority">
                                <option>Low</option>
                                <option selected>Medium</option>
                                <option>High</option>
                            </stisla::select>
                        </stisla::field>
                    </div>
                </stisla::drawer.body>
                <stisla::drawer.footer>
                    <stisla::button mode="ghost" tone="neutral" data-stisla-drawer-dismiss>Cancel</stisla::button>
                    <stisla::button tone="primary" data-stisla-drawer-dismiss>Create task</stisla::button>
                </stisla::drawer.footer>
            </stisla::drawer.content>
        </stisla::drawer>
    </section>

    {{-- 2. Keyboard --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Keyboard</h2>
            <p class="text-sm text-gray-500">Focus is trapped inside the drawer while open. <code>Tab</code> / <code>Shift+Tab</code> cycle focus, and <code>Escape</code> dismisses it.</p>
        </div>

        <stisla::drawer.trigger mode="outline" tone="neutral" for="drawerKeyboard">Keyboard Demo</stisla::drawer.trigger>

        <stisla::drawer id="drawerKeyboard">
            <stisla::drawer.backdrop />
            <stisla::drawer.content>
                <stisla::drawer.header>
                    <stisla::drawer.title>Keyboard Navigation</stisla::drawer.title>
                    <stisla::drawer.close />
                </stisla::drawer.header>
                <stisla::drawer.body>
                    <p class="text-muted-foreground">Focus lands on the autofocus element or close chip on open, and returns to the trigger on close.</p>
                </stisla::drawer.body>
                <stisla::drawer.footer>
                    <stisla::button tone="primary" data-stisla-drawer-dismiss>Understood</stisla::button>
                </stisla::drawer.footer>
            </stisla::drawer.content>
        </stisla::drawer>
    </section>

    {{-- 3. Placements --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Placements</h2>
            <p class="text-sm text-gray-500">Edge anchoring modifiers: <code>placement="start"</code> (left), <code>placement="end"</code> (right), <code>placement="top"</code> (above), and <code>placement="bottom"</code> (below).</p>
        </div>

        <div class="flex flex-wrap items-center gap-3">
            <stisla::drawer.trigger mode="outline" tone="neutral" for="drawerStart">Start</stisla::drawer.trigger>
            <stisla::drawer.trigger mode="outline" tone="neutral" for="drawerEnd">End</stisla::drawer.trigger>
            <stisla::drawer.trigger mode="outline" tone="neutral" for="drawerTop">Top</stisla::drawer.trigger>
            <stisla::drawer.trigger mode="outline" tone="neutral" for="drawerBottom">Bottom</stisla::drawer.trigger>
        </div>

        <stisla::drawer id="drawerStart" placement="start">
            <stisla::drawer.backdrop />
            <stisla::drawer.content>
                <stisla::drawer.header>
                    <stisla::drawer.title>Account</stisla::drawer.title>
                    <stisla::drawer.close />
                </stisla::drawer.header>
                <stisla::drawer.body class="p-0">
                    <stisla::list-group :seamless="true">
                        <stisla::list-group.item>
                            <span class="media__figure"><stisla::icon-box tone="primary" icon="user" /></span>
                            <div class="media__content"><div class="media__title">Profile</div><div class="media__description">Name, avatar, bio</div></div>
                            <div class="media__action"><i data-lucide="chevron-right" width="18" class="text-muted-foreground"></i></div>
                        </stisla::list-group.item>
                        <stisla::list-group.item>
                            <span class="media__figure"><stisla::icon-box tone="info" icon="bell" /></span>
                            <div class="media__content"><div class="media__title">Notifications</div><div class="media__description">Email, push, digest</div></div>
                            <div class="media__action"><i data-lucide="chevron-right" width="18" class="text-muted-foreground"></i></div>
                        </stisla::list-group.item>
                    </stisla::list-group>
                </stisla::drawer.body>
            </stisla::drawer.content>
        </stisla::drawer>

        <stisla::drawer id="drawerEnd" placement="end">
            <stisla::drawer.backdrop />
            <stisla::drawer.content>
                <stisla::drawer.header>
                    <stisla::drawer.title>Notifications</stisla::drawer.title>
                    <stisla::drawer.close />
                </stisla::drawer.header>
                <stisla::drawer.body>
                    <div class="flex flex-wrap md:flex-nowrap gap-3 mb-4 pb-4 border-b border-[var(--color-border)]">
                        <span class="media__figure"><stisla::icon-box tone="success" shape="circle" icon="check" class="shrink-0" /></span>
                        <div>
                            <div class="font-medium">Deploy finished</div>
                            <p class="text-muted-foreground m-0 mb-1 text-sm">Build #2147 shipped to production in 4m 12s.</p>
                            <span class="text-sm text-muted-foreground">2 minutes ago</span>
                        </div>
                    </div>
                </stisla::drawer.body>
            </stisla::drawer.content>
        </stisla::drawer>

        <stisla::drawer id="drawerTop" placement="top" :vars="['height' => '16rem']">
            <stisla::drawer.backdrop />
            <stisla::drawer.content>
                <stisla::drawer.header>
                    <stisla::drawer.title>What's new in June</stisla::drawer.title>
                    <stisla::drawer.close />
                </stisla::drawer.header>
                <stisla::drawer.body>
                    <div class="grid md:grid-cols-3 gap-3">
                        <div>
                            <stisla::badge tone="primary" class="mb-2">New</stisla::badge>
                            <div class="font-medium mb-1">Bulk reassign</div>
                            <p class="text-muted-foreground m-0 text-sm">Move many tasks to a new owner in one go from the board view.</p>
                        </div>
                        <div>
                            <stisla::badge tone="success" class="mb-2">Improved</stisla::badge>
                            <div class="font-medium mb-1">Faster search</div>
                            <p class="text-muted-foreground m-0 text-sm">Workspace search now returns results in under 100ms for most queries.</p>
                        </div>
                        <div>
                            <stisla::badge tone="warning" class="mb-2">Fixed</stisla::badge>
                            <div class="font-medium mb-1">Recurring task DST</div>
                            <p class="text-muted-foreground m-0 text-sm">Recurring tasks no longer drift by an hour around daylight saving.</p>
                        </div>
                    </div>
                </stisla::drawer.body>
            </stisla::drawer.content>
        </stisla::drawer>

        <stisla::drawer id="drawerBottom" placement="bottom" :vars="['height' => '14rem']">
            <stisla::drawer.backdrop />
            <stisla::drawer.content>
                <stisla::drawer.header>
                    <div class="flex flex-wrap mx-auto w-full items-center max-w-[30rem]">
                        <stisla::drawer.title>Share this report</stisla::drawer.title>
                        <stisla::drawer.close />
                    </div>
                </stisla::drawer.header>
                <stisla::drawer.body>
                    <div class="mx-auto w-full max-w-[30rem]">
                        <div class="input-group mb-4">
                            <stisla::input value="https://app.example.com/r/q3-revenue" readonly />
                            <stisla::button mode="outline" tone="neutral">Copy link</stisla::button>
                        </div>
                    </div>
                </stisla::drawer.body>
            </stisla::drawer.content>
        </stisla::drawer>
    </section>

    {{-- 4. Floating --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Floating</h2>
            <p class="text-sm text-gray-500">Detach panel from viewport edge using <code>:floating="true"</code>.</p>
        </div>

        <div class="flex flex-wrap items-center gap-3">
            <stisla::drawer.trigger mode="outline" tone="neutral" for="drawerFloatStart">Start</stisla::drawer.trigger>
            <stisla::drawer.trigger mode="outline" tone="neutral" for="drawerFloatEnd">End</stisla::drawer.trigger>
            <stisla::drawer.trigger mode="outline" tone="neutral" for="drawerFloatBottom">Bottom</stisla::drawer.trigger>
        </div>

        <stisla::drawer id="drawerFloatStart" placement="start" :floating="true">
            <stisla::drawer.backdrop />
            <stisla::drawer.content>
                <stisla::drawer.header>
                    <stisla::drawer.title>Invite people</stisla::drawer.title>
                    <stisla::drawer.close />
                </stisla::drawer.header>
                <stisla::drawer.body>
                    <p class="text-muted-foreground">Send an invite and they'll join the workspace right away.</p>
                </stisla::drawer.body>
                <stisla::drawer.footer>
                    <stisla::button mode="ghost" tone="neutral" data-stisla-drawer-dismiss>Cancel</stisla::button>
                    <stisla::button tone="primary" data-stisla-drawer-dismiss>Send invite</stisla::button>
                </stisla::drawer.footer>
            </stisla::drawer.content>
        </stisla::drawer>

        <stisla::drawer id="drawerFloatEnd" placement="end" :floating="true">
            <stisla::drawer.backdrop />
            <stisla::drawer.content>
                <stisla::drawer.header>
                    <stisla::drawer.title>Help &amp; resources</stisla::drawer.title>
                    <stisla::drawer.close />
                </stisla::drawer.header>
                <stisla::drawer.body class="p-0">
                    <stisla::list-group :seamless="true">
                        <stisla::list-group.item>
                            <span class="media__figure"><stisla::icon-box tone="primary" icon="book-open" /></span>
                            <div class="media__content"><div class="media__title">Documentation</div><div class="media__description">Guides and API reference</div></div>
                        </stisla::list-group.item>
                    </stisla::list-group>
                </stisla::drawer.body>
            </stisla::drawer.content>
        </stisla::drawer>

        <stisla::drawer id="drawerFloatBottom" placement="bottom" :floating="true" :vars="['height' => '14rem']">
            <stisla::drawer.backdrop />
            <stisla::drawer.content>
                <stisla::drawer.header>
                    <stisla::drawer.title>Cookie preferences</stisla::drawer.title>
                    <stisla::drawer.close />
                </stisla::drawer.header>
                <stisla::drawer.body>
                    <p class="text-muted-foreground m-0">We use cookies to keep you signed in, remember your preferences, and understand how the app is used.</p>
                </stisla::drawer.body>
                <stisla::drawer.footer>
                    <stisla::button mode="ghost" tone="neutral" data-stisla-drawer-dismiss>Reject all</stisla::button>
                    <stisla::button tone="primary" data-stisla-drawer-dismiss>Accept all</stisla::button>
                </stisla::drawer.footer>
            </stisla::drawer.content>
        </stisla::drawer>
    </section>

    {{-- 5. Sized --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Sized</h2>
            <p class="text-sm text-gray-500">Override <code>--drawer-width</code> or <code>--drawer-height</code> inline via <code>:vars</code>.</p>
        </div>

        <stisla::drawer.trigger tone="primary" for="drawerSized">Edit profile</stisla::drawer.trigger>

        <stisla::drawer id="drawerSized" :vars="['width' => '28rem']">
            <stisla::drawer.backdrop />
            <stisla::drawer.content>
                <stisla::drawer.header>
                    <stisla::drawer.title>Edit profile</stisla::drawer.title>
                    <stisla::drawer.close />
                </stisla::drawer.header>
                <stisla::drawer.body>
                    <div class="grid grid-cols-2 gap-3">
                        <stisla::field label="First name" for="profileFirst">
                            <stisla::input id="profileFirst" value="Nauval" />
                        </stisla::field>
                        <stisla::field label="Last name" for="profileLast">
                            <stisla::input id="profileLast" value="Azhar" />
                        </stisla::field>
                    </div>
                </stisla::drawer.body>
                <stisla::drawer.footer>
                    <stisla::button mode="ghost" tone="neutral" data-stisla-drawer-dismiss>Cancel</stisla::button>
                    <stisla::button tone="primary" data-stisla-drawer-dismiss>Save changes</stisla::button>
                </stisla::drawer.footer>
            </stisla::drawer.content>
        </stisla::drawer>
    </section>

    {{-- 6. Body scroll allowed --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Body scroll allowed</h2>
            <p class="text-sm text-gray-500">Set <code>:scroll="true"</code> to let the page keep scrolling while open.</p>
        </div>

        <stisla::drawer.trigger tone="primary" for="drawerActivity">Open activity</stisla::drawer.trigger>

        <stisla::drawer as="aside" id="drawerActivity" :scroll="true" :backdrop="false" aria-label="Activity">
            <stisla::drawer.backdrop />
            <stisla::drawer.content>
                <stisla::drawer.header>
                    <stisla::drawer.title>Activity</stisla::drawer.title>
                    <stisla::drawer.close />
                </stisla::drawer.header>
                <stisla::drawer.body>
                    <p class="text-muted-foreground m-0">Recent activities list.</p>
                </stisla::drawer.body>
            </stisla::drawer.content>
        </stisla::drawer>
    </section>

    {{-- 7. Static backdrop --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Static backdrop</h2>
            <p class="text-sm text-gray-500">Backdrop click shakes panel instead of closing when <code>backdrop="static"</code>.</p>
        </div>

        <stisla::drawer.trigger tone="primary" for="drawerSetup">Finish setup</stisla::drawer.trigger>

        <stisla::drawer id="drawerSetup" backdrop="static" :keyboard="false">
            <stisla::drawer.backdrop />
            <stisla::drawer.content>
                <stisla::drawer.header>
                    <stisla::drawer.title>Finish your profile</stisla::drawer.title>
                </stisla::drawer.header>
                <stisla::drawer.body>
                    <p class="text-muted-foreground">A few details so teammates know who they're working with.</p>
                </stisla::drawer.body>
                <stisla::drawer.footer>
                    <stisla::button tone="primary" :block="true" data-stisla-drawer-dismiss>Save and continue</stisla::button>
                </stisla::drawer.footer>
            </stisla::drawer.content>
        </stisla::drawer>
    </section>

    {{-- 8. No backdrop --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. No backdrop</h2>
            <p class="text-sm text-gray-500">Set <code>:backdrop="false"</code> to drop dim scrim entirely.</p>
        </div>

        <stisla::drawer.trigger mode="outline" tone="neutral" icon="filter" for="drawerFilters">Filters</stisla::drawer.trigger>

        <stisla::drawer as="aside" placement="start" id="drawerFilters" :backdrop="false" :scroll="true" aria-label="Filters">
            <stisla::drawer.backdrop />
            <stisla::drawer.content>
                <stisla::drawer.header>
                    <stisla::drawer.title>Filters</stisla::drawer.title>
                    <stisla::drawer.close />
                </stisla::drawer.header>
                <stisla::drawer.body>
                    <p class="text-muted-foreground m-0">Filter controls panel.</p>
                </stisla::drawer.body>
                <stisla::drawer.footer>
                    <stisla::button mode="ghost" tone="neutral" data-stisla-drawer-dismiss>Reset</stisla::button>
                    <stisla::button tone="primary" data-stisla-drawer-dismiss>Apply filters</stisla::button>
                </stisla::drawer.footer>
            </stisla::drawer.content>
        </stisla::drawer>
    </section>

    {{-- 9. Events --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">9. Events</h2>
            <p class="text-sm text-gray-500">Listening to <code>stisla:drawer:opening</code>, <code>opened</code>, <code>closing</code>, and <code>closed</code> events.</p>
        </div>

        <div class="flex flex-col gap-3 max-w-md">
            <stisla::drawer.trigger tone="primary" for="drawerEventDemo">Open Event Drawer</stisla::drawer.trigger>
            <pre id="drawer-event-log" class="p-3 bg-slate-900 text-slate-100 rounded text-xs">Listening for stisla:drawer events…</pre>
        </div>

        <stisla::drawer id="drawerEventDemo">
            <stisla::drawer.backdrop />
            <stisla::drawer.content>
                <stisla::drawer.header>
                    <stisla::drawer.title>Event Listener Demo</stisla::drawer.title>
                    <stisla::drawer.close />
                </stisla::drawer.header>
                <stisla::drawer.body>
                    <p class="m-0 text-muted-foreground">Close this drawer to observe event logs updating below.</p>
                </stisla::drawer.body>
                <stisla::drawer.footer>
                    <stisla::button tone="primary" data-stisla-drawer-dismiss>Dismiss</stisla::button>
                </stisla::drawer.footer>
            </stisla::drawer.content>
        </stisla::drawer>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var drw = document.getElementById('drawerEventDemo');
                var log = document.getElementById('drawer-event-log');
                if (!drw || !log) return;
                ['opening', 'opened', 'closing', 'closed'].forEach(function (evt) {
                    drw.addEventListener('stisla:drawer:' + evt, function () {
                        log.textContent = 'Event triggered: stisla:drawer:' + evt;
                    });
                });
            });
        </script>
    </section>

    {{-- 10. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">10. Customization</h2>
            <p class="text-sm text-gray-500">Retuning drawer panel background and width using <code>:vars</code>.</p>
        </div>

        <stisla::drawer.trigger mode="outline" tone="neutral" for="drawerCustom">Custom Styled Drawer</stisla::drawer.trigger>

        <stisla::drawer id="drawerCustom" :vars="['bg' => 'oklch(0.96 0.02 260)', 'width' => '25rem']">
            <stisla::drawer.backdrop />
            <stisla::drawer.content>
                <stisla::drawer.header>
                    <stisla::drawer.title>Custom Surface</stisla::drawer.title>
                    <stisla::drawer.close />
                </stisla::drawer.header>
                <stisla::drawer.body>
                    <p class="m-0 text-muted-foreground">This drawer uses custom background tint and width via <code>:vars</code>.</p>
                </stisla::drawer.body>
                <stisla::drawer.footer>
                    <stisla::button tone="primary" data-stisla-drawer-dismiss>Great</stisla::button>
                </stisla::drawer.footer>
            </stisla::drawer.content>
        </stisla::drawer>
    </section>
</div>
