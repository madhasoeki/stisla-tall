# Autocomplete

An input that suggests options as the user types.

## Basic

Reach for Autocomplete when users type their own value and you want to help them along with suggestions. Picking a suggestion replaces the typed text with the chosen value. Single value only. For a non-typeable picker, use Select. For multi-select with chips, use Combobox. The default authoring style is an `<input>`with `list="…"` referencing a `<datalist>`. Without JS the browser shows its native datalist UI; with JS, the native UI is suppressed and a styled popup takes over.

Country

```
<div class="field max-w-sm pb-20">
  <label for="basicAuto" class="field__label">Country</label>
  <input type="text" class="autocomplete" id="basicAuto" name="country" list="countries" data-stisla-autocomplete placeholder="Search countries">
  <datalist id="countries">
    <option value="Indonesia">
    <option value="Malaysia">
    <option value="Singapore">
    <option value="Philippines">
    <option value="Thailand">
    <option value="Vietnam">
    <option value="Brunei">
    <option value="Cambodia">
    <option value="Laos">
    <option value="Myanmar">
  </datalist>
</div>
```

## Keyboard

The input behaves like a typing field with suggestions layered on top.

- `ArrowDown`: open the popup or move highlight down
- `ArrowUp`: move highlight up
- `Enter`: pick the highlighted suggestion
- `Escape`: close the popup, keep the typed text
- `Tab`: close and move focus to the next field

## From inline JSON

For dynamic option sets, drop a JSON array on`data-options`. Each entry is either a string (value = label) or an object with `value` and `label`.

Framework

```
<div class="field max-w-sm pb-20">
  <label for="jsonAuto" class="field__label">Framework</label>
  <input type="text" class="autocomplete" id="jsonAuto" name="framework" data-stisla-autocomplete placeholder="Search frameworks" data-options='["React", "Vue", "Svelte", "Solid", "Angular", "Lit", "Qwik", "Astro"]'>
</div>
```

## Minimum length

Set `data-stisla-autocomplete-min-length` to wait for a few characters before showing suggestions. Useful for long lists where typing a single letter would dump dozens of rows.

City (min 2 chars)

```
<div class="field max-w-sm">
  <label for="minLengthAuto" class="field__label">City (min 2 chars)</label>
  <input type="text" class="autocomplete" id="minLengthAuto" data-stisla-autocomplete data-stisla-autocomplete-min-length="2" placeholder="Type at least 2 characters" data-options='["Jakarta", "Jambi", "Bandung", "Bali", "Surabaya", "Semarang", "Medan", "Makassar"]'>
</div>
```

## Sizes

`.autocomplete--sm` and `.autocomplete--lg`retune height, padding, radius, and type around the default.

```
<input type="text" class="autocomplete autocomplete--sm max-w-sm" data-stisla-autocomplete placeholder="Small" data-options='["Apple", "Banana", "Cherry"]' aria-label="Small autocomplete">
<input type="text" class="autocomplete max-w-sm" data-stisla-autocomplete placeholder="Default" data-options='["Apple", "Banana", "Cherry"]' aria-label="Default autocomplete">
<input type="text" class="autocomplete autocomplete--lg max-w-sm" data-stisla-autocomplete placeholder="Large" data-options='["Apple", "Banana", "Cherry"]' aria-label="Large autocomplete">
```

## Disabled

Add `disabled` to block interaction and dim the field. The popup won't open.

Country

```
<div class="field max-w-sm">
  <label for="disabledAuto" class="field__label">Country</label>
  <input type="text" class="autocomplete" id="disabledAuto" data-stisla-autocomplete disabled placeholder="Search countries" data-options='["Indonesia", "Malaysia"]'>
</div>
```

## Invalid

Set `aria-invalid="true"` on the input. The field shape inherits the form-field invalid handling, so the border paints red.

Country

Pick a country to continue.

```
<div class="field max-w-sm">
  <label for="invalidAuto" class="field__label">Country</label>
  <input type="text" class="autocomplete" id="invalidAuto" data-stisla-autocomplete aria-invalid="true" aria-describedby="invalidAutoError" placeholder="Search countries" data-options='["Indonesia", "Malaysia"]'>
  <div id="invalidAutoError" class="field__error">Pick a country to continue.</div>
</div>
```

## Events

Listen for `stisla:autocomplete:select` to react when the user picks a suggestion. The input's native `input` and`change` events fire too, so existing form code keeps working.

Tag

Current: (none)

```
<div class="field max-w-sm">
  <label for="eventAuto" class="field__label">Tag</label>
  <input type="text" class="autocomplete" id="eventAuto" data-stisla-autocomplete placeholder="Pick a tag" data-options='["Bug", "Docs", "Feature", "Performance"]'>
  <div id="eventAutoOut" class="field__description">Current: (none)</div>
</div>
<script>
  (function () {
    var el = document.getElementById('eventAuto');
    var out = document.getElementById('eventAutoOut');
    el.addEventListener('stisla:autocomplete:select', function (e) {
      out.textContent = 'Current: ' + e.detail.value;
    });
  })();
</script>
```

## Customization

These variables retune the autocomplete. The field shares the form-field knobs; the popup adds its own.

| Variable                                                                        | Use                                                           |
| ------------------------------------------------------------------------------- | ------------------------------------------------------------- |
| `--autocomplete-height`                                                         | Field height (the size modifiers retune it)                   |
| `--autocomplete-padding-inline`                                                 | Field interior padding; also feeds the concentric item radius |
| `--autocomplete-font-size`                                                      | Field and popup type                                          |
| `--autocomplete-color` / `-bg` /`-border-color`                                 | Field text, fill, and rim                                     |
| `--autocomplete-radius`                                                         | Field and popup corner radius                                 |
| `--autocomplete-placeholder`                                                    | Placeholder color                                             |
| `--autocomplete-popup-border-color` /`-shadow`                                  | Popup rim and elevation                                       |
| `--autocomplete-item-gap`                                                       | Gap between popup rows                                        |
| `--autocomplete-item-min-height` /`-item-padding-block` /`-item-padding-inline` | Row layout                                                    |
| `--autocomplete-item-bg-hover` /`-item-color-hover`                             | Hover and keyboard-highlight paint                            |
| `--autocomplete-item-color-disabled`                                            | Empty-row text                                                |
| `--autocomplete-mark-font-weight`                                               | Weight of the matched run                                     |
