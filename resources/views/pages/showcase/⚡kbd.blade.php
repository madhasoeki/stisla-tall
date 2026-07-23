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
            <h2 class="text-xl font-bold">1. Basic Key-Cap</h2>
            <p class="text-sm text-gray-500">Neutral fill with hairline rim for labeling single keyboard keys.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::kbd>?</stisla::kbd>
            <stisla::kbd>Esc</stisla::kbd>
            <stisla::kbd>Space</stisla::kbd>
            <stisla::kbd>Tab</stisla::kbd>
        </div>
    </section>

    {{-- 2. Combinations --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Nested Combinations</h2>
            <p class="text-sm text-gray-500">Nesting <code>&lt;stisla::kbd&gt;</code> elements lays out each key cap as a chip in a shortcut sequence.</p>
        </div>

        <div class="flex flex-wrap items-center gap-4">
            <stisla::kbd>
                <stisla::kbd>⌘</stisla::kbd>
                <stisla::kbd>K</stisla::kbd>
            </stisla::kbd>

            <stisla::kbd>
                <stisla::kbd>Ctrl</stisla::kbd>
                <stisla::kbd>Shift</stisla::kbd>
                <stisla::kbd>P</stisla::kbd>
            </stisla::kbd>

            <stisla::kbd>
                <stisla::kbd>⇧</stisla::kbd>
                <stisla::kbd>Enter</stisla::kbd>
            </stisla::kbd>
        </div>
    </section>

    {{-- 3. Separator --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Combinations with Separators</h2>
            <p class="text-sm text-gray-500">Adding explicit <code>+</code> separators between caps for screen reader clarity.</p>
        </div>

        <div class="flex flex-wrap items-center gap-4">
            <stisla::kbd>
                <stisla::kbd>Ctrl</stisla::kbd> + <stisla::kbd>C</stisla::kbd>
            </stisla::kbd>

            <stisla::kbd>
                <stisla::kbd>Alt</stisla::kbd> + <stisla::kbd>F4</stisla::kbd>
            </stisla::kbd>
        </div>
    </section>

    {{-- 4. In Running Text --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. In Running Text</h2>
            <p class="text-sm text-gray-500">Inline key caps inside long-form paragraph text.</p>
        </div>

        <div class="p-4 bg-surface rounded-lg border border-border">
            <p class="text-sm leading-relaxed">
                Press <stisla::kbd>?</stisla::kbd> on any docs page to open the shortcut sheet, or hit <stisla::kbd><stisla::kbd>⌘</stisla::kbd><stisla::kbd>K</stisla::kbd></stisla::kbd> to jump to search.
            </p>
        </div>
    </section>

    {{-- 5. Inside a Button --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Inside a Button</h2>
            <p class="text-sm text-gray-500">Pairing key caps with button labels for action hints.</p>
        </div>

        <div class="flex flex-wrap items-center gap-3">
            <stisla::button tone="neutral">
                Search <stisla::kbd>/</stisla::kbd>
            </stisla::button>

            <stisla::button mode="outline" tone="neutral">
                Command palette <stisla::kbd><stisla::kbd>⌘</stisla::kbd><stisla::kbd>K</stisla::kbd></stisla::kbd>
            </stisla::button>
        </div>
    </section>

    {{-- 6. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning key-cap colors and sizing using <code>:vars</code>.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::kbd :vars="['font-size' => '0.9rem', 'bg' => 'var(--color-primary-subtle)', 'color' => 'var(--color-primary)']">
                Custom Styled Key
            </stisla::kbd>
        </div>
    </section>
</div>
