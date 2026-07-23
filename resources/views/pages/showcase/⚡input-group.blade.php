<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto">
    {{-- 1. Basic Input Group --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Basic Input Group</h2>
            <p class="text-sm text-gray-500">Leading and trailing text addons on a continuous surface.</p>
        </div>

        <div class="space-y-3 max-w-sm">
            <stisla::input-group>
                <stisla::input-group.text>https://</stisla::input-group.text>
                <stisla::input placeholder="example.com" />
            </stisla::input-group>

            <stisla::input-group>
                <stisla::input placeholder="yourname" />
                <stisla::input-group.text>@company.com</stisla::input-group.text>
            </stisla::input-group>
        </div>
    </section>

    {{-- 2. Icon Addon --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Icon Addon</h2>
            <p class="text-sm text-gray-500">Add Lucide icon to leading or trailing addon using <code>icon="..."</code>.</p>
        </div>

        <stisla::input-group class="max-w-sm">
            <stisla::input-group.text icon="search" />
            <stisla::input type="search" placeholder="Search" />
        </stisla::input-group>
    </section>

    {{-- 3. Sizes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Sizes</h2>
            <p class="text-sm text-gray-500">Small, default, and large size scale modifiers.</p>
        </div>

        <div class="space-y-3 max-w-sm">
            <stisla::input-group size="sm">
                <stisla::input-group.text icon="at-sign" />
                <stisla::input size="sm" placeholder="Small" />
            </stisla::input-group>

            <stisla::input-group>
                <stisla::input-group.text icon="at-sign" />
                <stisla::input placeholder="Default" />
            </stisla::input-group>

            <stisla::input-group size="lg">
                <stisla::input-group.text icon="at-sign" />
                <stisla::input size="lg" placeholder="Large" />
            </stisla::input-group>
        </div>
    </section>

    {{-- 4. With Button --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. With Button Slot</h2>
            <p class="text-sm text-gray-500">Button inset floating inside the wrapper.</p>
        </div>

        <div class="space-y-3 max-w-sm">
            <stisla::input-group>
                <stisla::input type="search" placeholder="Search..." />
                <button type="button" class="button button--primary">Go</button>
            </stisla::input-group>

            <stisla::input-group>
                <button type="button" class="button button--outline button--neutral">Copy</button>
                <stisla::input value="https://stisla.dev" :readonly="true" />
            </stisla::input-group>
        </div>
    </section>

    {{-- 5. Select Addon --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Select Addon</h2>
            <p class="text-sm text-gray-500">Native select standing in for input or addon.</p>
        </div>

        <stisla::input-group class="max-w-sm">
            <stisla::select
                class="max-w-22"
                aria-label="Currency"
                selected="USD"
                :options="['USD' => 'USD', 'EUR' => 'EUR', 'GBP' => 'GBP', 'JPY' => 'JPY']"
            />
            <stisla::input type="number" placeholder="Amount" />
        </stisla::input-group>
    </section>

    {{-- 6. Labelled Select --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Labelled Select Addon</h2>
            <p class="text-sm text-gray-500">Text or icon addon leading a select element.</p>
        </div>

        <div class="space-y-3 max-w-sm">
            <stisla::input-group>
                <stisla::input-group.text for="currencyOnly">Currency</stisla::input-group.text>
                <stisla::select
                    id="currencyOnly"
                    selected="USD"
                    :options="['USD' => 'USD', 'EUR' => 'EUR', 'GBP' => 'GBP', 'JPY' => 'JPY']"
                />
            </stisla::input-group>

            <stisla::input-group>
                <stisla::input-group.text icon="globe" />
                <stisla::select
                    aria-label="Language"
                    selected="English"
                    :options="['English' => 'English', 'Bahasa Indonesia' => 'Bahasa Indonesia', '日本語' => '日本語', 'Deutsch' => 'Deutsch']"
                />
            </stisla::input-group>
        </div>
    </section>

    {{-- 7. Input + Select Combo --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Input + Select Combo</h2>
            <p class="text-sm text-gray-500">Text addon, numeric input, and select scope combined.</p>
        </div>

        <stisla::input-group class="max-w-sm">
            <stisla::input-group.text for="amountCurrency">$</stisla::input-group.text>
            <stisla::input type="number" id="amountCurrency" placeholder="Amount" />
            <stisla::select
                class="max-w-22"
                aria-label="Currency"
                selected="USD"
                :options="['USD' => 'USD', 'EUR' => 'EUR', 'GBP' => 'GBP']"
            />
        </stisla::input-group>
    </section>

    {{-- 8. Multiple Addons --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. Multiple Addons</h2>
            <p class="text-sm text-gray-500">Stacking multiple text addons on the same side.</p>
        </div>

        <stisla::input-group class="max-w-sm">
            <stisla::input-group.text>$</stisla::input-group.text>
            <stisla::input-group.text>0.00</stisla::input-group.text>
            <stisla::input />
        </stisla::input-group>
    </section>

    {{-- 9. Textarea Addon --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">9. Textarea Addon</h2>
            <p class="text-sm text-gray-500">Addons hold to the top edge as textarea grows.</p>
        </div>

        <stisla::input-group class="max-w-sm">
            <stisla::input-group.text icon="message-square" />
            <stisla::textarea rows="3" placeholder="Leave a note" />
        </stisla::input-group>
    </section>

    {{-- 10. Validation States --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">10. Validation States</h2>
            <p class="text-sm text-gray-500">Invalid child paints wrapper border red.</p>
        </div>

        <stisla::input-group class="max-w-sm">
            <stisla::input-group.text icon="at-sign" />
            <stisla::input type="email" value="not-an-email" :invalid="true" />
        </stisla::input-group>
    </section>

    {{-- 11. Disabled State --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">11. Disabled State</h2>
            <p class="text-sm text-gray-500">Disabled child dims the entire wrapper automatically.</p>
        </div>

        <stisla::input-group class="max-w-sm">
            <stisla::input-group.text>https://</stisla::input-group.text>
            <stisla::input value="example.com" :disabled="true" />
        </stisla::input-group>
    </section>

    {{-- 12. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">12. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning input group radius and colors via <code>:vars</code>.</p>
        </div>

        <stisla::input-group class="max-w-sm" :vars="['radius' => '0px', 'addon-color' => 'oklch(0.5 0.2 280)']">
            <stisla::input-group.text icon="search" />
            <stisla::input placeholder="Sharp corners & colored icon" />
        </stisla::input-group>
    </section>
</div>
