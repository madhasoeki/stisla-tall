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
            <p class="text-sm text-gray-500">Wrap your data in <code>.table</code>. The first and last column cells line up with the card body gutter.</p>
        </div>

        <stisla::table>
            <stisla::table.head>
                <stisla::table.row>
                    <stisla::table.cell as="th" scope="col">Plan</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Seats</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Storage</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col" :alignEnd="true">Price</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.head>
            <stisla::table.body>
                <stisla::table.row>
                    <stisla::table.cell as="th" scope="row">Starter</stisla::table.cell>
                    <stisla::table.cell>3</stisla::table.cell>
                    <stisla::table.cell>10 GB</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">$0/mo</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell as="th" scope="row">Team</stisla::table.cell>
                    <stisla::table.cell>15</stisla::table.cell>
                    <stisla::table.cell>100 GB</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">$29/mo</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell as="th" scope="row">Business</stisla::table.cell>
                    <stisla::table.cell>50</stisla::table.cell>
                    <stisla::table.cell>1 TB</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">$99/mo</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.body>
        </stisla::table>
    </section>

    {{-- 2. Row variants --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Row variants</h2>
            <p class="text-sm text-gray-500">Add intent emphasis to rows (primary, success, info, warning, danger, neutral).</p>
        </div>

        <stisla::table align="middle">
            <stisla::table.head>
                <stisla::table.row>
                    <stisla::table.cell as="th" scope="col">Job</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Schedule</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Last run</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.head>
            <stisla::table.body>
                <stisla::table.row>
                    <stisla::table.cell>nightly-backup</stisla::table.cell>
                    <stisla::table.cell>Daily 02:00 UTC</stisla::table.cell>
                    <stisla::table.cell>4 hours ago</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row tone="warning">
                    <stisla::table.cell>events-rollup</stisla::table.cell>
                    <stisla::table.cell>Hourly :00</stisla::table.cell>
                    <stisla::table.cell>Retrying (2 of 5)</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row tone="danger">
                    <stisla::table.cell>webhook-replay</stisla::table.cell>
                    <stisla::table.cell>Every 15 min</stisla::table.cell>
                    <stisla::table.cell>Failed · 12 min ago</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row tone="neutral">
                    <stisla::table.cell>metrics-aggregate</stisla::table.cell>
                    <stisla::table.cell>Every 5 min</stisla::table.cell>
                    <stisla::table.cell>2 min ago</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.body>
        </stisla::table>
    </section>

    {{-- 3. Striped rows --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Striped rows</h2>
            <p class="text-sm text-gray-500">Zebra-stripe alternating rows in the body using <code>:striped="true"</code>.</p>
        </div>

        <stisla::table :striped="true">
            <stisla::table.head>
                <stisla::table.row>
                    <stisla::table.cell as="th" scope="col">Region</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Latency p50</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Latency p99</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col" :alignEnd="true">Requests / min</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.head>
            <stisla::table.body>
                <stisla::table.row>
                    <stisla::table.cell>us-east-1</stisla::table.cell>
                    <stisla::table.cell>42 ms</stisla::table.cell>
                    <stisla::table.cell>180 ms</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">12,840</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell>us-west-2</stisla::table.cell>
                    <stisla::table.cell>58 ms</stisla::table.cell>
                    <stisla::table.cell>220 ms</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">9,210</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell>eu-west-1</stisla::table.cell>
                    <stisla::table.cell>61 ms</stisla::table.cell>
                    <stisla::table.cell>240 ms</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">7,455</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell>ap-southeast-1</stisla::table.cell>
                    <stisla::table.cell>74 ms</stisla::table.cell>
                    <stisla::table.cell>310 ms</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">3,902</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell>sa-east-1</stisla::table.cell>
                    <stisla::table.cell>110 ms</stisla::table.cell>
                    <stisla::table.cell>420 ms</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">1,288</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.body>
        </stisla::table>
    </section>

    {{-- 4. Striped columns --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Striped columns</h2>
            <p class="text-sm text-gray-500">Zebra-stripe alternating columns using <code>striped="cols"</code>.</p>
        </div>

        <stisla::table striped="cols">
            <stisla::table.head>
                <stisla::table.row>
                    <stisla::table.cell as="th" scope="col">Quarter</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Q1</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Q2</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Q3</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Q4</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.head>
            <stisla::table.body>
                <stisla::table.row>
                    <stisla::table.cell as="th" scope="row">New accounts</stisla::table.cell>
                    <stisla::table.cell>418</stisla::table.cell>
                    <stisla::table.cell>502</stisla::table.cell>
                    <stisla::table.cell>611</stisla::table.cell>
                    <stisla::table.cell>730</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell as="th" scope="row">Churned</stisla::table.cell>
                    <stisla::table.cell>62</stisla::table.cell>
                    <stisla::table.cell>71</stisla::table.cell>
                    <stisla::table.cell>54</stisla::table.cell>
                    <stisla::table.cell>48</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell as="th" scope="row">Net new ARR</stisla::table.cell>
                    <stisla::table.cell>$182k</stisla::table.cell>
                    <stisla::table.cell>$214k</stisla::table.cell>
                    <stisla::table.cell>$273k</stisla::table.cell>
                    <stisla::table.cell>$331k</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.body>
        </stisla::table>
    </section>

    {{-- 5. Hoverable and active row --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Hoverable and active row</h2>
            <p class="text-sm text-gray-500">Interactive hover feedback (<code>:hover="true"</code>) and persistent selection (<code>:active="true"</code>).</p>
        </div>

        <stisla::table :hover="true">
            <stisla::table.head>
                <stisla::table.row>
                    <stisla::table.cell as="th" scope="col">Branch</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Last commit</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col" :alignEnd="true">Behind / Ahead</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.head>
            <stisla::table.body>
                <stisla::table.row>
                    <stisla::table.cell>main</stisla::table.cell>
                    <stisla::table.cell>Bump axios to 1.7.4</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">0 / 0</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row :active="true">
                    <stisla::table.cell>feat/billing-v2</stisla::table.cell>
                    <stisla::table.cell>Add proration preview</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">0 / 14</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell>fix/race-on-replay</stisla::table.cell>
                    <stisla::table.cell>Drain queue before close</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">3 / 2</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.body>
        </stisla::table>
    </section>

    {{-- 6. Grid --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Grid</h2>
            <p class="text-sm text-gray-500">Drawing borders around every side of every cell using <code>:grid="true"</code>.</p>
        </div>

        <stisla::table :grid="true">
            <stisla::table.head>
                <stisla::table.row>
                    <stisla::table.cell as="th" scope="col">Cluster</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Nodes</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">CPU</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Memory</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.head>
            <stisla::table.body>
                <stisla::table.row>
                    <stisla::table.cell>prod-edge</stisla::table.cell>
                    <stisla::table.cell>24</stisla::table.cell>
                    <stisla::table.cell>62%</stisla::table.cell>
                    <stisla::table.cell>71%</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell>prod-core</stisla::table.cell>
                    <stisla::table.cell>48</stisla::table.cell>
                    <stisla::table.cell>54%</stisla::table.cell>
                    <stisla::table.cell>68%</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell>staging</stisla::table.cell>
                    <stisla::table.cell>6</stisla::table.cell>
                    <stisla::table.cell>18%</stisla::table.cell>
                    <stisla::table.cell>22%</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.body>
        </stisla::table>
    </section>

    {{-- 7. Seamless --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Seamless</h2>
            <p class="text-sm text-gray-500">Stripping every row and cell border for a soft list look using <code>:seamless="true"</code>.</p>
        </div>

        <stisla::table :seamless="true">
            <stisla::table.head>
                <stisla::table.row>
                    <stisla::table.cell as="th" scope="col">Project</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Owner</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col" :alignEnd="true">Open issues</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.head>
            <stisla::table.body>
                <stisla::table.row>
                    <stisla::table.cell>billing-service</stisla::table.cell>
                    <stisla::table.cell>Maya Singh</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">12</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell>auth-gateway</stisla::table.cell>
                    <stisla::table.cell>Mateo Reyes</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">4</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell>events-pipeline</stisla::table.cell>
                    <stisla::table.cell>Sara Lin</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">7</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell>web-dashboard</stisla::table.cell>
                    <stisla::table.cell>Theo Wright</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">23</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.body>
        </stisla::table>
    </section>

    {{-- 8. Small --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. Small</h2>
            <p class="text-sm text-gray-500">Shrinking inner cell padding for denser rows using <code>size="sm"</code>.</p>
        </div>

        <stisla::table size="sm">
            <stisla::table.head>
                <stisla::table.row>
                    <stisla::table.cell as="th" scope="col">Key</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Value</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Last edited</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.head>
            <stisla::table.body>
                <stisla::table.row>
                    <stisla::table.cell><code>SMTP_HOST</code></stisla::table.cell>
                    <stisla::table.cell>smtp.postmark.io</stisla::table.cell>
                    <stisla::table.cell>Maya · 3 days ago</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell><code>SMTP_PORT</code></stisla::table.cell>
                    <stisla::table.cell>587</stisla::table.cell>
                    <stisla::table.cell>Maya · 3 days ago</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell><code>FEATURE_BILLING_V2</code></stisla::table.cell>
                    <stisla::table.cell>true</stisla::table.cell>
                    <stisla::table.cell>Mateo · 1 hour ago</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.body>
        </stisla::table>
    </section>

    {{-- 9. Vertical alignment --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">9. Vertical alignment</h2>
            <p class="text-sm text-gray-500">Center vertical cell alignment using <code>align="middle"</code>.</p>
        </div>

        <stisla::table align="middle">
            <stisla::table.head>
                <stisla::table.row>
                    <stisla::table.cell as="th" scope="col">Document</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Summary</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col" :alignEnd="true">Pages</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.head>
            <stisla::table.body>
                <stisla::table.row>
                    <stisla::table.cell>Onboarding handbook</stisla::table.cell>
                    <stisla::table.cell>Day-1 setup, IT accounts, payroll forms, and the company-wide reading list new hires work through in their first week.</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">42</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell>Security policy</stisla::table.cell>
                    <stisla::table.cell>Device requirements, password rules, incident reporting, and the quarterly review schedule.</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">18</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell>Engineering RFCs</stisla::table.cell>
                    <stisla::table.cell>Active proposals up for review this cycle. Each row links to the long-form doc.</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">7</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.body>
        </stisla::table>
    </section>

    {{-- 10. Header alt and sortable --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">10. Header alt and sortable</h2>
            <p class="text-sm text-gray-500">Alt surface header (<code>:alt="true"</code>) with sort caret controls (<code>&lt;stisla::table.sort&gt;</code>).</p>
        </div>

        <stisla::table :hover="true">
            <stisla::table.head :alt="true">
                <stisla::table.row>
                    <stisla::table.cell as="th" scope="col">
                        <stisla::table.sort>Customer</stisla::table.sort>
                    </stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">
                        <stisla::table.sort>Plan</stisla::table.sort>
                    </stisla::table.cell>
                    <stisla::table.cell as="th" scope="col" :alignEnd="true" aria-sort="descending">
                        <stisla::table.sort state="desc">MRR</stisla::table.sort>
                    </stisla::table.cell>
                </stisla::table.row>
            </stisla::table.head>
            <stisla::table.body>
                <stisla::table.row>
                    <stisla::table.cell>Northwind</stisla::table.cell>
                    <stisla::table.cell>Enterprise</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">$8,200</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell>Acme Corp</stisla::table.cell>
                    <stisla::table.cell>Business</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">$1,490</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell>Riverway Ltd</stisla::table.cell>
                    <stisla::table.cell>Team</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">$580</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.body>
        </stisla::table>
    </section>

    {{-- 11. Caption and group divider --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">11. Caption and group divider</h2>
            <p class="text-sm text-gray-500">Caption footnote with heavy group divider rule above tbody (<code>:divider="true"</code>).</p>
        </div>

        <stisla::table>
            <caption>Last refreshed at 09:42 UTC</caption>
            <stisla::table.head>
                <stisla::table.row>
                    <stisla::table.cell as="th" scope="col">Item</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Qty</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col" :alignEnd="true">Line total</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.head>
            <stisla::table.body :divider="true">
                <stisla::table.row>
                    <stisla::table.cell>Pro seat license</stisla::table.cell>
                    <stisla::table.cell>15</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">$435.00</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell>Storage add-on</stisla::table.cell>
                    <stisla::table.cell>2</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">$40.00</stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell>Priority support</stisla::table.cell>
                    <stisla::table.cell>1</stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">$199.00</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.body>
        </stisla::table>
    </section>

    {{-- 12. With status badges --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">12. With status badges</h2>
            <p class="text-sm text-gray-500">Integrating status badges inside table cells.</p>
        </div>

        <stisla::table :responsive="true" :hover="true" align="middle">
            <stisla::table.head :alt="true">
                <stisla::table.row>
                    <stisla::table.cell as="th" scope="col">Invoice</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Client</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Amount</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Due</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Status</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.head>
            <stisla::table.body>
                <stisla::table.row>
                    <stisla::table.cell><code>INV-1042</code></stisla::table.cell>
                    <stisla::table.cell>Acme Corp</stisla::table.cell>
                    <stisla::table.cell>$4,800.00</stisla::table.cell>
                    <stisla::table.cell>Jun 15</stisla::table.cell>
                    <stisla::table.cell><stisla::badge :soft="true" tone="info" icon="send">Sent</stisla::badge></stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell><code>INV-1041</code></stisla::table.cell>
                    <stisla::table.cell>Riverway Ltd</stisla::table.cell>
                    <stisla::table.cell>$1,250.00</stisla::table.cell>
                    <stisla::table.cell>Jun 10</stisla::table.cell>
                    <stisla::table.cell><stisla::badge :soft="true" tone="success" icon="check">Paid</stisla::badge></stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell><code>INV-1040</code></stisla::table.cell>
                    <stisla::table.cell>Northwind</stisla::table.cell>
                    <stisla::table.cell>$9,310.00</stisla::table.cell>
                    <stisla::table.cell>May 28</stisla::table.cell>
                    <stisla::table.cell><stisla::badge :soft="true" tone="danger" icon="triangle-alert">Overdue</stisla::badge></stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell><code>INV-1039</code></stisla::table.cell>
                    <stisla::table.cell>Globex</stisla::table.cell>
                    <stisla::table.cell>$2,140.00</stisla::table.cell>
                    <stisla::table.cell>Jun 22</stisla::table.cell>
                    <stisla::table.cell><stisla::badge :soft="true" tone="warning" icon="clock">Draft</stisla::badge></stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell><code>INV-1038</code></stisla::table.cell>
                    <stisla::table.cell>Initech</stisla::table.cell>
                    <stisla::table.cell>$680.00</stisla::table.cell>
                    <stisla::table.cell>Jun 30</stisla::table.cell>
                    <stisla::table.cell><stisla::badge :soft="true">Scheduled</stisla::badge></stisla::table.cell>
                </stisla::table.row>
            </stisla::table.body>
        </stisla::table>
    </section>

    {{-- 13. With user avatars --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">13. With user avatars</h2>
            <p class="text-sm text-gray-500">Pairing avatars and user titles in flex table cells.</p>
        </div>

        <stisla::table :responsive="true" align="middle">
            <stisla::table.head :alt="true">
                <stisla::table.row>
                    <stisla::table.cell as="th" scope="col">Member</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Role</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Joined</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Status</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.head>
            <stisla::table.body>
                <stisla::table.row>
                    <stisla::table.cell>
                        <div class="flex flex-wrap items-center gap-2">
                            <img src="https://i.pravatar.cc/64?img=12" alt="" width="32" height="32" class="rounded-full" />
                            <div><div>Maya Singh</div><div class="text-muted-foreground text-xs">maya@acme.co</div></div>
                        </div>
                    </stisla::table.cell>
                    <stisla::table.cell>Admin</stisla::table.cell>
                    <stisla::table.cell>Jan 2024</stisla::table.cell>
                    <stisla::table.cell><stisla::badge :soft="true" tone="success">Active</stisla::badge></stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell>
                        <div class="flex flex-wrap items-center gap-2">
                            <img src="https://i.pravatar.cc/64?img=13" alt="" width="32" height="32" class="rounded-full" />
                            <div><div>Mateo Reyes</div><div class="text-muted-foreground text-xs">mateo@acme.co</div></div>
                        </div>
                    </stisla::table.cell>
                    <stisla::table.cell>Editor</stisla::table.cell>
                    <stisla::table.cell>Mar 2024</stisla::table.cell>
                    <stisla::table.cell><stisla::badge :soft="true" tone="success">Active</stisla::badge></stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell>
                        <div class="flex flex-wrap items-center gap-2">
                            <img src="https://i.pravatar.cc/64?img=5" alt="" width="32" height="32" class="rounded-full" />
                            <div><div>Sara Lin</div><div class="text-muted-foreground text-xs">sara@acme.co</div></div>
                        </div>
                    </stisla::table.cell>
                    <stisla::table.cell>Viewer</stisla::table.cell>
                    <stisla::table.cell>May 2024</stisla::table.cell>
                    <stisla::table.cell><stisla::badge :soft="true" tone="warning">Invite pending</stisla::badge></stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell>
                        <div class="flex flex-wrap items-center gap-2">
                            <img src="https://i.pravatar.cc/64?img=33" alt="" width="32" height="32" class="rounded-full" />
                            <div><div>Theo Wright</div><div class="text-muted-foreground text-xs">theo@acme.co</div></div>
                        </div>
                    </stisla::table.cell>
                    <stisla::table.cell>Editor</stisla::table.cell>
                    <stisla::table.cell>Jun 2023</stisla::table.cell>
                    <stisla::table.cell><stisla::badge :soft="true" tone="danger">Suspended</stisla::badge></stisla::table.cell>
                </stisla::table.row>
            </stisla::table.body>
        </stisla::table>
    </section>

    {{-- 14. Row actions --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">14. Row actions</h2>
            <p class="text-sm text-gray-500">Trailing action buttons in the last cell with <code>:alignEnd="true"</code>.</p>
        </div>

        <stisla::table :hover="true" align="middle">
            <stisla::table.head :alt="true">
                <stisla::table.row>
                    <stisla::table.cell as="th" scope="col">API key</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Scope</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col" :alignEnd="true">Actions</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.head>
            <stisla::table.body>
                <stisla::table.row>
                    <stisla::table.cell><code>sk_live_•••••8a1c</code></stisla::table.cell>
                    <stisla::table.cell><stisla::badge :soft="true" tone="primary">Live</stisla::badge></stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">
                        <div class="flex flex-wrap items-center justify-end gap-1">
                            <stisla::button mode="ghost" tone="neutral" size="sm" icon="copy" :icon-only="true" aria-label="Copy" />
                            <stisla::button mode="ghost" tone="neutral" size="sm" icon="trash-2" :icon-only="true" aria-label="Revoke" />
                        </div>
                    </stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell><code>sk_test_•••••3f02</code></stisla::table.cell>
                    <stisla::table.cell><stisla::badge :soft="true">Test</stisla::badge></stisla::table.cell>
                    <stisla::table.cell :alignEnd="true">
                        <div class="flex flex-wrap items-center justify-end gap-1">
                            <stisla::button mode="ghost" tone="neutral" size="sm" icon="copy" :icon-only="true" aria-label="Copy" />
                            <stisla::button mode="ghost" tone="neutral" size="sm" icon="trash-2" :icon-only="true" aria-label="Revoke" />
                        </div>
                    </stisla::table.cell>
                </stisla::table.row>
            </stisla::table.body>
        </stisla::table>
    </section>

    {{-- 15. Selectable rows --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">15. Selectable rows</h2>
            <p class="text-sm text-gray-500">Checkboxes in the first column marking active selection states.</p>
        </div>

        <div class="space-y-6">
            <stisla::table :hover="true" align="middle">
                <stisla::table.head :alt="true">
                    <stisla::table.row>
                        <stisla::table.cell as="th" scope="col" class="w-4"><input class="checkbox" type="checkbox" aria-label="Select all" /></stisla::table.cell>
                        <stisla::table.cell as="th" scope="col">Email</stisla::table.cell>
                        <stisla::table.cell as="th" scope="col">Source</stisla::table.cell>
                        <stisla::table.cell as="th" scope="col">Status</stisla::table.cell>
                    </stisla::table.row>
                </stisla::table.head>
                <stisla::table.body>
                    <stisla::table.row>
                        <stisla::table.cell><input class="checkbox" type="checkbox" aria-label="Select maya@acme.co" /></stisla::table.cell>
                        <stisla::table.cell>maya@acme.co</stisla::table.cell>
                        <stisla::table.cell>Landing page</stisla::table.cell>
                        <stisla::table.cell><stisla::badge :soft="true" tone="success">Confirmed</stisla::badge></stisla::table.cell>
                    </stisla::table.row>
                    <stisla::table.row :active="true">
                        <stisla::table.cell><input class="checkbox" type="checkbox" aria-label="Select mateo@acme.co" checked /></stisla::table.cell>
                        <stisla::table.cell>mateo@acme.co</stisla::table.cell>
                        <stisla::table.cell>Referral · Sara</stisla::table.cell>
                        <stisla::table.cell><stisla::badge :soft="true" tone="success">Confirmed</stisla::badge></stisla::table.cell>
                    </stisla::table.row>
                    <stisla::table.row :active="true">
                        <stisla::table.cell><input class="checkbox" type="checkbox" aria-label="Select sara@acme.co" checked /></stisla::table.cell>
                        <stisla::table.cell>sara@acme.co</stisla::table.cell>
                        <stisla::table.cell>Webinar · Q2</stisla::table.cell>
                        <stisla::table.cell><stisla::badge :soft="true" tone="warning">Pending</stisla::badge></stisla::table.cell>
                    </stisla::table.row>
                </stisla::table.body>
            </stisla::table>

            <stisla::card class="w-full">
                <stisla::card.header :alt="true">
                    <span><strong>2</strong> of 4 selected</span>
                    <stisla::button tone="danger" size="sm" icon="trash-2" class="ms-auto">Delete</stisla::button>
                </stisla::card.header>
                <stisla::table :hover="true" align="middle">
                    <stisla::table.head>
                        <stisla::table.row>
                            <stisla::table.cell as="th" scope="col" class="w-4"><input class="checkbox" type="checkbox" aria-label="Select all messages" /></stisla::table.cell>
                            <stisla::table.cell as="th" scope="col">From</stisla::table.cell>
                            <stisla::table.cell as="th" scope="col">Subject</stisla::table.cell>
                            <stisla::table.cell as="th" scope="col" :alignEnd="true">Received</stisla::table.cell>
                        </stisla::table.row>
                    </stisla::table.head>
                    <stisla::table.body>
                        <stisla::table.row :active="true">
                            <stisla::table.cell><input class="checkbox" type="checkbox" aria-label="Select message from Maya Singh" checked /></stisla::table.cell>
                            <stisla::table.cell>Maya Singh</stisla::table.cell>
                            <stisla::table.cell>Re: Q3 roadmap draft</stisla::table.cell>
                            <stisla::table.cell :alignEnd="true">9:42 AM</stisla::table.cell>
                        </stisla::table.row>
                        <stisla::table.row :active="true">
                            <stisla::table.cell><input class="checkbox" type="checkbox" aria-label="Select message from Mateo Reyes" checked /></stisla::table.cell>
                            <stisla::table.cell>Mateo Reyes</stisla::table.cell>
                            <stisla::table.cell>Auth migration status</stisla::table.cell>
                            <stisla::table.cell :alignEnd="true">8:18 AM</stisla::table.cell>
                        </stisla::table.row>
                        <stisla::table.row>
                            <stisla::table.cell><input class="checkbox" type="checkbox" aria-label="Select message from Sara Lin" /></stisla::table.cell>
                            <stisla::table.cell>Sara Lin</stisla::table.cell>
                            <stisla::table.cell>Pipeline retry logic</stisla::table.cell>
                            <stisla::table.cell :alignEnd="true">Yesterday</stisla::table.cell>
                        </stisla::table.row>
                        <stisla::table.row>
                            <stisla::table.cell><input class="checkbox" type="checkbox" aria-label="Select message from Theo Wright" /></stisla::table.cell>
                            <stisla::table.cell>Theo Wright</stisla::table.cell>
                            <stisla::table.cell>Vendor renewal · Jun 30</stisla::table.cell>
                            <stisla::table.cell :alignEnd="true">Yesterday</stisla::table.cell>
                        </stisla::table.row>
                    </stisla::table.body>
                </stisla::table>
            </stisla::card>
        </div>
    </section>

    {{-- 16. Inside a card --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">16. Inside a card</h2>
            <p class="text-sm text-gray-500">Dropping a table straight into a <code>.card</code> flush with rounded corners.</p>
        </div>

        <stisla::card class="w-full">
            <stisla::card.header :alt="true">
                Deployments
                <stisla::button tone="primary" size="sm" class="ms-auto">Deploy</stisla::button>
            </stisla::card.header>
            <stisla::table :responsive="true" :hover="true" align="middle">
                <stisla::table.head>
                    <stisla::table.row>
                        <stisla::table.cell as="th" scope="col">Service</stisla::table.cell>
                        <stisla::table.cell as="th" scope="col">Environment</stisla::table.cell>
                        <stisla::table.cell as="th" scope="col">Version</stisla::table.cell>
                        <stisla::table.cell as="th" scope="col">Status</stisla::table.cell>
                    </stisla::table.row>
                </stisla::table.head>
                <stisla::table.body>
                    <stisla::table.row>
                        <stisla::table.cell>api</stisla::table.cell>
                        <stisla::table.cell><stisla::badge :soft="true">production</stisla::badge></stisla::table.cell>
                        <stisla::table.cell><code>v2.14.0</code></stisla::table.cell>
                        <stisla::table.cell><stisla::badge :soft="true" tone="success" icon="circle-check">Healthy</stisla::badge></stisla::table.cell>
                    </stisla::table.row>
                    <stisla::table.row>
                        <stisla::table.cell>web</stisla::table.cell>
                        <stisla::table.cell><stisla::badge :soft="true">production</stisla::badge></stisla::table.cell>
                        <stisla::table.cell><code>v3.41.2</code></stisla::table.cell>
                        <stisla::table.cell><stisla::badge :soft="true" tone="warning" icon="triangle-alert">Degraded</stisla::badge></stisla::table.cell>
                    </stisla::table.row>
                    <stisla::table.row>
                        <stisla::table.cell>api</stisla::table.cell>
                        <stisla::table.cell><stisla::badge :soft="true">staging</stisla::badge></stisla::table.cell>
                        <stisla::table.cell><code>v2.15.0-rc1</code></stisla::table.cell>
                        <stisla::table.cell><stisla::badge :soft="true" tone="info"><stisla::spinner size="sm" :aria-hidden="true" as="span" /> Deploying</stisla::badge></stisla::table.cell>
                    </stisla::table.row>
                </stisla::table.body>
            </stisla::table>
        </stisla::card>
    </section>

    {{-- 17. Grid, inside a card --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">17. Grid, inside a card</h2>
            <p class="text-sm text-gray-500">A <code>.table--grid</code> dropped straight into a <code>.card</code> dropping its outer perimeter.</p>
        </div>

        <stisla::card class="w-full">
            <stisla::table :grid="true">
                <stisla::table.head>
                    <stisla::table.row>
                        <stisla::table.cell as="th" scope="col">Region</stisla::table.cell>
                        <stisla::table.cell as="th" scope="col">Orders</stisla::table.cell>
                        <stisla::table.cell as="th" scope="col">Revenue</stisla::table.cell>
                    </stisla::table.row>
                </stisla::table.head>
                <stisla::table.body>
                    <stisla::table.row>
                        <stisla::table.cell>North</stisla::table.cell>
                        <stisla::table.cell>1,284</stisla::table.cell>
                        <stisla::table.cell>$48,200</stisla::table.cell>
                    </stisla::table.row>
                    <stisla::table.row>
                        <stisla::table.cell>South</stisla::table.cell>
                        <stisla::table.cell>967</stisla::table.cell>
                        <stisla::table.cell>$31,540</stisla::table.cell>
                    </stisla::table.row>
                    <stisla::table.row>
                        <stisla::table.cell>West</stisla::table.cell>
                        <stisla::table.cell>1,102</stisla::table.cell>
                        <stisla::table.cell>$40,910</stisla::table.cell>
                    </stisla::table.row>
                </stisla::table.body>
            </stisla::table>
        </stisla::card>
    </section>

    {{-- 18. Full dashboard table --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">18. Full dashboard table</h2>
            <p class="text-sm text-gray-500">Composing alt-surface header, avatars, badges, and trailing row actions.</p>
        </div>

        <stisla::card class="w-full">
            <stisla::card.header :alt="true">
                Team members
                <stisla::badge :soft="true" class="ms-2">5 of 15 seats</stisla::badge>
                <stisla::button tone="primary" size="sm" icon="user-plus" class="ms-auto">Invite</stisla::button>
            </stisla::card.header>
            <stisla::table :responsive="true" :hover="true" align="middle">
                <stisla::table.head>
                    <stisla::table.row>
                        <stisla::table.cell as="th" scope="col">Member</stisla::table.cell>
                        <stisla::table.cell as="th" scope="col">Role</stisla::table.cell>
                        <stisla::table.cell as="th" scope="col">Last active</stisla::table.cell>
                        <stisla::table.cell as="th" scope="col">Status</stisla::table.cell>
                        <stisla::table.cell as="th" scope="col" :alignEnd="true">Actions</stisla::table.cell>
                    </stisla::table.row>
                </stisla::table.head>
                <stisla::table.body>
                    <stisla::table.row>
                        <stisla::table.cell><div class="flex flex-wrap items-center gap-2"><img src="https://i.pravatar.cc/64?img=68" alt="" width="32" height="32" class="rounded-full" /><div><div>Alex Park</div><div class="text-muted-foreground text-xs">alex@acme.co</div></div></div></stisla::table.cell>
                        <stisla::table.cell><stisla::badge :soft="true" tone="primary">Owner</stisla::badge></stisla::table.cell>
                        <stisla::table.cell>just now</stisla::table.cell>
                        <stisla::table.cell><stisla::badge :soft="true" tone="success">Active</stisla::badge></stisla::table.cell>
                        <stisla::table.cell :alignEnd="true"><stisla::button mode="ghost" tone="neutral" size="sm" icon="more-horizontal" :icon-only="true" aria-label="More" /></stisla::table.cell>
                    </stisla::table.row>
                    <stisla::table.row>
                        <stisla::table.cell><div class="flex flex-wrap items-center gap-2"><img src="https://i.pravatar.cc/64?img=12" alt="" width="32" height="32" class="rounded-full" /><div><div>Maya Singh</div><div class="text-muted-foreground text-xs">maya@acme.co</div></div></div></stisla::table.cell>
                        <stisla::table.cell><stisla::badge :soft="true" tone="info">Admin</stisla::badge></stisla::table.cell>
                        <stisla::table.cell>12 min ago</stisla::table.cell>
                        <stisla::table.cell><stisla::badge :soft="true" tone="success">Active</stisla::badge></stisla::table.cell>
                        <stisla::table.cell :alignEnd="true"><stisla::button mode="ghost" tone="neutral" size="sm" icon="more-horizontal" :icon-only="true" aria-label="More" /></stisla::table.cell>
                    </stisla::table.row>
                    <stisla::table.row>
                        <stisla::table.cell><div class="flex flex-wrap items-center gap-2"><img src="https://i.pravatar.cc/64?img=13" alt="" width="32" height="32" class="rounded-full" /><div><div>Mateo Reyes</div><div class="text-muted-foreground text-xs">mateo@acme.co</div></div></div></stisla::table.cell>
                        <stisla::table.cell><stisla::badge :soft="true">Editor</stisla::badge></stisla::table.cell>
                        <stisla::table.cell>2 hours ago</stisla::table.cell>
                        <stisla::table.cell><stisla::badge :soft="true" tone="success">Active</stisla::badge></stisla::table.cell>
                        <stisla::table.cell :alignEnd="true"><stisla::button mode="ghost" tone="neutral" size="sm" icon="more-horizontal" :icon-only="true" aria-label="More" /></stisla::table.cell>
                    </stisla::table.row>
                    <stisla::table.row>
                        <stisla::table.cell><div class="flex flex-wrap items-center gap-2"><img src="https://i.pravatar.cc/64?img=5" alt="" width="32" height="32" class="rounded-full" /><div><div>Sara Lin</div><div class="text-muted-foreground text-xs">sara@acme.co</div></div></div></stisla::table.cell>
                        <stisla::table.cell><stisla::badge :soft="true">Viewer</stisla::badge></stisla::table.cell>
                        <stisla::table.cell>never</stisla::table.cell>
                        <stisla::table.cell><stisla::badge :soft="true" tone="warning">Invite pending</stisla::badge></stisla::table.cell>
                        <stisla::table.cell :alignEnd="true"><stisla::button mode="ghost" tone="neutral" size="sm" icon="more-horizontal" :icon-only="true" aria-label="More" /></stisla::table.cell>
                    </stisla::table.row>
                    <stisla::table.row>
                        <stisla::table.cell><div class="flex flex-wrap items-center gap-2"><img src="https://i.pravatar.cc/64?img=33" alt="" width="32" height="32" class="rounded-full" /><div><div>Theo Wright</div><div class="text-muted-foreground text-xs">theo@acme.co</div></div></div></stisla::table.cell>
                        <stisla::table.cell><stisla::badge :soft="true">Editor</stisla::badge></stisla::table.cell>
                        <stisla::table.cell>1 week ago</stisla::table.cell>
                        <stisla::table.cell><stisla::badge :soft="true" tone="danger">Suspended</stisla::badge></stisla::table.cell>
                        <stisla::table.cell :alignEnd="true"><stisla::button mode="ghost" tone="neutral" size="sm" icon="more-horizontal" :icon-only="true" aria-label="More" /></stisla::table.cell>
                    </stisla::table.row>
                </stisla::table.body>
            </stisla::table>
        </stisla::card>
    </section>

    {{-- 19. Responsive --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">19. Responsive</h2>
            <p class="text-sm text-gray-500">Horizontal scroll wrapper using <code>:responsive="true"</code> or <code>responsive="md"</code>.</p>
        </div>

        <stisla::table :responsive="true">
            <stisla::table.head :alt="true">
                <stisla::table.row>
                    <stisla::table.cell as="th" scope="col">Customer</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Plan</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Seats</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">MRR</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Started</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Renews</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Owner</stisla::table.cell>
                    <stisla::table.cell as="th" scope="col">Status</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.head>
            <stisla::table.body>
                <stisla::table.row>
                    <stisla::table.cell>Acme Corp</stisla::table.cell>
                    <stisla::table.cell>Business</stisla::table.cell>
                    <stisla::table.cell>48</stisla::table.cell>
                    <stisla::table.cell>$1,490</stisla::table.cell>
                    <stisla::table.cell>Feb 02, 2024</stisla::table.cell>
                    <stisla::table.cell>Aug 12</stisla::table.cell>
                    <stisla::table.cell>Maya Singh</stisla::table.cell>
                    <stisla::table.cell><stisla::badge :soft="true" tone="success">Active</stisla::badge></stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell>Northwind</stisla::table.cell>
                    <stisla::table.cell>Enterprise</stisla::table.cell>
                    <stisla::table.cell>112</stisla::table.cell>
                    <stisla::table.cell>$8,200</stisla::table.cell>
                    <stisla::table.cell>Aug 30, 2022</stisla::table.cell>
                    <stisla::table.cell>Oct 22</stisla::table.cell>
                    <stisla::table.cell>Alex Park</stisla::table.cell>
                    <stisla::table.cell><stisla::badge :soft="true" tone="success">Active</stisla::badge></stisla::table.cell>
                </stisla::table.row>
                <stisla::table.row>
                    <stisla::table.cell>Globex</stisla::table.cell>
                    <stisla::table.cell>Team</stisla::table.cell>
                    <stisla::table.cell>9</stisla::table.cell>
                    <stisla::table.cell>$580</stisla::table.cell>
                    <stisla::table.cell>Jun 01, 2024</stisla::table.cell>
                    <stisla::table.cell>—</stisla::table.cell>
                    <stisla::table.cell>Sara Lin</stisla::table.cell>
                    <stisla::table.cell><stisla::badge :soft="true" tone="warning">Trialing</stisla::badge></stisla::table.cell>
                </stisla::table.row>
            </stisla::table.body>
        </stisla::table>
    </section>

    {{-- 20. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">20. Customization</h2>
            <p class="text-sm text-gray-500">Retuning cell padding and border color via <code>:vars</code>.</p>
        </div>

        <stisla::table :vars="['cell-padding-block' => '1rem', 'border-color' => 'var(--color-primary-subtle)']">
            <stisla::table.head>
                <stisla::table.row>
                    <stisla::table.cell as="th">Key</stisla::table.cell>
                    <stisla::table.cell as="th">Custom Value</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.head>
            <stisla::table.body>
                <stisla::table.row>
                    <stisla::table.cell>Custom Padding</stisla::table.cell>
                    <stisla::table.cell>1rem Block Padding</stisla::table.cell>
                </stisla::table.row>
            </stisla::table.body>
        </stisla::table>
    </section>
</div>
