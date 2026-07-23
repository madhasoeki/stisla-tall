<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-5xl mx-auto">
    {{-- 1. Basic --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Basic</h2>
            <p class="text-sm text-gray-500">One content slot, one group, one list. The current page is marked with <code>aria-current="page"</code> on the matching button.</p>
        </div>

        <stisla::sidebar class="w-64 border border-border rounded-lg">
            <stisla::sidebar.content>
                <stisla::sidebar.menu>
                    <stisla::sidebar.group>
                        <stisla::sidebar.list>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="home" :active="true">Dashboard</stisla::sidebar.button>
                            </stisla::sidebar.item>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="shopping-bag">Products</stisla::sidebar.button>
                            </stisla::sidebar.item>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="tags">Categories</stisla::sidebar.button>
                            </stisla::sidebar.item>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="users">Customers</stisla::sidebar.button>
                            </stisla::sidebar.item>
                        </stisla::sidebar.list>
                    </stisla::sidebar.group>
                </stisla::sidebar.menu>
            </stisla::sidebar.content>
        </stisla::sidebar>
    </section>

    {{-- 2. With header and footer --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. With header and footer</h2>
            <p class="text-sm text-gray-500">Use <code>.sidebar__header</code> for the brand mark; <code>.sidebar__brand</code> lines up an icon and a wordmark. <code>.sidebar__footer</code> pins to the bottom via <code>margin-block-start: auto</code>.</p>
        </div>

        <stisla::sidebar class="w-64 h-88 border border-border rounded-lg">
            <stisla::sidebar.header>
                <stisla::sidebar.brand href="#" icon="hexagon">Stisla</stisla::sidebar.brand>
            </stisla::sidebar.header>
            <stisla::sidebar.content>
                <stisla::sidebar.menu>
                    <stisla::sidebar.group>
                        <stisla::sidebar.list>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="home" :active="true">Dashboard</stisla::sidebar.button>
                            </stisla::sidebar.item>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="bar-chart-3">Analytics</stisla::sidebar.button>
                            </stisla::sidebar.item>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="inbox">Inbox</stisla::sidebar.button>
                            </stisla::sidebar.item>
                        </stisla::sidebar.list>
                    </stisla::sidebar.group>
                </stisla::sidebar.menu>
            </stisla::sidebar.content>
            <stisla::sidebar.footer>
                <stisla::sidebar.list>
                    <stisla::sidebar.item>
                        <stisla::sidebar.button href="#" icon="settings">Settings</stisla::sidebar.button>
                    </stisla::sidebar.item>
                    <stisla::sidebar.item>
                        <stisla::sidebar.button href="#" icon="log-out">Log out</stisla::sidebar.button>
                    </stisla::sidebar.item>
                </stisla::sidebar.list>
            </stisla::sidebar.footer>
        </stisla::sidebar>
    </section>

    {{-- 3. Sizes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Sizes</h2>
            <p class="text-sm text-gray-500">Three sizes: <code>sidebar--sm</code>, the default, and <code>sidebar--lg</code>.</p>
        </div>

        <div class="flex flex-wrap items-start gap-6">
            <stisla::sidebar size="sm" class="w-56 border border-border rounded-lg">
                <stisla::sidebar.content>
                    <stisla::sidebar.menu>
                        <stisla::sidebar.group>
                            <stisla::sidebar.group-title>Small</stisla::sidebar.group-title>
                            <stisla::sidebar.list>
                                <stisla::sidebar.item>
                                    <stisla::sidebar.button href="#" icon="home" :active="true">Dashboard</stisla::sidebar.button>
                                </stisla::sidebar.item>
                                <stisla::sidebar.item>
                                    <stisla::sidebar.button href="#" icon="inbox">Inbox</stisla::sidebar.button>
                                </stisla::sidebar.item>
                                <stisla::sidebar.item>
                                    <stisla::sidebar.button href="#" icon="users">Customers</stisla::sidebar.button>
                                </stisla::sidebar.item>
                            </stisla::sidebar.list>
                        </stisla::sidebar.group>
                    </stisla::sidebar.menu>
                </stisla::sidebar.content>
            </stisla::sidebar>

            <stisla::sidebar class="w-56 border border-border rounded-lg">
                <stisla::sidebar.content>
                    <stisla::sidebar.menu>
                        <stisla::sidebar.group>
                            <stisla::sidebar.group-title>Default</stisla::sidebar.group-title>
                            <stisla::sidebar.list>
                                <stisla::sidebar.item>
                                    <stisla::sidebar.button href="#" icon="home" :active="true">Dashboard</stisla::sidebar.button>
                                </stisla::sidebar.item>
                                <stisla::sidebar.item>
                                    <stisla::sidebar.button href="#" icon="inbox">Inbox</stisla::sidebar.button>
                                </stisla::sidebar.item>
                                <stisla::sidebar.item>
                                    <stisla::sidebar.button href="#" icon="users">Customers</stisla::sidebar.button>
                                </stisla::sidebar.item>
                            </stisla::sidebar.list>
                        </stisla::sidebar.group>
                    </stisla::sidebar.menu>
                </stisla::sidebar.content>
            </stisla::sidebar>

            <stisla::sidebar size="lg" class="w-56 border border-border rounded-lg">
                <stisla::sidebar.content>
                    <stisla::sidebar.menu>
                        <stisla::sidebar.group>
                            <stisla::sidebar.group-title>Large</stisla::sidebar.group-title>
                            <stisla::sidebar.list>
                                <stisla::sidebar.item>
                                    <stisla::sidebar.button href="#" icon="home" :active="true">Dashboard</stisla::sidebar.button>
                                </stisla::sidebar.item>
                                <stisla::sidebar.item>
                                    <stisla::sidebar.button href="#" icon="inbox">Inbox</stisla::sidebar.button>
                                </stisla::sidebar.item>
                                <stisla::sidebar.item>
                                    <stisla::sidebar.button href="#" icon="users">Customers</stisla::sidebar.button>
                                </stisla::sidebar.item>
                            </stisla::sidebar.list>
                        </stisla::sidebar.group>
                    </stisla::sidebar.menu>
                </stisla::sidebar.content>
            </stisla::sidebar>
        </div>
    </section>

    {{-- 4. Groups and group action --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Groups and group action</h2>
            <p class="text-sm text-gray-500"><code>.sidebar__group-title</code> labels each list. An optional <code>.sidebar__group-action</code> sits to the right of the title.</p>
        </div>

        <stisla::sidebar class="w-68 border border-border rounded-lg">
            <stisla::sidebar.content>
                <stisla::sidebar.menu>
                    <stisla::sidebar.group>
                        <stisla::sidebar.group-title>Workspaces</stisla::sidebar.group-title>
                        <stisla::sidebar.group-action>
                            <stisla::button mode="ghost" tone="neutral" :icon-only="true" icon="plus" aria-label="Add workspace" />
                        </stisla::sidebar.group-action>
                        <stisla::sidebar.list>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="briefcase" :active="true">Acme Co.</stisla::sidebar.button>
                            </stisla::sidebar.item>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="briefcase">Side Project</stisla::sidebar.button>
                            </stisla::sidebar.item>
                        </stisla::sidebar.list>
                    </stisla::sidebar.group>
                    <stisla::sidebar.group>
                        <stisla::sidebar.group-title>Settings</stisla::sidebar.group-title>
                        <stisla::sidebar.list>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="settings">General</stisla::sidebar.button>
                            </stisla::sidebar.item>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="user">Profile</stisla::sidebar.button>
                            </stisla::sidebar.item>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="credit-card">Billing</stisla::sidebar.button>
                            </stisla::sidebar.item>
                        </stisla::sidebar.list>
                    </stisla::sidebar.group>
                </stisla::sidebar.menu>
            </stisla::sidebar.content>
        </stisla::sidebar>
    </section>

    {{-- 5. Active state --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Active state</h2>
            <p class="text-sm text-gray-500"><code>aria-current="page"</code> for link active state and <code>data-state="active"</code> for non-link button active state.</p>
        </div>

        <stisla::sidebar class="w-64 border border-border rounded-lg">
            <stisla::sidebar.content>
                <stisla::sidebar.menu>
                    <stisla::sidebar.group>
                        <stisla::sidebar.list>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="home">Dashboard</stisla::sidebar.button>
                            </stisla::sidebar.item>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="inbox" :active="true">Inbox</stisla::sidebar.button>
                            </stisla::sidebar.item>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button icon="filter" :active="true">Filters open</stisla::sidebar.button>
                            </stisla::sidebar.item>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="users">Customers</stisla::sidebar.button>
                            </stisla::sidebar.item>
                        </stisla::sidebar.list>
                    </stisla::sidebar.group>
                </stisla::sidebar.menu>
            </stisla::sidebar.content>
        </stisla::sidebar>
    </section>

    {{-- 6. Item actions --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Item actions</h2>
            <p class="text-sm text-gray-500">Place a <code>.sidebar__item-action</code> after the button to drop a badge or action button into the right edge.</p>
        </div>

        <stisla::sidebar class="w-72 border border-border rounded-lg">
            <stisla::sidebar.content>
                <stisla::sidebar.menu>
                    <stisla::sidebar.group>
                        <stisla::sidebar.group-title>Always visible</stisla::sidebar.group-title>
                        <stisla::sidebar.list>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="bell">Notifications</stisla::sidebar.button>
                                <stisla::sidebar.item-action>
                                    <stisla::badge tone="primary">3</stisla::badge>
                                </stisla::sidebar.item-action>
                            </stisla::sidebar.item>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="inbox">Inbox</stisla::sidebar.button>
                                <stisla::sidebar.item-action>
                                    <stisla::badge>12</stisla::badge>
                                </stisla::sidebar.item-action>
                            </stisla::sidebar.item>
                        </stisla::sidebar.list>
                    </stisla::sidebar.group>
                    <stisla::sidebar.group>
                        <stisla::sidebar.group-title>Hover-reveal</stisla::sidebar.group-title>
                        <stisla::sidebar.list>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="folder">Documents</stisla::sidebar.button>
                                <stisla::sidebar.item-action :reveal="true">
                                    <stisla::button mode="ghost" tone="neutral" :icon-only="true" icon="more-horizontal" aria-label="More" />
                                </stisla::sidebar.item-action>
                            </stisla::sidebar.item>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="folder">Projects</stisla::sidebar.button>
                                <stisla::sidebar.item-action :reveal="true">
                                    <stisla::button mode="ghost" tone="neutral" :icon-only="true" icon="more-horizontal" aria-label="More" />
                                </stisla::sidebar.item-action>
                            </stisla::sidebar.item>
                        </stisla::sidebar.list>
                    </stisla::sidebar.group>
                </stisla::sidebar.menu>
            </stisla::sidebar.content>
        </stisla::sidebar>
    </section>

    {{-- 7. Nested submenu --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Nested submenu</h2>
            <p class="text-sm text-gray-500">Wrap a child <code>.sidebar__list</code> in a <code>.sidebar__submenu</code> inside the same <code>.sidebar__item</code>.</p>
        </div>

        <stisla::sidebar class="w-72 border border-border rounded-lg">
            <stisla::sidebar.content>
                <stisla::sidebar.menu>
                    <stisla::sidebar.group>
                        <stisla::sidebar.list>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="home" :active="true">Dashboard</stisla::sidebar.button>
                            </stisla::sidebar.item>
                            <stisla::sidebar.item state="open">
                                <stisla::sidebar.button icon="bar-chart-3" :toggle-submenu="true" expanded="true" controls="reports">Reports</stisla::sidebar.button>
                                <stisla::sidebar.submenu id="reports">
                                    <stisla::sidebar.list>
                                        <stisla::sidebar.item>
                                            <stisla::sidebar.button href="#">Sales</stisla::sidebar.button>
                                        </stisla::sidebar.item>
                                        <stisla::sidebar.item>
                                            <stisla::sidebar.button href="#">Traffic</stisla::sidebar.button>
                                        </stisla::sidebar.item>
                                        <stisla::sidebar.item>
                                            <stisla::sidebar.button href="#">Conversion</stisla::sidebar.button>
                                        </stisla::sidebar.item>
                                    </stisla::sidebar.list>
                                </stisla::sidebar.submenu>
                            </stisla::sidebar.item>
                            <stisla::sidebar.item state="closed">
                                <stisla::sidebar.button icon="credit-card" :toggle-submenu="true" expanded="false" controls="billing">Billing</stisla::sidebar.button>
                                <stisla::sidebar.submenu id="billing">
                                    <stisla::sidebar.list>
                                        <stisla::sidebar.item>
                                            <stisla::sidebar.button href="#">Invoices</stisla::sidebar.button>
                                        </stisla::sidebar.item>
                                        <stisla::sidebar.item>
                                            <stisla::sidebar.button href="#">Payment methods</stisla::sidebar.button>
                                        </stisla::sidebar.item>
                                    </stisla::sidebar.list>
                                </stisla::sidebar.submenu>
                            </stisla::sidebar.item>
                        </stisla::sidebar.list>
                    </stisla::sidebar.group>
                </stisla::sidebar.menu>
            </stisla::sidebar.content>
        </stisla::sidebar>
    </section>

    {{-- 8. Link parent with submenu --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. Link parent with submenu</h2>
            <p class="text-sm text-gray-500">Label is an <code>&lt;a&gt;</code> link and caret disclosure button sits in the <code>.sidebar__item-action</code> slot.</p>
        </div>

        <stisla::sidebar class="w-72 border border-border rounded-lg">
            <stisla::sidebar.content>
                <stisla::sidebar.menu>
                    <stisla::sidebar.group>
                        <stisla::sidebar.list>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="home" :active="true">Dashboard</stisla::sidebar.button>
                            </stisla::sidebar.item>
                            <stisla::sidebar.item state="open">
                                <stisla::sidebar.button href="#" icon="bar-chart-3">Reports</stisla::sidebar.button>
                                <stisla::sidebar.item-action :toggle-submenu="true" expanded="true" controls="link-reports" label="Toggle Reports submenu" />
                                <stisla::sidebar.submenu id="link-reports">
                                    <stisla::sidebar.list>
                                        <stisla::sidebar.item>
                                            <stisla::sidebar.button href="#">Sales</stisla::sidebar.button>
                                        </stisla::sidebar.item>
                                        <stisla::sidebar.item>
                                            <stisla::sidebar.button href="#">Traffic</stisla::sidebar.button>
                                        </stisla::sidebar.item>
                                        <stisla::sidebar.item>
                                            <stisla::sidebar.button href="#">Conversion</stisla::sidebar.button>
                                        </stisla::sidebar.item>
                                    </stisla::sidebar.list>
                                </stisla::sidebar.submenu>
                            </stisla::sidebar.item>
                        </stisla::sidebar.list>
                    </stisla::sidebar.group>
                </stisla::sidebar.menu>
            </stisla::sidebar.content>
        </stisla::sidebar>
    </section>

    {{-- 9. As a panel --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">9. As a panel</h2>
            <p class="text-sm text-gray-500">Framing sidebar as a standalone panel with <code>:vars="['bg' => 'var(--color-surface)']"</code>.</p>
        </div>

        <stisla::sidebar class="w-68 border border-border rounded-lg" :vars="['bg' => 'var(--color-surface)']">
            <stisla::sidebar.header>
                <stisla::sidebar.brand href="#" icon="hexagon">Stisla</stisla::sidebar.brand>
            </stisla::sidebar.header>
            <stisla::sidebar.content>
                <stisla::sidebar.menu>
                    <stisla::sidebar.group>
                        <stisla::sidebar.group-title>Prologue</stisla::sidebar.group-title>
                        <stisla::sidebar.list>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" :active="true">Introduction</stisla::sidebar.button>
                            </stisla::sidebar.item>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#">Installation</stisla::sidebar.button>
                            </stisla::sidebar.item>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#">Customization</stisla::sidebar.button>
                            </stisla::sidebar.item>
                        </stisla::sidebar.list>
                    </stisla::sidebar.group>
                </stisla::sidebar.menu>
            </stisla::sidebar.content>
        </stisla::sidebar>
    </section>

    {{-- 10. Recolor --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">10. Recolor</h2>
            <p class="text-sm text-gray-500">Tints the sidebar with custom token variables via <code>:vars</code>.</p>
        </div>

        <stisla::sidebar
            class="w-68 rounded-lg"
            :vars="[
                'bg' => 'var(--color-primary)',
                'color' => 'var(--color-primary-foreground)',
                'button-bg-hover' => 'color-mix(in oklch, var(--color-primary-foreground) 12%, transparent)',
                'button-color-hover' => 'var(--color-primary-foreground)',
                'button-bg-active' => 'color-mix(in oklch, var(--color-primary-foreground) 20%, transparent)',
                'button-color-active' => 'var(--color-primary-foreground)',
                'button-icon-color' => 'color-mix(in oklch, var(--color-primary-foreground) 75%, transparent)',
                'group-title-color' => 'color-mix(in oklch, var(--color-primary-foreground) 70%, transparent)',
                'submenu-border-color' => 'color-mix(in oklch, var(--color-primary-foreground) 25%, transparent)',
            ]"
        >
            <stisla::sidebar.header>
                <stisla::sidebar.brand href="#" icon="hexagon">Stisla</stisla::sidebar.brand>
            </stisla::sidebar.header>
            <stisla::sidebar.content>
                <stisla::sidebar.menu>
                    <stisla::sidebar.group>
                        <stisla::sidebar.group-title>Navigation</stisla::sidebar.group-title>
                        <stisla::sidebar.list>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="home" :active="true">Dashboard</stisla::sidebar.button>
                            </stisla::sidebar.item>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="inbox">Inbox</stisla::sidebar.button>
                            </stisla::sidebar.item>
                        </stisla::sidebar.list>
                    </stisla::sidebar.group>
                </stisla::sidebar.menu>
            </stisla::sidebar.content>
        </stisla::sidebar>
    </section>

    {{-- 11. Rail / mini mode --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">11. Rail / mini mode</h2>
            <p class="text-sm text-gray-500">Shrinks the sidebar panel to icons only via <code>:collapsed="true"</code>.</p>
        </div>

        <div class="flex flex-wrap items-start gap-6">
            <stisla::sidebar size="sm" :collapsed="true" class="border border-border rounded-lg" :vars="['bg' => 'var(--color-surface)']">
                <stisla::sidebar.header>
                    <stisla::sidebar.brand href="#" icon="hexagon" aria-label="Stisla">Stisla</stisla::sidebar.brand>
                </stisla::sidebar.header>
                <stisla::sidebar.content>
                    <stisla::sidebar.menu>
                        <stisla::sidebar.group>
                            <stisla::sidebar.list>
                                <stisla::sidebar.item>
                                    <stisla::sidebar.button href="#" icon="home" :active="true">Dashboard</stisla::sidebar.button>
                                </stisla::sidebar.item>
                                <stisla::sidebar.item>
                                    <stisla::sidebar.button href="#" icon="inbox">Inbox</stisla::sidebar.button>
                                </stisla::sidebar.item>
                                <stisla::sidebar.item>
                                    <stisla::sidebar.button href="#" icon="users">Customers</stisla::sidebar.button>
                                </stisla::sidebar.item>
                            </stisla::sidebar.list>
                        </stisla::sidebar.group>
                    </stisla::sidebar.menu>
                </stisla::sidebar.content>
            </stisla::sidebar>

            <stisla::sidebar :collapsed="true" class="border border-border rounded-lg" :vars="['bg' => 'var(--color-surface)']">
                <stisla::sidebar.header>
                    <stisla::sidebar.brand href="#" icon="hexagon" aria-label="Stisla">Stisla</stisla::sidebar.brand>
                </stisla::sidebar.header>
                <stisla::sidebar.content>
                    <stisla::sidebar.menu>
                        <stisla::sidebar.group>
                            <stisla::sidebar.list>
                                <stisla::sidebar.item>
                                    <stisla::sidebar.button href="#" icon="home" :active="true">Dashboard</stisla::sidebar.button>
                                </stisla::sidebar.item>
                                <stisla::sidebar.item>
                                    <stisla::sidebar.button href="#" icon="inbox">Inbox</stisla::sidebar.button>
                                </stisla::sidebar.item>
                                <stisla::sidebar.item>
                                    <stisla::sidebar.button href="#" icon="users">Customers</stisla::sidebar.button>
                                </stisla::sidebar.item>
                            </stisla::sidebar.list>
                        </stisla::sidebar.group>
                    </stisla::sidebar.menu>
                </stisla::sidebar.content>
            </stisla::sidebar>
        </div>
    </section>

    {{-- 12. Collapse toggle --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">12. Collapse toggle</h2>
            <p class="text-sm text-gray-500">Toggle button with <code>toggle-collapse="true"</code> flips state between expanded and rail mode.</p>
        </div>

        <stisla::sidebar class="w-68 border border-border rounded-lg" :vars="['bg' => 'var(--color-surface)']">
            <stisla::sidebar.header>
                <stisla::sidebar.brand href="#" icon="hexagon">Stisla</stisla::sidebar.brand>
            </stisla::sidebar.header>
            <stisla::sidebar.content>
                <stisla::sidebar.menu>
                    <stisla::sidebar.group>
                        <stisla::sidebar.list>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="home" :active="true">Dashboard</stisla::sidebar.button>
                            </stisla::sidebar.item>
                            <stisla::sidebar.item>
                                <stisla::sidebar.button href="#" icon="inbox">Inbox</stisla::sidebar.button>
                            </stisla::sidebar.item>
                        </stisla::sidebar.list>
                    </stisla::sidebar.group>
                </stisla::sidebar.menu>
            </stisla::sidebar.content>
            <stisla::sidebar.footer>
                <stisla::sidebar.list>
                    <stisla::sidebar.item>
                        <stisla::sidebar.button icon="panel-left" :toggle-collapse="true" expanded="true">Collapse</stisla::sidebar.button>
                    </stisla::sidebar.item>
                </stisla::sidebar.list>
            </stisla::sidebar.footer>
        </stisla::sidebar>
    </section>
</div>
