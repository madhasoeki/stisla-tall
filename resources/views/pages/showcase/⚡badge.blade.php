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
            <h2 class="text-xl font-bold">1. Basic Tone Modifiers</h2>
            <p class="text-sm text-gray-500">Filled chip badges intrinsic to label content.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::badge>Neutral</stisla::badge>
            <stisla::badge tone="primary">Primary</stisla::badge>
            <stisla::badge tone="success">Success</stisla::badge>
            <stisla::badge tone="warning">Warning</stisla::badge>
            <stisla::badge tone="danger">Danger</stisla::badge>
            <stisla::badge tone="info">Info</stisla::badge>
        </div>
    </section>

    {{-- 2. Soft Variant --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Soft Variant (Soft Tinted Fill)</h2>
            <p class="text-sm text-gray-500">Tinted fill with solid tone text using <code>:soft="true"</code>.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::badge :soft="true">Neutral</stisla::badge>
            <stisla::badge :soft="true" tone="primary">Primary</stisla::badge>
            <stisla::badge :soft="true" tone="success">Success</stisla::badge>
            <stisla::badge :soft="true" tone="warning">Warning</stisla::badge>
            <stisla::badge :soft="true" tone="danger">Danger</stisla::badge>
            <stisla::badge :soft="true" tone="info">Info</stisla::badge>
        </div>
    </section>

    {{-- 3. With Icons --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. With Icons</h2>
            <p class="text-sm text-gray-500">Leading or trailing icons scaling to font size.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::badge tone="success" icon="check">Verified</stisla::badge>
            <stisla::badge :soft="true" tone="warning" icon="clock">Pending</stisla::badge>
            <stisla::badge :soft="true" tone="danger" icon="circle-x">Failed</stisla::badge>
            <stisla::badge tone="primary" icon="star">Featured</stisla::badge>
            <stisla::badge tone="info" icon-trailing="arrow-up">12</stisla::badge>
        </div>
    </section>

    {{-- 4. Loading --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Loading Spinner</h2>
            <p class="text-sm text-gray-500">Slotting a spinner inside using <code>:busy="true"</code>.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::badge :soft="true" tone="primary" :busy="true">Syncing</stisla::badge>
            <stisla::badge :soft="true" :busy="true">Loading</stisla::badge>
            <stisla::badge tone="info" :busy="true">Uploading</stisla::badge>
        </div>
    </section>

    {{-- 5. Count inside Buttons --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Count inside Buttons</h2>
            <p class="text-sm text-gray-500">Inherits font-size cascade when packed inside <code>&lt;stisla::button&gt;</code>.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::button tone="neutral">
                Inbox <stisla::badge tone="primary">24</stisla::badge>
            </stisla::button>

            <stisla::button mode="soft" tone="primary">
                Notifications <stisla::badge :soft="true" tone="primary">9</stisla::badge>
            </stisla::button>

            <stisla::button mode="outline" tone="neutral">
                Alerts <stisla::badge tone="danger">12</stisla::badge>
            </stisla::button>
        </div>
    </section>

    {{-- 6. Flattened --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Flattened Corners</h2>
            <p class="text-sm text-gray-500">Overriding <code>--badge-radius</code> via <code>:vars</code>.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::badge tone="primary" :vars="['radius' => 'var(--radius-sm)']">Primary</stisla::badge>
            <stisla::badge :soft="true" tone="success" :vars="['radius' => 'var(--radius-sm)']">Success</stisla::badge>
            <stisla::badge :vars="['radius' => '0']">Squared</stisla::badge>
        </div>
    </section>

    {{-- 7. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Custom badge background and text color via <code>:vars</code>.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::badge :vars="['bg' => 'oklch(0.5 0.2 280)', 'color' => 'white']">Custom Violet</stisla::badge>
        </div>
    </section>
</div>
