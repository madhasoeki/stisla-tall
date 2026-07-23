<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto">
    {{-- 1. Triggering --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Triggering</h2>
            <p class="text-sm text-gray-500">Imperative API via <code>Stisla.toast()</code>, <code>.success()</code>, <code>.error()</code>, and <code>.promise()</code> helpers.</p>
        </div>

        <div class="flex flex-wrap items-center gap-3">
            <stisla::button tone="neutral" onclick="Stisla.toast({ title: 'Heads up', description: 'Your export is ready to download.' })">Show toast</stisla::button>
            <stisla::button tone="neutral" onclick="Stisla.toast.success('Changes saved')">Success</stisla::button>
            <stisla::button tone="neutral" onclick="Stisla.toast.error('Upload failed')">Error</stisla::button>
            <stisla::button tone="neutral" onclick="Stisla.toast({ title: 'New message', description: 'Priya sent you a message.', action: { label: 'Reply' } })">With action</stisla::button>
            <stisla::button tone="neutral" onclick="Stisla.toast.promise(new Promise(function(res){ setTimeout(res, 1600); }), { loading: 'Saving…', success: 'Saved', error: 'Failed' })">Promise</stisla::button>
        </div>
    </section>

    {{-- 2. Basic --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Basic</h2>
            <p class="text-sm text-gray-500">Grid layout of icon, content (header + optional body), and close chip.</p>
        </div>

        <div class="space-y-3 max-w-md">
            <stisla::toast>
                <stisla::toast.icon icon="bell" />
                <stisla::toast.content>
                    <stisla::toast.header>Report ready</stisla::toast.header>
                    <stisla::toast.body>Your weekly export finished and is ready to download.</stisla::toast.body>
                </stisla::toast.content>
                <stisla::toast.close />
            </stisla::toast>

            <stisla::toast>
                <stisla::toast.icon icon="circle-check" />
                <stisla::toast.content>
                    <stisla::toast.header>Changes saved</stisla::toast.header>
                </stisla::toast.content>
                <stisla::toast.close />
            </stisla::toast>
        </div>
    </section>

    {{-- 3. Intents --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Intents</h2>
            <p class="text-sm text-gray-500">Tone modifiers shift icon color while surface stays neutral: <code>tone="success|warning|danger|info"</code>.</p>
        </div>

        <div class="space-y-3 max-w-md">
            <stisla::toast tone="success">
                <stisla::toast.icon icon="circle-check" />
                <stisla::toast.content><stisla::toast.header>Payment received</stisla::toast.header></stisla::toast.content>
                <stisla::toast.close />
            </stisla::toast>

            <stisla::toast tone="warning">
                <stisla::toast.icon icon="triangle-alert" />
                <stisla::toast.content><stisla::toast.header>Storage almost full</stisla::toast.header></stisla::toast.content>
                <stisla::toast.close />
            </stisla::toast>

            <stisla::toast tone="danger">
                <stisla::toast.icon icon="circle-x" />
                <stisla::toast.content><stisla::toast.header>Upload failed</stisla::toast.header></stisla::toast.content>
                <stisla::toast.close />
            </stisla::toast>

            <stisla::toast tone="info">
                <stisla::toast.icon icon="info" />
                <stisla::toast.content><stisla::toast.header>A new version is available</stisla::toast.header></stisla::toast.content>
                <stisla::toast.close />
            </stisla::toast>
        </div>
    </section>

    {{-- 4. Timestamp and actions --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Timestamp and actions</h2>
            <p class="text-sm text-gray-500">Adding <code>&lt;stisla::toast.timestamp&gt;</code> and <code>&lt;stisla::toast.action&gt;</code> controls.</p>
        </div>

        <div class="max-w-md">
            <stisla::toast>
                <stisla::toast.icon icon="user-plus" />
                <stisla::toast.content>
                    <stisla::toast.header>Priya invited you <stisla::toast.timestamp>2 mins ago</stisla::toast.timestamp></stisla::toast.header>
                    <stisla::toast.body>You have been added to the Northwind project.</stisla::toast.body>
                    <stisla::toast.action>
                        <stisla::button size="sm" tone="primary">Accept</stisla::button>
                        <stisla::button size="sm" mode="ghost" tone="neutral" data-stisla-toast-dismiss>Dismiss</stisla::button>
                    </stisla::toast.action>
                </stisla::toast.content>
                <stisla::toast.close />
            </stisla::toast>
        </div>
    </section>

    {{-- 5. Placement --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Placement</h2>
            <p class="text-sm text-gray-500">A <code>&lt;stisla::toast.region&gt;</code> pins toasts to a screen corner (e.g. <code>placement="top-end"</code>).</p>
        </div>

        <div class="p-6 bg-slate-100 rounded-lg relative min-h-64 border border-slate-200">
            <p class="text-muted-foreground m-0">Page content. The region floats over the top-end corner of this frame.</p>

            <stisla::toast.region name="frame-demo" placement="top-end" class="!absolute">
                <stisla::toast tone="success">
                    <stisla::toast.icon icon="circle-check" />
                    <stisla::toast.content><stisla::toast.header>Saved</stisla::toast.header></stisla::toast.content>
                    <stisla::toast.close />
                </stisla::toast>
                <stisla::toast>
                    <stisla::toast.icon icon="bell" />
                    <stisla::toast.content>
                        <stisla::toast.header>Reminder</stisla::toast.header>
                        <stisla::toast.body>Stand-up starts in five minutes.</stisla::toast.body>
                    </stisla::toast.content>
                    <stisla::toast.close />
                </stisla::toast>
            </stisla::toast.region>
        </div>
    </section>

    {{-- 6. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Customization</h2>
            <p class="text-sm text-gray-500">Retuning toast background and corner radius using <code>:vars</code>.</p>
        </div>

        <div class="max-w-md">
            <stisla::toast :vars="['bg' => 'oklch(0.96 0.02 260)', 'radius' => '1rem']">
                <stisla::toast.icon icon="sparkles" />
                <stisla::toast.content>
                    <stisla::toast.header>Custom Retuned Surface</stisla::toast.header>
                    <stisla::toast.body>This toast uses custom background tint and corner radius via <code>:vars</code>.</stisla::toast.body>
                </stisla::toast.content>
                <stisla::toast.close />
            </stisla::toast>
        </div>
    </section>
</div>
