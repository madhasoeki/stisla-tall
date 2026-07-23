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
            <h2 class="text-xl font-bold">1. Basic Page Layout</h2>
            <p class="text-sm text-gray-500">Page header with headline &amp; actions, followed by page sections with inner headers.</p>
        </div>

        <div class="p-6 bg-surface rounded-xl border border-border">
            <stisla::page class="w-full">
                <stisla::page.header title="Reports" description="Everything your team shipped this week.">
                    <stisla::page.action>
                        <stisla::button mode="outline" tone="neutral">Export</stisla::button>
                        <stisla::button tone="primary">New report</stisla::button>
                    </stisla::page.action>
                </stisla::page.header>

                <stisla::page.section>
                    <stisla::page.section-header title="Overview">
                        <stisla::page.action>
                            <stisla::button mode="ghost" tone="neutral" size="sm">Filter</stisla::button>
                        </stisla::page.action>
                    </stisla::page.section-header>
                    <stisla::card>
                        <stisla::card.body>Section content sits here inside a card.</stisla::card.body>
                    </stisla::card>
                </stisla::page.section>

                <stisla::page.section>
                    <stisla::page.section-header title="Activity" description="Recent changes across your reports." />
                    <stisla::card>
                        <stisla::card.body>Another block of section content.</stisla::card.body>
                    </stisla::card>
                </stisla::page.section>
            </stisla::page>
        </div>
    </section>

    {{-- 2. Page Wrapper with Body --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Page Header &amp; Body Flow</h2>
            <p class="text-sm text-gray-500">Structuring the flow using <code>&lt;stisla::page.body&gt;</code> for sections rhythm.</p>
        </div>

        <div class="p-6 bg-surface rounded-xl border border-border">
            <stisla::page class="w-full">
                <stisla::page.header title="Orders" description="42 orders received this month.">
                    <stisla::page.action>
                        <stisla::button mode="outline" tone="neutral" icon="download">Export</stisla::button>
                        <stisla::button tone="primary" icon="plus">New order</stisla::button>
                    </stisla::page.action>
                </stisla::page.header>

                <stisla::page.body>
                    <stisla::page.section>
                        <stisla::card class="w-full">
                            <stisla::card.header :alt="true">
                                <span>Recent Orders</span>
                                <stisla::link href="#" class="ms-auto">View all</stisla::link>
                            </stisla::card.header>
                            <stisla::table :responsive="true" :hover="true" align="middle">
                                <stisla::table.head>
                                    <stisla::table.row>
                                        <stisla::table.cell as="th" scope="col">Order</stisla::table.cell>
                                        <stisla::table.cell as="th" scope="col">Customer</stisla::table.cell>
                                        <stisla::table.cell as="th" scope="col">Date</stisla::table.cell>
                                        <stisla::table.cell as="th" scope="col" :alignEnd="true">Total</stisla::table.cell>
                                        <stisla::table.cell as="th" scope="col">Status</stisla::table.cell>
                                    </stisla::table.row>
                                </stisla::table.head>
                                <stisla::table.body>
                                    <stisla::table.row>
                                        <stisla::table.cell as="th" scope="row"><code>#10428</code></stisla::table.cell>
                                        <stisla::table.cell>Acme Corp</stisla::table.cell>
                                        <stisla::table.cell>Jun 18</stisla::table.cell>
                                        <stisla::table.cell :alignEnd="true">$1,490.00</stisla::table.cell>
                                        <stisla::table.cell>
                                            <stisla::badge :soft="true" tone="success" icon="check">Paid</stisla::badge>
                                        </stisla::table.cell>
                                    </stisla::table.row>
                                    <stisla::table.row>
                                        <stisla::table.cell as="th" scope="row"><code>#10427</code></stisla::table.cell>
                                        <stisla::table.cell>Riverway Ltd</stisla::table.cell>
                                        <stisla::table.cell>Jun 17</stisla::table.cell>
                                        <stisla::table.cell :alignEnd="true">$580.00</stisla::table.cell>
                                        <stisla::table.cell>
                                            <stisla::badge :soft="true" tone="info" icon="truck">Shipped</stisla::badge>
                                        </stisla::table.cell>
                                    </stisla::table.row>
                                    <stisla::table.row>
                                        <stisla::table.cell as="th" scope="row"><code>#10426</code></stisla::table.cell>
                                        <stisla::table.cell>Northwind</stisla::table.cell>
                                        <stisla::table.cell>Jun 17</stisla::table.cell>
                                        <stisla::table.cell :alignEnd="true">$8,200.00</stisla::table.cell>
                                        <stisla::table.cell>
                                            <stisla::badge :soft="true" tone="warning" icon="clock">Pending</stisla::badge>
                                        </stisla::table.cell>
                                    </stisla::table.row>
                                    <stisla::table.row>
                                        <stisla::table.cell as="th" scope="row"><code>#10425</code></stisla::table.cell>
                                        <stisla::table.cell>Globex</stisla::table.cell>
                                        <stisla::table.cell>Jun 16</stisla::table.cell>
                                        <stisla::table.cell :alignEnd="true">$240.00</stisla::table.cell>
                                        <stisla::table.cell>
                                            <stisla::badge :soft="true" tone="danger" icon="alert-triangle">Refunded</stisla::badge>
                                        </stisla::table.cell>
                                    </stisla::table.row>
                                </stisla::table.body>
                            </stisla::table>
                        </stisla::card>
                    </stisla::page.section>
                </stisla::page.body>
            </stisla::page>
        </div>
    </section>

    {{-- 3. Header without Actions --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Header without Actions</h2>
            <p class="text-sm text-gray-500">Standalone title block when no top action buttons are required.</p>
        </div>

        <div class="p-6 bg-surface rounded-xl border border-border">
            <stisla::page class="w-full">
                <stisla::page.header title="Account Settings" description="Manage your workspace preferences, billing, and team members." />
            </stisla::page>
        </div>
    </section>

    {{-- 4. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning section gap and title font size via <code>:vars</code>.</p>
        </div>

        <div class="p-6 bg-surface rounded-xl border border-border">
            <stisla::page :vars="['section-gap' => '2.5rem', 'title-font-size' => '2.25rem']" class="w-full">
                <stisla::page.header title="Custom Spaced Page" description="Retuned section spacing and typography." />
            </stisla::page>
        </div>
    </section>
</div>
