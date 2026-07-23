<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto">
    {{-- 1. Basic Input --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Basic Input</h2>
            <p class="text-sm text-gray-500">Default text input paired with field wrapper.</p>
        </div>

        <stisla::field label="Email" for="basicInput" class="max-w-96">
            <stisla::input type="email" id="basicInput" placeholder="you@example.com" />
        </stisla::field>
    </section>

    {{-- 2. Sizes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Sizes</h2>
            <p class="text-sm text-gray-500">Small, default, and large input size variants.</p>
        </div>

        <div class="space-y-3 max-w-sm">
            <stisla::input size="sm" placeholder="Small" />
            <stisla::input placeholder="Default" />
            <stisla::input size="lg" placeholder="Large" />
        </div>
    </section>

    {{-- 3. Input Types --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Input Types</h2>
            <p class="text-sm text-gray-500">Applies to text-like input types (email, password, number, search, date).</p>
        </div>

        <div class="space-y-3 max-w-sm">
            <stisla::input type="email" placeholder="email" />
            <stisla::input type="password" placeholder="password" value="hunter2" />
            <stisla::input type="number" placeholder="number" />
            <stisla::input type="search" placeholder="search" />
            <stisla::input type="date" />
        </div>
    </section>

    {{-- 4. Helper Text --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Helper Text</h2>
            <p class="text-sm text-gray-500">Input paired with helper description text.</p>
        </div>

        <stisla::field label="Password" for="pwdInput" description="At least 8 characters, one number." description-id="pwdHelp" class="max-w-96">
            <stisla::input type="password" id="pwdInput" aria-describedby="pwdHelp" />
        </stisla::field>
    </section>

    {{-- 5. Browser Validation --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Browser Validation (Required)</h2>
            <p class="text-sm text-gray-500">Native validation constraints using <code>:required="true"</code>.</p>
        </div>

        <form class="flex flex-col gap-3 max-w-96" onsubmit="event.preventDefault()">
            <stisla::field label="Email" for="reqEmail" description="Submit to trigger :user-invalid. A valid email clears the red.">
                <stisla::input type="email" id="reqEmail" :required="true" placeholder="you@example.com" />
            </stisla::field>
            <button type="submit" class="button button--primary self-start">Submit</button>
        </form>
    </section>

    {{-- 6. Server Validation --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Server Validation (Invalid State)</h2>
            <p class="text-sm text-gray-500">Flagged with <code>:invalid="true"</code>.</p>
        </div>

        <stisla::field label="Email" for="srvEmail" error="Please enter a valid email address." error-id="srvEmailError" class="max-w-96">
            <stisla::input type="email" id="srvEmail" value="not-an-email" :invalid="true" aria-describedby="srvEmailError" />
        </stisla::field>
    </section>

    {{-- 7. Disabled and Readonly --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Disabled & Readonly</h2>
            <p class="text-sm text-gray-500">Disabled blocks interaction, readonly prevents edits with subtle background shift.</p>
        </div>

        <div class="space-y-3 max-w-sm">
            <stisla::input value="Disabled" :disabled="true" />
            <stisla::input value="Readonly" :readonly="true" />
        </div>
    </section>

    {{-- 8. Plain Text --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. Plain Text (Seamless)</h2>
            <p class="text-sm text-gray-500">Render readonly value as bare text using <code>:seamless="true"</code>.</p>
        </div>

        <stisla::field label="Email" for="plainEmail" class="max-w-96">
            <stisla::input type="email" id="plainEmail" value="you@example.com" :readonly="true" :seamless="true" />
        </stisla::field>
    </section>

    {{-- 9. Color Picker --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">9. Color Picker</h2>
            <p class="text-sm text-gray-500">Native color swatch input.</p>
        </div>

        <stisla::field label="Brand" for="brandColor" class="max-w-96">
            <stisla::input type="color" id="brandColor" value="#3b82f6" />
        </stisla::field>
    </section>

    {{-- 10. File Input --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">10. File Input</h2>
            <p class="text-sm text-gray-500">Styled file uploader input.</p>
        </div>

        <stisla::field label="Upload" for="fileInput" class="max-w-96">
            <stisla::input type="file" id="fileInput" />
        </stisla::field>
    </section>

    {{-- 11. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">11. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning input radius and height via <code>:vars</code>.</p>
        </div>

        <div class="max-w-sm space-y-3">
            <stisla::input placeholder="Sharp corners (radius: 0px)" :vars="['radius' => '0px']" />
            <stisla::input placeholder="Taller height (3rem)" :vars="['height' => '3rem']" />
        </div>
    </section>
</div>
