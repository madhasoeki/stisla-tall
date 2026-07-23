<?php

use Livewire\Component;

new class extends Component
{
    /**
     * Data dari Database (misal diset di mount() atau sebagai public property)
     */
    public array $countries = [
        ['id' => 'ID', 'name' => 'Indonesia'],
        ['id' => 'MY', 'name' => 'Malaysia'],
        ['id' => 'SG', 'name' => 'Singapore'],
        ['id' => 'PH', 'name' => 'Philippines'],
        ['id' => 'TH', 'name' => 'Thailand'],
    ];
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto">
    {{-- 1. Basic Autocomplete --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Basic Autocomplete (Datalist)</h2>
            <p class="text-sm text-gray-500">Pick a suggestion from native datalist or array prop.</p>
        </div>

        <div class="field max-w-sm pb-12">
            <label for="basicAuto" class="field__label">Country</label>
            <stisla::autocomplete
                id="basicAuto"
                name="country"
                placeholder="Search countries"
                :datalist="['Indonesia', 'Malaysia', 'Singapore', 'Philippines', 'Thailand', 'Vietnam', 'Brunei', 'Cambodia', 'Laos', 'Myanmar']"
            />
        </div>
    </section>

    {{-- 2. From Inline JSON / Options --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. From Inline Options (:options)</h2>
            <p class="text-sm text-gray-500">Dynamic option sets passed via <code>:options</code> prop.</p>
        </div>

        <div class="field max-w-sm pb-12">
            <label for="jsonAuto" class="field__label">Framework</label>
            <stisla::autocomplete
                id="jsonAuto"
                name="framework"
                placeholder="Search frameworks"
                :options='["React", "Vue", "Svelte", "Solid", "Angular", "Lit", "Qwik", "Astro"]'
            />
        </div>
    </section>

    {{-- 3. From Database / Livewire Property --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. From Database / Livewire Property (:datalist)</h2>
            <p class="text-sm text-gray-500">Passing data fetched from database or Livewire component property.</p>
        </div>

        <div class="field max-w-sm pb-12">
            <label for="dbAuto" class="field__label">Country (from Livewire Property / DB Query)</label>
            <stisla::autocomplete
                id="dbAuto"
                name="country_id"
                placeholder="Select country from DB..."
                :datalist="$countries"
            />
        </div>
    </section>

    {{-- 4. Minimum Length --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Minimum Length</h2>
            <p class="text-sm text-gray-500">Wait for a minimum character count before showing suggestions.</p>
        </div>

        <div class="field max-w-sm">
            <label for="minLengthAuto" class="field__label">City (min 2 chars)</label>
            <stisla::autocomplete
                id="minLengthAuto"
                :min-length="2"
                placeholder="Type at least 2 characters"
                :options='["Jakarta", "Jambi", "Bandung", "Bali", "Surabaya", "Semarang", "Medan", "Makassar"]'
            />
        </div>
    </section>

    {{-- 5. Sizes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Sizes</h2>
            <p class="text-sm text-gray-500">Small, default, and large size modifiers.</p>
        </div>

        <div class="space-y-3 max-w-sm">
            <stisla::autocomplete
                size="sm"
                placeholder="Small autocomplete"
                :options='["Apple", "Banana", "Cherry"]'
                aria-label="Small autocomplete"
            />
            <stisla::autocomplete
                placeholder="Default autocomplete"
                :options='["Apple", "Banana", "Cherry"]'
                aria-label="Default autocomplete"
            />
            <stisla::autocomplete
                size="lg"
                placeholder="Large autocomplete"
                :options='["Apple", "Banana", "Cherry"]'
                aria-label="Large autocomplete"
            />
        </div>
    </section>

    {{-- 6. Disabled --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Disabled</h2>
            <p class="text-sm text-gray-500">Disabled field blocks interaction and popup.</p>
        </div>

        <div class="field max-w-sm">
            <label for="disabledAuto" class="field__label">Country</label>
            <stisla::autocomplete
                id="disabledAuto"
                :disabled="true"
                placeholder="Search countries"
                :options='["Indonesia", "Malaysia"]'
            />
        </div>
    </section>

    {{-- 7. Invalid --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Invalid State</h2>
            <p class="text-sm text-gray-500">Border paints red when <code>:invalid="true"</code>.</p>
        </div>

        <div class="field max-w-sm">
            <label for="invalidAuto" class="field__label">Country</label>
            <stisla::autocomplete
                id="invalidAuto"
                :invalid="true"
                aria-describedby="invalidAutoError"
                placeholder="Search countries"
                :options='["Indonesia", "Malaysia"]'
            />
            <div id="invalidAutoError" class="field__error">Pick a country to continue.</div>
        </div>
    </section>

    {{-- 8. Events --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. Event Listener (stisla:autocomplete:select)</h2>
            <p class="text-sm text-gray-500">Listen for custom selection events.</p>
        </div>

        <div class="field max-w-sm">
            <label for="eventAuto" class="field__label">Tag</label>
            <stisla::autocomplete
                id="eventAuto"
                placeholder="Pick a tag"
                :options='["Bug", "Docs", "Feature", "Performance"]'
            />
            <div id="eventAutoOut" class="field__description">Current: (none)</div>
        </div>

        <script>
            (function () {
                document.addEventListener('DOMContentLoaded', function () {
                    var el = document.getElementById('eventAuto');
                    var out = document.getElementById('eventAutoOut');
                    if (el && out) {
                        el.addEventListener('stisla:autocomplete:select', function (e) {
                            out.textContent = 'Current: ' + (e.detail ? e.detail.value : e.target.value);
                        });
                    }
                });
            })();
        </script>
    </section>

    {{-- 9. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">9. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning autocomplete colors and metrics via <code>:vars</code>.</p>
        </div>

        <div class="field max-w-sm">
            <label for="customAuto" class="field__label">Custom Style</label>
            <stisla::autocomplete
                id="customAuto"
                placeholder="Custom styled autocomplete"
                :options='["Custom Option 1", "Custom Option 2", "Custom Option 3"]'
                :vars="[
                    'radius' => '0px',
                    'item-bg-hover' => 'oklch(0.95 0.05 280)',
                    'item-color-hover' => 'oklch(0.3 0.2 280)'
                ]"
            />
        </div>
    </section>
</div>
