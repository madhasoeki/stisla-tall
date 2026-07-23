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
            <h2 class="text-xl font-bold">1. Basic Vertical Scroll Area</h2>
            <p class="text-sm text-gray-500">Clipped, rounded scroll container with themed overlay scrollbar.</p>
        </div>

        <stisla::scroll-area class="border border-border h-48 w-full max-w-md p-4">
            <div class="flex flex-col gap-3">
                <div class="font-semibold">Release notes</div>
                <div class="text-muted-foreground text-sm">3.0.0 — the framework-agnostic rewrite lands: every component reads design tokens, no Bootstrap underneath.</div>
                <div class="text-muted-foreground text-sm">2.4.0 — new illustration system with recolorable empty states.</div>
                <div class="text-muted-foreground text-sm">2.3.0 — data-grid primitive powers every dashboard table.</div>
                <div class="text-muted-foreground text-sm">2.2.0 — drawer gains a floating modifier and four placements.</div>
                <div class="text-muted-foreground text-sm">2.1.0 — toast region with six corner placements.</div>
                <div class="text-muted-foreground text-sm">2.0.0 — tokens move to the runtime namespace.</div>
                <div class="text-muted-foreground text-sm">1.9.0 — accordion, popover, and tooltip join the catalog.</div>
            </div>
        </stisla::scroll-area>
    </section>

    {{-- 2. Horizontal --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Horizontal Scroll Area</h2>
            <p class="text-sm text-gray-500">Scrolling along the X axis only using <code>overflow-y="hidden"</code>.</p>
        </div>

        <stisla::scroll-area overflow-y="hidden" class="border border-border w-full max-w-lg">
            <div class="flex gap-3 p-4 min-w-max">
                <stisla::card class="m-0 min-w-56">
                    <stisla::card.body>
                        <div class="font-semibold">Acme Inc</div>
                        <div class="text-muted-foreground text-sm">Active project</div>
                    </stisla::card.body>
                </stisla::card>
                <stisla::card class="m-0 min-w-56">
                    <stisla::card.body>
                        <div class="font-semibold">Helix Health</div>
                        <div class="text-muted-foreground text-sm">Active project</div>
                    </stisla::card.body>
                </stisla::card>
                <stisla::card class="m-0 min-w-56">
                    <stisla::card.body>
                        <div class="font-semibold">Northwind Labs</div>
                        <div class="text-muted-foreground text-sm">Active project</div>
                    </stisla::card.body>
                </stisla::card>
                <stisla::card class="m-0 min-w-56">
                    <stisla::card.body>
                        <div class="font-semibold">Forge &amp; Tide</div>
                        <div class="text-muted-foreground text-sm">Paused</div>
                    </stisla::card.body>
                </stisla::card>
                <stisla::card class="m-0 min-w-56">
                    <stisla::card.body>
                        <div class="font-semibold">Quill Press</div>
                        <div class="text-muted-foreground text-sm">Active project</div>
                    </stisla::card.body>
                </stisla::card>
            </div>
        </stisla::scroll-area>
    </section>

    {{-- 3. Both Axes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Both Axes Scroll Area</h2>
            <p class="text-sm text-gray-500">Bounded box scrolling both horizontally and vertically.</p>
        </div>

        <stisla::scroll-area class="border border-border h-64 w-full max-w-lg">
            <stisla::table class="m-0 min-w-3xl">
                <stisla::table.head>
                    <stisla::table.row>
                        <stisla::table.cell as="th">Project</stisla::table.cell>
                        <stisla::table.cell as="th">Owner</stisla::table.cell>
                        <stisla::table.cell as="th">Stage</stisla::table.cell>
                        <stisla::table.cell as="th">Region</stisla::table.cell>
                        <stisla::table.cell as="th">Updated</stisla::table.cell>
                        <stisla::table.cell as="th">Status</stisla::table.cell>
                    </stisla::table.row>
                </stisla::table.head>
                <stisla::table.body>
                    <stisla::table.row>
                        <stisla::table.cell>Acme Inc</stisla::table.cell>
                        <stisla::table.cell>Maya Tanaka</stisla::table.cell>
                        <stisla::table.cell>Discovery</stisla::table.cell>
                        <stisla::table.cell>APAC</stisla::table.cell>
                        <stisla::table.cell>2 days ago</stisla::table.cell>
                        <stisla::table.cell><stisla::badge tone="success">Active</stisla::badge></stisla::table.cell>
                    </stisla::table.row>
                    <stisla::table.row>
                        <stisla::table.cell>Helix Health</stisla::table.cell>
                        <stisla::table.cell>Priya Reddy</stisla::table.cell>
                        <stisla::table.cell>Implementation</stisla::table.cell>
                        <stisla::table.cell>EMEA</stisla::table.cell>
                        <stisla::table.cell>4 hours ago</stisla::table.cell>
                        <stisla::table.cell><stisla::badge tone="success">Active</stisla::badge></stisla::table.cell>
                    </stisla::table.row>
                    <stisla::table.row>
                        <stisla::table.cell>Northwind Labs</stisla::table.cell>
                        <stisla::table.cell>Diego Romero</stisla::table.cell>
                        <stisla::table.cell>Discovery</stisla::table.cell>
                        <stisla::table.cell>AMER</stisla::table.cell>
                        <stisla::table.cell>1 week ago</stisla::table.cell>
                        <stisla::table.cell><stisla::badge tone="warning">Stalled</stisla::badge></stisla::table.cell>
                    </stisla::table.row>
                    <stisla::table.row>
                        <stisla::table.cell>Forge &amp; Tide</stisla::table.cell>
                        <stisla::table.cell>Lin Wei</stisla::table.cell>
                        <stisla::table.cell>Onboarding</stisla::table.cell>
                        <stisla::table.cell>APAC</stisla::table.cell>
                        <stisla::table.cell>3 weeks ago</stisla::table.cell>
                        <stisla::table.cell><stisla::badge tone="neutral">Paused</stisla::badge></stisla::table.cell>
                    </stisla::table.row>
                    <stisla::table.row>
                        <stisla::table.cell>Quill Press</stisla::table.cell>
                        <stisla::table.cell>Rafiq Ahmad</stisla::table.cell>
                        <stisla::table.cell>Implementation</stisla::table.cell>
                        <stisla::table.cell>EMEA</stisla::table.cell>
                        <stisla::table.cell>Yesterday</stisla::table.cell>
                        <stisla::table.cell><stisla::badge tone="success">Active</stisla::badge></stisla::table.cell>
                    </stisla::table.row>
                    <stisla::table.row>
                        <stisla::table.cell>Mariner Logistics</stisla::table.cell>
                        <stisla::table.cell>Sofia Costa</stisla::table.cell>
                        <stisla::table.cell>Closeout</stisla::table.cell>
                        <stisla::table.cell>AMER</stisla::table.cell>
                        <stisla::table.cell>2 months ago</stisla::table.cell>
                        <stisla::table.cell><stisla::badge tone="neutral">Archived</stisla::badge></stisla::table.cell>
                    </stisla::table.row>
                    <stisla::table.row>
                        <stisla::table.cell>Oryx Systems</stisla::table.cell>
                        <stisla::table.cell>Ida Pham</stisla::table.cell>
                        <stisla::table.cell>Discovery</stisla::table.cell>
                        <stisla::table.cell>EMEA</stisla::table.cell>
                        <stisla::table.cell>5 hours ago</stisla::table.cell>
                        <stisla::table.cell><stisla::badge tone="success">Active</stisla::badge></stisla::table.cell>
                    </stisla::table.row>
                    <stisla::table.row>
                        <stisla::table.cell>Atlas &amp; Vine</stisla::table.cell>
                        <stisla::table.cell>Theo Becker</stisla::table.cell>
                        <stisla::table.cell>Implementation</stisla::table.cell>
                        <stisla::table.cell>AMER</stisla::table.cell>
                        <stisla::table.cell>1 day ago</stisla::table.cell>
                        <stisla::table.cell><stisla::badge tone="success">Active</stisla::badge></stisla::table.cell>
                    </stisla::table.row>
                    <stisla::table.row>
                        <stisla::table.cell>Apex Financial</stisla::table.cell>
                        <stisla::table.cell>Elena Rostova</stisla::table.cell>
                        <stisla::table.cell>Optimization</stisla::table.cell>
                        <stisla::table.cell>EMEA</stisla::table.cell>
                        <stisla::table.cell>3 days ago</stisla::table.cell>
                        <stisla::table.cell><stisla::badge tone="info">Review</stisla::badge></stisla::table.cell>
                    </stisla::table.row>
                    <stisla::table.row>
                        <stisla::table.cell>Zenith Mobile</stisla::table.cell>
                        <stisla::table.cell>Marcus Vance</stisla::table.cell>
                        <stisla::table.cell>QA Testing</stisla::table.cell>
                        <stisla::table.cell>APAC</stisla::table.cell>
                        <stisla::table.cell>6 hours ago</stisla::table.cell>
                        <stisla::table.cell><stisla::badge tone="warning">Pending</stisla::badge></stisla::table.cell>
                    </stisla::table.row>
                </stisla::table.body>
            </stisla::table>
        </stisla::scroll-area>
    </section>

    {{-- 4. Always Visible --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Always Visible Scrollbar</h2>
            <p class="text-sm text-gray-500">Scrollbar handle stays painted using <code>auto-hide="never"</code>.</p>
        </div>

        <stisla::scroll-area auto-hide="never" class="border border-border h-48 w-full max-w-md p-4">
            <div class="flex flex-col gap-3 text-sm">
                <div>A persistent scrollbar reads more like a native desktop pattern, and pairs well with long content that benefits from a visible position indicator at rest.</div>
                <div>The trade-off is a permanent chrome stripe along the edge, even when the content has nothing to scroll past the fold. Pick based on the surface.</div>
                <div>The cascade still respects per-axis overrides, so a track that hides on x and stays on y is one extra attribute.</div>
                <div>Reduced-motion users skip the fade entirely either way, since the transition runs through the same reduced-motion gate as the rest of the system.</div>
                <div>The handle still grows and shrinks with the viewport-to-content ratio, so the position read stays honest as content updates.</div>
                <div>Click-to-track jumps the handle to the position you clicked. Hold a click on the track to keep paging in that direction.</div>
            </div>
        </stisla::scroll-area>
    </section>

    {{-- 5. Tinted --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Tinted Scrollbar (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Overriding handle variables for brand color tinting via <code>:vars</code>.</p>
        </div>

        <stisla::scroll-area
            auto-hide="never"
            :vars="[
                'bar-size' => '0.875rem',
                'handle-bg' => 'color-mix(in oklch, var(--color-primary) 35%, transparent)',
                'handle-bg-hover' => 'color-mix(in oklch, var(--color-primary) 55%, transparent)',
                'handle-bg-active' => 'var(--color-primary)',
            ]"
            class="border border-border h-48 w-full max-w-md p-4"
        >
            <div class="flex flex-col gap-3 text-sm">
                <div>The handle paints from a primary mix at rest, deepens on hover, and lands on solid intent when active. The track sits transparent so the parent surface reads through.</div>
                <div>The same pattern works for success, danger, info, or any custom token a parent scope publishes. Set the three handle vars once and every scroll-area inside the scope picks the new tone up.</div>
                <div>The bar width here is bumped a notch to make the color read at a glance. Defaults stay narrow so the chrome reads as plumbing rather than decoration.</div>
                <div>Density still applies through the surrounding scale, so a compact view shrinks the surface around the bar without retuning the bar itself.</div>
                <div>Smooth kinetic scrolling and touch gesture response pass through cleanly without causing content layout shift.</div>
            </div>
        </stisla::scroll-area>
    </section>
</div>
