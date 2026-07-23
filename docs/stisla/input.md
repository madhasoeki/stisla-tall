# Input

A text-like form field for any input.

## Basic

Add `.input` to any `<input>`. Pair with a`<label>` tied via `for`/`id`. The same shape extends to Select and Textarea so they line up in a form row.

Email

```
<div class="field max-w-96">
  <label for="basicInput" class="field__label">Email</label>
  <input type="email" class="input" id="basicInput" placeholder="you@example.com" />
</div>
```

## Sizes

Three sizes match the button scale. Add `.input--sm` or`.input--lg`.

```
<input type="text" class="input input--sm max-w-sm" placeholder="Small" />
<input type="text" class="input max-w-sm" placeholder="Default" />
<input type="text" class="input input--lg max-w-sm" placeholder="Large" />
```

## Input types

The class applies to every text-like input: `text`,`email`, `password`, `number`,`search`, `tel`, `url`,`date`, `time`.

```
<input type="email" class="input max-w-sm" placeholder="email" />
<input type="password" class="input max-w-sm" placeholder="password" value="hunter2" />
<input type="number" class="input max-w-sm" placeholder="number" />
<input type="search" class="input max-w-sm" placeholder="search" />
<input type="date" class="input max-w-sm" />
```

## Helper text

Use `.field__description` below the input for short hints. Wire it to the input with `aria-describedby` so screen readers announce it.

Password

At least 8 characters, one number.

```
<div class="field max-w-96">
  <label for="pwdInput" class="field__label">Password</label>
  <input type="password" class="input" id="pwdInput" aria-describedby="pwdHelp" />
  <div id="pwdHelp" class="field__description">At least 8 characters, one number.</div>
</div>
```

## Browser validation

Pair native constraint attributes (`required`,`type="email"`, `pattern`) with the`:user-invalid` pseudo. The browser fires it after the user interacts, and clears it the moment the value satisfies the constraints.

Email

Submit to trigger `:user-invalid`. A valid email clears the red.

Submit

```
<form class="flex flex-col gap-3 max-w-96" onsubmit="event.preventDefault()">
  <div class="field">
    <label for="reqEmail" class="field__label">Email</label>
    <input type="email" class="input" id="reqEmail" required placeholder="you@example.com" />
    <div class="field__description">Submit to trigger <code>:user-invalid</code>. A valid email clears the red.</div>
  </div>
  <button type="submit" class="button button--primary">Submit</button>
</form>
```

## Server validation

Set `aria-invalid="true"` from your form library. The attribute is sticky; Stisla just paints while it's present. Pair with a `.field__error` tied via `aria-describedby`.

Email

Please enter a valid email address.

```
<div class="field max-w-96">
  <label for="srvEmail" class="field__label">Email</label>
  <input type="email" class="input" id="srvEmail" value="not-an-email" aria-invalid="true" aria-describedby="srvEmailError" />
  <div id="srvEmailError" class="field__error">Please enter a valid email address.</div>
</div>
```

## Disabled and readonly

`disabled` blocks interaction and dims the field.`readonly` keeps the value selectable for copy but rejects edits; the bg shifts a tier to signal it.

```
<input type="text" class="input max-w-sm" value="Disabled" disabled />
<input type="text" class="input max-w-sm" value="Readonly" readonly />
```

## Plain text

Swap `.input` for `.input--seamless` to render a readonly value as bare text: no border, no background, but still aligned with neighboring inputs. Pair with `readonly`.

Email

```
<div class="field max-w-96">
  <label for="plainEmail" class="field__label">Email</label>
  <input type="email" readonly class="input--seamless" id="plainEmail" value="you@example.com" />
</div>
```

## Color picker

Add `.input` to any `<input type="color">`. The type selector handles the shape, no modifier needed: the field collapses to a swatch and the native chip wears the field's inner radius.

Brand

```
<div class="field max-w-96">
  <label for="brandColor" class="field__label">Brand</label>
  <input type="color" class="input" id="brandColor" value="#3b82f6" />
</div>
```

## File input

The same class styles `type="file"`. The selector button sits as a small inset chip inside the field and the filename trails after it.

Upload

```
<div class="field max-w-96">
  <label for="fileInput" class="field__label">Upload</label>
  <input type="file" class="input" id="fileInput" />
</div>
```

## Customization

These variables retune `.input` without touching component CSS. Override on the field, a parent scope, or `:root`. The same surface appears on `.select` and`.textarea` under their own prefix, so each field component tunes independently.

On touch devices (`@media (pointer: coarse)`)`--input-font-size` is bumped to `1rem` so iOS Safari doesn't zoom on focus.

| Variable                 | Use                                                                      |
| ------------------------ | ------------------------------------------------------------------------ |
| `--input-radius`         | Corner radius; the sm and lg variants reassign this                      |
| `--input-height`         | Single-line height; the sm and lg variants reassign this                 |
| `--input-padding-inline` | Horizontal padding; the sm and lg variants reassign this                 |
| `--input-padding-block`  | Vertical padding; defaults to `0` since the fixed height owns the rhythm |
| `--input-font-size`      | Text size; the sm and lg variants reassign this                          |
| `--input-bg`             | Background; `readonly` shifts a tier                                     |
| `--input-color`          | Text color                                                               |
| `--input-border-width`   | Border thickness                                                         |
| `--input-border-color`   | Border color; validation hooks flip this to the danger token             |
| `--input-placeholder`    | Placeholder text color                                                   |
