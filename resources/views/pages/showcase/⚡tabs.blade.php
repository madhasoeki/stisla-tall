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
            <p class="text-sm text-gray-500">Active trigger rises out of the rail as a pill; only the active panel shows.</p>
        </div>

        <stisla::tabs :block="true">
            <stisla::tabs.list>
                <stisla::tabs.trigger state="active" value="overview">Overview</stisla::tabs.trigger>
                <stisla::tabs.trigger state="inactive" value="activity">Activity</stisla::tabs.trigger>
                <stisla::tabs.trigger state="inactive" value="settings">Settings</stisla::tabs.trigger>
            </stisla::tabs.list>
            <stisla::tabs.panel state="active" value="overview">
                <p>The overview pane gives you the big picture: at-a-glance metrics and recent changes.</p>
            </stisla::tabs.panel>
            <stisla::tabs.panel state="inactive" value="activity">
                <p>Activity log lists every recent event in reverse chronological order.</p>
            </stisla::tabs.panel>
            <stisla::tabs.panel state="inactive" value="settings">
                <p>Settings content lives here: name, preferences, integrations.</p>
            </stisla::tabs.panel>
        </stisla::tabs>
    </section>

    {{-- 2. Keyboard --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Keyboard</h2>
            <p class="text-sm text-gray-500">WAI-ARIA tabs pattern with roving <code>tabindex</code> and arrow-key navigation.</p>
        </div>

        <stisla::tabs :block="true">
            <stisla::tabs.list>
                <stisla::tabs.trigger state="active" value="tab1">First Tab</stisla::tabs.trigger>
                <stisla::tabs.trigger state="inactive" value="tab2">Second Tab</stisla::tabs.trigger>
                <stisla::tabs.trigger state="inactive" value="tab3">Third Tab</stisla::tabs.trigger>
            </stisla::tabs.list>
            <stisla::tabs.panel state="active" value="tab1">
                <p>Focus with Tab, navigate with Left/Right arrow keys.</p>
            </stisla::tabs.panel>
            <stisla::tabs.panel state="inactive" value="tab2">
                <p>Second panel focused and active.</p>
            </stisla::tabs.panel>
            <stisla::tabs.panel state="inactive" value="tab3">
                <p>Third panel focused and active.</p>
            </stisla::tabs.panel>
        </stisla::tabs>
    </section>

    {{-- 3. With icons --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. With icons</h2>
            <p class="text-sm text-gray-500">Drop an Lucide icon next to the trigger label.</p>
        </div>

        <stisla::tabs :block="true">
            <stisla::tabs.list>
                <stisla::tabs.trigger state="active" value="inbox" icon="inbox">Inbox</stisla::tabs.trigger>
                <stisla::tabs.trigger state="inactive" value="drafts" icon="file-text">Drafts</stisla::tabs.trigger>
                <stisla::tabs.trigger state="inactive" value="sent" icon="send">Sent</stisla::tabs.trigger>
            </stisla::tabs.list>
            <stisla::tabs.panel state="active" value="inbox">
                <p>3 unread messages.</p>
            </stisla::tabs.panel>
            <stisla::tabs.panel state="inactive" value="drafts">
                <p>1 draft saved.</p>
            </stisla::tabs.panel>
            <stisla::tabs.panel state="inactive" value="sent">
                <p>Last sent 2 hours ago.</p>
            </stisla::tabs.panel>
        </stisla::tabs>
    </section>

    {{-- 4. Vertical --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Vertical</h2>
            <p class="text-sm text-gray-500">Column rail layout using <code>:vertical="true"</code>.</p>
        </div>

        <stisla::tabs :vertical="true" :block="true">
            <stisla::tabs.list>
                <stisla::tabs.trigger state="active" value="account" icon="user">Account</stisla::tabs.trigger>
                <stisla::tabs.trigger state="inactive" value="billing" icon="credit-card">Billing</stisla::tabs.trigger>
                <stisla::tabs.trigger state="inactive" value="team" icon="users">Team</stisla::tabs.trigger>
            </stisla::tabs.list>
            <stisla::tabs.panel state="active" value="account">
                <p>Your account details and profile.</p>
            </stisla::tabs.panel>
            <stisla::tabs.panel state="inactive" value="billing">
                <p>Plan, invoices, and payment methods.</p>
            </stisla::tabs.panel>
            <stisla::tabs.panel state="inactive" value="team">
                <p>Members and their roles.</p>
            </stisla::tabs.panel>
        </stisla::tabs>
    </section>

    {{-- 5. Disabled trigger --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Disabled trigger</h2>
            <p class="text-sm text-gray-500">Disabled triggers using <code>:disabled="true"</code>.</p>
        </div>

        <stisla::tabs :block="true">
            <stisla::tabs.list>
                <stisla::tabs.trigger state="active" value="general">General</stisla::tabs.trigger>
                <stisla::tabs.trigger state="inactive" value="advanced">Advanced</stisla::tabs.trigger>
                <stisla::tabs.trigger state="inactive" value="beta" :disabled="true">Beta</stisla::tabs.trigger>
            </stisla::tabs.list>
            <stisla::tabs.panel state="active" value="general">
                <p>General settings.</p>
            </stisla::tabs.panel>
            <stisla::tabs.panel state="inactive" value="advanced">
                <p>Advanced settings.</p>
            </stisla::tabs.panel>
            <stisla::tabs.panel state="inactive" value="beta">
                <p>Beta features (locked).</p>
            </stisla::tabs.panel>
        </stisla::tabs>
    </section>

    {{-- 6. Manual activation --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Manual activation</h2>
            <p class="text-sm text-gray-500">Decouple focus from selection using <code>activation-mode="manual"</code>.</p>
        </div>

        <stisla::tabs :block="true" activation-mode="manual">
            <stisla::tabs.list>
                <stisla::tabs.trigger state="active" value="one">One</stisla::tabs.trigger>
                <stisla::tabs.trigger state="inactive" value="two">Two</stisla::tabs.trigger>
                <stisla::tabs.trigger state="inactive" value="three">Three</stisla::tabs.trigger>
            </stisla::tabs.list>
            <stisla::tabs.panel state="active" value="one">
                <p>Pane one. Arrow keys move focus without changing the active panel.</p>
            </stisla::tabs.panel>
            <stisla::tabs.panel state="inactive" value="two">
                <p>Pane two.</p>
            </stisla::tabs.panel>
            <stisla::tabs.panel state="inactive" value="three">
                <p>Pane three.</p>
            </stisla::tabs.panel>
        </stisla::tabs>
    </section>

    {{-- 7. Programmatic control --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Programmatic control</h2>
            <p class="text-sm text-gray-500">Drive tabs via JavaScript <code>Stisla.Tabs.getOrCreate(el).setValue(val)</code>.</p>
        </div>

        <div class="flex flex-col gap-3 w-full">
            <stisla::tabs id="tabs-programmatic">
                <stisla::tabs.list>
                    <stisla::tabs.trigger state="active" value="alpha">Alpha</stisla::tabs.trigger>
                    <stisla::tabs.trigger state="inactive" value="beta">Beta</stisla::tabs.trigger>
                    <stisla::tabs.trigger state="inactive" value="gamma">Gamma</stisla::tabs.trigger>
                </stisla::tabs.list>
                <stisla::tabs.panel state="active" value="alpha">
                    <p>Alpha pane.</p>
                </stisla::tabs.panel>
                <stisla::tabs.panel state="inactive" value="beta">
                    <p>Beta pane.</p>
                </stisla::tabs.panel>
                <stisla::tabs.panel state="inactive" value="gamma">
                    <p>Gamma pane.</p>
                </stisla::tabs.panel>
            </stisla::tabs>

            <div class="flex flex-wrap items-center gap-2">
                <stisla::button mode="outline" tone="neutral" size="sm" data-tabs-demo="alpha">Open Alpha</stisla::button>
                <stisla::button mode="outline" tone="neutral" size="sm" data-tabs-demo="beta">Open Beta</stisla::button>
                <stisla::button mode="outline" tone="neutral" size="sm" data-tabs-demo="gamma">Open Gamma</stisla::button>
            </div>
            <pre id="tabs-programmatic-log" class="p-3 bg-slate-900 text-slate-100 rounded text-xs">Listening for stisla:tabs:changed…</pre>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var root = document.getElementById('tabs-programmatic');
                var log = document.getElementById('tabs-programmatic-log');
                if (!root || !log) return;
                document.querySelectorAll('[data-tabs-demo]').forEach(function (btn) {
                    btn.addEventListener('click', function () {
                        var inst = window.Stisla.Tabs.getOrCreate(root);
                        inst.setValue(btn.getAttribute('data-tabs-demo'));
                    });
                });
                root.addEventListener('stisla:tabs:changed', function (e) {
                    log.textContent = 'changed -> ' + e.detail.value + ' (from ' + e.detail.previousValue + ')';
                });
            });
        </script>
    </section>

    {{-- 8. External triggers --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. External triggers</h2>
            <p class="text-sm text-gray-500">Drive tabs declaratively using <code>aria-controls</code> and <code>data-stisla-tabs-value</code>.</p>
        </div>

        <div class="flex flex-col gap-4 w-full">
            <div class="flex flex-wrap items-center gap-2">
                <stisla::button mode="outline" tone="neutral" size="sm" aria-controls="tabs-external" data-stisla-tabs-value="overview">Jump to Overview</stisla::button>
                <stisla::button mode="outline" tone="neutral" size="sm" aria-controls="tabs-external" data-stisla-tabs-value="activity">Jump to Activity</stisla::button>
                <stisla::button mode="outline" tone="neutral" size="sm" aria-controls="tabs-external" data-stisla-tabs-value="settings">Jump to Settings</stisla::button>
            </div>

            <stisla::tabs id="tabs-external">
                <stisla::tabs.list>
                    <stisla::tabs.trigger state="active" value="overview">Overview</stisla::tabs.trigger>
                    <stisla::tabs.trigger state="inactive" value="activity">Activity</stisla::tabs.trigger>
                    <stisla::tabs.trigger state="inactive" value="settings">Settings</stisla::tabs.trigger>
                </stisla::tabs.list>
                <stisla::tabs.panel state="active" value="overview">
                    <p>Overview pane. Open me from the external buttons above.</p>
                </stisla::tabs.panel>
                <stisla::tabs.panel state="inactive" value="activity">
                    <p>Activity pane.</p>
                </stisla::tabs.panel>
                <stisla::tabs.panel state="inactive" value="settings">
                    <p>Settings pane.</p>
                </stisla::tabs.panel>
            </stisla::tabs>
        </div>

        <div class="pt-4 space-y-3">
            <h3 class="text-lg font-semibold">Without a list</h3>
            <p class="text-sm text-gray-500">Running tabs on external triggers alone without <code>.tabs__list</code>.</p>

            <div class="flex flex-col items-start gap-3 w-full">
                <div class="toggle-group" role="group" aria-label="Workspace section">
                    <button type="button" class="toggle" aria-controls="tabs-listless" data-stisla-tabs-value="general">General</button>
                    <button type="button" class="toggle" aria-controls="tabs-listless" data-stisla-tabs-value="members">Members</button>
                    <button type="button" class="toggle" aria-controls="tabs-listless" data-stisla-tabs-value="billing">Billing</button>
                </div>
                <stisla::tabs id="tabs-listless">
                    <stisla::tabs.panel state="active" value="general">
                        <p>General workspace settings.</p>
                    </stisla::tabs.panel>
                    <stisla::tabs.panel state="inactive" value="members">
                        <p>People with access to the workspace.</p>
                    </stisla::tabs.panel>
                    <stisla::tabs.panel state="inactive" value="billing">
                        <p>Plan, payment method, and invoices.</p>
                    </stisla::tabs.panel>
                </stisla::tabs>
            </div>
        </div>
    </section>

    {{-- 9. Events --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">9. Events</h2>
            <p class="text-sm text-gray-500">Listening to <code>stisla:tabs:changing</code> (cancelable) and <code>stisla:tabs:changed</code>.</p>
        </div>

        <div class="flex flex-col gap-3 w-full">
            <stisla::tabs id="tabs-events-demo" :block="true">
                <stisla::tabs.list>
                    <stisla::tabs.trigger state="active" value="tab-a">Tab A</stisla::tabs.trigger>
                    <stisla::tabs.trigger state="inactive" value="tab-b">Tab B</stisla::tabs.trigger>
                </stisla::tabs.list>
                <stisla::tabs.panel state="active" value="tab-a">
                    <p>Content for Tab A.</p>
                </stisla::tabs.panel>
                <stisla::tabs.panel state="inactive" value="tab-b">
                    <p>Content for Tab B.</p>
                </stisla::tabs.panel>
            </stisla::tabs>
            <pre id="tabs-events-log" class="p-3 bg-slate-900 text-slate-100 rounded text-xs">Listening for stisla:tabs:changed…</pre>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var root = document.getElementById('tabs-events-demo');
                var log = document.getElementById('tabs-events-log');
                if (!root || !log) return;
                root.addEventListener('stisla:tabs:changed', function (e) {
                    log.textContent = 'Event triggered: stisla:tabs:changed -> ' + e.detail.value + ' (from ' + e.detail.previousValue + ')';
                });
            });
        </script>
    </section>

    {{-- 10. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">10. Customization</h2>
            <p class="text-sm text-gray-500">Retuning rail padding, height, and colors via <code>:vars</code>.</p>
        </div>

        <stisla::tabs :block="true" :vars="['list-bg' => 'oklch(0.92 0.04 260)', 'trigger-bg-active' => 'oklch(0.45 0.18 260)', 'trigger-color-active' => '#ffffff']">
            <stisla::tabs.list>
                <stisla::tabs.trigger state="active" value="custom1">Custom One</stisla::tabs.trigger>
                <stisla::tabs.trigger state="inactive" value="custom2">Custom Two</stisla::tabs.trigger>
            </stisla::tabs.list>
            <stisla::tabs.panel state="active" value="custom1">
                <p>Custom colored active tab panel.</p>
            </stisla::tabs.panel>
            <stisla::tabs.panel state="inactive" value="custom2">
                <p>Second panel in custom tabs.</p>
            </stisla::tabs.panel>
        </stisla::tabs>
    </section>
</div>
