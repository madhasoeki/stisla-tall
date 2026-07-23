<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto">
    {{-- 1. Basic Radio Group --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Basic Radio Group</h2>
            <p class="text-sm text-gray-500">Group of radios with a shared <code>name</code> attribute.</p>
        </div>

        <div class="field w-auto max-w-96 space-y-2">
            <stisla::radio name="defaultRadio" id="defaultRadio1" label="First option" value="1" :checked="true" />
            <stisla::radio name="defaultRadio" id="defaultRadio2" label="Second option" value="2" />
            <stisla::radio name="defaultRadio" id="defaultRadio3" label="Third option" value="3" />
        </div>
    </section>

    {{-- 2. Inline Radio Group --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Inline Radio Group</h2>
            <p class="text-sm text-gray-500">Items placed horizontally using <code>.field.field--inline</code> wrapper.</p>
        </div>

        <div class="field field--inline flex flex-wrap gap-4">
            <stisla::radio name="inlineRadio" id="inlineRadio1" label="One" value="1" :checked="true" />
            <stisla::radio name="inlineRadio" id="inlineRadio2" label="Two" value="2" />
            <stisla::radio name="inlineRadio" id="inlineRadio3" label="Three" value="3" />
        </div>
    </section>

    {{-- 3. Reverse Layout --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Reversed Radio Layout</h2>
            <p class="text-sm text-gray-500">Label on left and radio on right edge using <code>:reverse="true"</code>.</p>
        </div>

        <div class="field w-auto max-w-96">
            <stisla::radio name="reverseRadio" id="reverseRadio" label="Reversed radio" value="1" :checked="true" :reverse="true" />
        </div>
    </section>

    {{-- 4. Disabled --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Disabled Radio Group</h2>
            <p class="text-sm text-gray-500">Disabled unselected and selected radio inputs.</p>
        </div>

        <div class="field w-auto max-w-96 space-y-2">
            <stisla::radio name="disabledRadio" id="disabledRadio1" label="Disabled radio" value="1" :disabled="true" />
            <stisla::radio name="disabledRadio" id="disabledRadio2" label="Disabled, selected" value="2" :checked="true" :disabled="true" />
        </div>
    </section>

    {{-- 5. Browser Validation --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Browser Validation (Required)</h2>
            <p class="text-sm text-gray-500">Required radio group with native validation.</p>
        </div>

        <form class="flex flex-col gap-3 max-w-96" onsubmit="event.preventDefault()">
            <div class="field space-y-2">
                <stisla::radio name="reqPlan" id="reqPlanBasic" label="Basic plan" value="basic" :required="true" />
                <stisla::radio name="reqPlan" id="reqPlanPro" label="Pro plan" value="pro" :required="true" />
            </div>
            <button type="submit" class="button button--primary self-start">Submit</button>
        </form>
    </section>

    {{-- 6. Server Validation --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Server Validation (Invalid State)</h2>
            <p class="text-sm text-gray-500">Flagged with <code>:invalid="true"</code>.</p>
        </div>

        <div class="field w-auto max-w-96 space-y-2">
            <stisla::radio name="srvPlan" id="srvPlanBasic" label="Basic plan" value="basic" :invalid="true" />
            <stisla::radio name="srvPlan" id="srvPlanPro" label="Pro plan (selected, still flagged)" value="pro" :checked="true" :invalid="true" />
        </div>
    </section>

    {{-- 7. Without Labels --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Bare Radios (Without Labels)</h2>
            <p class="text-sm text-gray-500">Bare radio inputs without label wrappers.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::radio name="bareRadio" value="1" aria-label="Bare radio" />
            <stisla::radio name="bareRadio" value="2" aria-label="Bare radio, selected" :checked="true" />
        </div>
    </section>

    {{-- 8. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning radio size via <code>:vars</code>.</p>
        </div>

        <div class="field w-auto max-w-96 space-y-2">
            <stisla::radio
                name="customRadio"
                id="customRadio1"
                label="Larger Radio Size (1.5rem)"
                value="1"
                :checked="true"
                :vars="['size' => '1.5rem']"
            />
        </div>
    </section>
</div>
