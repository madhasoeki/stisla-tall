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
            <h2 class="text-xl font-bold">1. Basic Breadcrumb</h2>
            <p class="text-sm text-gray-500">Trail of links showing page hierarchy location.</p>
        </div>

        <stisla::breadcrumb>
            <stisla::breadcrumb.item href="#">Home</stisla::breadcrumb.item>
            <stisla::breadcrumb.item :current="true">Library</stisla::breadcrumb.item>
        </stisla::breadcrumb>
    </section>

    {{-- 2. Multiple Levels --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Multiple Levels</h2>
            <p class="text-sm text-gray-500">Any number of crumbs separated by the default chevron divider.</p>
        </div>

        <stisla::breadcrumb>
            <stisla::breadcrumb.item href="#">Home</stisla::breadcrumb.item>
            <stisla::breadcrumb.item href="#">Library</stisla::breadcrumb.item>
            <stisla::breadcrumb.item :current="true">Data</stisla::breadcrumb.item>
        </stisla::breadcrumb>
    </section>

    {{-- 3. With Icon --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. With Icon</h2>
            <p class="text-sm text-gray-500">Leading Lucide icons scaling with text.</p>
        </div>

        <stisla::breadcrumb>
            <stisla::breadcrumb.item href="#" icon="house">Home</stisla::breadcrumb.item>
            <stisla::breadcrumb.item href="#">Library</stisla::breadcrumb.item>
            <stisla::breadcrumb.item :current="true">Data</stisla::breadcrumb.item>
        </stisla::breadcrumb>
    </section>

    {{-- 4. String Divider --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. String Divider</h2>
            <p class="text-sm text-gray-500">Custom string divider using <code>divider="/"</code>.</p>
        </div>

        <stisla::breadcrumb divider="/">
            <stisla::breadcrumb.item href="#">Home</stisla::breadcrumb.item>
            <stisla::breadcrumb.item href="#">Library</stisla::breadcrumb.item>
            <stisla::breadcrumb.item :current="true">Data</stisla::breadcrumb.item>
        </stisla::breadcrumb>
    </section>

    {{-- 5. Embedded SVG Divider --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Embedded SVG Divider</h2>
            <p class="text-sm text-gray-500">URL-encoded SVG divider passed via <code>divider="..."</code>.</p>
        </div>

        <stisla::breadcrumb divider="url('data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%228%22 height=%228%22%3E%3Cpath d=%22M0 4h8M5 1l3 3-3 3%22 fill=%22none%22 stroke=%22%23999%22 stroke-width=%221%22/%3E%3C/svg%3E')">
            <stisla::breadcrumb.item href="#">Home</stisla::breadcrumb.item>
            <stisla::breadcrumb.item href="#">Library</stisla::breadcrumb.item>
            <stisla::breadcrumb.item :current="true">Data</stisla::breadcrumb.item>
        </stisla::breadcrumb>
    </section>

    {{-- 6. Customization / Chip Wrap --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Customization (Chip Wrap / :vars)</h2>
            <p class="text-sm text-gray-500">Wrapping trail in a chip pill using <code>:vars</code>.</p>
        </div>

        <stisla::breadcrumb :vars="['bg' => 'var(--color-surface-2)', 'radius' => 'var(--radius-full)', 'padding-inline' => '1rem', 'padding-block' => '0.5rem']" class="w-fit">
            <stisla::breadcrumb.item href="#" icon="house">Home</stisla::breadcrumb.item>
            <stisla::breadcrumb.item href="#">Settings</stisla::breadcrumb.item>
            <stisla::breadcrumb.item :current="true">Profile</stisla::breadcrumb.item>
        </stisla::breadcrumb>
    </section>
</div>
