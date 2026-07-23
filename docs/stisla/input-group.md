# Input Group

An input paired with leading or trailing addons on one continuous surface.

## Basic

Wrap an addon and a field (`.input`, `.select`, or `.textarea`) in `.input-group`. The addon sits flush against the input on a shared surface, with a single focus state on the wrapper.

https://

@company.com

```
<div class="input-group max-w-sm">
  <span class="input-group__text">https://</span>
  <input type="text" class="input" placeholder="example.com" />
</div>
<div class="input-group max-w-sm">
  <input type="text" class="input" placeholder="yourname" />
  <span class="input-group__text">@company.com</span>
</div>
```

## Icon

Drop an icon into `.input-group__text` for a leading or trailing glyph. The addon stays transparent so the icon reads against the wrapper.

```
<div class="input-group max-w-sm">
  <span class="input-group__text"><i data-lucide="search"></i></span>
  <input type="search" class="input" placeholder="Search" />
</div>
```

## Sizes

Add `.input-group--sm` or `.input-group--lg` on the wrapper and the matching size modifier on the field child (e.g.`.input--sm`) to scale every member together.

```
<div class="input-group input-group--sm max-w-sm">
  <span class="input-group__text"><i data-lucide="at-sign"></i></span>
  <input type="text" class="input input--sm" placeholder="Small" />
</div>
<div class="input-group max-w-sm">
  <span class="input-group__text"><i data-lucide="at-sign"></i></span>
  <input type="text" class="input" placeholder="Default" />
</div>
<div class="input-group input-group--lg max-w-sm">
  <span class="input-group__text"><i data-lucide="at-sign"></i></span>
  <input type="text" class="input input--lg" placeholder="Large" />
</div>
```

## With button

A button slot sits inset inside the wrapper with its own concentric radius, reading as a chip floating in the field. Pair the button size with the wrapper size; retune the inset with `--input-group-inset`.

Go

Copy

```
<div class="input-group max-w-sm">
  <input type="search" class="input" placeholder="Search" />
  <button type="button" class="button button--primary">Go</button>
</div>
<div class="input-group max-w-sm">
  <button type="button" class="button button--outline button--neutral">Copy</button>
  <input type="text" class="input" value="https://stisla.dev" readonly />
</div>
```

Pair the button size with the wrapper size so the chip's text fits its chip: `.input-group--sm` \+ `.button--sm`, default + default, `.input-group--lg` +`.button--lg`.

Go

Go

Go

```
<div class="input-group input-group--sm max-w-sm">
  <input type="search" class="input input--sm" placeholder="Small" />
  <button type="button" class="button button--sm button--primary">Go</button>
</div>
<div class="input-group max-w-sm">
  <input type="search" class="input" placeholder="Default" />
  <button type="button" class="button button--primary">Go</button>
</div>
<div class="input-group input-group--lg max-w-sm">
  <input type="search" class="input input--lg" placeholder="Large" />
  <button type="button" class="button button--lg button--primary">Go</button>
</div>
```

## Select

A `<select class="select">` stands in for the input. The wrapper strips its border the same way it does for`.input`.

USDEURGBPJPY

```
<div class="input-group max-w-sm">
  <select class="select max-w-22" aria-label="Currency">
    <option selected>USD</option>
    <option>EUR</option>
    <option>GBP</option>
    <option>JPY</option>
  </select>
  <input type="number" class="input" placeholder="Amount" />
</div>
```

## Labelled select

Lead with a text or icon addon and let the select stand in for the input. Reads as a labelled chooser, no separate field needed.

CurrencyUSDEURGBPJPY

EnglishBahasa Indonesia日本語Deutsch

```
<div class="input-group max-w-sm">
  <label class="input-group__text" for="currencyOnly">Currency</label>
  <select class="select" id="currencyOnly">
    <option selected>USD</option>
    <option>EUR</option>
    <option>GBP</option>
    <option>JPY</option>
  </select>
</div>
<div class="input-group max-w-sm">
  <span class="input-group__text"><i data-lucide="globe"></i></span>
  <select class="select" aria-label="Language">
    <option selected>English</option>
    <option>Bahasa Indonesia</option>
    <option>日本語</option>
    <option>Deutsch</option>
  </select>
</div>
```

## With select

Mix a text addon and a select on opposite sides for a labelled, scoped input.

$USDEURGBP

```
<div class="input-group max-w-sm">
  <label class="input-group__text" for="amountCurrency">$</label>
  <input type="number" class="input" id="amountCurrency" placeholder="Amount" />
  <select class="select max-w-22" aria-label="Currency">
    <option selected>USD</option>
    <option>EUR</option>
    <option>GBP</option>
  </select>
</div>
```

## Multiple addons

Stack more than one addon on the same side. They share the surface and read as one phrase.

$0.00

```
<div class="input-group max-w-sm">
  <span class="input-group__text">$</span>
  <span class="input-group__text">0.00</span>
  <input type="text" class="input" />
</div>
```

## Textarea

A textarea grows past the default height and the wrapper grows with it. Addons hold to their top edge.

```
<div class="input-group max-w-sm">
  <span class="input-group__text"><i data-lucide="message-square"></i></span>
  <textarea class="textarea" rows="3" placeholder="Leave a note"></textarea>
</div>
```

## Validation

An invalid child paints the wrapper red. Set`aria-invalid="true"` for server-rendered errors, or pair`required` with `:user-invalid` for native validation after the first touch.

```
<div class="input-group max-w-sm">
  <span class="input-group__text"><i data-lucide="at-sign"></i></span>
  <input type="email" class="input" value="not-an-email" aria-invalid="true" />
</div>
```

## Disabled

Disable the input directly; the wrapper dims with it via its opacity, no extra class on the group.

https://

```
<div class="input-group max-w-sm">
  <span class="input-group__text">https://</span>
  <input type="text" class="input" value="example.com" disabled />
</div>
```

## Customization

These variables retune `.input-group` without touching component CSS. Override on the wrapper, a parent scope, or`:root`.

| Variable                       | Use                                                                                                                                                     |
| ------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `--input-group-radius`         | Wrapper corner radius; the sm and lg variants reassign this                                                                                             |
| `--input-group-height`         | Wrapper height; the sm and lg variants reassign this                                                                                                    |
| `--input-group-bg`             | Wrapper background                                                                                                                                      |
| `--input-group-border-width`   | Wrapper border thickness                                                                                                                                |
| `--input-group-border-color`   | Wrapper border color                                                                                                                                    |
| `--input-group-padding-inline` | Addon horizontal padding; matches the field child's inline padding so an addon's text baseline aligns with the input's                                  |
| `--input-group-inset`          | Margin around an inline `.button` child; its height becomes _wrapper height − 2 × inset_ and its radius _wrapper radius − inset_ for concentric corners |
| `--input-group-addon-color`    | Addon text and icon color                                                                                                                               |
