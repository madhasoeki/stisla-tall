# Separator Component (TALL Stack)

A hairline that splits content into groups, horizontally or vertically.

## Basic

Add `.separator` to an `<hr>` for a full-width rule. The bare element stays untouched by reboot, so the class is the opt-in; the color tracks the border token.

```blade
<div class="max-w-md">
    <p class="m-0">Backed up to iCloud just now.</p>
    <stisla::separator class="my-3" />
    <p class="m-0 text-muted-foreground">Local snapshot on this Mac. 2 days ago.</p>
</div>
```

## Vertical

Drop the `--vertical` modifier on a `<div>` inside a flex row. The rule stretches to the row's cross axis. Add `role="separator"` and `aria-orientation="vertical"` when the divide carries meaning.

```blade
<div class="inline-flex items-center gap-3 text-xs text-muted-foreground">
    <span>By Maya Tanaka</span>
    <stisla::separator orientation="vertical" :decorative="false" />
    <span>5 min read</span>
    <stisla::separator orientation="vertical" :decorative="false" />
    <span>Tutorial</span>
</div>
```

## Inside a card body

Use a separator to break a card into thematic blocks without a header or footer. The rule reaches the body padding's edge, matching the card's cadence.

```blade
<stisla::card class="max-w-sm w-full">
    <stisla::card.body>
        <h5 class="card__title m-0">Invoice #2026-04-118</h5>
        <p class="card__subtitle m-0">Due July 1, 2026</p>
    </stisla::card.body>
    <stisla::separator />
    <stisla::card.body>
        <div class="flex flex-wrap items-center justify-between">
            <span>Annual plan</span><span class="font-medium">$96.00</span>
        </div>
        <div class="flex flex-wrap items-center justify-between">
            <span>Three additional seats</span><span class="font-medium">$36.00</span>
        </div>
        <div class="flex flex-wrap items-center justify-between text-muted-foreground">
            <span>Estimated tax</span><span class="font-medium">$8.40</span>
        </div>
    </stisla::card.body>
    <stisla::separator />
    <stisla::card.body>
        <div class="flex flex-wrap items-center justify-between text-lg font-semibold">
            <span>Total</span><span>$140.40</span>
        </div>
    </stisla::card.body>
</stisla::card>
```

## Customization

These variables retune `.separator` without touching component CSS. Override on the element, a parent scope, or `:root`.

| Variable | Use |
| :--- | :--- |
| `--separator-thickness` | Rule weight; defaults to the border-width custom. Bump for a louder split. |
| `--separator-color` | Rule color; tracks the border token by default |
| `--separator-min-height` | Floor height for a vertical rule when its flex parent can't stretch it |

---

## Props Reference

### `<stisla::separator>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `orientation` | `string` | `'horizontal'` | Arah garis (`'horizontal'`, `'vertical'`) |
| `as` | `string` | `null` | Tag HTML elemen (`'hr'`, `'div'`) |
| `decorative` | `bool` | `true` | Aksesibilitas pembaca layar (`role="none"` jika true, `role="separator"` jika false) |
| `thickness` | `string` | `null` | Ketebalan garis (misal `'2px'`) |
| `color` | `string` | `null` | Warna garis pemisah |
| `minHeight` | `string` | `null` | Tinggi minimal untuk separator vertikal |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--separator-*`) |
