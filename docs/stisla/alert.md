# Alert

A contextual feedback strip.

## Basic

Pair `.alert` with a tone modifier. Use`.alert--neutral` for the plain surface look, or an intent like `.alert--primary`, `.alert--success`,`.alert--warning`, `.alert--danger`,`.alert--info` for a tinted variant. A bare`.alert` renders transparent (the same contract as`.button`), so the tone gives the alert its visible chrome.

Some neutral message here.

Heads up, your trial ends in 3 days.

Your changes have been saved successfully.

Some features may not work.

Payment failed. Check your card details.

Some useful information here.

```
<div class="alert alert--neutral"><i data-lucide="info"></i><div>Some neutral message here.</div></div>
<div class="alert alert--primary"><i data-lucide="info"></i><div>Heads up, your trial ends in 3 days.</div></div>
<div class="alert alert--success"><i data-lucide="circle-check"></i><div>Your changes have been saved successfully.</div></div>
<div class="alert alert--warning"><i data-lucide="triangle-alert"></i><div>Some features may not work.</div></div>
<div class="alert alert--danger"><i data-lucide="circle-x"></i><div>Payment failed. Check your card details.</div></div>
<div class="alert alert--info"><i data-lucide="info"></i><div>Some useful information here.</div></div>
```

## Without icon

There's no icon wrapper class. The leading icon is any direct`<svg>` or `<i>` child. Skip it and the row reflows around the text.

Heads up, your trial ends in 3 days.

Your changes have been saved successfully.

```
<div class="alert alert--neutral">Heads up, your trial ends in 3 days.</div>
<div class="alert alert--success">Your changes have been saved successfully.</div>
```

## With heading and description

Add `.alert__description` for a stacked layout. The heading sits above the description, the icon aligns with the heading, and the row gains breathing room.

Alert Title

Alert Description

```
<div class="alert alert--neutral">
  <i data-lucide="info"></i>
  <div class="alert__title">Alert Title</div>
  <div class="alert__description">Alert Description</div>
</div>
```

Same layout, with an intent.

Heads up

A new version is available. Refresh to load it.

Unsaved changes

Leaving this page will discard your edits.

Payment failed

We couldn't charge your card. Update billing details and retry.

```
<div class="alert alert--info">
  <i data-lucide="info"></i>
  <div class="alert__title">Heads up</div>
  <div class="alert__description">A new version is available. Refresh to load it.</div>
</div>
<div class="alert alert--warning">
  <i data-lucide="triangle-alert"></i>
  <div class="alert__title">Unsaved changes</div>
  <div class="alert__description">Leaving this page will discard your edits.</div>
</div>
<div class="alert alert--danger">
  <i data-lucide="circle-x"></i>
  <div class="alert__title">Payment failed</div>
  <div class="alert__description">We couldn't charge your card. Update billing details and retry.</div>
</div>
```

## Action slot

`.alert__action` is the trailing slot. It pushes to the right on single-line alerts and centers vertically when a description is present. Drop in a button, link, or any control.

Message deleted successfully.

Undo

```
<div class="alert alert--neutral">
  <i data-lucide="info"></i>
  <div>Message deleted successfully.</div>
  <div class="alert__action">
    <button type="button" class="button button--neutral button--sm">Undo</button>
  </div>
</div>
```

Multiple actions and intent variants.

Your session is about to expire.

StayExtend

New version available

Reload to pick up the latest changes.

Reload

```
<div class="alert alert--warning">
  <i data-lucide="triangle-alert"></i>
  <div>Your session is about to expire.</div>
  <div class="alert__action">
    <button type="button" class="button button--ghost button--neutral button--sm">Stay</button>
    <button type="button" class="button button--neutral button--sm">Extend</button>
  </div>
</div>
<div class="alert alert--info">
  <i data-lucide="info"></i>
  <div class="alert__title">New version available</div>
  <div class="alert__description">Reload to pick up the latest changes.</div>
  <div class="alert__action">
    <button type="button" class="button button--primary button--sm">Reload</button>
  </div>
</div>
```

## Dismissible

Alert ships no special close control. Drop a`.button--ghost.button--neutral.button--icon-only.button--sm`with an X icon inside `.alert__action` and wire your own dismiss handler.

Your changes have been saved.

Couldn't connect

We lost contact with the server. Try again in a moment.

```
<div class="alert alert--success">
  <i data-lucide="circle-check"></i>
  <div>Your changes have been saved.</div>
  <div class="alert__action">
    <button type="button" class="button button--ghost button--neutral button--icon-only button--sm" aria-label="Dismiss"><i data-lucide="x"></i></button>
  </div>
</div>
<div class="alert alert--danger">
  <i data-lucide="circle-x"></i>
  <div class="alert__title">Couldn't connect</div>
  <div class="alert__description">We lost contact with the server. Try again in a moment.</div>
  <div class="alert__action">
    <button type="button" class="button button--ghost button--neutral button--icon-only button--sm" aria-label="Dismiss"><i data-lucide="x"></i></button>
  </div>
</div>
```

## Inline link

`.alert__link` reads `--alert-link-color`. That resolves to primary on a neutral alert and to the intent color on tinted alerts, so the link affordance stays readable regardless of tone.

A neutral alert with [a primary link](https://stisla.dev/docs/vanilla/alert#).

An info alert with [an info-colored link](https://stisla.dev/docs/vanilla/alert#).

```
<div class="alert alert--neutral"><i data-lucide="info"></i><div>A neutral alert with <a href="#" class="alert__link">a primary link</a>.</div></div>
<div class="alert alert--info"><i data-lucide="info"></i><div>An info alert with <a href="#" class="alert__link">an info-colored link</a>.</div></div>
```

## Customization

These variables retune `.alert` without touching component CSS. Override on `.alert` itself, on a parent scope, or on`:root`. The cascade scopes the change.

| Variable                 | Use                                                                  |
| ------------------------ | -------------------------------------------------------------------- |
| `--alert-radius`         | Corner radius                                                        |
| `--alert-padding-block`  | Top and bottom padding; grows when`.alert__description` is present   |
| `--alert-padding-inline` | Left and right padding                                               |
| `--alert-bg`             | Background; `--neutral` sets`--color-surface`, intents set a 7% tint |
| `--alert-border-width`   | Border thickness; set `0` to drop the border                         |
| `--alert-border-color`   | Border color; `--neutral` sets`--color-border`, intents a 40% tint   |
| `--alert-color`          | Body text color                                                      |
| `--alert-icon-color`     | Leading icon color; intents flip this to the intent color            |
| `--alert-link-color`     | `.alert__link` color; intents flip this to the intent color          |

A bare `.alert` stays transparent because`--alert-bg` and `--alert-border-color` default to transparent. The tone modifier provides the visible chrome, so an alert without a tone is invisible by design.
