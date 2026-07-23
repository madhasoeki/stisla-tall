# Select

A select styled to match the input — native by default, or a styled popup on demand.

## Basic

Add `.select` to a `<select>` for the no-JS baseline: the input field shape plus a themed chevron in the inline-end padding well, shared with `.input` and`.textarea`. Pair with a label via `for`/`id`. Add `data-stisla-select` and the behavior layer hides the native control and renders a styled trigger and listbox popup (type-to-jump, a single-line multi summary, keyboard nav) while the original `<select>` stays in the DOM so form submission and validation work as authored. The two halves of this page cover each surface in turn. For typing-ahead search see Combobox; for a free-form input that suggests options see Autocomplete.

CountryPick oneIndonesiaMalaysiaSingaporeThailand

```
<div class="field max-w-96">
  <label for="basicSelect" class="field__label">Country</label>
  <select class="select" id="basicSelect" name="country">
    <option value="" selected>Pick one</option>
    <option value="id">Indonesia</option>
    <option value="my">Malaysia</option>
    <option value="sg">Singapore</option>
    <option value="th">Thailand</option>
  </select>
</div>
```

## Sizes

Three sizes match the input scale. Add `.select--sm` or`.select--lg`.

SmallOneTwoDefaultOneTwoLargeOneTwo

```
<select class="select select--sm max-w-96" aria-label="Small select">
  <option>Small</option><option>One</option><option>Two</option>
</select>
<select class="select max-w-96" aria-label="Default select">
  <option>Default</option><option>One</option><option>Two</option>
</select>
<select class="select select--lg max-w-96" aria-label="Large select">
  <option>Large</option><option>One</option><option>Two</option>
</select>
```

## Option groups

Wrap related options in `<optgroup>` to label sections in the native dropdown.

CityPick a cityJakartaBandungKuala LumpurPenang

```
<div class="field max-w-96">
  <label for="groupedSelect" class="field__label">City</label>
  <select class="select" id="groupedSelect">
    <option value="" selected>Pick a city</option>
    <optgroup label="Indonesia">
      <option value="jkt">Jakarta</option>
      <option value="bdg">Bandung</option>
    </optgroup>
    <optgroup label="Malaysia">
      <option value="kul">Kuala Lumpur</option>
      <option value="pen">Penang</option>
    </optgroup>
  </select>
</div>
```

## Multiple

A `multiple` (or `size` \> 1) select opts out of the single-line shape: it drops the chevron and renders as a native inline list, the same as a textarea grows.

TagsBugDocsFeatureQAPerformance

```
<div class="field max-w-96">
  <label for="multiSelect" class="field__label">Tags</label>
  <select class="select" id="multiSelect" multiple size="5">
    <option value="bug">Bug</option>
    <option value="docs" selected>Docs</option>
    <option value="feat" selected>Feature</option>
    <option value="qa">QA</option>
    <option value="perf">Performance</option>
  </select>
</div>
```

## Size attribute

A `size` greater than 1 renders a fixed-height scrolling list (no chevron), the same multi-line shape as `multiple`.

PriorityLowMediumHighUrgent

```
<div class="field max-w-96">
  <label for="sizeSelect" class="field__label">Priority</label>
  <select class="select" id="sizeSelect" size="4">
    <option value="low">Low</option>
    <option value="med" selected>Medium</option>
    <option value="high">High</option>
    <option value="urgent">Urgent</option>
  </select>
</div>
```

## Helper text

Pair a `.field__description` with the select and wire it via `aria-describedby` so assistive tech announces the hint.

RegionPick a regionSoutheast AsiaEuropeNorth America

Sets the default data residency for new projects.

```
<div class="field max-w-96">
  <label for="helpSelect" class="field__label">Region</label>
  <select class="select" id="helpSelect" aria-describedby="helpSelectHint">
    <option value="" selected>Pick a region</option>
    <option value="sea">Southeast Asia</option>
    <option value="eu">Europe</option>
    <option value="na">North America</option>
  </select>
  <div id="helpSelectHint" class="field__description">Sets the default data residency for new projects.</div>
</div>
```

## Disabled

