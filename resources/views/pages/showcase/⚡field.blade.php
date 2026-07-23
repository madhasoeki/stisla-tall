<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto">
    {{-- 1. Basic Field --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Basic Field</h2>
            <p class="text-sm text-gray-500">Wrap label + control pair inside <code>&lt;stisla::field&gt;</code>.</p>
        </div>

        <stisla::field label="Email" for="fieldBasicEmail" class="max-w-96">
            <stisla::input type="email" id="fieldBasicEmail" placeholder="you@example.com" />
        </stisla::field>
    </section>

    {{-- 2. Field with Description --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Field Description</h2>
            <p class="text-sm text-gray-500">Add helper text below the control using <code>description="..."</code> prop or <code>&lt;stisla::field.description&gt;</code>.</p>
        </div>

        <stisla::field
            label="Password"
            for="fieldDescPwd"
            description="At least 12 characters. Mix letters, numbers, and a symbol."
            description-id="fieldDescPwdHelp"
            class="max-w-96"
        >
            <stisla::input type="password" id="fieldDescPwd" aria-describedby="fieldDescPwdHelp" />
        </stisla::field>
    </section>

    {{-- 3. Field Error --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Field Error</h2>
            <p class="text-sm text-gray-500">Surface validation errors using <code>error="..."</code> prop or <code>&lt;stisla::field.error&gt;</code>.</p>
        </div>

        <stisla::field
            label="Email"
            for="fieldErrEmail"
            error="Please enter a valid email address."
            error-id="fieldErrEmailMsg"
            class="max-w-96"
        >
            <stisla::input type="email" id="fieldErrEmail" value="not-an-email" :invalid="true" aria-describedby="fieldErrEmailMsg" />
        </stisla::field>
    </section>

    {{-- 4. Works with Every Control --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Works with Every Control</h2>
            <p class="text-sm text-gray-500">Type-agnostic field wrapper for select, textarea, sliders, etc.</p>
        </div>

        <div class="flex flex-col gap-4 max-w-96">
            <stisla::field label="Plan" for="fieldSelPlan">
                <stisla::select
                    id="fieldSelPlan"
                    placeholder="Pick a plan"
                    :options="['free' => 'Free', 'pro' => 'Pro', 'team' => 'Team']"
                />
            </stisla::field>

            <stisla::field label="Bio" for="fieldTxtBio" description="A sentence or two. Visible on your public profile.">
                <stisla::textarea id="fieldTxtBio" rows="3" />
            </stisla::field>
        </div>
    </section>

    {{-- 5. Inline Label & Output Readout --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Inline Label & Value Readout</h2>
            <p class="text-sm text-gray-500">Combine label with side-by-side output readout.</p>
        </div>

        <stisla::field class="max-w-96">
            <div class="flex flex-wrap justify-between items-baseline">
                <stisla::field.label for="fieldOpacity">Opacity</stisla::field.label>
                <output for="fieldOpacity" class="text-muted-foreground" id="opacityOutput">30</output>
            </div>
            <stisla::slider id="fieldOpacity" value="30" />
        </stisla::field>
    </section>

    {{-- 6. Field Items (Checkbox / Radio Rows) --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Field Items (Row Layout)</h2>
            <p class="text-sm text-gray-500">Horizontal row layout for input + label pairs using <code>&lt;stisla::field.item&gt;</code>.</p>
        </div>

        <stisla::field class="max-w-96 space-y-2">
            <stisla::field.item label="Email me about updates" for="fieldItem1">
                <stisla::checkbox id="fieldItem1" />
            </stisla::field.item>

            <stisla::field.item label="Email me about security alerts" for="fieldItem2">
                <stisla::checkbox id="fieldItem2" :checked="true" />
            </stisla::field.item>
        </stisla::field>
    </section>

    {{-- 7. Inline Field Items --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Inline Field Items</h2>
            <p class="text-sm text-gray-500">Lay items horizontally on one row using <code>:inline="true"</code>.</p>
        </div>

        <stisla::field :inline="true" class="flex flex-wrap gap-4">
            <stisla::radio name="fieldItemInline" id="fieldItemInline1" label="Daily" value="daily" :checked="true" />
            <stisla::radio name="fieldItemInline" id="fieldItemInline2" label="Weekly" value="weekly" />
            <stisla::radio name="fieldItemInline" id="fieldItemInline3" label="Never" value="never" />
        </stisla::field>
    </section>

    {{-- 8. Reversed Field Items --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. Reversed Field Items</h2>
            <p class="text-sm text-gray-500">Label on left and input pinned to right edge using <code>:reverse="true"</code>.</p>
        </div>

        <stisla::field class="max-w-96 space-y-2">
            <stisla::field.item label="Show secondary nav" for="fieldItemReverse1" :reverse="true">
                <stisla::checkbox id="fieldItemReverse1" :checked="true" />
            </stisla::field.item>

            <stisla::field.item label="Compact density" for="fieldItemReverse2" :reverse="true">
                <stisla::checkbox id="fieldItemReverse2" />
            </stisla::field.item>
        </stisla::field>
    </section>

    {{-- 9. Disabled Field Items --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">9. Disabled Field Items</h2>
            <p class="text-sm text-gray-500">Row dims label automatically when control inside is disabled.</p>
        </div>

        <stisla::field class="max-w-96 space-y-2">
            <stisla::field.item label="Disabled checkbox" for="fieldItemDisabled1">
                <stisla::checkbox id="fieldItemDisabled1" :disabled="true" />
            </stisla::field.item>

            <stisla::radio id="fieldItemDisabled2" label="Disabled radio" value="1" :disabled="true" />
        </stisla::field>
    </section>

    {{-- 10. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">10. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning field spacing and typography metrics via <code>:vars</code>.</p>
        </div>

        <stisla::field
            label="Custom Field Gap & Label Color"
            for="fieldCustomInput"
            description="Customized vertical gap and label color."
            class="max-w-96"
            :vars="[
                'gap' => '1rem',
                'label-color' => 'oklch(0.5 0.2 280)'
            ]"
        >
            <stisla::input id="fieldCustomInput" placeholder="Custom styled field" />
        </stisla::field>
    </section>
</div>
