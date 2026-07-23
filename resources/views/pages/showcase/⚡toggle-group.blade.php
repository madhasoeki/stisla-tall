<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto">
    {{-- 1. Single-select (segmented) --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Single-select (segmented)</h2>
            <p class="text-sm text-gray-500">The container owns the frame; members read as one segmented control.</p>
        </div>

        <stisla::toggle-group label="Text alignment">
            <stisla::toggle-group.item role="radio" :iconOnly="true" value="left" icon="align-left" aria-label="Align left" />
            <stisla::toggle-group.item role="radio" :iconOnly="true" :active="true" value="center" icon="align-center" aria-label="Align center" />
            <stisla::toggle-group.item role="radio" :iconOnly="true" value="right" icon="align-right" aria-label="Align right" />
        </stisla::toggle-group>
    </section>

    {{-- 2. Keyboard --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Keyboard</h2>
            <p class="text-sm text-gray-500">Roving tabindex keeps one member in tab order. Arrow keys (←, →, ↑, ↓) move focus along the group. Focus is selection in single-select mode.</p>
        </div>

        <stisla::toggle-group label="Keyboard navigation demo">
            <stisla::toggle-group.item role="radio" :active="true" value="tab1">First</stisla::toggle-group.item>
            <stisla::toggle-group.item role="radio" value="tab2">Second</stisla::toggle-group.item>
            <stisla::toggle-group.item role="radio" value="tab3">Third</stisla::toggle-group.item>
        </stisla::toggle-group>
    </section>

    {{-- 3. Multi-select --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Multi-select</h2>
            <p class="text-sm text-gray-500">Each member is an independent press toggle with <code>type="multiple"</code>.</p>
        </div>

        <stisla::toggle-group type="multiple" label="Text style">
            <stisla::toggle-group.item :iconOnly="true" :active="true" value="bold" icon="bold" aria-label="Bold" />
            <stisla::toggle-group.item :iconOnly="true" :active="false" value="italic" icon="italic" aria-label="Italic" />
            <stisla::toggle-group.item :iconOnly="true" :active="true" value="underline" icon="underline" aria-label="Underline" />
        </stisla::toggle-group>
    </section>

    {{-- 4. Text labels and icon + label --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Text labels and icon + label</h2>
            <p class="text-sm text-gray-500">Members can carry text instead of, or alongside, icons.</p>
        </div>

        <div class="space-y-4">
            <stisla::toggle-group label="Calendar view">
                <stisla::toggle-group.item role="radio" :active="true" value="day">Day</stisla::toggle-group.item>
                <stisla::toggle-group.item role="radio" value="week">Week</stisla::toggle-group.item>
                <stisla::toggle-group.item role="radio" value="month">Month</stisla::toggle-group.item>
            </stisla::toggle-group>

            <stisla::toggle-group label="View mode">
                <stisla::toggle-group.item role="radio" :active="true" value="list" icon="list">List</stisla::toggle-group.item>
                <stisla::toggle-group.item role="radio" value="grid" icon="layout-grid">Grid</stisla::toggle-group.item>
                <stisla::toggle-group.item role="radio" value="kanban" icon="columns-3">Kanban</stisla::toggle-group.item>
            </stisla::toggle-group>
        </div>
    </section>

    {{-- 5. Form data (radio set) --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Form data (radio set)</h2>
            <p class="text-sm text-gray-500">For single-select form submission using native HTML radios.</p>
        </div>

        <stisla::toggle-group>
            <stisla::toggle-group.input type="radio" name="planRange" id="tgDay" value="day" :checked="true" />
            <stisla::toggle as="label" for="tgDay">Day</stisla::toggle>
            <stisla::toggle-group.input type="radio" name="planRange" id="tgWeek" value="week" />
            <stisla::toggle as="label" for="tgWeek">Week</stisla::toggle>
            <stisla::toggle-group.input type="radio" name="planRange" id="tgMonth" value="month" />
            <stisla::toggle as="label" for="tgMonth">Month</stisla::toggle>
        </stisla::toggle-group>
    </section>

    {{-- 6. Form data (checkbox set) --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Form data (checkbox set)</h2>
            <p class="text-sm text-gray-500">For multi-select form submission using native HTML checkboxes.</p>
        </div>

        <stisla::toggle-group>
            <stisla::toggle-group.input type="checkbox" name="tools" id="toolBold" value="bold" :checked="true" />
            <stisla::toggle as="label" for="toolBold" :iconOnly="true" icon="bold" aria-label="Bold" />
            <stisla::toggle-group.input type="checkbox" name="tools" id="toolItalic" value="italic" />
            <stisla::toggle as="label" for="toolItalic" :iconOnly="true" icon="italic" aria-label="Italic" />
            <stisla::toggle-group.input type="checkbox" name="tools" id="toolUnderline" value="underline" :checked="true" />
            <stisla::toggle as="label" for="toolUnderline" :iconOnly="true" icon="underline" aria-label="Underline" />
        </stisla::toggle-group>
    </section>

    {{-- 7. Vertical --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Vertical</h2>
            <p class="text-sm text-gray-500">Stack members as a vertical menu list using <code>:vertical="true"</code>.</p>
        </div>

        <stisla::toggle-group :vertical="true" class="max-w-xs" label="Mailbox">
            <stisla::toggle-group.item role="radio" :active="true" value="inbox" icon="inbox">Inbox</stisla::toggle-group.item>
            <stisla::toggle-group.item role="radio" value="archive" icon="archive">Archive</stisla::toggle-group.item>
            <stisla::toggle-group.item role="radio" value="trash" icon="trash-2">Trash</stisla::toggle-group.item>
        </stisla::toggle-group>
    </section>

    {{-- 8. Sizes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. Sizes</h2>
            <p class="text-sm text-gray-500">Small (<code>size="sm"</code>), default, and large (<code>size="lg"</code>) toggle groups.</p>
        </div>

        <div class="space-y-4">
            <stisla::toggle-group size="sm" label="Small">
                <stisla::toggle-group.item role="radio" :active="true" value="day">Day</stisla::toggle-group.item>
                <stisla::toggle-group.item role="radio" value="week">Week</stisla::toggle-group.item>
                <stisla::toggle-group.item role="radio" value="month">Month</stisla::toggle-group.item>
            </stisla::toggle-group>
            <stisla::toggle-group label="Default">
                <stisla::toggle-group.item role="radio" :active="true" value="day">Day</stisla::toggle-group.item>
                <stisla::toggle-group.item role="radio" value="week">Week</stisla::toggle-group.item>
                <stisla::toggle-group.item role="radio" value="month">Month</stisla::toggle-group.item>
            </stisla::toggle-group>
            <stisla::toggle-group size="lg" label="Large">
                <stisla::toggle-group.item role="radio" :active="true" value="day">Day</stisla::toggle-group.item>
                <stisla::toggle-group.item role="radio" value="week">Week</stisla::toggle-group.item>
                <stisla::toggle-group.item role="radio" value="month">Month</stisla::toggle-group.item>
            </stisla::toggle-group>
        </div>
    </section>

    {{-- 9. Events --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">9. Events</h2>
            <p class="text-sm text-gray-500">Listening to <code>stisla:toggle-group:changing</code> and <code>stisla:toggle-group:changed</code>.</p>
        </div>

        <div class="flex flex-col gap-3 max-w-md">
            <stisla::toggle-group id="toggle-group-event-demo" label="Event Demo">
                <stisla::toggle-group.item role="radio" :active="true" value="option1">Option 1</stisla::toggle-group.item>
                <stisla::toggle-group.item role="radio" value="option2">Option 2</stisla::toggle-group.item>
                <stisla::toggle-group.item role="radio" value="option3">Option 3</stisla::toggle-group.item>
            </stisla::toggle-group>
            <pre id="toggle-group-event-log" class="p-3 bg-slate-900 text-slate-100 rounded text-xs">Listening for stisla:toggle-group:changed…</pre>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var group = document.getElementById('toggle-group-event-demo');
                var log = document.getElementById('toggle-group-event-log');
                if (!group || !log) return;
                group.addEventListener('stisla:toggle-group:changed', function (e) {
                    log.textContent = 'Event triggered: stisla:toggle-group:changed -> value = ' + e.detail.value;
                });
            });
        </script>
    </section>

    {{-- 10. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">10. Customization</h2>
            <p class="text-sm text-gray-500">Retuning group container height, background, and radius using <code>:vars</code>.</p>
        </div>

        <stisla::toggle-group :vars="['bg' => 'oklch(0.93 0.03 260)', 'radius' => '1rem']">
            <stisla::toggle-group.item role="radio" :active="true" value="custom1">Custom One</stisla::toggle-group.item>
            <stisla::toggle-group.item role="radio" value="custom2">Custom Two</stisla::toggle-group.item>
        </stisla::toggle-group>
    </section>
</div>
