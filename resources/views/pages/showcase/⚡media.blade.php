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
            <h2 class="text-xl font-bold">1. Basic Media Row</h2>
            <p class="text-sm text-gray-500">Row pairing media figure, content, and trailing action control.</p>
        </div>

        <stisla::media class="max-w-md">
            <stisla::media.figure>
                <stisla::icon-box tone="primary" icon="package" />
            </stisla::media.figure>
            <stisla::media.content>
                <stisla::media.title>Order #ATL-2918</stisla::media.title>
                <stisla::media.description>Out for delivery, arrives today by 6 PM.</stisla::media.description>
            </stisla::media.content>
            <stisla::media.action>
                <stisla::button tone="primary" size="sm">Track</stisla::button>
            </stisla::media.action>
        </stisla::media>
    </section>

    {{-- 2. Title, description, meta --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Title, Description, and Meta</h2>
            <p class="text-sm text-gray-500">Adding a secondary meta line below description with an actor avatar figure.</p>
        </div>

        <stisla::media class="max-w-lg">
            <stisla::media.figure>
                <stisla::avatar src="https://i.pravatar.cc/96?img=12" fallback="JC" shape="circle" />
            </stisla::media.figure>
            <stisla::media.content>
                <stisla::media.title>Joseph Cooper</stisla::media.title>
                <stisla::media.description>Pushed 3 commits to atlas/main.</stisla::media.description>
                <stisla::media.meta>2 minutes ago</stisla::media.meta>
            </stisla::media.content>
            <stisla::media.action>
                <stisla::button mode="ghost" tone="neutral" size="sm" icon="heart" :icon-only="true" aria-label="Like" />
            </stisla::media.action>
        </stisla::media>
    </section>

    {{-- 3. Vertical --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Vertical Media Tiles</h2>
            <p class="text-sm text-gray-500">Stacking parts top to bottom using <code>:vertical="true"</code> (ideal for stat tiles).</p>
        </div>

        <div class="flex flex-wrap gap-4 max-w-lg">
            <stisla::media :vertical="true" class="flex-1 min-w-48">
                <stisla::media.meta>Monthly revenue</stisla::media.meta>
                <stisla::media.title class="text-2xl">$48,210</stisla::media.title>
                <stisla::media.description class="text-success">+12.4% from last month</stisla::media.description>
            </stisla::media>

            <stisla::media :vertical="true" class="flex-1 min-w-48">
                <stisla::media.meta>Churn rate</stisla::media.meta>
                <stisla::media.title class="text-2xl">1.8%</stisla::media.title>
                <stisla::media.description class="text-danger">+0.4% from last month</stisla::media.description>
            </stisla::media>
        </div>
    </section>

    {{-- 4. Seamless rows in a card --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Seamless Rows in a Card</h2>
            <p class="text-sm text-gray-500">Flush items shedding borders & backgrounds using <code>:seamless="true"</code> inside a card.</p>
        </div>

        <stisla::card class="max-w-md w-full">
            <stisla::card.header>Team members</stisla::card.header>

            <stisla::media :seamless="true">
                <stisla::media.figure>
                    <stisla::avatar src="https://i.pravatar.cc/96?img=47" fallback="MT" shape="circle" />
                </stisla::media.figure>
                <stisla::media.content>
                    <stisla::media.title>Maya Tanaka</stisla::media.title>
                    <stisla::media.meta>maya@kredibel.com</stisla::media.meta>
                </stisla::media.content>
                <stisla::media.action>
                    <stisla::button mode="outline" tone="neutral" size="sm">Following</stisla::button>
                </stisla::media.action>
            </stisla::media>

            <hr class="separator" />

            <stisla::media :seamless="true">
                <stisla::media.figure>
                    <stisla::avatar src="https://i.pravatar.cc/96?img=32" fallback="PR" shape="circle" />
                </stisla::media.figure>
                <stisla::media.content>
                    <stisla::media.title>Priya Reddy</stisla::media.title>
                    <stisla::media.meta>priya@kredibel.com</stisla::media.meta>
                </stisla::media.content>
                <stisla::media.action>
                    <stisla::button tone="primary" size="sm">Follow</stisla::button>
                </stisla::media.action>
            </stisla::media>
        </stisla::card>
    </section>

    {{-- 5. Notification settings --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Notification Settings</h2>
            <p class="text-sm text-gray-500">Pairing icon boxes with switch controls in seamless card rows.</p>
        </div>

        <stisla::card class="max-w-lg">
            <stisla::card.header>Notification preferences</stisla::card.header>

            <stisla::media :seamless="true">
                <stisla::media.figure>
                    <stisla::icon-box tone="primary" icon="bell" />
                </stisla::media.figure>
                <stisla::media.content>
                    <stisla::media.title>Push notifications</stisla::media.title>
                    <stisla::media.description>Real-time alerts on this device for mentions and direct replies.</stisla::media.description>
                </stisla::media.content>
                <stisla::media.action>
                    <stisla::switch size="lg" aria-label="Push notifications" :checked="true" />
                </stisla::media.action>
            </stisla::media>

            <stisla::media :seamless="true">
                <stisla::media.figure>
                    <stisla::icon-box tone="info" icon="mail" />
                </stisla::media.figure>
                <stisla::media.content>
                    <stisla::media.title>Email digest</stisla::media.title>
                    <stisla::media.description>A single recap email each Monday with last week's activity.</stisla::media.description>
                </stisla::media.content>
                <stisla::media.action>
                    <stisla::switch size="lg" aria-label="Email digest" :checked="true" />
                </stisla::media.action>
            </stisla::media>
        </stisla::card>
    </section>

    {{-- 6. Payment methods --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Payment Methods</h2>
            <p class="text-sm text-gray-500">Card rows with brand icons and status badges.</p>
        </div>

        <stisla::card class="max-w-lg w-full">
            <stisla::card.header>Payment methods</stisla::card.header>

            <stisla::media :seamless="true">
                <stisla::media.figure>
                    <stisla::icon-box icon="credit-card" />
                </stisla::media.figure>
                <stisla::media.content>
                    <stisla::media.title>Visa ending in 4242</stisla::media.title>
                    <stisla::media.meta>Expires 12 / 2027</stisla::media.meta>
                </stisla::media.content>
                <stisla::media.action>
                    <stisla::badge tone="success">Default</stisla::badge>
                </stisla::media.action>
            </stisla::media>

            <stisla::media :seamless="true">
                <stisla::media.figure>
                    <stisla::icon-box icon="building-2" />
                </stisla::media.figure>
                <stisla::media.content>
                    <stisla::media.title>Bank transfer · Mandiri</stisla::media.title>
                    <stisla::media.meta>Account ending in 0073</stisla::media.meta>
                </stisla::media.content>
            </stisla::media>
        </stisla::card>
    </section>

    {{-- 7. File list --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. File List with Multiple Actions</h2>
            <p class="text-sm text-gray-500">Multiple trailing icon buttons pinned to the inline end.</p>
        </div>

        <stisla::card class="max-w-lg">
            <stisla::card.header>Recent files</stisla::card.header>

            <stisla::media :seamless="true">
                <stisla::media.figure>
                    <stisla::icon-box tone="primary" icon="file-text" />
                </stisla::media.figure>
                <stisla::media.content>
                    <stisla::media.title>design-brief.pdf</stisla::media.title>
                    <stisla::media.meta>2.4 MB · Edited yesterday by Maya</stisla::media.meta>
                </stisla::media.content>
                <stisla::media.action>
                    <stisla::button mode="ghost" tone="neutral" size="sm" icon="download" :icon-only="true" aria-label="Download" />
                    <stisla::button mode="ghost" tone="neutral" size="sm" icon="trash-2" :icon-only="true" aria-label="Delete" />
                </stisla::media.action>
            </stisla::media>
        </stisla::card>
    </section>

    {{-- 8. Standalone rows --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. Standalone Freestanding List</h2>
            <p class="text-sm text-gray-500">Freestanding media list outside of cards with product images.</p>
        </div>

        <div class="flex flex-col gap-3 max-w-lg">
            <stisla::media>
                <stisla::media.figure>
                    <img src="https://images.unsplash.com/photo-1587829741301-dc798b83add3?auto=format&fit=crop&w=200&h=200" alt="" width="56" height="56" class="rounded-md object-cover" />
                </stisla::media.figure>
                <stisla::media.content>
                    <stisla::media.title>Keychron K2 Pro</stisla::media.title>
                    <stisla::media.description>75% wireless mechanical with brown switches.</stisla::media.description>
                    <stisla::media.meta>$179.00</stisla::media.meta>
                </stisla::media.content>
                <stisla::media.action>
                    <stisla::button tone="primary" icon="plus" :icon-only="true" aria-label="Add" />
                </stisla::media.action>
            </stisla::media>
        </div>
    </section>

    {{-- 9. Card-style radio --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">9. Card-Style Radio Selection</h2>
            <p class="text-sm text-gray-500">Interactive selectable rows bound to radio controls using <code>:selectable="true" as="label"</code>.</p>
        </div>

        <div role="radiogroup" aria-label="Delivery speed" class="flex flex-col gap-3 max-w-lg">
            <stisla::media :selectable="true" as="label">
                <stisla::media.figure as="span">
                    <stisla::icon-box tone="primary" icon="zap" />
                </stisla::media.figure>
                <stisla::media.content as="span">
                    <stisla::media.title as="span">Express delivery</stisla::media.title>
                    <stisla::media.description as="span">Arrives next business day. Order before 2 PM to ship today.</stisla::media.description>
                    <stisla::media.meta as="span">$24.00</stisla::media.meta>
                </stisla::media.content>
                <stisla::media.action as="span">
                    <stisla::radio name="delivery" :checked="true" />
                </stisla::media.action>
            </stisla::media>

            <stisla::media :selectable="true" as="label">
                <stisla::media.figure as="span">
                    <stisla::icon-box icon="truck" />
                </stisla::media.figure>
                <stisla::media.content as="span">
                    <stisla::media.title as="span">Standard delivery</stisla::media.title>
                    <stisla::media.description as="span">Three to five business days with tracking.</stisla::media.description>
                    <stisla::media.meta as="span">$6.00</stisla::media.meta>
                </stisla::media.content>
                <stisla::media.action as="span">
                    <stisla::radio name="delivery" />
                </stisla::media.action>
            </stisla::media>
        </div>
    </section>

    {{-- 10. Card-style checkbox --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">10. Card-Style Checkbox Selection</h2>
            <p class="text-sm text-gray-500">Selectable option rows bound to checkbox inputs.</p>
        </div>

        <fieldset class="flex flex-col gap-3 max-w-lg border-0 p-0 m-0">
            <stisla::media :selectable="true" as="label">
                <stisla::media.figure as="span">
                    <stisla::icon-box tone="info" icon="shield-check" />
                </stisla::media.figure>
                <stisla::media.content as="span">
                    <stisla::media.title as="span">Daily backups</stisla::media.title>
                    <stisla::media.description as="span">Snapshot every database at 02:00 and keep 30 days.</stisla::media.description>
                    <stisla::media.meta as="span">+$9 / month</stisla::media.meta>
                </stisla::media.content>
                <stisla::media.action as="span">
                    <stisla::checkbox :checked="true" />
                </stisla::media.action>
            </stisla::media>
        </fieldset>
    </section>

    {{-- 11. Listbox option --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">11. Listbox Option</h2>
            <p class="text-sm text-gray-500">Driving selection via <code>aria-selected="true"</code> on list items using <code>as="li"</code>.</p>
        </div>

        <ul role="listbox" aria-label="Assignee" class="flex flex-col gap-2 max-w-md list-none p-0 m-0">
            <stisla::media :selectable="true" as="li" role="option" tabindex="0" aria-selected="true">
                <stisla::media.figure>
                    <stisla::avatar src="https://i.pravatar.cc/96?img=32" fallback="PR" shape="circle" />
                </stisla::media.figure>
                <stisla::media.content>
                    <stisla::media.title>Priya Reddy</stisla::media.title>
                    <stisla::media.meta>Reviewer · 4 open</stisla::media.meta>
                </stisla::media.content>
                <stisla::media.action>
                    <i data-lucide="check" class="text-primary"></i>
                </stisla::media.action>
            </stisla::media>
        </ul>
    </section>

    {{-- 12. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">12. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning padding and background using <code>:vars</code>.</p>
        </div>

        <stisla::media :vars="['padding-block' => '1.25rem', 'bg' => 'var(--color-surface-2)']" class="max-w-md">
            <stisla::media.figure icon="sparkles" />
            <stisla::media.content title="Custom Padded Row" description="Retuned with custom CSS properties." />
        </stisla::media>
    </section>
</div>
