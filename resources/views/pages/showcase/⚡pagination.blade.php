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
            <h2 class="text-xl font-bold">1. Basic Pagination</h2>
            <p class="text-sm text-gray-500">Row of page chips for moving through paginated views.</p>
        </div>

        <stisla::pagination>
            <stisla::pagination.item href="#">Previous</stisla::pagination.item>
            <stisla::pagination.item href="#">1</stisla::pagination.item>
            <stisla::pagination.item href="#" :active="true">2</stisla::pagination.item>
            <stisla::pagination.item href="#">3</stisla::pagination.item>
            <stisla::pagination.item href="#">Next</stisla::pagination.item>
        </stisla::pagination>
    </section>

    {{-- 2. With Icons --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. With Icons</h2>
            <p class="text-sm text-gray-500">Convenience sub-components with directional chevron icons.</p>
        </div>

        <stisla::pagination>
            <stisla::pagination.prev href="#" />
            <stisla::pagination.item href="#">1</stisla::pagination.item>
            <stisla::pagination.item href="#" :active="true">2</stisla::pagination.item>
            <stisla::pagination.item href="#">3</stisla::pagination.item>
            <stisla::pagination.next href="#" />
        </stisla::pagination>
    </section>

    {{-- 3. Disabled & Ellipsis --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Disabled State &amp; Truncation Ellipsis</h2>
            <p class="text-sm text-gray-500">Edge disabled buttons and ellipsis markers between page ranges.</p>
        </div>

        <stisla::pagination>
            <stisla::pagination.prev href="#" :disabled="true" />
            <stisla::pagination.item href="#" :active="true">1</stisla::pagination.item>
            <stisla::pagination.item href="#">2</stisla::pagination.item>
            <stisla::pagination.item href="#">3</stisla::pagination.item>
            <stisla::pagination.item href="#">4</stisla::pagination.item>
            <stisla::pagination.ellipsis />
            <stisla::pagination.item href="#">12</stisla::pagination.item>
            <stisla::pagination.next href="#" />
        </stisla::pagination>
    </section>

    {{-- 4. Sizes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Sizes</h2>
            <p class="text-sm text-gray-500">Compact (<code>size="sm"</code>), default, and large (<code>size="lg"</code>) chips.</p>
        </div>

        <div class="space-y-6">
            <stisla::pagination size="sm">
                <stisla::pagination.prev href="#" />
                <stisla::pagination.item href="#">1</stisla::pagination.item>
                <stisla::pagination.item href="#" :active="true">2</stisla::pagination.item>
                <stisla::pagination.item href="#">3</stisla::pagination.item>
                <stisla::pagination.next href="#" />
            </stisla::pagination>

            <stisla::pagination>
                <stisla::pagination.prev href="#" />
                <stisla::pagination.item href="#">1</stisla::pagination.item>
                <stisla::pagination.item href="#" :active="true">2</stisla::pagination.item>
                <stisla::pagination.item href="#">3</stisla::pagination.item>
                <stisla::pagination.next href="#" />
            </stisla::pagination>

            <stisla::pagination size="lg">
                <stisla::pagination.prev href="#" />
                <stisla::pagination.item href="#">1</stisla::pagination.item>
                <stisla::pagination.item href="#" :active="true">2</stisla::pagination.item>
                <stisla::pagination.item href="#">3</stisla::pagination.item>
                <stisla::pagination.next href="#" />
            </stisla::pagination>
        </div>
    </section>

    {{-- 5. Alignment --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Alignment</h2>
            <p class="text-sm text-gray-500">Centering (<code>align="center"</code>) or right-aligning (<code>align="end"</code>) the pagination list.</p>
        </div>

        <div class="space-y-6">
            <stisla::pagination align="center">
                <stisla::pagination.prev href="#" />
                <stisla::pagination.item href="#">1</stisla::pagination.item>
                <stisla::pagination.item href="#" :active="true">2</stisla::pagination.item>
                <stisla::pagination.item href="#">3</stisla::pagination.item>
                <stisla::pagination.next href="#" />
            </stisla::pagination>

            <stisla::pagination align="end">
                <stisla::pagination.prev href="#" />
                <stisla::pagination.item href="#">1</stisla::pagination.item>
                <stisla::pagination.item href="#" :active="true">2</stisla::pagination.item>
                <stisla::pagination.item href="#">3</stisla::pagination.item>
                <stisla::pagination.next href="#" />
            </stisla::pagination>
        </div>
    </section>

    {{-- 6. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Pill-shaped pagination chips via <code>:vars="['button-radius' => '9999px']"</code>.</p>
        </div>

        <stisla::pagination :vars="['button-radius' => '9999px']">
            <stisla::pagination.prev href="#" />
            <stisla::pagination.item href="#">1</stisla::pagination.item>
            <stisla::pagination.item href="#" :active="true">2</stisla::pagination.item>
            <stisla::pagination.item href="#">3</stisla::pagination.item>
            <stisla::pagination.next href="#" />
        </stisla::pagination>
    </section>
</div>
