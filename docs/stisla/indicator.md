# Indicator

A small status dot for presence, liveness, and unread signals.

## Basic

An indicator is just the dot. Where a badge labels something with a count or word, an indicator only signals. A bare `.indicator` sits on the muted foreground tone. Drop it inline next to a label.

Offline

```
<span class="inline-flex items-center gap-2"><span class="indicator"></span> Offline</span>
```

## Intents

Add an intent modifier to recolor the dot. Each reads the matching color token, so a runtime override retints every indicator of that intent at once.

```
<span class="indicator indicator--primary"></span>
<span class="indicator indicator--success"></span>
<span class="indicator indicator--warning"></span>
<span class="indicator indicator--danger"></span>
<span class="indicator indicator--info"></span>
```

## Pulse

Add `.indicator--pulse` for an expanding halo in the dot's color, for live or active signals. Under reduced-motion the halo is dropped and the dot stays.

Online Live Streaming

```
<span class="inline-flex items-center gap-2"><span class="indicator indicator--success indicator--pulse"></span> Online</span>
<span class="inline-flex items-center gap-2"><span class="indicator indicator--danger indicator--pulse"></span> Live</span>
<span class="inline-flex items-center gap-2"><span class="indicator indicator--info indicator--pulse"></span> Streaming</span>
```

## Sizes

Default sits between `.indicator--sm` and `.indicator--lg`. For an off-scale dot, set `--indicator-size` directly.

```
<span class="indicator indicator--success indicator--sm"></span>
<span class="indicator indicator--success"></span>
<span class="indicator indicator--success indicator--lg"></span>
```

## Pinned to a host

Overlay the dot on a corner with absolute positioning on a relative host — the notification-dot pattern for icon buttons and nav items. Raise`--indicator-ring-width` so the dot reads cleanly over a busy surface. (Dedicated`.pin-*` utilities land with the utilities pass; until then, Tailwind positioning works.) On avatars, reach for the built-in `.avatar__indicator` instead.

```
<span class="relative inline-flex">
  <button type="button" class="button button--outline button--neutral button--icon-only" aria-label="Notifications"><i data-lucide="bell"></i></button>
  <span class="indicator indicator--danger absolute -top-1 -right-1" style="--indicator-ring-width: 2px;"></span>
</span>
<span class="relative inline-flex">
  <button type="button" class="button button--outline button--neutral button--icon-only" aria-label="Messages"><i data-lucide="mail"></i></button>
  <span class="indicator indicator--primary indicator--pulse absolute -top-1 -right-1" style="--indicator-ring-width: 2px;"></span>
</span>
```

## Corners

Pin a dot to any corner of a host. Logical insets (`-top-1 -left-1` etc.) keep the markup simple; flip to physical edges as needed.

```
<span class="relative inline-flex size-12 bg-surface-3 rounded-md">
  <span class="indicator indicator--success absolute -top-1 -left-1"></span>
  <span class="indicator indicator--warning absolute -top-1 -right-1"></span>
  <span class="indicator indicator--info absolute -bottom-1 -left-1"></span>
  <span class="indicator indicator--danger absolute -bottom-1 -right-1"></span>
</span>
```

## Customization

These variables retune `.indicator`. Override on the indicator, a parent scope, or `:root`.

| Variable                     | Use                                                                       |
| ---------------------------- | ------------------------------------------------------------------------- |
| `--indicator-size`           | Dot diameter; size modifiers set this                                     |
| `--indicator-color`          | Dot fill and pulse halo color; intents reassign it                        |
| `--indicator-ring-width`     | Separator halo width; raise above zero to lift the dot off a busy surface |
| `--indicator-ring-color`     | Halo color; match the surface the dot overhangs                           |
| `--indicator-pulse-duration` | Length of one pulse loop on `.indicator--pulse`                           |
