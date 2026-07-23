# Separator

A hairline that splits content into groups, horizontally or vertically.

Sidebar

On this page

## Basic

Add `.separator` to an `<hr>` for a full-width rule. The bare element stays untouched by reboot, so the class is the opt-in; the color tracks the border token.

Backed up to iCloud just now.

---

Local snapshot on this Mac. 2 days ago.

```
<div class="max-w-md">
  <p class="m-0">Backed up to iCloud just now.</p>
  <hr class="separator my-3" />
  <p class="m-0">Local snapshot on this Mac. 2 days ago.</p>
</div>
```

## Vertical

Drop the `--vertical` modifier on a`<div>` inside a flex row. The rule stretches to the row's cross axis. Add `role="separator"` and`aria-orientation="vertical"` when the divide carries meaning.

By Maya Tanaka

5 min read

Tutorial

```
<div class="inline-flex items-center gap-3 text-xs text-muted-foreground">
  <span>By Maya Tanaka</span>
  <div class="separator separator--vertical" role="separator" aria-orientation="vertical"></div>
  <span>5 min read</span>
  <div class="separator separator--vertical" role="separator" aria-orientation="vertical"></div>
  <span>Tutorial</span>
</div>
```

## Inside a card body

Use a separator to break a card into thematic blocks without a header or footer. The rule reaches the body padding's edge, matching the card's cadence.

##### Invoice \#2026-04-118

Due July 1, 2026

---

Annual plan$96.00

Three additional seats$36.00

Estimated tax$8.40

---

Total$140.40

```
<div class="card max-w-sm w-full">
  <div class="card__body">
    <h5 class="card__title m-0">Invoice #2026-04-118</h5>
    <p class="card__subtitle m-0">Due July 1, 2026</p>
  </div>
  <hr class="separator" />
  <div class="card__body">
    <div class="flex flex-wrap items-center justify-between">
      <span>Annual plan</span><span class="font-medium">$96.00</span>
    </div>
    <div class="flex flex-wrap items-center justify-between">
      <span>Three additional seats</span><span class="font-medium">$36.00</span>
    </div>
    <div class="flex flex-wrap items-center justify-between text-muted-foreground">
      <span>Estimated tax</span><span class="font-medium">$8.40</span>
    </div>
  </div>
  <hr class="separator" />
  <div class="card__body">
    <div class="flex flex-wrap items-center justify-between text-lg font-semibold">
      <span>Total</span><span>$140.40</span>
    </div>
  </div>
</div>
```

## Customization

These variables retune `.separator` without touching component CSS. Override on the element, a parent scope, or`:root`.

| Variable                 | Use                                                                        |
| ------------------------ | -------------------------------------------------------------------------- |
| `--separator-thickness`  | Rule weight; defaults to the border-width custom. Bump for a louder split. |
| `--separator-color`      | Rule color; tracks the border token by default                             |
| `--separator-min-height` | Floor height for a vertical rule when its flex parent can't stretch it     |
