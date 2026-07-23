# Accordion

## Basic

Each `.accordion__item` carries`data-state="open|closed"`: a closed item sits transparent on the frame, an open one fills with a surface chip and reveals its body. The toggling — the measured height transition and single-open coordination — comes from the `@stisla/vanilla` layer via`data-stisla-accordion` on the root and`data-stisla-accordion-trigger` on each button. Multiple items may stay open at once. The demos below are live: click a header to expand it.

### What is a design system?

A shared vocabulary of tokens, primitives, and patterns that lets every screen in a product look like it was made by the same hand. Stisla is one of them, implemented first as a vanilla CSS + JS layer, with React and Vue layers to follow.

### How are corners kept concentric?

The frame owns a single radius. Each item subtracts the wrapper padding from that radius so the inner arc shares a center with the outer arc. Change `--accordion-radius` on a parent and every nested item keeps the rhythm.

### Does it animate?

The chevron rotates and the panel slides open and closed. Both transitions follow the standard Stisla motion curve and ease at the same duration.

```
<div class="accordion" data-stisla-accordion>
  <div class="accordion__item" data-state="open">
    <h3 class="accordion__heading">
      <button class="accordion__trigger" data-stisla-accordion-trigger aria-expanded="true" aria-controls="acc-default-1" id="acc-default-1-trigger">
        What is a design system?
        <i data-lucide="chevron-down" class="accordion__icon"></i>
      </button>
    </h3>
    <div class="accordion__body" id="acc-default-1" role="region" aria-labelledby="acc-default-1-trigger">
      <div class="accordion__body-inner">
        A shared vocabulary of tokens, primitives, and patterns that lets every screen in a product look like it was made by the same hand. Stisla is one of them, implemented first as a vanilla CSS + JS layer, with React and Vue layers to follow.
      </div>
    </div>
  </div>
  <div class="accordion__item" data-state="closed">
    <h3 class="accordion__heading">
      <button class="accordion__trigger" data-stisla-accordion-trigger aria-expanded="false" aria-controls="acc-default-2" id="acc-default-2-trigger">
        How are corners kept concentric?
        <i data-lucide="chevron-down" class="accordion__icon"></i>
      </button>
    </h3>
    <div class="accordion__body" id="acc-default-2" role="region" aria-labelledby="acc-default-2-trigger">
      <div class="accordion__body-inner">
        The frame owns a single radius. Each item subtracts the wrapper padding from that radius so the inner arc shares a center with the outer arc. Change <code>--accordion-radius</code> on a parent and every nested item keeps the rhythm.
      </div>
    </div>
  </div>
  <div class="accordion__item" data-state="closed">
    <h3 class="accordion__heading">
      <button class="accordion__trigger" data-stisla-accordion-trigger aria-expanded="false" aria-controls="acc-default-3" id="acc-default-3-trigger">
        Does it animate?
        <i data-lucide="chevron-down" class="accordion__icon"></i>
      </button>
    </h3>
    <div class="accordion__body" id="acc-default-3" role="region" aria-labelledby="acc-default-3-trigger">
      <div class="accordion__body-inner">
        The chevron rotates and the panel slides open and closed. Both transitions follow the standard Stisla motion curve and ease at the same duration.
      </div>
    </div>
  </div>
</div>
```

## Keyboard

Each `.accordion__trigger` is a native`<button>`, so the browser handles focus and activation.

| Key               | Action                                                  |
| ----------------- | ------------------------------------------------------- |
| `Tab`             | Move focus to the next trigger, or out of the accordion |
| `Shift` \+ `Tab`  | Move focus backward                                     |
| `Enter` / `Space` | Toggle the focused panel                                |

## Single open

Add `data-stisla-accordion-type="single"` on the root to enforce one-open-at-a-time. Opening any trigger closes the others.

### Section one

Opening section two will close this panel.

### Section two

Each trigger acts like a radio in a group.

### Section three

Closing the current one without opening another is fine too. Just click an open trigger again.

