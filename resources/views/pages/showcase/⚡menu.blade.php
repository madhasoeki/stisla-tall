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
            <p class="text-sm text-gray-500">A floating list of actions anchored to a trigger.</p>
        </div>

        <stisla::menu>
            <stisla::menu.trigger tone="neutral" for="menu-basic">Actions</stisla::menu.trigger>
            <stisla::menu.popup id="menu-basic">
                <stisla::menu.item icon="pencil" shortcut="⌘E">Edit</stisla::menu.item>
                <stisla::menu.item icon="copy" shortcut="⌘D">Duplicate</stisla::menu.item>
                <stisla::menu.item icon="share-2">Share</stisla::menu.item>
                <stisla::menu.separator />
                <stisla::menu.item :danger="true" icon="trash-2" shortcut="⌫">Delete</stisla::menu.item>
            </stisla::menu.popup>
        </stisla::menu>
    </section>

    {{-- 2. Keyboard --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Keyboard</h2>
            <p class="text-sm text-gray-500">Open with <code>Enter</code>, <code>Space</code>, or <code>ArrowDown</code>. Move with arrow keys, activate with <code>Enter</code>/<code>Space</code>, ESC to dismiss.</p>
        </div>

        <stisla::menu>
            <stisla::menu.trigger mode="outline" tone="neutral" for="menu-keyboard">Keyboard Navigation</stisla::menu.trigger>
            <stisla::menu.popup id="menu-keyboard">
                <stisla::menu.item icon="arrow-down">First item</stisla::menu.item>
                <stisla::menu.item icon="arrow-up">Second item</stisla::menu.item>
            </stisla::menu.popup>
        </stisla::menu>
    </section>

    {{-- 3. With icons --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. With icons</h2>
            <p class="text-sm text-gray-500">Leading Lucide icons tracking hover state naturally.</p>
        </div>

        <stisla::menu>
            <stisla::menu.trigger mode="outline" tone="neutral" for="menu-icons">Account</stisla::menu.trigger>
            <stisla::menu.popup id="menu-icons">
                <stisla::menu.item as="a" href="#" icon="user"><span>Profile</span></stisla::menu.item>
                <stisla::menu.item as="a" href="#" icon="settings"><span>Settings</span></stisla::menu.item>
                <stisla::menu.item as="a" href="#" icon="bell"><span>Notifications</span></stisla::menu.item>
                <stisla::menu.separator />
                <stisla::menu.item as="a" href="#" icon="log-out"><span>Sign out</span></stisla::menu.item>
            </stisla::menu.popup>
        </stisla::menu>
    </section>

    {{-- 4. Headers and dividers --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Headers and dividers</h2>
            <p class="text-sm text-gray-500">Use group labels and separators to split sections.</p>
        </div>

        <stisla::menu>
            <stisla::menu.trigger mode="outline" tone="neutral" for="menu-groups">Workspace</stisla::menu.trigger>
            <stisla::menu.popup id="menu-groups">
                <stisla::menu.group label="Account" id="menu-groups-account">
                    <stisla::menu.item as="a" href="#">Profile</stisla::menu.item>
                    <stisla::menu.item as="a" href="#">Billing</stisla::menu.item>
                </stisla::menu.group>
                <stisla::menu.separator />
                <stisla::menu.group label="Workspace" id="menu-groups-workspace">
                    <stisla::menu.item as="a" href="#">Members</stisla::menu.item>
                    <stisla::menu.item as="a" href="#">Settings</stisla::menu.item>
                </stisla::menu.group>
            </stisla::menu.popup>
        </stisla::menu>
    </section>

    {{-- 5. Active and disabled --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Active and disabled</h2>
            <p class="text-sm text-gray-500">Mark active item with <code>:active="true"</code> and disabled with <code>:disabled="true"</code>.</p>
        </div>

        <stisla::menu>
            <stisla::menu.trigger mode="outline" tone="neutral" for="menu-sort">Sort by</stisla::menu.trigger>
            <stisla::menu.popup id="menu-sort">
                <stisla::menu.item :active="true">Newest first</stisla::menu.item>
                <stisla::menu.item>Oldest first</stisla::menu.item>
                <stisla::menu.item>Alphabetical</stisla::menu.item>
                <stisla::menu.item :disabled="true">By owner (Pro)</stisla::menu.item>
            </stisla::menu.popup>
        </stisla::menu>
    </section>

    {{-- 6. Destructive items --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Destructive items</h2>
            <p class="text-sm text-gray-500">Add <code>:danger="true"</code> for destructive actions.</p>
        </div>

        <stisla::menu>
            <stisla::menu.trigger mode="outline" tone="neutral" for="menu-danger">Manage project</stisla::menu.trigger>
            <stisla::menu.popup id="menu-danger">
                <stisla::menu.item icon="pencil"><span>Rename</span></stisla::menu.item>
                <stisla::menu.item icon="copy"><span>Duplicate</span></stisla::menu.item>
                <stisla::menu.item icon="archive"><span>Archive</span></stisla::menu.item>
                <stisla::menu.separator />
                <stisla::menu.item :danger="true" icon="trash-2"><span>Delete project</span></stisla::menu.item>
            </stisla::menu.popup>
        </stisla::menu>
    </section>

    {{-- 7. Checkbox items --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Checkbox items</h2>
            <p class="text-sm text-gray-500">Items with <code>role="menuitemcheckbox"</code> toggle state. Set <code>autoClose="outside"</code> to keep popup open.</p>
        </div>

        <stisla::menu>
            <stisla::menu.trigger mode="outline" tone="neutral" for="menu-check">View</stisla::menu.trigger>
            <stisla::menu.popup id="menu-check" autoClose="outside">
                <stisla::menu.item role="menuitemcheckbox" :checked="true"><span>Show grid</span></stisla::menu.item>
                <stisla::menu.item role="menuitemcheckbox" :checked="false"><span>Show ruler</span></stisla::menu.item>
                <stisla::menu.item role="menuitemcheckbox" :checked="true"><span>Snap to pixels</span></stisla::menu.item>
            </stisla::menu.popup>
        </stisla::menu>
    </section>

    {{-- 8. Radio items --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. Radio items</h2>
            <p class="text-sm text-gray-500">Items with <code>role="menuitemradio"</code> inside a group behave like radio options.</p>
        </div>

        <stisla::menu>
            <stisla::menu.trigger mode="outline" tone="neutral" for="menu-radio">Theme</stisla::menu.trigger>
            <stisla::menu.popup id="menu-radio" autoClose="outside">
                <stisla::menu.group label="Appearance" id="menu-radio-header" class="flex flex-col gap-0.5">
                    <stisla::menu.item role="menuitemradio" :checked="true"><span>Light</span></stisla::menu.item>
                    <stisla::menu.item role="menuitemradio" :checked="false"><span>Dark</span></stisla::menu.item>
                    <stisla::menu.item role="menuitemradio" :checked="false"><span>System</span></stisla::menu.item>
                </stisla::menu.group>
            </stisla::menu.popup>
        </stisla::menu>
    </section>

    {{-- 9. Item shortcuts --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">9. Item shortcuts</h2>
            <p class="text-sm text-gray-500">Append keyboard shortcuts using <code>&lt;stisla::menu.shortcut&gt;</code> with <code>&lt;kbd&gt;</code>.</p>
        </div>

        <stisla::menu>
            <stisla::menu.trigger mode="outline" tone="neutral" for="menu-shortcut">File</stisla::menu.trigger>
            <stisla::menu.popup id="menu-shortcut" class="max-w-56">
                <stisla::menu.item><span>New file</span><stisla::menu.shortcut><kbd>⌘</kbd><kbd>N</kbd></stisla::menu.shortcut></stisla::menu.item>
                <stisla::menu.item><span>Open…</span><stisla::menu.shortcut><kbd>⌘</kbd><kbd>O</kbd></stisla::menu.shortcut></stisla::menu.item>
                <stisla::menu.item><span>Save</span><stisla::menu.shortcut><kbd>⌘</kbd><kbd>S</kbd></stisla::menu.shortcut></stisla::menu.item>
                <stisla::menu.separator />
                <stisla::menu.item><span>Print</span><stisla::menu.shortcut><kbd>⌘</kbd><kbd>P</kbd></stisla::menu.shortcut></stisla::menu.item>
            </stisla::menu.popup>
        </stisla::menu>
    </section>

    {{-- 10. Media rows --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">10. Media rows</h2>
            <p class="text-sm text-gray-500">Using <code>role="menuitem"</code> on media rows for rich notification menus.</p>
        </div>

        <stisla::menu>
            <stisla::menu.trigger mode="outline" tone="neutral" for="menu-media">Notifications</stisla::menu.trigger>
            <stisla::menu.popup id="menu-media" class="w-80">
                <stisla::media as="a" href="#" role="menuitem" class="media--seamless items-start">
                    <div class="media__figure mt-1"><stisla::icon-box tone="primary" icon="shopping-bag" /></div>
                    <div class="media__content">
                        <div class="media__title">New order #10428</div>
                        <div class="media__description">Acme Corp placed an order for 12 items.</div>
                        <div class="media__meta">2 minutes ago</div>
                    </div>
                </stisla::media>
                <stisla::media as="a" href="#" role="menuitem" class="media--seamless items-start">
                    <div class="media__figure mt-1"><stisla::icon-box tone="warning" icon="triangle-alert" /></div>
                    <div class="media__content">
                        <div class="media__title">Low stock</div>
                        <div class="media__description">Headphone Blitz is down to 4 units.</div>
                        <div class="media__meta">1 hour ago</div>
                    </div>
                </stisla::media>
                <stisla::menu.separator />
                <stisla::menu.item as="a" href="#" class="justify-center">View all notifications</stisla::menu.item>
            </stisla::menu.popup>
        </stisla::menu>
    </section>

    {{-- 11. Placement --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">11. Placement</h2>
            <p class="text-sm text-gray-500">Override position via <code>placement="top|right-start|left-start|bottom-end"</code>.</p>
        </div>

        <div class="flex flex-wrap items-center gap-3">
            <stisla::menu>
                <stisla::menu.trigger mode="outline" tone="neutral" for="menu-top">Top</stisla::menu.trigger>
                <stisla::menu.popup id="menu-top" placement="top">
                    <stisla::menu.item>Action</stisla::menu.item>
                    <stisla::menu.item>Another action</stisla::menu.item>
                </stisla::menu.popup>
            </stisla::menu>

            <stisla::menu>
                <stisla::menu.trigger mode="outline" tone="neutral" for="menu-right">Right</stisla::menu.trigger>
                <stisla::menu.popup id="menu-right" placement="right-start">
                    <stisla::menu.item>Action</stisla::menu.item>
                    <stisla::menu.item>Another action</stisla::menu.item>
                </stisla::menu.popup>
            </stisla::menu>

            <stisla::menu>
                <stisla::menu.trigger mode="outline" tone="neutral" for="menu-left">Left</stisla::menu.trigger>
                <stisla::menu.popup id="menu-left" placement="left-start">
                    <stisla::menu.item>Action</stisla::menu.item>
                    <stisla::menu.item>Another action</stisla::menu.item>
                </stisla::menu.popup>
            </stisla::menu>

            <stisla::menu>
                <stisla::menu.trigger mode="outline" tone="neutral" for="menu-bottom-end">Bottom-end</stisla::menu.trigger>
                <stisla::menu.popup id="menu-bottom-end" placement="bottom-end">
                    <stisla::menu.item>Action</stisla::menu.item>
                    <stisla::menu.item>Another action</stisla::menu.item>
                </stisla::menu.popup>
            </stisla::menu>
        </div>
    </section>

    {{-- 12. Events --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">12. Events</h2>
            <p class="text-sm text-gray-500">Listening to <code>stisla:menu:opening</code>, <code>opened</code>, <code>closing</code>, and <code>closed</code> events.</p>
        </div>

        <div class="flex flex-col gap-3 max-w-md">
            <stisla::menu id="menu-event-container">
                <stisla::menu.trigger tone="primary" for="menu-event-demo">Open Event Menu</stisla::menu.trigger>
                <stisla::menu.popup id="menu-event-demo">
                    <stisla::menu.item>Option A</stisla::menu.item>
                    <stisla::menu.item>Option B</stisla::menu.item>
                </stisla::menu.popup>
            </stisla::menu>

            <pre id="menu-event-log" class="p-3 bg-slate-900 text-slate-100 rounded text-xs">Listening for stisla:menu events…</pre>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var menuPopup = document.getElementById('menu-event-demo');
                var log = document.getElementById('menu-event-log');
                if (!menuPopup || !log) return;
                ['opening', 'opened', 'closing', 'closed'].forEach(function (evt) {
                    menuPopup.addEventListener('stisla:menu:' + evt, function () {
                        log.textContent = 'Event triggered: stisla:menu:' + evt;
                    });
                });
            });
        </script>
    </section>

    {{-- 13. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">13. Customization</h2>
            <p class="text-sm text-gray-500">Retuning popup fill and radius using <code>:vars</code>.</p>
        </div>

        <stisla::menu>
            <stisla::menu.trigger mode="outline" tone="neutral" for="menu-custom">Custom Styled Menu</stisla::menu.trigger>
            <stisla::menu.popup id="menu-custom" :vars="['bg' => 'oklch(0.96 0.02 260)', 'radius' => '1rem']">
                <stisla::menu.item>Custom option 1</stisla::menu.item>
                <stisla::menu.item>Custom option 2</stisla::menu.item>
            </stisla::menu.popup>
        </stisla::menu>
    </section>
</div>
