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
            <h2 class="text-xl font-bold">1. Basic Empty State</h2>
            <p class="text-sm text-gray-500">Centred block with media icon, title, guidance text, and primary action.</p>
        </div>

        <stisla::empty-state>
            <stisla::empty-state.media icon="inbox" />
            <stisla::empty-state.title>No messages</stisla::empty-state.title>
            <stisla::empty-state.text>Your inbox is empty. New messages will show up here.</stisla::empty-state.text>
            <stisla::empty-state.action>
                <stisla::button tone="primary">Compose</stisla::button>
            </stisla::empty-state.action>
        </stisla::empty-state>
    </section>

    {{-- 2. With actions --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. With Actions</h2>
            <p class="text-sm text-gray-500">Primary plus secondary action controls stacked cleanly.</p>
        </div>

        <stisla::empty-state>
            <stisla::empty-state.media icon="folder-plus" />
            <stisla::empty-state.title>No projects yet</stisla::empty-state.title>
            <stisla::empty-state.text>Create your first project to start organizing your work.</stisla::empty-state.text>
            <stisla::empty-state.action>
                <stisla::button tone="primary" icon="plus">New project</stisla::button>
                <stisla::button mode="outline" tone="neutral">Import</stisla::button>
            </stisla::empty-state.action>
        </stisla::empty-state>
    </section>

    {{-- 3. Tones --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Tone Modifiers</h2>
            <p class="text-sm text-gray-500">Recolouring media element for error (danger) or done (success) states.</p>
        </div>

        <div class="space-y-8">
            <stisla::empty-state tone="danger">
                <stisla::empty-state.media icon="circle-alert" />
                <stisla::empty-state.title>Something went wrong</stisla::empty-state.title>
                <stisla::empty-state.text>We couldn't load your reports. Try again in a moment.</stisla::empty-state.text>
                <stisla::empty-state.action>
                    <stisla::button mode="outline" tone="neutral">Retry</stisla::button>
                </stisla::empty-state.action>
            </stisla::empty-state>

            <stisla::empty-state tone="success">
                <stisla::empty-state.media icon="circle-check" />
                <stisla::empty-state.title>All caught up</stisla::empty-state.title>
                <stisla::empty-state.text>You've cleared every task on your list.</stisla::empty-state.text>
            </stisla::empty-state>
        </div>
    </section>

    {{-- 4. Small inside Card --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Small Variant inside Card</h2>
            <p class="text-sm text-gray-500">Tightened padding and shrunk media for empty regions inside cards or tables with <code>:sm="true"</code>.</p>
        </div>

        <stisla::card>
            <stisla::card.body>
                <stisla::empty-state :sm="true">
                    <stisla::empty-state.media icon="search-x" />
                    <stisla::empty-state.title>No results</stisla::empty-state.title>
                    <stisla::empty-state.text>No items match your filters.</stisla::empty-state.text>
                </stisla::empty-state>
            </stisla::card.body>
        </stisla::card>
    </section>

    {{-- 5. Richer Media --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Richer Media (Icon Box & Spinner)</h2>
            <p class="text-sm text-gray-500">Media slot shedding circle when hosting custom icon-box or spinner elements.</p>
        </div>

        <div class="flex flex-wrap gap-8 items-center justify-center">
            <stisla::empty-state :sm="true">
                <stisla::empty-state.media>
                    <stisla::icon-box tone="primary" :circle="true" size="lg" icon="users" />
                </stisla::empty-state.media>
                <stisla::empty-state.title>No team members</stisla::empty-state.title>
                <stisla::empty-state.text>Invite people to collaborate.</stisla::empty-state.text>
            </stisla::empty-state>

            <stisla::empty-state :sm="true">
                <stisla::empty-state.media>
                    <span class="spinner" aria-hidden="true"></span>
                </stisla::empty-state.media>
                <stisla::empty-state.title>Loading</stisla::empty-state.title>
                <stisla::empty-state.text>Fetching your latest data.</stisla::empty-state.text>
            </stisla::empty-state>
        </div>
    </section>

    {{-- 6. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Overriding media size and max width via <code>:vars</code>.</p>
        </div>

        <stisla::empty-state :vars="['media-size' => '4rem', 'max-width' => '30rem']">
            <stisla::empty-state.media icon="sparkles" />
            <stisla::empty-state.title>Custom Media Size</stisla::empty-state.title>
            <stisla::empty-state.text>Retuned block with custom CSS variables.</stisla::empty-state.text>
        </stisla::empty-state>
    </section>
</div>
