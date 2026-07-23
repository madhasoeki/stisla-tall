<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto">
    {{-- 1. Single Combobox --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Single Combobox</h2>
            <p class="text-sm text-gray-500">Searchable single-select dropdown.</p>
        </div>

        <div class="field max-w-sm pb-64">
            <stisla::combobox
                id="singleCombo"
                placeholder="Choose a framework"
                aria-label="Framework"
                :options="['react' => 'React', 'vue' => 'Vue', 'svelte' => 'Svelte', 'solid' => 'Solid']"
            />
        </div>
    </section>

    {{-- 2. Multiple Combobox --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Multiple Combobox (Chips)</h2>
            <p class="text-sm text-gray-500">Multi-select with removable chip handles.</p>
        </div>

        <div class="field max-w-sm pb-64">
            <stisla::combobox
                id="multiCombo"
                :multiple="true"
                aria-label="Frameworks"
                :value="['react', 'vue', 'svelte']"
                :options="['react' => 'React', 'vue' => 'Vue', 'svelte' => 'Svelte', 'solid' => 'Solid', 'angular' => 'Angular', 'qwik' => 'Qwik']"
            />
        </div>
    </section>

    {{-- 3. Sizes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Sizes</h2>
            <p class="text-sm text-gray-500">Small, default, and large size modifiers.</p>
        </div>

        <div class="space-y-3 max-w-xs pb-64">
            <stisla::combobox
                size="sm"
                placeholder="Small"
                aria-label="Small"
                :options="['One', 'Two']"
            />
            <stisla::combobox
                placeholder="Default"
                aria-label="Default"
                :options="['One', 'Two']"
            />
            <stisla::combobox
                size="lg"
                placeholder="Large"
                aria-label="Large"
                :options="['One', 'Two']"
            />
        </div>
    </section>

    {{-- 4. Tagging --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Tagging Mode</h2>
            <p class="text-sm text-gray-500">Allow users to type and add new option values via <code>:create="true"</code>.</p>
        </div>

        <div class="field max-w-96 pb-64">
            <label for="combobox-tags" class="field__label">Topics</label>
            <stisla::combobox
                id="combobox-tags"
                name="topics"
                :multiple="true"
                :create="true"
                placeholder="Type and press Enter"
                :value="['design']"
                :options="['design' => 'Design', 'frontend' => 'Frontend', 'backend' => 'Backend']"
            />
        </div>
    </section>

    {{-- 5. Option Groups --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Option Groups</h2>
            <p class="text-sm text-gray-500">Group related options under <code>&lt;optgroup&gt;</code> headers.</p>
        </div>

        <div class="field max-w-96 pb-64">
            <label for="combobox-grouped" class="field__label">City</label>
            <stisla::combobox
                id="combobox-grouped"
                placeholder="Search cities"
                :options="[
                    'Indonesia' => ['jkt' => 'Jakarta', 'bdg' => 'Bandung', 'sby' => 'Surabaya'],
                    'Malaysia' => ['kul' => 'Kuala Lumpur', 'pen' => 'Penang']
                ]"
            />
        </div>
    </section>

    {{-- 6. Disabled --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Disabled State</h2>
            <p class="text-sm text-gray-500">Blocked interaction with dimmed state.</p>
        </div>

        <div class="field max-w-96">
            <label for="combobox-disabled" class="field__label">Plan</label>
            <stisla::combobox
                id="combobox-disabled"
                :disabled="true"
                value="free"
                :options="['free' => 'Free', 'pro' => 'Pro']"
            />
        </div>
    </section>

    {{-- 7. Browser Validation --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Browser Validation (Required)</h2>
            <p class="text-sm text-gray-500">Native form constraints with empty placeholder option.</p>
        </div>

        <form class="flex flex-col gap-3 pb-64 max-w-96" onsubmit="event.preventDefault(); alert('Submitted!');">
            <div class="field">
                <label for="combobox-req" class="field__label">Plan</label>
                <stisla::combobox
                    id="combobox-req"
                    name="plan"
                    :required="true"
                    placeholder="Pick a plan"
                    :options="['free' => 'Free', 'pro' => 'Pro', 'team' => 'Team']"
                />
                <div class="field__description">Hit Submit without picking to trigger validation.</div>
            </div>
            <button type="submit" class="button button--primary self-start">Submit</button>
        </form>
    </section>

    {{-- 8. Server Validation --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. Server Validation (Invalid State)</h2>
            <p class="text-sm text-gray-500">Flagged with <code>:invalid="true"</code>.</p>
        </div>

        <div class="field max-w-96 pb-64">
            <label for="combobox-invalid" class="field__label">Plan</label>
            <stisla::combobox
                id="combobox-invalid"
                :invalid="true"
                aria-describedby="combobox-invalid-error"
                placeholder="Pick a plan"
                :options="['free' => 'Free', 'pro' => 'Pro', 'team' => 'Team']"
            />
            <div id="combobox-invalid-error" class="field__error">This plan isn't available in your region.</div>
        </div>
    </section>

    {{-- 9. Events --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">9. Custom Event (stisla:combobox:change)</h2>
            <p class="text-sm text-gray-500">Listen for selection changes.</p>
        </div>

        <div class="field max-w-96 pb-64">
            <label for="combobox-event" class="field__label">Tag</label>
            <stisla::combobox
                id="combobox-event"
                placeholder="Pick a tag"
                :options="['bug' => 'Bug', 'docs' => 'Docs', 'feat' => 'Feature']"
            />
            <div id="combobox-event-out" class="field__description">Current: (none)</div>
        </div>

        <script>
            (function () {
                document.addEventListener('DOMContentLoaded', function () {
                    var el = document.getElementById('combobox-event');
                    var out = document.getElementById('combobox-event-out');
                    if (el && out) {
                        el.addEventListener('stisla:combobox:change', function (e) {
                            out.textContent = 'Current: ' + (e.detail ? (Array.isArray(e.detail.value) ? e.detail.value.join(', ') : e.detail.value) : '(none)');
                        });
                    }
                });
            })();
        </script>
    </section>

    {{-- 10. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">10. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning combobox radius and colors via <code>:vars</code>.</p>
        </div>

        <div class="field max-w-96 pb-64">
            <label for="combobox-custom" class="field__label">Custom Style</label>
            <stisla::combobox
                id="combobox-custom"
                placeholder="Custom combobox"
                :options="['one' => 'Option One', 'two' => 'Option Two']"
                :vars="[
                    'radius' => '0px',
                    'item-bg-hover' => 'oklch(0.95 0.05 280)',
                    'item-color-hover' => 'oklch(0.3 0.2 280)'
                ]"
            />
        </div>
    </section>
</div>
