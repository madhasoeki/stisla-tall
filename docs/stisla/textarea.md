# Textarea

A multi-line text field that grows with its content.

## Basic

Add `.textarea` to any `<textarea>`. The input's fixed-height contract drops, so `rows` and content drive the height. The resize handle is vertical only, so the width tracks the parent.

Notes

```
<div class="field max-w-96">
  <label for="basicTextarea" class="field__label">Notes</label>
  <textarea class="textarea" id="basicTextarea" rows="3" placeholder="Anything else we should know?"></textarea>
</div>
```

## Sizes

Three sizes match the input scale so a textarea sits beside an input in the same row. Add`.textarea--sm` or `.textarea--lg`.

```
<div class="flex flex-col gap-3 max-w-96">
  <textarea class="textarea textarea--sm" rows="2" placeholder="Small"></textarea>
  <textarea class="textarea" rows="2" placeholder="Default"></textarea>
  <textarea class="textarea textarea--lg" rows="2" placeholder="Large"></textarea>
</div>
```

## Helper text

Use `.field__description` below the field for short hints. Wire it to the textarea with `aria-describedby` so screen readers announce it.

Bio

A sentence or two. Visible on your public profile.

```
<div class="field max-w-96">
  <label for="bioTextarea" class="field__label">Bio</label>
  <textarea class="textarea" id="bioTextarea" rows="3" aria-describedby="bioHelp"></textarea>
  <div id="bioHelp" class="field__description">A sentence or two. Visible on your public profile.</div>
</div>
```

## Browser validation

Pair native constraint attributes (`required`, `minlength`,`maxlength`) with the `:user-invalid` pseudo. The browser fires it after the user interacts, and clears it once the value satisfies the constraints.

Message

Submit with fewer than 10 characters to trigger `:user-invalid`.

Submit

```
<form class="flex flex-col gap-3 max-w-96" onsubmit="event.preventDefault()">
  <div class="field">
    <label for="reqMessage" class="field__label">Message</label>
    <textarea class="textarea" id="reqMessage" rows="3" required minlength="10" placeholder="At least 10 characters"></textarea>
    <div class="field__description">Submit with fewer than 10 characters to trigger <code>:user-invalid</code>.</div>
  </div>
  <button type="submit" class="button button--primary">Submit</button>
</form>
```

## Server validation

Set `aria-invalid="true"` from your form library. The attribute is sticky; Stisla just paints while it's present. Pair with a `.field__error` tied via`aria-describedby`.

Feedback

Please write at least 50 characters.

```
<div class="field max-w-96">
  <label for="srvFeedback" class="field__label">Feedback</label>
  <textarea class="textarea" id="srvFeedback" rows="3" aria-invalid="true" aria-describedby="srvFeedbackError">Way too short.</textarea>
  <div id="srvFeedbackError" class="field__error">Please write at least 50 characters.</div>
</div>
```

## Disabled and readonly

`disabled` blocks interaction and dims the field. `readonly` keeps the value selectable for copy but rejects edits; the bg shifts a tier so the state reads.

```
<div class="flex flex-col gap-3 max-w-96">
  <textarea class="textarea" rows="2" disabled>Disabled</textarea>
  <textarea class="textarea" rows="2" readonly>Readonly</textarea>
</div>
```

## Customization

These variables retune `.textarea` independently of `.input`.`--textarea-height` acts as a min-height floor; the field grows past it as content fills in.

On touch devices (`@media (pointer: coarse)`) `--textarea-font-size`is bumped to `1rem` so iOS Safari doesn't zoom on focus.

| Variable                    | Use                                                                               |
| --------------------------- | --------------------------------------------------------------------------------- |
| `--textarea-radius`         | Corner radius; the sm and lg variants reassign this                               |
| `--textarea-height`         | Min-height floor; the field grows past this. The sm and lg variants reassign this |
| `--textarea-padding-inline` | Horizontal padding; the sm and lg variants reassign this                          |
| `--textarea-padding-block`  | Vertical padding around the text                                                  |
| `--textarea-font-size`      | Text size; the sm and lg variants reassign this                                   |
| `--textarea-line-height`    | Line height of the wrapped text; defaults to the normal leading scale             |
| `--textarea-bg`             | Background; `readonly` shifts a tier                                              |
| `--textarea-color`          | Text color                                                                        |
| `--textarea-border-width`   | Border thickness                                                                  |
| `--textarea-border-color`   | Border color; validation hooks flip this to the danger token                      |
| `--textarea-placeholder`    | Placeholder text color                                                            |