Add `disabled` to block interaction and dim the field.

PlanFreePro

```
<div class="field max-w-96">
  <label for="disabledSelect" class="field__label">Plan</label>
  <select class="select" id="disabledSelect" disabled>
    <option value="free" selected>Free</option>
    <option value="pro">Pro</option>
  </select>
</div>
```

## Browser validation

Pair `required` with a placeholder`<option value="">` and the form blocks submit until a real value is picked, painting the native `:user-invalid`state. Pair with a `.field__error`.

PlanPick a planFreeProTeam

Hit Submit without picking — the field reports invalid until you choose.

Submit

```
<form class="field max-w-96" onsubmit="event.preventDefault(); alert('submitted')">
  <label for="reqSelect" class="field__label">Plan</label>
  <select class="select" id="reqSelect" name="plan" required>
    <option value="" selected>Pick a plan</option>
    <option value="free">Free</option>
    <option value="pro">Pro</option>
    <option value="team">Team</option>
  </select>
  <div class="field__description">Hit Submit without picking — the field reports invalid until you choose.</div>
  <button type="submit" class="button button--primary mt-1 self-start">Submit</button>
</form>
```

## Server validation

Set `aria-invalid="true"` from your form library for sticky server errors. The danger border paints; pair with a`.field__error`.

PlanFreeProTeam

This plan isn't available in your region.

```
<div class="field max-w-96">
  <label for="srvSelect" class="field__label">Plan</label>
  <select class="select" id="srvSelect" aria-invalid="true" aria-describedby="srvSelectError">
    <option value="free">Free</option>
    <option value="pro">Pro</option>
    <option value="team">Team</option>
  </select>
  <div id="srvSelectError" class="field__error">This plan isn't available in your region.</div>
</div>
```

## Custom popup

Add `data-stisla-select` to a`<select class="select">` to hydrate. The native control is hidden (still in the DOM, so form submission and validation work as authored) and a styled trigger plus a listbox popup take over. The trigger reuses the same `.select` shell, so sizes, density, and validation all carry over. Set`data-placeholder` for the empty-state label.

Country

```
<div class="field max-w-sm pb-20">
  <label for="customSelect" class="field__label">Country</label>
  <select class="select" id="customSelect" name="country" data-stisla-select data-placeholder="Pick one">
    <option value=""></option>
    <option value="id">Indonesia</option>
    <option value="my">Malaysia</option>
    <option value="sg">Singapore</option>
    <option value="ph">Philippines</option>
    <option value="th">Thailand</option>
    <option value="vn">Vietnam</option>
  </select>
</div>
```

## Keyboard

The trigger behaves like a native `<select>`.

- `Space` / `Enter` / `ArrowDown`: open
- `ArrowUp` / `ArrowDown`: move the highlight (loops at the ends)
- `Home` / `End`: first / last enabled option
- `Enter` / `Space`: select the highlighted option (toggles in multi)
- `Escape`: close
- `Tab`: close and move on
- Type a letter to jump to the first option that starts with it (keep typing within 500 ms to extend the buffer)

## Multiple

Add the native `multiple` attribute and the trigger shows the first chosen label plus `+N more` so the field stays on one line. Click a selected option in the popup to toggle it off.

TagsDocs+1 more

```
<div class="field max-w-sm pb-20">
  <label for="customMulti" class="field__label">Tags</label>
  <select class="select" id="customMulti" name="tags" multiple data-stisla-select data-placeholder="Add tags">
    <option value="bug">Bug</option>
    <option value="docs" selected>Docs</option>
    <option value="feat" selected>Feature</option>
    <option value="qa">QA</option>
    <option value="perf">Performance</option>
    <option value="a11y">Accessibility</option>
  </select>
</div>
```

## Option groups

Wrap related options in `<optgroup>` to label sections inside the popup.

City

```
<div class="field max-w-sm pb-20">
  <label for="customGroups" class="field__label">City</label>
  <select class="select" id="customGroups" data-stisla-select data-placeholder="Pick a city">
    <option value=""></option>
    <optgroup label="Indonesia">
      <option value="jkt">Jakarta</option>
      <option value="bdg">Bandung</option>
      <option value="sby">Surabaya</option>
    </optgroup>
    <optgroup label="Malaysia">
      <option value="kul">Kuala Lumpur</option>
      <option value="pen">Penang</option>
    </optgroup>
  </select>
</div>
```

