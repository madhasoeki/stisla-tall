<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto">
    {{-- 1. Basic Tones --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Basic Tone Modifiers</h2>
            <p class="text-sm text-gray-500">Contextual alert feedback strips with tone modifiers.</p>
        </div>

        <div class="space-y-3">
            <stisla::alert tone="neutral" icon="info">Some neutral message here.</stisla::alert>
            <stisla::alert tone="primary" icon="info">Heads up, your trial ends in 3 days.</stisla::alert>
            <stisla::alert tone="success" icon="circle-check">Your changes have been saved successfully.</stisla::alert>
            <stisla::alert tone="warning" icon="triangle-alert">Some features may not work.</stisla::alert>
            <stisla::alert tone="danger" icon="circle-x">Payment failed. Check your card details.</stisla::alert>
            <stisla::alert tone="info" icon="info">Some useful information here.</stisla::alert>
        </div>
    </section>

    {{-- 2. Without Icon --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Without Icon</h2>
            <p class="text-sm text-gray-500">Alerts without leading icons reflow text naturally.</p>
        </div>

        <div class="space-y-3">
            <stisla::alert tone="neutral">Heads up, your trial ends in 3 days.</stisla::alert>
            <stisla::alert tone="success">Your changes have been saved successfully.</stisla::alert>
        </div>
    </section>

    {{-- 3. With Heading & Description --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. With Heading &amp; Description</h2>
            <p class="text-sm text-gray-500">Stacked layout using <code>title="..."</code> and <code>description="..."</code> or sub-components.</p>
        </div>

        <div class="space-y-3">
            <stisla::alert tone="neutral" icon="info" title="Alert Title" description="Alert Description" />

            <stisla::alert tone="info" icon="info">
                <stisla::alert.title>Heads up</stisla::alert.title>
                <stisla::alert.description>A new version is available. Refresh to load it.</stisla::alert.description>
            </stisla::alert>

            <stisla::alert tone="warning" icon="triangle-alert">
                <stisla::alert.title>Unsaved changes</stisla::alert.title>
                <stisla::alert.description>Leaving this page will discard your edits.</stisla::alert.description>
            </stisla::alert>

            <stisla::alert tone="danger" icon="circle-x">
                <stisla::alert.title>Payment failed</stisla::alert.title>
                <stisla::alert.description>We couldn't charge your card. Update billing details and retry.</stisla::alert.description>
            </stisla::alert>
        </div>
    </section>

    {{-- 4. Action Slot --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Action Slot</h2>
            <p class="text-sm text-gray-500">Trailing slot using <code>&lt;stisla::alert.action&gt;</code> for buttons and links.</p>
        </div>

        <div class="space-y-3">
            <stisla::alert tone="neutral" icon="info">
                <div>Message deleted successfully.</div>
                <stisla::alert.action>
                    <stisla::button tone="neutral" size="sm">Undo</stisla::button>
                </stisla::alert.action>
            </stisla::alert>

            <stisla::alert tone="warning" icon="triangle-alert">
                <div>Your session is about to expire.</div>
                <stisla::alert.action>
                    <stisla::button mode="ghost" tone="neutral" size="sm">Stay</stisla::button>
                    <stisla::button tone="neutral" size="sm">Extend</stisla::button>
                </stisla::alert.action>
            </stisla::alert>

            <stisla::alert tone="info" icon="info" title="New version available" description="Reload to pick up the latest changes.">
                <stisla::alert.action>
                    <stisla::button tone="primary" size="sm">Reload</stisla::button>
                </stisla::alert.action>
            </stisla::alert>
        </div>
    </section>

    {{-- 5. Dismissible --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Dismissible Alert</h2>
            <p class="text-sm text-gray-500">Client-side dismissal enabled via <code>:dismissible="true"</code>.</p>
        </div>

        <div class="space-y-3">
            <stisla::alert tone="success" icon="circle-check" :dismissible="true">
                <div>Your changes have been saved.</div>
            </stisla::alert>

            <stisla::alert tone="danger" icon="circle-x" title="Couldn't connect" description="We lost contact with the server. Try again in a moment." :dismissible="true" />
        </div>
    </section>

    {{-- 6. Inline Link --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Inline Link</h2>
            <p class="text-sm text-gray-500">Readable styled link using <code>&lt;stisla::alert.link&gt;</code>.</p>
        </div>

        <div class="space-y-3">
            <stisla::alert tone="neutral" icon="info">
                <div>A neutral alert with <stisla::alert.link href="#">a primary link</stisla::alert.link>.</div>
            </stisla::alert>

            <stisla::alert tone="info" icon="info">
                <div>An info alert with <stisla::alert.link href="#">an info-colored link</stisla::alert.link>.</div>
            </stisla::alert>
        </div>
    </section>

    {{-- 7. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning alert radius via <code>:vars</code>.</p>
        </div>

        <div class="space-y-3">
            <stisla::alert tone="primary" icon="info" :vars="['radius' => '0px']">
                <div>Custom sharp corner alert (radius: 0px).</div>
            </stisla::alert>
        </div>
    </section>
</div>
