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
            <h2 class="text-xl font-bold">1. Basic Expanded Navbar</h2>
            <p class="text-sm text-gray-500">Horizontal navbar that stays expanded at all widths using <code>:expand="true"</code>.</p>
        </div>

        <stisla::navbar :expand="true">
            <stisla::navbar.brand href="#">Stisla</stisla::navbar.brand>

            <stisla::navbar.menu>
                <stisla::navbar.nav>
                    <stisla::navbar.item>
                        <stisla::navbar.button href="#" :active="true">Dashboard</stisla::navbar.button>
                    </stisla::navbar.item>
                    <stisla::navbar.item>
                        <stisla::navbar.button href="#">Reports</stisla::navbar.button>
                    </stisla::navbar.item>
                    <stisla::navbar.item>
                        <stisla::navbar.button href="#">Settings</stisla::navbar.button>
                    </stisla::navbar.item>
                    <stisla::navbar.item>
                        <stisla::navbar.button :disabled="true">Admin</stisla::navbar.button>
                    </stisla::navbar.item>
                </stisla::navbar.nav>

                <stisla::button tone="primary" size="sm">New report</stisla::button>
            </stisla::navbar.menu>
        </stisla::navbar>
    </section>

    {{-- 2. Responsive fold --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Responsive Folding Navbar</h2>
            <p class="text-sm text-gray-500">Folds into a column behind the hamburger button below the <code>lg</code> breakpoint using <code>:expand="false"</code>.</p>
        </div>

        <stisla::navbar :expand="false">
            <stisla::navbar.brand href="#">Stisla</stisla::navbar.brand>
            <stisla::navbar.toggle />

            <stisla::navbar.menu>
                <stisla::navbar.nav>
                    <stisla::navbar.item>
                        <stisla::navbar.button href="#" :active="true">Dashboard</stisla::navbar.button>
                    </stisla::navbar.item>
                    <stisla::navbar.item>
                        <stisla::navbar.button href="#">Reports</stisla::navbar.button>
                    </stisla::navbar.item>
                    <stisla::navbar.item>
                        <stisla::navbar.button href="#">Settings</stisla::navbar.button>
                    </stisla::navbar.item>
                </stisla::navbar.nav>

                <stisla::button tone="primary" size="sm">New report</stisla::button>
            </stisla::navbar.menu>
        </stisla::navbar>
    </section>

    {{-- 3. Expand Breakpoints --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Expand Breakpoint Modifiers</h2>
            <p class="text-sm text-gray-500">Setting custom expand breakpoints using <code>expand="md"</code>.</p>
        </div>

        <stisla::navbar expand="md">
            <stisla::navbar.brand href="#">Medium Expand</stisla::navbar.brand>
            <stisla::navbar.toggle />

            <stisla::navbar.menu>
                <stisla::navbar.nav>
                    <stisla::navbar.item>
                        <stisla::navbar.button href="#" :active="true">Overview</stisla::navbar.button>
                    </stisla::navbar.item>
                    <stisla::navbar.item>
                        <stisla::navbar.button href="#">Analytics</stisla::navbar.button>
                    </stisla::navbar.item>
                </stisla::navbar.nav>

                <stisla::button mode="outline" tone="neutral" size="sm">Sign Out</stisla::button>
            </stisla::navbar.menu>
        </stisla::navbar>
    </section>

    {{-- 4. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning navbar background, button radius, and text color via <code>:vars</code>.</p>
        </div>

        <stisla::navbar :expand="true" :vars="['bg' => 'var(--color-surface-2)', 'button-radius' => '9999px']">
            <stisla::navbar.brand href="#">Custom Navbar</stisla::navbar.brand>

            <stisla::navbar.menu>
                <stisla::navbar.nav>
                    <stisla::navbar.item>
                        <stisla::navbar.button href="#" :active="true">Home</stisla::navbar.button>
                    </stisla::navbar.item>
                    <stisla::navbar.item>
                        <stisla::navbar.button href="#">Explore</stisla::navbar.button>
                    </stisla::navbar.item>
                </stisla::navbar.nav>

                <stisla::button tone="primary" size="sm">Get Started</stisla::button>
            </stisla::navbar.menu>
        </stisla::navbar>
    </section>
</div>
