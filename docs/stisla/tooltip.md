# Tooltip

A small inverse-surface chip that labels the control it points at.

## Basic

Add `data-stisla-tooltip` +`data-stisla-tooltip-title` to any control and the`@stisla/vanilla` layer builds the chip, shows it on hover or focus, and positions it with Floating UI (flipping to the opposite side when there's no room). The chip shows after a short hover and tracks the trigger. The demos below are live: hover or tab to a button.

Hover me

```
<div class="flex justify-center py-10">
  <button class="button button--neutral" data-stisla-tooltip data-stisla-tooltip-title="Saved to your library" data-stisla-tooltip-delay="150">Hover me</button>
</div>
```

## Keyboard

Tooltip activation is tied to focus when `focus` is in the trigger list (the default). Blurring the trigger closes it.

- `Tab`: focus the trigger and open the tooltip
- `Escape`: close the open tooltip without taking focus off the trigger

## Placements

`data-stisla-tooltip-placement` picks the resting side. Floating UI flips it if the chip would overflow the frame; the`-start` and `-end` variants align the tooltip to the corresponding edge of the trigger.

TopRightBottomLeftTop startTop endBottom startBottom end

```
<div class="flex flex-wrap items-center justify-center gap-3 py-12">
  <button class="button button--outline button--neutral" data-stisla-tooltip data-stisla-tooltip-placement="top" data-stisla-tooltip-title="Anchored above" data-stisla-tooltip-delay="150">Top</button>
  <button class="button button--outline button--neutral" data-stisla-tooltip data-stisla-tooltip-placement="right" data-stisla-tooltip-title="Anchored right" data-stisla-tooltip-delay="150">Right</button>
  <button class="button button--outline button--neutral" data-stisla-tooltip data-stisla-tooltip-placement="bottom" data-stisla-tooltip-title="Anchored below" data-stisla-tooltip-delay="150">Bottom</button>
  <button class="button button--outline button--neutral" data-stisla-tooltip data-stisla-tooltip-placement="left" data-stisla-tooltip-title="Anchored left" data-stisla-tooltip-delay="150">Left</button>
  <button class="button button--outline button--neutral" data-stisla-tooltip data-stisla-tooltip-placement="top-start" data-stisla-tooltip-title="Top, aligned to the trigger's start edge" data-stisla-tooltip-delay="150">Top start</button>
  <button class="button button--outline button--neutral" data-stisla-tooltip data-stisla-tooltip-placement="top-end" data-stisla-tooltip-title="Top, aligned to the trigger's end edge" data-stisla-tooltip-delay="150">Top end</button>
  <button class="button button--outline button--neutral" data-stisla-tooltip data-stisla-tooltip-placement="bottom-start" data-stisla-tooltip-title="Bottom, aligned to the trigger's start edge" data-stisla-tooltip-delay="150">Bottom start</button>
  <button class="button button--outline button--neutral" data-stisla-tooltip data-stisla-tooltip-placement="bottom-end" data-stisla-tooltip-title="Bottom, aligned to the trigger's end edge" data-stisla-tooltip-delay="150">Bottom end</button>
</div>
```

## Triggers

The default is `hover focus`, which opens on either. Pass`data-stisla-tooltip-trigger` to opt for one.`manual` wires nothing and leaves `show()` /`hide()` to a consumer script.

Hover onlyFocus onlyHover and focus

```
<div class="flex flex-wrap items-center justify-center gap-3 py-10">
  <button class="button button--outline button--neutral" data-stisla-tooltip data-stisla-tooltip-trigger="hover" data-stisla-tooltip-title="Hover only. Keyboard focus skips this.">Hover only</button>
  <button class="button button--outline button--neutral" data-stisla-tooltip data-stisla-tooltip-trigger="focus" data-stisla-tooltip-title="Focus only. Try Tab to reach this.">Focus only</button>
  <button class="button button--outline button--neutral" data-stisla-tooltip data-stisla-tooltip-title="Default. Opens on hover or focus.">Hover and focus</button>
</div>
```

## Delay

The 600ms default `delay` prevents flash on incidental pointer crossings. Drop to `0` for instant feedback or raise it for chips that should only show on deliberate hover.

InstantDefaultLazy

```
<div class="flex flex-wrap items-center justify-center gap-3 py-10">
  <button class="button button--outline button--neutral" data-stisla-tooltip data-stisla-tooltip-delay="0" data-stisla-tooltip-title="Instant. No open delay.">Instant</button>
  <button class="button button--outline button--neutral" data-stisla-tooltip data-stisla-tooltip-delay="600" data-stisla-tooltip-title="Default. 600ms before opening.">Default</button>
  <button class="button button--outline button--neutral" data-stisla-tooltip data-stisla-tooltip-delay="1200" data-stisla-tooltip-title="Lazy. 1.2s before opening.">Lazy</button>
</div>
```

## On a link

Tooltips work on any element. Inline anchors are the common case for jargon, acronyms, or external pointers.

The release pipeline runs on
[CI](https://stisla.dev/docs/vanilla/tooltip#)
and announces the cut in
[the release channel](https://stisla.dev/docs/vanilla/tooltip#).

```
<div class="prose py-10">
  <p class="m-0">
    The release pipeline runs on
    <a class="link" href="#" data-stisla-tooltip data-stisla-tooltip-title="GitHub Actions">CI</a>
    and announces the cut in
    <a class="link" href="#" data-stisla-tooltip data-stisla-tooltip-title="#releases on Slack">the release channel</a>.
  </p>
</div>
```

## Icon-only triggers

Icon buttons rely on tooltips for their label. Always pair the tooltip with an `aria-label` on the trigger so screen readers without hover get the same name.

```
<div class="flex flex-wrap items-center justify-center gap-3 py-10">
  <button class="button button--outline button--neutral button--icon-only" data-stisla-tooltip data-stisla-tooltip-title="Edit" aria-label="Edit"><i data-lucide="pencil"></i></button>
  <button class="button button--outline button--neutral button--icon-only" data-stisla-tooltip data-stisla-tooltip-title="Duplicate" aria-label="Duplicate"><i data-lucide="copy"></i></button>
  <button class="button button--outline button--neutral button--icon-only" data-stisla-tooltip data-stisla-tooltip-title="Archive" aria-label="Archive"><i data-lucide="archive"></i></button>
  <button class="button button--outline button--danger button--icon-only" data-stisla-tooltip data-stisla-tooltip-title="Delete" aria-label="Delete"><i data-lucide="trash-2"></i></button>
</div>
```

## HTML content

Pass `data-stisla-tooltip-html="true"` to render the title as HTML. Keep it short. Anything beyond a chip or two belongs in a popover.

Search

```
<div class="flex justify-center py-10">
  <button class="button button--outline button--neutral" data-stisla-tooltip data-stisla-tooltip-html="true" data-stisla-tooltip-title="Press <kbd>Cmd</kbd>+<kbd>K</kbd> to search">Search</button>
</div>
```

## Long content

Content past `--tooltip-max-width` wraps. Two lines is the practical ceiling. Anything longer belongs in a popover.

Hover for the rule

```
<div class="flex justify-center py-10">
  <button class="button button--outline button--neutral" data-stisla-tooltip data-stisla-tooltip-title="Only workspace owners can change billing details and downgrade the plan">Hover for the rule</button>
</div>
```

## Disabled trigger

Disabled buttons don't fire pointer events, so the tooltip attributes go on a focusable wrapper that takes the hover and focus instead.

Export CSV

```
<div class="flex justify-center py-10">
  <span tabindex="0" data-stisla-tooltip data-stisla-tooltip-title="Upgrade to enable exports" class="inline-block">
    <button class="button button--primary" disabled style="pointer-events: none;">Export CSV</button>
  </span>
</div>
```

## Events

Four events fire on the trigger element. The `opening` and`closing` events are cancelable.

`stisla:tooltip:opening` fires before the tooltip appears. Call `preventDefault()` to keep it hidden.

`stisla:tooltip:opened` fires once the tooltip is positioned and visible.

`stisla:tooltip:closing` fires before the tooltip dismisses. Call `preventDefault()` to keep it open.

`stisla:tooltip:closed` fires once the tooltip is removed from the DOM.

## Customization

These variables retune the chip. Override on the root or any wrapper.

| Variable                                     | Use                                                |
| -------------------------------------------- | -------------------------------------------------- |
| `--tooltip-z-index`                          | Overlay stacking order                             |
| `--tooltip-max-width`                        | Width cap before the text wraps                    |
| `--tooltip-padding-block` /`-padding-inline` | Chip interior padding                              |
| `--tooltip-font-size` / `-line-height`       | Label type                                         |
| `--tooltip-color` / `-bg`                    | Chip text and fill (inverse surface by default)    |
| `--tooltip-radius` / `-shadow`               | Chip corner radius and elevation                   |
| `--tooltip-arrow-size`                       | Caret square size                                  |
| `--tooltip-transition-duration`              | Fade and slide timing; zeroed under reduced-motion |
