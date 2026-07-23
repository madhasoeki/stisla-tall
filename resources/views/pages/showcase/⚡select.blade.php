<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto">
    {{-- 1. Basic Select --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Basic Native Select</h2>
            <p class="text-sm text-gray-500">Default single-line select paired with field wrapper.</p>
        </div>

        <stisla::field label="Country" for="basicSelect" class="max-w-96">
            <stisla::select
                id="basicSelect"
                name="country"
                placeholder="Pick one"
                :options="[
                    'id' => 'Indonesia',
                    'my' => 'Malaysia',
                    'sg' => 'Singapore',
                    'th' => 'Thailand',
                ]"
            />
        </stisla::field>
    </section>

    {{-- 2. Sizes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Sizes</h2>
            <p class="text-sm text-gray-500">Small, default, and large select height scale variants.</p>
        </div>

        <div class="space-y-3 max-w-96">
            <stisla::select size="sm" aria-label="Small select">
                <option>Small</option>
                <option>One</option>
                <option>Two</option>
            </stisla::select>

            <stisla::select aria-label="Default select">
                <option>Default</option>
                <option>One</option>
                <option>Two</option>
            </stisla::select>

            <stisla::select size="lg" aria-label="Large select">
                <option>Large</option>
                <option>One</option>
                <option>Two</option>
            </stisla::select>
        </div>
    </section>

    {{-- 3. Option Groups --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Option Groups</h2>
            <p class="text-sm text-gray-500">Group related options using <code>:options</code> array or <code>&lt;optgroup&gt;</code> tags.</p>
        </div>

        <stisla::field label="City" for="groupedSelect" class="max-w-96">
            <stisla::select
                id="groupedSelect"
                placeholder="Pick a city"
                :options="[
                    'Indonesia' => ['jkt' => 'Jakarta', 'bdg' => 'Bandung'],
                    'Malaysia' => ['kul' => 'Kuala Lumpur', 'pen' => 'Penang'],
                ]"
            />
        </stisla::field>
    </section>

    {{-- 4. Multiple Select --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Multiple Select</h2>
            <p class="text-sm text-gray-500">Inline multi-line listbox using <code>:multiple="true"</code>.</p>
        </div>

        <stisla::field label="Tags" for="multiSelect" class="max-w-96">
            <stisla::select
                id="multiSelect"
                :multiple="true"
                size="5"
                :selected="['docs', 'feat']"
                :options="[
                    'bug' => 'Bug',
                    'docs' => 'Docs',
                    'feat' => 'Feature',
                    'qa' => 'QA',
                    'perf' => 'Performance',
                ]"
            />
        </stisla::field>
    </section>

    {{-- 5. Size Attribute --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Size Attribute</h2>
            <p class="text-sm text-gray-500">Fixed-height scrolling list using numeric <code>size="..."</code>.</p>
        </div>

        <stisla::field label="Priority" for="sizeSelect" class="max-w-96">
            <stisla::select
                id="sizeSelect"
                size="4"
                selected="med"
                :options="[
                    'low' => 'Low',
                    'med' => 'Medium',
                    'high' => 'High',
                    'urgent' => 'Urgent',
                ]"
            />
        </stisla::field>
    </section>

    {{-- 6. Helper Text --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Helper Text</h2>
            <p class="text-sm text-gray-500">Select paired with field description text.</p>
        </div>

        <stisla::field label="Region" for="helpSelect" description="Sets the default data residency for new projects." description-id="helpSelectHint" class="max-w-96">
            <stisla::select
                id="helpSelect"
                aria-describedby="helpSelectHint"
                placeholder="Pick a region"
                :options="[
                    'sea' => 'Southeast Asia',
                    'eu' => 'Europe',
                    'na' => 'North America',
                ]"
            />
        </stisla::field>
    </section>

    {{-- 7. Disabled --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Disabled State</h2>
            <p class="text-sm text-gray-500">Disabled select input.</p>
        </div>

        <stisla::field label="Plan" for="disabledSelect" class="max-w-96">
            <stisla::select
                id="disabledSelect"
                :disabled="true"
                selected="free"
                :options="[
                    'free' => 'Free',
                    'pro' => 'Pro',
                ]"
            />
        </stisla::field>
    </section>

    {{-- 8. Browser Validation --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. Browser Validation (Required)</h2>
            <p class="text-sm text-gray-500">Required select attribute with native validation.</p>
        </div>

        <form class="flex flex-col gap-3 max-w-96" onsubmit="event.preventDefault(); alert('submitted')">
            <stisla::field label="Plan" for="reqSelect" description="Hit Submit without picking — the field reports invalid until you choose.">
                <stisla::select
                    id="reqSelect"
                    name="plan"
                    :required="true"
                    placeholder="Pick a plan"
                    :options="[
                        'free' => 'Free',
                        'pro' => 'Pro',
                        'team' => 'Team',
                    ]"
                />
            </stisla::field>
            <button type="submit" class="button button--primary self-start">Submit</button>
        </form>
    </section>

    {{-- 9. Server Validation --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">9. Server Validation (Invalid State)</h2>
            <p class="text-sm text-gray-500">Flagged with <code>:invalid="true"</code>.</p>
        </div>

        <stisla::field label="Plan" for="srvSelect" error="This plan isn't available in your region." error-id="srvSelectError" class="max-w-96">
            <stisla::select
                id="srvSelect"
                :invalid="true"
                aria-describedby="srvSelectError"
                selected="free"
                :options="[
                    'free' => 'Free',
                    'pro' => 'Pro',
                    'team' => 'Team',
                ]"
            />
        </stisla::field>
    </section>

    {{-- 10. Custom Popup --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">10. Custom Stisla Popup JS (:custom="true")</h2>
            <p class="text-sm text-gray-500">Hydrated custom popup dropdown using <code>:custom="true"</code> (adds <code>data-stisla-select</code>).</p>
        </div>

        <stisla::field label="Country" for="customSelect" class="max-w-sm pb-20">
            <stisla::select
                id="customSelect"
                name="country"
                :custom="true"
                placeholder="Pick one"
                :options="[
                    'id' => 'Indonesia',
                    'my' => 'Malaysia',
                    'sg' => 'Singapore',
                    'ph' => 'Philippines',
                    'th' => 'Thailand',
                    'vn' => 'Vietnam',
                ]"
            />
        </stisla::field>
    </section>

    {{-- 11. Custom Popup Multiple --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">11. Custom Popup Multiple</h2>
            <p class="text-sm text-gray-500">Custom popup single-line multi summary using <code>:custom="true"</code> &amp; <code>:multiple="true"</code>.</p>
        </div>

        <stisla::field label="Tags" for="customMulti" class="max-w-sm pb-20">
            <stisla::select
                id="customMulti"
                name="tags"
                :custom="true"
                :multiple="true"
                placeholder="Add tags"
                :selected="['docs', 'feat']"
                :options="[
                    'bug' => 'Bug',
                    'docs' => 'Docs',
                    'feat' => 'Feature',
                    'qa' => 'QA',
                    'perf' => 'Performance',
                    'a11y' => 'Accessibility',
                ]"
            />
        </stisla::field>
    </section>

    {{-- 12. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">12. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning select radius and height via <code>:vars</code>.</p>
        </div>

        <div class="space-y-3 max-w-sm">
            <stisla::select placeholder="Sharp corners (radius: 0px)" :vars="['radius' => '0px']" :options="['1' => 'One', '2' => 'Two']" />
            <stisla::select placeholder="Taller height (3rem)" :vars="['height' => '3rem']" :options="['1' => 'One', '2' => 'Two']" />
        </div>
    </section>
</div>
