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
            <h2 class="text-xl font-bold">1. Basic Button Group</h2>
            <p class="text-sm text-gray-500">Visual grouping for action buttons sharing outer corners and seam borders.</p>
        </div>

        <stisla::button-group label="Basic example">
            <stisla::button tone="primary">Left</stisla::button>
            <stisla::button tone="primary">Middle</stisla::button>
            <stisla::button tone="primary">Right</stisla::button>
        </stisla::button-group>
    </section>

    {{-- 2. Outline --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Outline Members</h2>
            <p class="text-sm text-gray-500">Outline members deduping adjacent borders into a single seam.</p>
        </div>

        <stisla::button-group label="Outline example">
            <stisla::button mode="outline" tone="neutral">Left</stisla::button>
            <stisla::button mode="outline" tone="neutral">Middle</stisla::button>
            <stisla::button mode="outline" tone="neutral">Right</stisla::button>
        </stisla::button-group>
    </section>

    {{-- 3. Mixed --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Mixed Members</h2>
            <p class="text-sm text-gray-500">Loud action paired with a quiet alternative locked together as one control.</p>
        </div>

        <stisla::button-group label="Mixed example">
            <stisla::button tone="primary">Publish</stisla::button>
            <stisla::button mode="outline" tone="neutral">Save draft</stisla::button>
        </stisla::button-group>
    </section>

    {{-- 4. Sizes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Sizes</h2>
            <p class="text-sm text-gray-500">Small, default, and large button groups scaling child buttons together.</p>
        </div>

        <div class="flex flex-col gap-3 items-start">
            <stisla::button-group size="sm" label="Small">
                <stisla::button mode="outline" tone="neutral">Left</stisla::button>
                <stisla::button mode="outline" tone="neutral">Middle</stisla::button>
                <stisla::button mode="outline" tone="neutral">Right</stisla::button>
            </stisla::button-group>

            <stisla::button-group label="Default">
                <stisla::button mode="outline" tone="neutral">Left</stisla::button>
                <stisla::button mode="outline" tone="neutral">Middle</stisla::button>
                <stisla::button mode="outline" tone="neutral">Right</stisla::button>
            </stisla::button-group>

            <stisla::button-group size="lg" label="Large">
                <stisla::button mode="outline" tone="neutral">Left</stisla::button>
                <stisla::button mode="outline" tone="neutral">Middle</stisla::button>
                <stisla::button mode="outline" tone="neutral">Right</stisla::button>
            </stisla::button-group>
        </div>
    </section>

    {{-- 5. With Icons --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. With Icons & Icon Only</h2>
            <p class="text-sm text-gray-500">Square action slots for toolbar control rows.</p>
        </div>

        <stisla::button-group label="Format">
            <stisla::button mode="outline" tone="neutral" :icon-only="true" icon="scissors" aria-label="Cut" />
            <stisla::button mode="outline" tone="neutral" :icon-only="true" icon="copy" aria-label="Copy" />
            <stisla::button mode="outline" tone="neutral" :icon-only="true" icon="clipboard" aria-label="Paste" />
        </stisla::button-group>
    </section>

    {{-- 6. Split Button --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Split Button</h2>
            <p class="text-sm text-gray-500">Primary action paired with a caret-only dropdown trigger.</p>
        </div>

        <stisla::button-group label="Save options">
            <stisla::button tone="primary">Save</stisla::button>
            <stisla::button tone="primary" :icon-only="true" icon="chevron-down" aria-label="More save options" aria-haspopup="menu" aria-expanded="false" />
        </stisla::button-group>
    </section>

    {{-- 7. Vertical --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Vertical Stacking</h2>
            <p class="text-sm text-gray-500">Stacking members vertically with <code>:vertical="true"</code>.</p>
        </div>

        <stisla::button-group :vertical="true" label="Vertical example">
            <stisla::button tone="primary">Top</stisla::button>
            <stisla::button tone="primary">Middle</stisla::button>
            <stisla::button tone="primary">Bottom</stisla::button>
        </stisla::button-group>
    </section>

    {{-- 8. Toolbar --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. Button Toolbar</h2>
            <p class="text-sm text-gray-500">Combining multiple groups under <code>&lt;stisla::button-toolbar&gt;</code>.</p>
        </div>

        <stisla::button-toolbar label="Toolbar with button groups">
            <stisla::button-group label="First group">
                <stisla::button mode="outline" tone="neutral">1</stisla::button>
                <stisla::button mode="outline" tone="neutral">2</stisla::button>
                <stisla::button mode="outline" tone="neutral">3</stisla::button>
            </stisla::button-group>

            <stisla::button-group label="Second group">
                <stisla::button mode="outline" tone="neutral">4</stisla::button>
                <stisla::button mode="outline" tone="neutral">5</stisla::button>
            </stisla::button-group>
        </stisla::button-toolbar>
    </section>

    {{-- 9. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">9. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Overriding <code>--button-group-radius</code> or <code>--button-toolbar-gap</code> via <code>:vars</code>.</p>
        </div>

        <stisla::button-group :vars="['radius' => '0px']" label="Squared corners">
            <stisla::button tone="primary">Left</stisla::button>
            <stisla::button tone="primary">Middle</stisla::button>
            <stisla::button tone="primary">Right</stisla::button>
        </stisla::button-group>
    </section>
</div>
