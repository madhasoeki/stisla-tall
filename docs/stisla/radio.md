# Radio

A native radio input styled as a small round dot.

## Basic

Add `.radio` to the input. Wrap each input + label pair in`.field__item` inside a `.field`, and give every radio in the group a shared `name` so the browser handles single-selection.

First option

Second option

Third option

```
<div class="field w-auto max-w-96">
  <div class="field__item">
    <input class="radio" type="radio" name="defaultRadio" id="defaultRadio1" checked />
    <label class="field__label" for="defaultRadio1">First option</label>
  </div>
  <div class="field__item">
    <input class="radio" type="radio" name="defaultRadio" id="defaultRadio2" />
    <label class="field__label" for="defaultRadio2">Second option</label>
  </div>
  <div class="field__item">
    <input class="radio" type="radio" name="defaultRadio" id="defaultRadio3" />
    <label class="field__label" for="defaultRadio3">Third option</label>
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
    <input class="radio" type="radio" name="inlineRadio" id="inlineRadio1" checked />
    <label class="field__label" for="inlineRadio1">One</label>
  </div>
  <div class="field__item">
    <input class="radio" type="radio" name="inlineRadio" id="inlineRadio2" />
    <label class="field__label" for="inlineRadio2">Two</label>
  </div>
  <div class="field__item">
    <input class="radio" type="radio" name="inlineRadio" id="inlineRadio3" />
    <label class="field__label" for="inlineRadio3">Three</label>
  </div>
</div>
```

## Reverse

Add `.field__item--reverse` to flip the label to the start and the input to the end.

Reversed radio

```
<div class="field w-auto max-w-96">
  <div class="field__item field__item--reverse">
    <input class="radio" type="radio" name="reverseRadio" id="reverseRadio" checked />
    <label class="field__label" for="reverseRadio">Reversed radio</label>
  </div>
</div>
```

## Disabled

Add `disabled` to dim the input and its label, and block interaction.

Disabled radio

Disabled, selected

```
<div class="field w-auto max-w-96">
  <div class="field__item">
    <input class="radio" type="radio" name="disabledRadio" id="disabledRadio1" disabled />
    <label class="field__label" for="disabledRadio1">Disabled radio</label>
  </div>
  <div class="field__item">
    <input class="radio" type="radio" name="disabledRadio" id="disabledRadio2" checked disabled />
    <label class="field__label" for="disabledRadio2">Disabled, selected</label>
  </div>
</div>
```

## Browser validation

Pair `required` on any radio in the group with `:user-invalid`. The browser fires it after a submit attempt, and clears it once any radio in the group is selected.

Basic plan

Pro plan

Submit

```
<form class="flex flex-col gap-3 max-w-96" onsubmit="event.preventDefault()">
  <div class="field">
    <div class="field__item">
      <input class="radio" type="radio" name="reqPlan" id="reqPlanBasic" required />
      <label class="field__label" for="reqPlanBasic">Basic plan</label>
    </div>
    <div class="field__item">
      <input class="radio" type="radio" name="reqPlan" id="reqPlanPro" required />
      <label class="field__label" for="reqPlanPro">Pro plan</label>
    </div>
  </div>
  <button type="submit" class="button button--primary self-start">Submit</button>
</form>
```

## Server validation

Set `aria-invalid="true"` from your form library. The attribute is sticky; Stisla just paints the red while it's present. The selected variant shows both signals at once.

Basic plan

Pro plan (selected, still flagged)

```
<div class="field w-auto max-w-96">
  <div class="field__item">
    <input class="radio" type="radio" name="srvPlan" id="srvPlanBasic" aria-invalid="true" />
    <label class="field__label" for="srvPlanBasic">Basic plan</label>
  </div>
  <div class="field__item">
    <input class="radio" type="radio" name="srvPlan" id="srvPlanPro" aria-invalid="true" checked />
    <label class="field__label" for="srvPlanPro">Pro plan (selected, still flagged)</label>
  </div>
</div>
```

## Without labels

Drop the `.field__item` wrapper for a bare `.radio`. Always pair with an `aria-label`.

```
<input class="radio" type="radio" name="bareRadio" aria-label="Bare radio" />
<input class="radio" type="radio" name="bareRadio" aria-label="Bare radio, selected" checked />
```

## Customization

These variables retune `.radio` without touching component CSS. Override on the input, a parent scope, or `:root`.

| Variable               | Use                                                                                                                                     |
| ---------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `--radio-size`         | Dot diameter                                                                                                                            |
| `--radio-bg`           | Unchecked background                                                                                                                    |
| `--radio-border-width` | Border thickness                                                                                                                        |
| `--radio-border-color` | Unchecked border; validation hooks flip this to the danger token                                                                        |
| `--radio-bg-checked`   | Selected background                                                                                                                     |
| `--radio-indicator`    | Dot SVG painted over the selected fill; the fill is a literal because `data:` URLs can't read CSS vars, so recolor by replacing the URL |
