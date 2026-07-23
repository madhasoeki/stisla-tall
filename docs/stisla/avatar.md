# Avatar

A portrait slot with a graceful fallback for missing or broken images.

## Basic

Tag the root with `data-stisla-avatar` and the behavior layer preloads the source via `new Image()`, revealing the real `<img>` only on a confirmed load and flipping `data-status` through `loading` →`loaded` / `error`. The fallback paints underneath the whole time. For a known-good static image with no JS, set `data-status="loaded"` on the root directly. Drop text directly into `.avatar` for the no-image case: a plain neutral tile with the content centered. The default shape is a rounded square.

RFNA

```
<span class="avatar">RF</span>
<span class="avatar">NA</span>
<span class="avatar"><i data-lucide="user"></i></span>
```

## Image with fallback

Add a `.avatar__image` and a `.avatar__fallback` inside`.avatar`, and tag the root with `data-stisla-avatar`. The JS preloads the source and only reveals the real `<img>` after a confirmed load. The fallback paints underneath the whole time, so a slow network shows a styled tile instead of a broken-image icon.

![Rafiq](https://i.pravatar.cc/96?img=12)RF![Nauval](https://i.pravatar.cc/96?img=32)NA![Ida](https://i.pravatar.cc/96?img=48)ID

```
<span class="avatar" data-stisla-avatar>
  <img class="avatar__image" src="https://i.pravatar.cc/96?img=12" alt="Rafiq">
  <span class="avatar__fallback">RF</span>
</span>
<span class="avatar" data-stisla-avatar>
  <img class="avatar__image" src="https://i.pravatar.cc/96?img=32" alt="Nauval">
  <span class="avatar__fallback">NA</span>
</span>
<span class="avatar" data-stisla-avatar>
  <img class="avatar__image" src="https://i.pravatar.cc/96?img=48" alt="Ida">
  <span class="avatar__fallback">ID</span>
</span>
```

## Broken source

If the image fails (404, CORS, blocked domain) the root flips to`data-status="error"` and the fallback stays visible. The broken`<img>` never paints because the reveal CSS only fires on`data-status="loaded"`.

![](https://example.invalid/nope.png)NA![](https://example.invalid/nope.png)

```
<span class="avatar" data-stisla-avatar>
  <img class="avatar__image" src="https://example.invalid/nope.png" alt="">
  <span class="avatar__fallback">NA</span>
</span>
<span class="avatar avatar--circle" data-stisla-avatar>
  <img class="avatar__image" src="https://example.invalid/nope.png" alt="">
  <span class="avatar__fallback"><i data-lucide="user"></i></span>
</span>
```

## Circle

Add `.avatar--circle` for a circle. Default is rounded square to match the Stisla surface vocabulary.

![](https://i.pravatar.cc/96?img=15)RFNA

```
<span class="avatar avatar--circle" data-stisla-avatar>
  <img class="avatar__image" src="https://i.pravatar.cc/96?img=15" alt="">
  <span class="avatar__fallback">RF</span>
</span>
<span class="avatar avatar--circle">NA</span>
<span class="avatar avatar--circle"><i data-lucide="user"></i></span>
```

## Sizes

Four sizes: `.avatar--sm`, default, `.avatar--lg`, and`.avatar--xl`. Each retunes `--avatar-size` and`--avatar-font-size` off the spacing scale.

SMMDLGXL

```
<span class="avatar avatar--sm">SM</span>
<span class="avatar">MD</span>
<span class="avatar avatar--lg">LG</span>
<span class="avatar avatar--xl">XL</span>
```

## Indicator

Pin a `.avatar__indicator` child to a corner for a status dot, unread count, or verified mark. Default position is bottom-end; add `.avatar__indicator--top` for top-end. Default tone is success; override `--avatar-indicator-bg` for any intent.

![](https://i.pravatar.cc/96?img=22)RF![](https://i.pravatar.cc/96?img=33)NA![](https://i.pravatar.cc/96?img=44)ID3![](https://i.pravatar.cc/96?img=55)BS

```
<span class="avatar" data-stisla-avatar>
  <img class="avatar__image" src="https://i.pravatar.cc/96?img=22" alt="">
  <span class="avatar__fallback">RF</span>
  <span class="avatar__indicator"></span>
</span>
<span class="avatar" data-stisla-avatar>
  <img class="avatar__image" src="https://i.pravatar.cc/96?img=33" alt="">
  <span class="avatar__fallback">NA</span>
  <span class="avatar__indicator" style="--avatar-indicator-bg: var(--color-muted-foreground);"></span>
</span>
<span class="avatar" data-stisla-avatar>
  <img class="avatar__image" src="https://i.pravatar.cc/96?img=44" alt="">
  <span class="avatar__fallback">ID</span>
  <span class="avatar__indicator avatar__indicator--top avatar__indicator--lg" style="--avatar-indicator-bg: var(--color-danger); --avatar-indicator-color: var(--color-danger-foreground);">3</span>
</span>
<span class="avatar" data-stisla-avatar>
  <img class="avatar__image" src="https://i.pravatar.cc/96?img=55" alt="">
  <span class="avatar__fallback">BS</span>
  <span class="avatar__indicator avatar__indicator--xl" style="--avatar-indicator-bg: var(--color-info); --avatar-indicator-color: var(--color-info-foreground);"><i data-lucide="check"></i></span>
</span>
```

## Loading state

While the source is in flight, the root carries `data-status="loading"`; the fallback paints until the load completes. Set `data-stisla-avatar-delay` to hold that state for a fixed time (here 1.5 s) for FOUC tuning or tests.

![](https://i.pravatar.cc/96?img=64)…

Source reveals after a 1.5 s artificial delay.

```
<div class="flex items-center gap-3">
  <span class="avatar" data-stisla-avatar data-stisla-avatar-delay="1500">
    <img class="avatar__image" src="https://i.pravatar.cc/96?img=64" alt="">
    <span class="avatar__fallback">…</span>
  </span>
  <p class="m-0 text-muted-foreground">Source reveals after a 1.5 s artificial delay.</p>
</div>
```

## Events

`stisla:avatar:changed` fires on the avatar root whenever its load status flips. The `detail.status` field carries the new value (`"loading"`,`"loaded"`, or `"error"`). Use it to log image failures, swap to a different source on error, or sequence the next step in a load orchestration.

## Customization

These variables retune the avatar root and the indicator. Override on the element, a parent scope, or `:root`. For the stacked-cluster variant, see Avatar group.

| Variable               | Use                                                                    |
| ---------------------- | ---------------------------------------------------------------------- |
| `--avatar-size`        | Square side length; size modifiers retune this                         |
| `--avatar-radius`      | Corner radius; `.avatar--circle` flips it to a full circle             |
| `--avatar-bg`          | Tile background, the canvas the fallback paints over                   |
| `--avatar-color`       | Fallback text color                                                    |
| `--avatar-font-size`   | Fallback font size (icons scale to 1em)                                |
| `--avatar-font-weight` | Fallback font weight                                                   |
| `--avatar-ring-width`  | Outline width; `.avatar-group` raises this so stacked members separate |
| `--avatar-ring-color`  | Outline color; the group publishes this                                |

Indicator variables, defined on `.avatar__indicator`:

| Variable                        | Use                                             |
| ------------------------------- | ----------------------------------------------- |
| `--avatar-indicator-size`       | Pip diameter; size modifiers retune this        |
| `--avatar-indicator-bg`         | Pip fill; override for danger / info / muted    |
| `--avatar-indicator-color`      | Pip text/icon color                             |
| `--avatar-indicator-font-size`  | Digit / icon size inside the pip                |
| `--avatar-indicator-ring-width` | Ring punching the pip out of the avatar surface |
| `--avatar-indicator-ring-color` | Ring color; matches the page background         |
