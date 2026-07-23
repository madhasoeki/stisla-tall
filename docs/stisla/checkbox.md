# Checkbox

A native checkbox input styled as a small square box.

## Basic

Add `.checkbox` to the input. Wrap each input + label pair in`.field__item`, and group items inside a `.field` so the rows pick up consistent vertical rhythm. See Radio for the round single-choice variant and Switch for the track-and-thumb.

Default checkbox

Checked by default

```
<div class="field w-auto max-w-96">
  <div class="field__item">
    <input class="checkbox" type="checkbox" id="defaultCheck" />
    <label class="field__label" for="defaultCheck">Default checkbox</label>
  </div>
  <div class="field__item">
    <input class="checkbox" type="checkbox" id="checkedCheck" checked />
    <label class="field__label" for="checkedCheck">Checked by default</label>
  </div>
</div>
```

## Inline

Add `.field--inline` on the field root to lay items on one row with wrap.

One

Two

Three

```
<div class="field field--inline w-auto">
  <div class="field__item">
    <input class="checkbox" type="checkbox" id="inlineCheck1" />
    <label class="field__label" for="inlineCheck1">One</label>
  </div>
  <div class="field__item">
    <input class="checkbox" type="checkbox" id="inlineCheck2" />
    <label class="field__label" for="inlineCheck2">Two</label>
  </div>
  <div class="field__item">
    <input class="checkbox" type="checkbox" id="inlineCheck3" />
    <label class="field__label" for="inlineCheck3">Three</label>
  </div>
</div>
```

## Indeterminate

The indeterminate state is set from script; there's no HTML attribute for it. Useful as a parent of a partially-selected group.

Select all

```
<div class="field w-auto max-w-96">
  <div class="field__item">
    <input class="checkbox" type="checkbox" id="indeterminateCheck" />
    <label class="field__label" for="indeterminateCheck">Select all</label>
  </div>
</div>
<script>document.getElementById('indeterminateCheck').indeterminate = true;</script>
```

## Reverse

Add `.field__item--reverse` to flip the label to the start and the input to the end. Useful for settings rows where the affordance sits on the right edge.

Reversed checkbox

```
<div class="field w-auto max-w-96">
  <div class="field__item field__item--reverse">
    <input class="checkbox" type="checkbox" id="reverseCheck" />
    <label class="field__label" for="reverseCheck">Reversed checkbox</label>
  </div>
</div>
```

## Disabled

Add `disabled` to dim the input and its label, and block interaction.

Disabled checkbox

Disabled, checked

```
<div class="field w-auto max-w-96">
  <div class="field__item">
    <input class="checkbox" type="checkbox" id="disabledCheck" disabled />
    <label class="field__label" for="disabledCheck">Disabled checkbox</label>
  </div>
  <div class="field__item">
    <input class="checkbox" type="checkbox" id="disabledCheckedCheck" checked disabled />
    <label class="field__label" for="disabledCheckedCheck">Disabled, checked</label>
  </div>
</div>
```

## Browser validation

Pair `required` with the native `:user-invalid` pseudo. The browser fires it after a submit attempt, and clears it the moment the constraint is satisfied.

Accept the terms

Submit

```
<form class="flex flex-col gap-3 max-w-96" onsubmit="event.preventDefault()">
  <div class="field">
    <div class="field__item">
      <input class="checkbox" type="checkbox" id="reqTerms" required />
      <label class="field__label" for="reqTerms">Accept the terms</label>
    </div>
  </div>
  <button type="submit" class="button button--primary self-start">Submit</button>
</form>
```

## Server validation

Set `aria-invalid="true"` from your form library. The attribute is sticky; Stisla just paints the red while it's present. The checked variant shows both signals at once: primary fill says "selected", red rim says "the server still considers it invalid".

Accept the terms

Accept the terms (checked, still flagged)

```
<div class="field w-auto max-w-96">
  <div class="field__item">
    <input class="checkbox" type="checkbox" id="srvTerms" aria-invalid="true" />
    <label class="field__label" for="srvTerms">Accept the terms</label>
  </div>
  <div class="field__item">
    <input class="checkbox" type="checkbox" id="srvTermsChecked" aria-invalid="true" checked />
    <label class="field__label" for="srvTermsChecked">Accept the terms (checked, still flagged)</label>
  </div>
</div>
```

## Without labels

Drop the `.field__item` wrapper for a bare `.checkbox`. Always pair with an `aria-label`. Common in tables (row-select) and toolbars.

```
<input class="checkbox" type="checkbox" aria-label="Bare checkbox" />
<input class="checkbox" type="checkbox" aria-label="Bare checkbox, checked" checked />
```

## Customization

These variables retune `.checkbox` without touching component CSS. Override on the input, a parent scope, or `:root`.

| Variable                  | Use                                                                                                                                                                                    |
| ------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `--checkbox-size`         | Box dimension                                                                                                                                                                          |
| `--checkbox-radius`       | Corner radius; raise to round or zero out for sharp edges                                                                                                                              |
| `--checkbox-bg`           | Unchecked background                                                                                                                                                                   |
| `--checkbox-border-width` | Border thickness                                                                                                                                                                       |
| `--checkbox-border-color` | Unchecked border; validation hooks flip this to the danger token                                                                                                                       |
| `--checkbox-bg-checked`   | Checked or indeterminate background                                                                                                                                                    |
| `--checkbox-indicator`    | Glyph SVG painted over the checked fill. Checked and indeterminate each set their own; the fill is a literal because `data:` URLs can't read CSS vars, so recolor by replacing the URL |
