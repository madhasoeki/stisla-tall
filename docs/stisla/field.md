# Field

A wrapper that groups a label, control, and helper text under one root.

## Basic

Wrap a label + control pair in `.field`. The root is a vertical flex column with a small gap, so the label, control, and any helper text stack with a consistent rhythm. The field doesn't manage state; consumers wire `for`/`id` and`aria-describedby` to the control inside.

Email

```
<div class="field max-w-96">
  <label for="fieldBasicEmail" class="field__label">Email</label>
  <input type="email" class="input" id="fieldBasicEmail" placeholder="you@example.com" />
</div>
```

## Description

Add `.field__description` below the control for a short hint. Pair with `aria-describedby` on the control so screen readers announce it.

Password

At least 12 characters. Mix letters, numbers, and a symbol.

```
<div class="field max-w-96">
  <label for="fieldDescPwd" class="field__label">Password</label>
  <input type="password" class="input" id="fieldDescPwd" aria-describedby="fieldDescPwdHelp" />
  <p id="fieldDescPwdHelp" class="field__description">At least 12 characters. Mix letters, numbers, and a symbol.</p>
</div>
```

## Error

Add `.field__error` to surface a validation error. Pair with `aria-invalid="true"` on the control and tie the error to it via `aria-describedby`; the field paints the message in danger tone and the control inherits its own invalid border treatment.

Email

Please enter a valid email address.

```
<div class="field max-w-96">
  <label for="fieldErrEmail" class="field__label">Email</label>
  <input type="email" class="input" id="fieldErrEmail" value="not-an-email" aria-invalid="true" aria-describedby="fieldErrEmailMsg" />
  <p id="fieldErrEmailMsg" class="field__error">Please enter a valid email address.</p>
</div>
```

## Works with every control

The wrapper is type-agnostic. Drop in a select, textarea, slider, or any other form control and the stack stays the same.

PlanPick a planFreeProTeam

Bio

A sentence or two. Visible on your public profile.

Brightness

```
<div class="flex flex-col gap-4 max-w-96">
  <div class="field">
    <label for="fieldSelPlan" class="field__label">Plan</label>
    <select class="select" id="fieldSelPlan">
      <option selected>Pick a plan</option>
      <option value="free">Free</option>
      <option value="pro">Pro</option>
      <option value="team">Team</option>
    </select>
  </div>
  <div class="field">
    <label for="fieldTxtBio" class="field__label">Bio</label>
    <textarea class="textarea" id="fieldTxtBio" rows="3" aria-describedby="fieldTxtBioHelp"></textarea>
    <p id="fieldTxtBioHelp" class="field__description">A sentence or two. Visible on your public profile.</p>
  </div>
  <div class="field">
    <label for="fieldRange" class="field__label">Brightness</label>
    <div class="slider" id="fieldRange" data-stisla-slider data-value="40">
      <div class="slider__track"><div class="slider__range"></div></div>
      <div class="slider__thumb"></div>
    </div>
  </div>
</div>
```

## Inline label and value

The first child of `.field` doesn't have to be a bare label. Drop in a row that pairs the label with a side-by-side readout (a slider value, a character counter, a unit) and the stack still flows.

Opacity30

```
<div class="field max-w-96">
  <div class="flex flex-wrap justify-between items-baseline">
    <label for="fieldOpacity" class="field__label">Opacity</label>
    <output for="fieldOpacity" class="text-muted-foreground">30</output>
  </div>
  <div class="slider" id="fieldOpacity" data-stisla-slider data-value="30">
    <div class="slider__track"><div class="slider__range"></div></div>
    <div class="slider__thumb"></div>
  </div>
</div>
<script>
  (function () {
    var el = document.getElementById('fieldOpacity');
    var out = el.closest('.field').querySelector('output');
    el.addEventListener('stisla:slider:input', function (e) { out.value = e.detail.value; });
  })();
</script>
```

## Item

