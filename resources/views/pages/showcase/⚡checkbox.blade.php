<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto">
    {{-- 1. Basic Checkboxes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Basic Checkbox</h2>
            <p class="text-sm text-gray-500">Default checkbox and checked by default.</p>
        </div>

        <div class="field w-auto max-w-96 space-y-2">
            <stisla::checkbox id="defaultCheck" label="Default checkbox" />
            <stisla::checkbox id="checkedCheck" label="Checked by default" :checked="true" />
        </div>
    </section>

    {{-- 2. Inline Checkboxes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Inline Checkboxes</h2>
            <p class="text-sm text-gray-500">Items placed horizontally using <code>.field.field--inline</code> wrapper.</p>
        </div>

        <div class="field field--inline flex flex-wrap gap-4">
            <stisla::checkbox id="inlineCheck1" label="One" />
            <stisla::checkbox id="inlineCheck2" label="Two" />
            <stisla::checkbox id="inlineCheck3" label="Three" />
        </div>
    </section>

    {{-- 3. Indeterminate --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Indeterminate State</h2>
            <p class="text-sm text-gray-500">Set <code>:indeterminate="true"</code> for partially-selected group headers.</p>
        </div>

        <div class="field w-auto max-w-96">
            <stisla::checkbox id="indeterminateCheck" label="Select all" :indeterminate="true" />
        </div>
    </section>

    {{-- 4. Reverse --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Reversed Layout</h2>
            <p class="text-sm text-gray-500">Label on left and checkbox on right edge using <code>:reverse="true"</code>.</p>
        </div>

        <div class="field w-auto max-w-96">
            <stisla::checkbox id="reverseCheck" label="Reversed checkbox" :reverse="true" />
        </div>
    </section>

    {{-- 5. Disabled --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Disabled</h2>
            <p class="text-sm text-gray-500">Disabled unchecked and checked states.</p>
        </div>

        <div class="field w-auto max-w-96 space-y-2">
            <stisla::checkbox id="disabledCheck" label="Disabled checkbox" :disabled="true" />
            <stisla::checkbox id="disabledCheckedCheck" label="Disabled, checked" :checked="true" :disabled="true" />
        </div>
    </section>

    {{-- 6. Browser Validation --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Browser Validation (Required)</h2>
            <p class="text-sm text-gray-500">Required checkbox with native validation.</p>
        </div>

        <form class="flex flex-col gap-3 max-w-96" onsubmit="event.preventDefault()">
            <div class="field">
                <stisla::checkbox id="reqTerms" label="Accept the terms" :required="true" />
            </div>
            <button type="submit" class="button button--primary self-start">Submit</button>
        </form>
    </section>

    {{-- 7. Server Validation --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Server Validation (Invalid State)</h2>
            <p class="text-sm text-gray-500">Flagged with <code>:invalid="true"</code>.</p>
        </div>

        <div class="field w-auto max-w-96 space-y-2">
            <stisla::checkbox id="srvTerms" label="Accept the terms" :invalid="true" />
            <stisla::checkbox id="srvTermsChecked" label="Accept the terms (checked, still flagged)" :checked="true" :invalid="true" />
        </div>
    </section>

    {{-- 8. Without Labels --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. Bare Checkboxes (Without Labels)</h2>
            <p class="text-sm text-gray-500">Bare checkbox without label wrapper, useful for tables or toolbars.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::checkbox aria-label="Bare checkbox" />
            <stisla::checkbox aria-label="Bare checkbox, checked" :checked="true" />
        </div>
    </section>

    {{-- 9. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">9. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning checkbox corner radius and size via <code>:vars</code>.</p>
        </div>

        <div class="field w-auto max-w-96 space-y-2">
            <stisla::checkbox
                id="customCheck1"
                label="Sharp Corners (radius: 0px)"
                :checked="true"
                :vars="['radius' => '0px']"
            />
            <stisla::checkbox
                id="customCheck2"
                label="Larger Checkbox Size (1.5rem)"
                :checked="true"
                :vars="['size' => '1.5rem']"
            />
        </div>
    </section>
</div>
