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
            <h2 class="text-xl font-bold">1. Basic Card with Form</h2>
            <p class="text-sm text-gray-500">Simple card containing a form stack.</p>
        </div>

        <stisla::card class="w-full max-w-sm">
            <stisla::card.body>
                <stisla::card.title>Sign in</stisla::card.title>
                <stisla::card.text>Welcome back. Enter your details to continue.</stisla::card.text>

                <form class="flex flex-col gap-4 w-full mt-4" onsubmit="event.preventDefault()">
                    <stisla::field label="Email" for="cardLoginEmail">
                        <stisla::input type="email" id="cardLoginEmail" placeholder="you@example.com" />
                    </stisla::field>

                    <stisla::field label="Password" for="cardLoginPwd">
                        <stisla::input type="password" id="cardLoginPwd" />
                    </stisla::field>

                    <stisla::checkbox label="Remember me" id="cardLoginRemember" />

                    <stisla::button type="submit" tone="primary">Sign in</stisla::button>
                </form>
            </stisla::card.body>
        </stisla::card>
    </section>

    {{-- 2. Title, Subtitle, Text, Links --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Title, Subtitle, Text, Links</h2>
            <p class="text-sm text-gray-500">Fixed typography scaling and muted subtitle styling.</p>
        </div>

        <stisla::card class="w-72">
            <stisla::card.body>
                <stisla::card.title>Card title</stisla::card.title>
                <stisla::card.subtitle>Card subtitle</stisla::card.subtitle>
                <stisla::card.text>Some quick example text to build on the card title and make up the bulk of the card's content.</stisla::card.text>
                <stisla::card.link href="#">Card link</stisla::card.link>
            </stisla::card.body>
        </stisla::card>
    </section>

    {{-- 3. Images --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Images & Overlay</h2>
            <p class="text-sm text-gray-500">Position-aware top images and content overlay containers.</p>
        </div>

        <div class="flex flex-wrap gap-6 items-start">
            <stisla::card class="w-72">
                <stisla::card.image src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=900&q=70" alt="Mountain landscape" />
                <stisla::card.body>
                    <stisla::card.title>Image top</stisla::card.title>
                    <stisla::card.text>A card with supporting text below.</stisla::card.text>
                </stisla::card.body>
            </stisla::card>

            <stisla::card class="w-72 relative">
                <stisla::card.image src="https://images.unsplash.com/photo-1503264116251-35a269479413?auto=format&fit=crop&w=900&q=60" alt="Forest path" />
                <stisla::card.overlay>
                    <stisla::card.title class="text-white">Image overlay</stisla::card.title>
                    <stisla::card.text class="text-white/80">Supporting text laid over the image.</stisla::card.text>
                </stisla::card.overlay>
            </stisla::card>
        </div>
    </section>

    {{-- 4. Header, Body, Footer --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Header, Body, Footer & Action</h2>
            <p class="text-sm text-gray-500">Full layout stack with trailing action controls in header.</p>
        </div>

        <stisla::card class="w-88">
            <stisla::card.header>
                Featured
                <stisla::card.action>
                    <stisla::button tone="neutral" size="sm">Action</stisla::button>
                </stisla::card.action>
            </stisla::card.header>
            <stisla::card.body>
                <stisla::card.title>Special title treatment</stisla::card.title>
                <stisla::card.text>With supporting text below as a natural lead-in to additional content.</stisla::card.text>
                <stisla::button tone="primary">Go somewhere</stisla::button>
            </stisla::card.body>
            <stisla::card.footer>
                <stisla::card.subtitle>2 days ago</stisla::card.subtitle>
            </stisla::card.footer>
        </stisla::card>
    </section>

    {{-- 5. Heading Row --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Heading Row inside Body</h2>
            <p class="text-sm text-gray-500">Section sub-header with end action slot.</p>
        </div>

        <stisla::card class="w-full max-w-sm">
            <stisla::card.body>
                <stisla::card.heading>
                    <stisla::card.title as="span">Recent activity</stisla::card.title>
                    <stisla::card.action>
                        <stisla::card.link href="#">See all</stisla::card.link>
                    </stisla::card.action>
                </stisla::card.heading>
                <stisla::card.text>Three new comments and a deploy since your last visit.</stisla::card.text>
            </stisla::card.body>
        </stisla::card>
    </section>

    {{-- 6. Alternate Header --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Alternate Header</h2>
            <p class="text-sm text-gray-500">Opting onto surface-2 background with <code>:alt="true"</code>.</p>
        </div>

        <div class="flex flex-wrap gap-6 items-start">
            <stisla::card class="w-72">
                <stisla::card.header>Default header</stisla::card.header>
                <stisla::card.body>
                    <stisla::card.text>Header inherits card body background.</stisla::card.text>
                </stisla::card.body>
            </stisla::card>

            <stisla::card class="w-72">
                <stisla::card.header :alt="true">Alt header</stisla::card.header>
                <stisla::card.body>
                    <stisla::card.text>Header sits on alt surface-2 background.</stisla::card.text>
                </stisla::card.body>
            </stisla::card>
        </div>
    </section>

    {{-- 7. Small Header --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Small Header</h2>
            <p class="text-sm text-gray-500">Tightening header row height for dense layouts with <code>:sm="true"</code>.</p>
        </div>

        <div class="flex flex-wrap gap-6 items-start">
            <stisla::card class="w-72">
                <stisla::card.header>Default header</stisla::card.header>
                <stisla::card.body>
                    <stisla::card.text>Standard header height.</stisla::card.text>
                </stisla::card.body>
            </stisla::card>

            <stisla::card class="w-72">
                <stisla::card.header :sm="true">Small header</stisla::card.header>
                <stisla::card.body>
                    <stisla::card.text>Tighter header height for dense rows.</stisla::card.text>
                </stisla::card.body>
            </stisla::card>
        </div>
    </section>

    {{-- 8. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning radius and shadow via <code>:vars</code>.</p>
        </div>

        <stisla::card :vars="['radius' => '0px', 'bg' => 'var(--color-surface-2)']" class="w-72">
            <stisla::card.body>
                <stisla::card.title>Flat Squared Card</stisla::card.title>
                <stisla::card.text>Custom surface background with zero corner radius.</stisla::card.text>
            </stisla::card.body>
        </stisla::card>
    </section>
</div>
