<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto">
    {{-- 1. Basic Textarea --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Basic Textarea</h2>
            <p class="text-sm text-gray-500">Multi-line text field paired with field wrapper.</p>
        </div>

        <stisla::field label="Notes" for="basicTextarea" class="max-w-96">
            <stisla::textarea id="basicTextarea" name="notes" rows="3" placeholder="Anything else we should know?" />
        </stisla::field>
    </section>

    {{-- 2. Sizes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Sizes</h2>
            <p class="text-sm text-gray-500">Small, default, and large textarea scale variants.</p>
        </div>

        <div class="flex flex-col gap-3 max-w-96">
            <stisla::textarea size="sm" rows="2" placeholder="Small" />
            <stisla::textarea rows="2" placeholder="Default" />
            <stisla::textarea size="lg" rows="2" placeholder="Large" />
        </div>
    </section>

    {{-- 3. Helper Text --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Helper Text</h2>
            <p class="text-sm text-gray-500">Textarea paired with field description text.</p>
        </div>

        <stisla::field label="Bio" for="bioTextarea" description="A sentence or two. Visible on your public profile." description-id="bioHelp" class="max-w-96">
            <stisla::textarea id="bioTextarea" rows="3" aria-describedby="bioHelp" />
        </stisla::field>
    </section>

    {{-- 4. Browser Validation --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Browser Validation (Required &amp; Minlength)</h2>
            <p class="text-sm text-gray-500">Native validation constraints using <code>:required="true"</code> and <code>minlength="10"</code>.</p>
        </div>

        <form class="flex flex-col gap-3 max-w-96" onsubmit="event.preventDefault(); alert('submitted')">
            <stisla::field label="Message" for="reqMessage" description="Submit with fewer than 10 characters to trigger :user-invalid.">
                <stisla::textarea id="reqMessage" rows="3" :required="true" minlength="10" placeholder="At least 10 characters" />
            </stisla::field>
            <button type="submit" class="button button--primary self-start">Submit</button>
        </form>
    </section>

    {{-- 5. Server Validation --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Server Validation (Invalid State)</h2>
            <p class="text-sm text-gray-500">Flagged with <code>:invalid="true"</code>.</p>
        </div>

        <stisla::field label="Feedback" for="srvFeedback" error="Please write at least 50 characters." error-id="srvFeedbackError" class="max-w-96">
            <stisla::textarea id="srvFeedback" rows="3" value="Way too short." :invalid="true" aria-describedby="srvFeedbackError" />
        </stisla::field>
    </section>

    {{-- 6. Disabled and Readonly --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Disabled &amp; Readonly</h2>
            <p class="text-sm text-gray-500">Disabled blocks interaction, readonly keeps text selectable.</p>
        </div>

        <div class="flex flex-col gap-3 max-w-96">
            <stisla::textarea rows="2" value="Disabled" :disabled="true" />
            <stisla::textarea rows="2" value="Readonly" :readonly="true" />
        </div>
    </section>

    {{-- 7. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning textarea radius and min-height floor via <code>:vars</code>.</p>
        </div>

        <div class="flex flex-col gap-3 max-w-96">
            <stisla::textarea rows="2" placeholder="Sharp corners (radius: 0px)" :vars="['radius' => '0px']" />
            <stisla::textarea rows="2" placeholder="Custom min-height floor (8rem)" :vars="['height' => '8rem']" />
        </div>
    </section>
</div>
