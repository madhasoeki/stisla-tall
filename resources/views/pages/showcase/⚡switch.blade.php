<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto">
    {{-- 1. Basic Switch --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Basic Switch</h2>
            <p class="text-sm text-gray-500">Track-and-thumb toggle for on / off settings.</p>
        </div>

        <div class="field w-auto max-w-96 space-y-2">
            <stisla::switch id="defaultSwitch" label="Notifications" />
            <stisla::switch id="checkedSwitch" label="Auto-update" :checked="true" />
        </div>
    </section>

    {{-- 2. Large Variant --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Large Variant (size="lg")</h2>
            <p class="text-sm text-gray-500">Suited to standalone settings rows using <code>size="lg"</code>.</p>
        </div>

        <div class="field w-auto max-w-96 space-y-2">
            <stisla::switch id="lgSwitch" size="lg" label="Notifications" />
            <stisla::switch id="lgSwitchOn" size="lg" label="Auto-update" :checked="true" />
        </div>
    </section>

    {{-- 3. Settings Row Layout --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Settings Row Layout</h2>
            <p class="text-sm text-gray-500">Push switch to trailing edge with plain flex row layout.</p>
        </div>

        <div class="flex flex-col gap-2 w-full max-w-96">
            <div class="flex flex-wrap items-center justify-between">
                <label class="field__label" for="settingEmail">Email notifications</label>
                <stisla::switch id="settingEmail" size="lg" :checked="true" />
            </div>
            <div class="flex flex-wrap items-center justify-between">
                <label class="field__label" for="settingPush">Push notifications</label>
                <stisla::switch id="settingPush" size="lg" />
            </div>
        </div>
    </section>

    {{-- 4. Disabled State --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Disabled State</h2>
            <p class="text-sm text-gray-500">Disabled off and on switches using <code>:disabled="true"</code>.</p>
        </div>

        <div class="field w-auto max-w-96 space-y-2">
            <stisla::switch id="disabledSwitchOff" label="Disabled off" :disabled="true" />
            <stisla::switch id="disabledSwitchOn" label="Disabled on" :checked="true" :disabled="true" />
        </div>
    </section>

    {{-- 5. Without Label --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Bare Switches (Without Labels)</h2>
            <p class="text-sm text-gray-500">Standalone switch inputs paired with <code>aria-label</code>.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::switch aria-label="Bare switch off" />
            <stisla::switch aria-label="Bare switch on" :checked="true" />
        </div>
    </section>

    {{-- 6. Browser Validation --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Browser Validation (Required)</h2>
            <p class="text-sm text-gray-500">Native validation constraints using <code>:required="true"</code>.</p>
        </div>

        <div class="field w-auto max-w-96">
            <stisla::switch id="reqSwitch" label="Enable two-factor (required)" :required="true" />
        </div>
    </section>

    {{-- 7. Server Validation --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Server Validation (Invalid State)</h2>
            <p class="text-sm text-gray-500">Flagged with <code>:invalid="true"</code>.</p>
        </div>

        <div class="field w-auto max-w-96 space-y-2">
            <stisla::switch id="srvSwitch" label="Two-factor must be enabled" :invalid="true" />
            <stisla::switch id="srvSwitchOn" label="Enabled (server still flagged)" :checked="true" :invalid="true" />
        </div>
    </section>

    {{-- 8. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning track on background via <code>:vars</code>.</p>
        </div>

        <div class="field w-auto max-w-96 space-y-2">
            <stisla::switch
                id="customSwitch"
                label="Custom Track Color"
                :checked="true"
                :vars="['on-bg' => 'oklch(0.6 0.25 140)']"
            />
        </div>
    </section>
</div>
