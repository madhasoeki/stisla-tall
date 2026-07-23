Sidebar

On this page

## Single

Add `data-stisla-combobox` and Tom Select hydrates the native select into a trigger that holds the chosen value and a search input; opening it filters the options as you type and marks the selected row and the keyboard cursor.

ReactVueSvelteSolid

```
<select class="combobox max-w-sm" data-stisla-combobox data-placeholder="Choose a framework" aria-label="Framework">
  <option value=""></option>
  <option value="react">React</option>
  <option value="vue">Vue</option>
  <option value="svelte">Svelte</option>
  <option value="solid">Solid</option>
</select>
```

## Keyboard

The trigger behaves like a searchable picker. Focus lands in the search input as soon as the popup opens.

- `ArrowDown` / `ArrowUp`: move highlight through the filtered list
- `Enter`: pick the highlighted option (creates a new tag in tagging mode)
- `Escape`: close the popup
- `Backspace`: remove the last chip in multi mode when the search input is empty
- Type any letter: filter the list

## Multiple

Add the native `multiple` attribute and each chosen value becomes a chip with a remove handle; the trigger grows to fit as chips wrap.

SolidAngularQwikReactVueSvelte

React×

Vue×

Svelte×

```
<select class="combobox max-w-sm" multiple data-stisla-combobox aria-label="Frameworks">
  <option value="react" selected>React</option>
  <option value="vue" selected>Vue</option>
  <option value="svelte" selected>Svelte</option>
  <option value="solid">Solid</option>
  <option value="angular">Angular</option>
  <option value="qwik">Qwik</option>
</select>
```

## Sizes

`.combobox--sm` and `.combobox--lg` retune height, padding, radius, and type around the default.

OneTwo

OneTwo

OneTwo

```
<select class="combobox combobox--sm max-w-80" data-stisla-combobox data-placeholder="Small" aria-label="Small"><option value=""></option><option>One</option><option>Two</option></select>
<select class="combobox max-w-80" data-stisla-combobox data-placeholder="Default" aria-label="Default"><option value=""></option><option>One</option><option>Two</option></select>
<select class="combobox combobox--lg max-w-80" data-stisla-combobox data-placeholder="Large" aria-label="Large"><option value=""></option><option>One</option><option>Two</option></select>
```

## Tagging

Set `data-stisla-combobox-create="true"` to let users add values that aren't in the list. The new value lands in the options as the user presses Enter.

TopicsFrontendBackendDesign

Design×

```
<div class="field max-w-96">
  <label for="combobox-tags" class="field__label">Topics</label>
  <select class="combobox" id="combobox-tags" name="topics" multiple data-stisla-combobox data-stisla-combobox-create="true" data-placeholder="Type and press Enter">
    <option value="design" selected>Design</option>
    <option value="frontend">Frontend</option>
    <option value="backend">Backend</option>
  </select>
</div>
```

## Option groups

Wrap related options in `<optgroup>` to label sections inside the popup. Search runs against the option labels; the group label is just a header.

CityJakartaBandungSurabayaKuala LumpurPenang

```
<div class="field pb-64 max-w-96">
  <label for="combobox-grouped" class="field__label">City</label>
  <select class="combobox" id="combobox-grouped" data-stisla-combobox data-placeholder="Search cities">
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

## Disabled

Add `disabled` to block interaction. The wrapper picks up`.disabled` from Tom Select automatically.

PlanProFree

Free

```
<div class="field max-w-96">
  <label for="combobox-disabled" class="field__label">Plan</label>
  <select class="combobox" id="combobox-disabled" data-stisla-combobox disabled>
    <option value="free" selected>Free</option>
    <option value="pro">Pro</option>
  </select>