## Disabled and invalid

`disabled` on the source dims the trigger and blocks opening; `aria-invalid="true"` paints the danger border. Both states mirror from the hidden source onto the trigger, so a form library keeps treating the `<select>` as the field.

PlanFree

RegionSoutheast Asia

Not available on your plan.

```
<div class="field max-w-sm">
  <label for="customDisabled" class="field__label">Plan</label>
  <select class="select" id="customDisabled" data-stisla-select disabled>
    <option value="free" selected>Free</option>
    <option value="pro">Pro</option>
  </select>
</div>
<div class="field max-w-sm">
  <label for="customInvalid" class="field__label">Region</label>
  <select class="select" id="customInvalid" data-stisla-select aria-invalid="true" aria-describedby="customInvalidErr">
    <option value="sea" selected>Southeast Asia</option>
    <option value="eu">Europe</option>
  </select>
  <div id="customInvalidErr" class="field__error">Not available on your plan.</div>
</div>
```

## Events

Listen for `stisla:select:change` to react to selection changes; `detail.value` is a string for single and an array for multi. The underlying `<select>` also fires its native `change` event, so existing form code keeps working.

ThemeLight

Current: light

```
<div class="field max-w-sm">
  <label for="eventSelect" class="field__label">Theme</label>
  <select class="select" id="eventSelect" data-stisla-select>
    <option value="light" selected>Light</option>
    <option value="dark">Dark</option>
    <option value="auto">Auto</option>
  </select>
  <div id="eventSelectOut" class="field__description">Current: light</div>
</div>
<script>
  (function () {
    var el = document.getElementById('eventSelect');
    var out = document.getElementById('eventSelectOut');
    el.addEventListener('stisla:select:change', function (e) { out.textContent = 'Current: ' + e.detail.value; });
  })();
</script>
```

## Customization

These variables retune `.select` without touching component CSS, under the same field surface as `.input` /`.textarea`. Override on the select, a parent scope, or`:root`. The custom popup adds its own`--select-*` variables on the shared menu surface (Menu, Combobox, Autocomplete).

On touch devices (`@media (pointer: coarse)`)`--select-font-size` is bumped to `1rem` so iOS Safari doesn't zoom on focus.

| Variable                                                                  | Use                                                                                                    |
| ------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------ |
| `--select-radius`                                                         | Corner radius; the sm and lg variants reassign this                                                    |
| `--select-height`                                                         | Single-line height; the sm and lg variants reassign this                                               |
| `--select-padding-inline`                                                 | Horizontal padding; the sm and lg variants reassign this                                               |
| `--select-padding-block`                                                  | Vertical padding; defaults to `0` (height owns the rhythm)                                             |
| `--select-font-size`                                                      | Text size; the sm and lg variants reassign this                                                        |
| `--select-indicator`                                                      | Chevron SVG; a `data:` URL with a literal stroke per theme (the dark scope swaps to a lighter chevron) |
| `--select-bg`                                                             | Background; `readonly` shifts a tier                                                                   |
| `--select-color`                                                          | Text color                                                                                             |
| `--select-border-width`                                                   | Border thickness                                                                                       |
| `--select-border-color`                                                   | Border color; validation hooks flip this to the danger token                                           |
| `--select-shadow`                                                         | Custom popup elevation                                                                                 |
| `--select-popup-border-color`                                             | Popup rim (defaults a tier lighter than the trigger border)                                            |
| `--select-item-min-height` /`-item-padding-block` /`-item-padding-inline` | Option row layout                                                                                      |
| `--select-item-bg-hover` /`-item-color-hover`                             | Highlighted row paint (mouse hover and keyboard cursor)                                                |
| `--select-item-bg-active` /`-item-color-active`                           | Selected row paint                                                                                     |
| `--select-group-label-color`                                              | Optgroup label color inside the popup                                                                  |
