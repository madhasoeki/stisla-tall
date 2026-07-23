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
            <h2 class="text-xl font-bold">1. Basic List Group</h2>
            <p class="text-sm text-gray-500">Stacks rows on one shared rounded surface with dividers.</p>
        </div>

        <stisla::list-group class="max-w-sm w-full">
            <stisla::list-group.item icon="phone">
                <span>Phone</span>
                <span class="ms-auto text-muted-foreground">+62 812 3456 789</span>
            </stisla::list-group.item>

            <stisla::list-group.item icon="mail">
                <span>Email</span>
                <span class="ms-auto text-muted-foreground">steven@meridian.com</span>
            </stisla::list-group.item>

            <stisla::list-group.item icon="map-pin">
                <span>Location</span>
                <span class="ms-auto text-muted-foreground">San Diego, US</span>
            </stisla::list-group.item>
        </stisla::list-group>
    </section>

    {{-- 2. Seamless --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Seamless List Group</h2>
            <p class="text-sm text-gray-500">Drops outer frame and radius while keeping internal dividers using <code>:seamless="true"</code>.</p>
        </div>

        <stisla::list-group :seamless="true" class="max-w-sm w-full">
            <stisla::list-group.item>
                <span>Subtotal</span>
                <span class="ms-auto text-muted-foreground">$248.00</span>
            </stisla::list-group.item>

            <stisla::list-group.item>
                <span>Shipping</span>
                <span class="ms-auto text-muted-foreground">$12.00</span>
            </stisla::list-group.item>

            <stisla::list-group.item>
                <span>Estimated tax</span>
                <span class="ms-auto text-muted-foreground">$20.80</span>
            </stisla::list-group.item>

            <stisla::list-group.item>
                <span class="font-semibold">Total</span>
                <span class="ms-auto font-semibold">$280.80</span>
            </stisla::list-group.item>
        </stisla::list-group>
    </section>

    {{-- 3. Media Rows inside a Card --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Media Rows inside a Card</h2>
            <p class="text-sm text-gray-500">List group containing <code>&lt;stisla::media as="li"&gt;</code> components inside a card.</p>
        </div>

        <stisla::card class="max-w-xl w-full">
            <stisla::card.header>Integrations</stisla::card.header>

            <stisla::list-group>
                <stisla::media as="li">
                    <stisla::media.figure icon="github" />
                    <stisla::media.content title="GitHub" description="Sync issues and pull requests into your board." />
                    <stisla::media.action>
                        <stisla::button mode="outline" tone="neutral" size="sm">Disconnect</stisla::button>
                    </stisla::media.action>
                </stisla::media>

                <stisla::media as="li">
                    <stisla::media.figure icon="slack" />
                    <stisla::media.content title="Slack" description="Post deploy and incident alerts to a channel." />
                    <stisla::media.action>
                        <stisla::button mode="outline" tone="neutral" size="sm">Disconnect</stisla::button>
                    </stisla::media.action>
                </stisla::media>

                <stisla::media as="li">
                    <stisla::media.figure icon="hard-drive" />
                    <stisla::media.content title="Google Drive" description="Attach files from Drive to any record." />
                    <stisla::media.action>
                        <stisla::button tone="primary" size="sm">Connect</stisla::button>
                    </stisla::media.action>
                </stisla::media>
            </stisla::list-group>
        </stisla::card>
    </section>

    {{-- 4. Single Choice Radio --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Single Choice Radio Group</h2>
            <p class="text-sm text-gray-500">List group with <code>&lt;stisla::media :selectable="true" as="label"&gt;</code> containing radio inputs.</p>
        </div>

        <stisla::list-group as="div" role="radiogroup" aria-label="Plan" class="max-w-md w-full">
            <stisla::media :selectable="true" as="label">
                <stisla::media.figure as="span" icon="sprout" />
                <stisla::media.content as="span" title="Starter" description="For a solo project getting off the ground." />
                <stisla::media.action as="span">
                    <span class="font-semibold">$0</span>
                    <stisla::radio name="plan" aria-label="Starter" />
                </stisla::media.action>
            </stisla::media>

            <stisla::media :selectable="true" as="label">
                <stisla::media.figure as="span">
                    <stisla::icon-box tone="primary" icon="rocket" />
                </stisla::media.figure>
                <stisla::media.content as="span" title="Pro" description="For a growing team shipping every week." />
                <stisla::media.action as="span">
                    <span class="font-semibold">$29</span>
                    <stisla::radio name="plan" :checked="true" aria-label="Pro" />
                </stisla::media.action>
            </stisla::media>

            <stisla::media :selectable="true" as="label">
                <stisla::media.figure as="span" icon="building-2" />
                <stisla::media.content as="span" title="Business" description="SSO, audit logs, and priority support." />
                <stisla::media.action as="span">
                    <span class="font-semibold">$99</span>
                    <stisla::radio name="plan" aria-label="Business" />
                </stisla::media.action>
            </stisla::media>
        </stisla::list-group>
    </section>

    {{-- 5. Multiple Choice Checkbox --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Multiple Choice Checkbox Group</h2>
            <p class="text-sm text-gray-500">List group with selectable media items containing checkbox inputs.</p>
        </div>

        <stisla::list-group as="div" role="group" aria-label="Deploy regions" class="max-w-md w-full">
            <stisla::media :selectable="true" as="label">
                <stisla::media.figure as="span">
                    <stisla::icon-box tone="success" icon="globe" />
                </stisla::media.figure>
                <stisla::media.content as="span" title="US East" meta="Virginia · 12 ms" />
                <stisla::media.action as="span">
                    <stisla::checkbox :checked="true" aria-label="US East" />
                </stisla::media.action>
            </stisla::media>

            <stisla::media :selectable="true" as="label">
                <stisla::media.figure as="span">
                    <stisla::icon-box tone="success" icon="globe" />
                </stisla::media.figure>
                <stisla::media.content as="span" title="EU West" meta="Ireland · 38 ms" />
                <stisla::media.action as="span">
                    <stisla::checkbox :checked="true" aria-label="EU West" />
                </stisla::media.action>
            </stisla::media>

            <stisla::media :selectable="true" as="label">
                <stisla::media.figure as="span" icon="globe" />
                <stisla::media.content as="span" title="Asia Pacific" meta="Coming soon" />
                <stisla::media.action as="span">
                    <stisla::checkbox :disabled="true" aria-label="Asia Pacific" />
                </stisla::media.action>
            </stisla::media>
        </stisla::list-group>
    </section>

    {{-- 6. Horizontal --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Horizontal List Group</h2>
            <p class="text-sm text-gray-500">Laying rows side by side using <code>:horizontal="true"</code>.</p>
        </div>

        <stisla::list-group :horizontal="true" class="w-full">
            <stisla::media :vertical="true" as="li" class="flex-1">
                <stisla::media.meta>Revenue</stisla::media.meta>
                <stisla::media.title class="text-2xl">$48.2k</stisla::media.title>
                <stisla::media.description class="text-success">+12.4%</stisla::media.description>
            </stisla::media>

            <stisla::media :vertical="true" as="li" class="flex-1">
                <stisla::media.meta>Orders</stisla::media.meta>
                <stisla::media.title class="text-2xl">1,284</stisla::media.title>
                <stisla::media.description class="text-success">+3.1%</stisla::media.description>
            </stisla::media>

            <stisla::media :vertical="true" as="li" class="flex-1">
                <stisla::media.meta>Refunds</stisla::media.meta>
                <stisla::media.title class="text-2xl">27</stisla::media.title>
                <stisla::media.description class="text-danger">+0.8%</stisla::media.description>
            </stisla::media>
        </stisla::list-group>
    </section>

    {{-- 7. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning frame background or divider colors via <code>:vars</code>.</p>
        </div>

        <stisla::list-group :vars="['divider-color' => 'transparent', 'bg' => 'var(--color-surface-2)']" class="max-w-sm w-full">
            <stisla::list-group.item icon="settings">
                <span>No Dividers Item 1</span>
            </stisla::list-group.item>
            <stisla::list-group.item icon="user">
                <span>No Dividers Item 2</span>
            </stisla::list-group.item>
        </stisla::list-group>
    </section>
</div>