</div>
```

## Browser validation

Native HTML constraints gate form submission as they would on a native`<select>`. Add `required` with an empty placeholder `<option value="">` and the form blocks until the user picks a real value. The browser's tooltip is suppressed because it would anchor to the hidden source, so render the error text with `.field__error`. The wrapper picks up the danger border automatically when constraints fail and clears it once the new value is valid.

PlanFreeProTeam

Hit Submit without picking. The wrapper paints invalid and the search input takes focus. Pick any option and the red clears on its own.

Submit

```
<form class="flex flex-col gap-3 pb-64 max-w-96" onsubmit="event.preventDefault(); alert('submitted');">
  <div class="field">
    <label for="combobox-req" class="field__label">Plan</label>
    <select class="combobox" id="combobox-req" name="plan" required data-stisla-combobox data-placeholder="Pick a plan">
      <option value=""></option>
      <option value="free">Free</option>
      <option value="pro">Pro</option>
      <option value="team">Team</option>
    </select>
    <div class="field__description">Hit Submit without picking. The wrapper paints invalid and the search input takes focus. Pick any option and the red clears on its own.</div>
  </div>
  <button type="submit" class="button button--primary">Submit</button>
</form>
```

## Invalid

Set `aria-invalid="true"` on the source`<select>`. The wrapper picks it up via`:has()` and paints the danger border.

PlanFreeProTeam

This plan isn't available in your region.

```
<div class="field max-w-96">
  <label for="combobox-invalid" class="field__label">Plan</label>
  <select class="combobox" id="combobox-invalid" data-stisla-combobox aria-invalid="true" aria-describedby="combobox-invalid-error" data-placeholder="Pick a plan">
    <option value=""></option>
    <option value="free">Free</option>
    <option value="pro">Pro</option>
    <option value="team">Team</option>
  </select>
  <div id="combobox-invalid-error" class="field__error">This plan isn't available in your region.</div>
</div>
```

## Events

Listen for `stisla:combobox:change` to react to selection changes. The event's `detail.value` is a string for single, an array for multi.

TagBugDocsFeature

Current: (none)

```
<div class="field pb-64 max-w-96">
  <label for="combobox-event" class="field__label">Tag</label>
  <select class="combobox" id="combobox-event" data-stisla-combobox data-placeholder="Pick a tag">
    <option value=""></option>
    <option value="bug">Bug</option>
    <option value="docs">Docs</option>
    <option value="feat">Feature</option>
  </select>
  <div id="combobox-event-out" class="field__description">Current: (none)</div>
</div>
<script>
  (function () {
    var el = document.getElementById('combobox-event');
    var out = document.getElementById('combobox-event-out');
    el.addEventListener('stisla:combobox:change', function (e) {
      out.textContent = 'Current: ' + (e.detail.value || '(none)');
    });
  })();
</script>
```

## Customization

These variables retune the combobox. The field shares the form-field knobs; the dropdown reuses the menu surface.

| Variable                                                                    | Use                                                                  |
| --------------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `--combobox-height`                                                         | Trigger height (the size modifiers retune it)                        |
| `--combobox-padding-inline`                                                 | Trigger interior padding; also feeds the concentric item radius      |
| `--combobox-font-size`                                                      | Trigger and dropdown type                                            |
| `--combobox-color` / `-bg` /`-border-color`                                 | Trigger text, fill, and rim                                          |
| `--combobox-radius`                                                         | Trigger and dropdown corner radius; chips derive a concentric radius |
| `--combobox-placeholder`                                                    | Search placeholder color                                             |
| `--combobox-indicator`                                                      | Chevron SVG (the dark scope swaps a lighter one)                     |
| `--combobox-popup-border-color` /`-shadow`                                  | Dropdown rim and elevation                                           |
| `--combobox-item-gap`                                                       | Gap between dropdown rows                                            |
| `--combobox-item-min-height` /`-item-padding-block` /`-item-padding-inline` | Row layout                                                           |
| `--combobox-item-bg-hover` /`-item-color-hover`                             | Hover and keyboard-highlight paint (accent)                          |
| `--combobox-item-bg-active` /`-item-color-active`                           | Selected-row paint (highlight)                                       |
| `--combobox-item-color-disabled`                                            | Disabled / no-results row text                                       |