```
<div class="accordion" data-stisla-accordion data-stisla-accordion-type="single">
  <div class="accordion__item" data-state="open">
    <h3 class="accordion__heading">
      <button class="accordion__trigger" data-stisla-accordion-trigger aria-expanded="true" aria-controls="acc-single-1" id="acc-single-1-trigger">
        Section one
        <i data-lucide="chevron-down" class="accordion__icon"></i>
      </button>
    </h3>
    <div class="accordion__body" id="acc-single-1" role="region" aria-labelledby="acc-single-1-trigger">
      <div class="accordion__body-inner">
        Opening section two will close this panel.
      </div>
    </div>
  </div>
  <div class="accordion__item" data-state="closed">
    <h3 class="accordion__heading">
      <button class="accordion__trigger" data-stisla-accordion-trigger aria-expanded="false" aria-controls="acc-single-2" id="acc-single-2-trigger">
        Section two
        <i data-lucide="chevron-down" class="accordion__icon"></i>
      </button>
    </h3>
    <div class="accordion__body" id="acc-single-2" role="region" aria-labelledby="acc-single-2-trigger">
      <div class="accordion__body-inner">
        Each trigger acts like a radio in a group.
      </div>
    </div>
  </div>
  <div class="accordion__item" data-state="closed">
    <h3 class="accordion__heading">
      <button class="accordion__trigger" data-stisla-accordion-trigger aria-expanded="false" aria-controls="acc-single-3" id="acc-single-3-trigger">
        Section three
        <i data-lucide="chevron-down" class="accordion__icon"></i>
      </button>
    </h3>
    <div class="accordion__body" id="acc-single-3" role="region" aria-labelledby="acc-single-3-trigger">
      <div class="accordion__body-inner">
        Closing the current one without opening another is fine too. Just click an open trigger again.
      </div>
    </div>
  </div>
</div>
```

## Seamless in a card

Add `.accordion--seamless` to drop the outer frame so the accordion sits edge-to-edge inside a card or page. Items lose their chip inset and a single divider sits between rows.

#### Frequently asked

#### Can I deploy to my own domain?

Point your domain at the build output. Any static host works.

#### Do you ship a CLI?

Not in 3.0. The starter templates download as zips.

#### Is there a React wrapper?

Pair `@stisla/css` with Radix or Base UI today. A first-party wrapper is post-3.0.

```
<div class="card w-full">
  <div class="card__header">
    <h4 class="card__title">Frequently asked</h4>
  </div>
  <div class="accordion accordion--seamless" data-stisla-accordion>
    <div class="accordion__item" data-state="open">
      <h4 class="accordion__heading">
        <button class="accordion__trigger" data-stisla-accordion-trigger aria-expanded="true" aria-controls="acc-flush-1" id="acc-flush-1-trigger">
          Can I deploy to my own domain?
          <i data-lucide="chevron-down" class="accordion__icon"></i>
        </button>
      </h4>
      <div class="accordion__body" id="acc-flush-1" role="region" aria-labelledby="acc-flush-1-trigger">
        <div class="accordion__body-inner">
          Point your domain at the build output. Any static host works.
        </div>
      </div>
    </div>
    <div class="accordion__item" data-state="closed">
      <h4 class="accordion__heading">
        <button class="accordion__trigger" data-stisla-accordion-trigger aria-expanded="false" aria-controls="acc-flush-2" id="acc-flush-2-trigger">
          Do you ship a CLI?
          <i data-lucide="chevron-down" class="accordion__icon"></i>
        </button>
      </h4>
      <div class="accordion__body" id="acc-flush-2" role="region" aria-labelledby="acc-flush-2-trigger">
        <div class="accordion__body-inner">
          Not in 3.0. The starter templates download as zips.
        </div>
      </div>
    </div>
    <div class="accordion__item" data-state="closed">
      <h4 class="accordion__heading">
        <button class="accordion__trigger" data-stisla-accordion-trigger aria-expanded="false" aria-controls="acc-flush-3" id="acc-flush-3-trigger">
          Is there a React wrapper?
          <i data-lucide="chevron-down" class="accordion__icon"></i>
        </button>
      </h4>
      <div class="accordion__body" id="acc-flush-3" role="region" aria-labelledby="acc-flush-3-trigger">
        <div class="accordion__body-inner">
          Pair <code>@stisla/css</code> with Radix or Base UI today. A first-party wrapper is post-3.0.
        </div>
      </div>
    </div>
  </div>
</div>
```

## With leading icon

Drop an icon inside the trigger before the label. The chevron stays pinned to the end.

### Shipping

Free standard shipping on orders over $50. Express options at checkout.

### Returns

30-day window from delivery. Bring your order number.

### Order tracking

A tracking link emails out once your package leaves the warehouse.