For input + label pairs that sit on one line (checkbox, radio, settings row), use `.field__item`: a flex row with a small gap and centered alignment. Inside an item, `.field__label`picks up the row typography (regular weight, clickable). The checkbox styling itself lands in a later batch; the row layout holds now.

Email me about updates

Email me about security alerts

```
<div class="field w-auto max-w-96">
  <div class="field__item">
    <input class="checkbox" type="checkbox" id="fieldItem1" />
    <label class="field__label" for="fieldItem1">Email me about updates</label>
  </div>
  <div class="field__item">
    <input class="checkbox" type="checkbox" id="fieldItem2" checked />
    <label class="field__label" for="fieldItem2">Email me about security alerts</label>
  </div>
</div>
```

## Item, inline

Add `.field--inline` on the field root to lay items on one row with wrap. The modifier flips the root to a flex row and bumps the gap so neighbors don't crowd.

Daily

Weekly

Never

```
<div class="field field--inline w-auto">
  <div class="field__item">
    <input class="radio" type="radio" name="fieldItemInline" id="fieldItemInline1" checked />
    <label class="field__label" for="fieldItemInline1">Daily</label>
  </div>
  <div class="field__item">
    <input class="radio" type="radio" name="fieldItemInline" id="fieldItemInline2" />
    <label class="field__label" for="fieldItemInline2">Weekly</label>
  </div>
  <div class="field__item">
    <input class="radio" type="radio" name="fieldItemInline" id="fieldItemInline3" />
    <label class="field__label" for="fieldItemInline3">Never</label>
  </div>
</div>
```

## Item, reverse

Add `.field__item--reverse` to flip the label to the start and the input to the end. The input pins to the right edge, the common pattern for settings rows.

Show secondary nav

Compact density

```
<div class="field w-auto max-w-96">
  <div class="field__item field__item--reverse">
    <input class="checkbox" type="checkbox" id="fieldItemReverse1" checked />
    <label class="field__label" for="fieldItemReverse1">Show secondary nav</label>
  </div>
  <div class="field__item field__item--reverse">
    <input class="checkbox" type="checkbox" id="fieldItemReverse2" />
    <label class="field__label" for="fieldItemReverse2">Compact density</label>
  </div>
</div>
```

## Item, disabled

When the input inside an item is disabled, the row dims its label and shows a `not-allowed` cursor on hover. The`:has()` selector covers `.checkbox`,`.radio`, and `.switch`.

Disabled checkbox

Disabled radio

Disabled switch

```
<div class="field w-auto max-w-96">
  <div class="field__item">
    <input class="checkbox" type="checkbox" id="fieldItemDisabled1" disabled />
    <label class="field__label" for="fieldItemDisabled1">Disabled checkbox</label>
  </div>
  <div class="field__item">
    <input class="radio" type="radio" id="fieldItemDisabled2" disabled />
    <label class="field__label" for="fieldItemDisabled2">Disabled radio</label>
  </div>
  <div class="field__item">
    <input class="switch" type="checkbox" role="switch" id="fieldItemDisabled3" disabled />
    <label class="field__label" for="fieldItemDisabled3">Disabled switch</label>
  </div>
</div>
```

## Customization

These variables retune `.field` and its parts without touching component CSS. Override on the field, a parent scope, or`:root`.

| Variable                         | Use                                                   |
| -------------------------------- | ----------------------------------------------------- |
| `--field-gap`                    | Vertical gap between label, control, and helper text  |
| `--field-label-font-size`        | Label text size                                       |
| `--field-label-font-weight`      | Label weight when stacked above a control             |
| `--field-label-color`            | Label color                                           |
| `--field-helper-font-size`       | Description and error text size                       |
| `--field-helper-color`           | Description color                                     |
| `--field-error-color`            | Error message color                                   |
| `--field-item-gap`               | Horizontal gap between input and label inside an item |
| `--field-item-padding-block`     | Vertical breathing room around an item row            |
| `--field-item-label-font-weight` | Label weight when nested inside an item               |
| `--field-item-disabled-opacity`  | Label dim when the input inside an item is disabled   |
