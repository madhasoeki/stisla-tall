<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto">
    {{-- 1. Basic Slider --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Basic Slider</h2>
            <p class="text-sm text-gray-500">Filled-track slider with field wrapper.</p>
        </div>

        <stisla::field label="Brightness" for="basicSlider" class="max-w-xl">
            <stisla::slider id="basicSlider" name="brightness" value="40" value-text="{value}%" />
        </stisla::field>
    </section>

    {{-- 2. Announced Value --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Announced Value Template</h2>
            <p class="text-sm text-gray-500">Contextual screen reader announcement via <code>value-text="{value} of {max}"</code>.</p>
        </div>

        <stisla::field label="Volume" for="announcedSlider" class="max-w-xl">
            <stisla::slider id="announcedSlider" name="volume" value="70" value-text="{value} of {max}" />
        </stisla::field>
    </section>

    {{-- 3. Value Display --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Value Display Output Readout</h2>
            <p class="text-sm text-gray-500">Listening to <code>stisla:slider:input</code> event to update an <code>&lt;output&gt;</code> element.</p>
        </div>

        <stisla::field class="max-w-xl">
            <div class="flex flex-wrap justify-between items-baseline">
                <stisla::field.label for="outputSlider">Opacity</stisla::field.label>
                <output for="outputSlider" class="text-muted-foreground">30</output>
            </div>
            <stisla::slider id="outputSlider" name="opacity" value="30" />
        </stisla::field>

        <script>
            (function () {
                var el = document.getElementById('outputSlider');
                if (el) {
                    var out = el.parentElement.querySelector('output');
                    el.addEventListener('stisla:slider:input', function (e) {
                        if (out) out.value = e.detail.value;
                    });
                }
            })();
        </script>
    </section>

    {{-- 4. Min and Max Bounds --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Min and Max Bounds</h2>
            <p class="text-sm text-gray-500">Custom min/max bounds using <code>min="2000"</code> and <code>max="2030"</code>.</p>
        </div>

        <stisla::field label="Year" for="minMaxSlider" class="max-w-xl">
            <stisla::slider id="minMaxSlider" name="year" min="2000" max="2030" value="2026" />
        </stisla::field>
    </section>

    {{-- 5. Steps --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Step Increment</h2>
            <p class="text-sm text-gray-500">Snapping to increments using <code>step="0.5"</code>.</p>
        </div>

        <stisla::field label="Rating" for="stepSlider" class="max-w-xl">
            <stisla::slider id="stepSlider" name="rating" min="0" max="5" step="0.5" value="3" />
        </stisla::field>
    </section>

    {{-- 6. Sizes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Sizes</h2>
            <p class="text-sm text-gray-500">Small, default, and large slider height scale variants.</p>
        </div>

        <div class="space-y-4 max-w-xl">
            <stisla::field label="Small" for="smSlider">
                <stisla::slider id="smSlider" size="sm" value="40" />
            </stisla::field>

            <stisla::field label="Default" for="defaultSlider">
                <stisla::slider id="defaultSlider" value="60" />
            </stisla::field>

            <stisla::field label="Large" for="lgSlider">
                <stisla::slider id="lgSlider" size="lg" value="80" />
            </stisla::field>
        </div>
    </section>

    {{-- 7. Disabled --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Disabled State</h2>
            <p class="text-sm text-gray-500">Disabled track and thumb using <code>:disabled="true"</code>.</p>
        </div>

        <stisla::field label="Playback speed" for="disabledSlider" class="max-w-xl">
            <stisla::slider id="disabledSlider" name="speed" value="40" :disabled="true" />
        </stisla::field>
    </section>

    {{-- 8. Invalid State --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. Server Validation (Invalid State)</h2>
            <p class="text-sm text-gray-500">Danger border and focus halo using <code>:invalid="true"</code>.</p>
        </div>

        <stisla::field label="Threshold" for="srvSlider" class="max-w-xl">
            <stisla::slider id="srvSlider" name="threshold" value="60" :invalid="true" />
        </stisla::field>
    </section>

    {{-- 9. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">9. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning track fill and ring colors via <code>:vars</code>.</p>
        </div>

        <stisla::field label="Custom Colors" for="customSlider" class="max-w-xl">
            <stisla::slider
                id="customSlider"
                value="50"
                :vars="[
                    'fill' => 'oklch(0.6 0.25 140)',
                    'ring' => 'oklch(0.6 0.25 140 / 0.3)'
                ]"
            />
        </stisla::field>
    </section>
</div>