```
<div class="accordion" data-stisla-accordion>
  <div class="accordion__item" data-state="open">
    <h3 class="accordion__heading">
      <button class="accordion__trigger" data-stisla-accordion-trigger aria-expanded="true" aria-controls="acc-icon-1" id="acc-icon-1-trigger">
        <i data-lucide="truck"></i>
        Shipping
        <i data-lucide="chevron-down" class="accordion__icon"></i>
      </button>
    </h3>
    <div class="accordion__body" id="acc-icon-1" role="region" aria-labelledby="acc-icon-1-trigger">
      <div class="accordion__body-inner">
        Free standard shipping on orders over $50. Express options at checkout.
      </div>
    </div>
  </div>
  <div class="accordion__item" data-state="closed">
    <h3 class="accordion__heading">
      <button class="accordion__trigger" data-stisla-accordion-trigger aria-expanded="false" aria-controls="acc-icon-2" id="acc-icon-2-trigger">
        <i data-lucide="trash-2"></i>
        Returns
        <i data-lucide="chevron-down" class="accordion__icon"></i>
      </button>
    </h3>
    <div class="accordion__body" id="acc-icon-2" role="region" aria-labelledby="acc-icon-2-trigger">
      <div class="accordion__body-inner">
        30-day window from delivery. Bring your order number.
      </div>
    </div>
  </div>
  <div class="accordion__item" data-state="closed">
    <h3 class="accordion__heading">
      <button class="accordion__trigger" data-stisla-accordion-trigger aria-expanded="false" aria-controls="acc-icon-3" id="acc-icon-3-trigger">
        <i data-lucide="clock"></i>
        Order tracking
        <i data-lucide="chevron-down" class="accordion__icon"></i>
      </button>
    </h3>
    <div class="accordion__body" id="acc-icon-3" role="region" aria-labelledby="acc-icon-3-trigger">
      <div class="accordion__body-inner">
        A tracking link emails out once your package leaves the warehouse.
      </div>
    </div>
  </div>
</div>
```

## Disabled item

A native `disabled` on the trigger fades it and blocks the toggle.

### Active section

This one opens.

### Locked section

Body sits hidden; the trigger refuses interaction.

```
<div class="accordion" data-stisla-accordion>
  <div class="accordion__item" data-state="closed">
    <h3 class="accordion__heading">
      <button class="accordion__trigger" data-stisla-accordion-trigger aria-expanded="false" aria-controls="acc-disabled-1" id="acc-disabled-1-trigger">
        Active section
        <i data-lucide="chevron-down" class="accordion__icon"></i>
      </button>
    </h3>
    <div class="accordion__body" id="acc-disabled-1" role="region" aria-labelledby="acc-disabled-1-trigger">
      <div class="accordion__body-inner">
        This one opens.
      </div>
    </div>
  </div>
  <div class="accordion__item" data-state="closed">
    <h3 class="accordion__heading">
      <button class="accordion__trigger" data-stisla-accordion-trigger aria-expanded="false" aria-controls="acc-disabled-2" id="acc-disabled-2-trigger" disabled>
        Locked section
        <i data-lucide="chevron-down" class="accordion__icon"></i>
      </button>
    </h3>
    <div class="accordion__body" id="acc-disabled-2" role="region" aria-labelledby="acc-disabled-2-trigger">
      <div class="accordion__body-inner">
        Body sits hidden; the trigger refuses interaction.
      </div>
    </div>
  </div>
</div>
```

## Events

`stisla:accordion:value-change` fires on the accordion root after a successful open or close. The `detail` object carries the freshly-changed item under `value`, the prior selection under `previousValue`, and the full set of currently-open items under `openItems`. Use it to sync URL hash state, persist the last-open item, or react to user navigation through the panels.

## Customization

These variables retune the stack. Override on the root or any wrapper.

| Variable                                                             | Use                                                |
| -------------------------------------------------------------------- | -------------------------------------------------- |
| `--accordion-gap`                                                    | Space between items                                |
| `--accordion-padding-block` /`-padding-inline`                       | Frame inset; also feeds the concentric item radius |
| `--accordion-bg`                                                     | Frame background                                   |
| `--accordion-border-color` /`-border-width`                          | Frame rim                                          |
| `--accordion-radius` / `-shadow`                                     | Frame corner radius and elevation                  |
| `--accordion-item-open-bg` /`-item-open-border-color`                | Open chip fill and rim                             |
| `--accordion-trigger-padding-block` /`-padding-inline`               | Trigger interior padding                           |
| `--accordion-trigger-font-size` /`-font-weight`                      | Trigger label type                                 |
| `--accordion-trigger-color` / `-bg` /`-bg-hover`                     | Trigger text, fill, and closed-item hover          |
| `--accordion-trigger-divider-color`                                  | Line under an open trigger                         |
| `--accordion-ring`                                                   | Focus outline color                                |
| `--accordion-icon-size` / `-icon-color` /`-icon-transition-duration` | Chevron size, color, and rotation timing           |
| `--accordion-body-color`                                             | Body text color                                    |
| `--accordion-body-padding-block` /`-padding-inline`                  | Body interior padding                              |
