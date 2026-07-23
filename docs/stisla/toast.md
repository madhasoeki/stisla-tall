# Toast

A status message that surfaces briefly at a corner of the screen.

## Triggering

Each `.toast` is a grid of`[icon | content | close]`, stacked inside a fixed`.toast-region` at one of six corners. The usual entry point is the imperative API — `Stisla.toast(…)` and its`.success` / `.error` / `.promise`helpers build the node and mount it in a region (auto-creating one if needed). The base call takes an options object —`Stisla.toast({ title, description, variant, action, … })`— while the shortcuts take a title first:`Stisla.toast.success("Saved")`, `.error`,`.warning`, `.info`.`Stisla.toast.promise()` shows a spinner that swaps to success or error when the promise settles. Toasts autohide after a few seconds and pause on hover. The Triggering demo below is live; the rest render the markup statically so you can read the anatomy.

Show toastSuccessErrorWith actionPromise

```
<button class="button button--neutral" onclick="Stisla.toast({ title: 'Heads up', description: 'Your export is ready to download.' })">Show toast</button>
  <button class="button button--neutral" onclick="Stisla.toast.success('Changes saved')">Success</button>
  <button class="button button--neutral" onclick="Stisla.toast.error('Upload failed')">Error</button>
  <button class="button button--neutral" onclick="Stisla.toast({ title: 'New message', description: 'Priya sent you a message.', action: { label: 'Reply' } })">With action</button>
  <button class="button button--neutral" onclick="Stisla.toast.promise(new Promise(function(res){ setTimeout(res, 1600); }), { loading: 'Saving…', success: 'Saved', error: 'Failed' })">Promise</button>
```

## Basic

The icon column is required and anchors the layout. The content column stacks a `.toast__header` and an optional`.toast__body`; the close chip trails the row. A title-only toast centers vertically.

Report ready

Your weekly export finished and is ready to download.

Changes saved

```
<div class="toast" data-state="open" role="status">
  <span class="toast__icon"><i data-lucide="bell"></i></span>
  <div class="toast__content">
    <div class="toast__header">Report ready</div>
    <div class="toast__body">Your weekly export finished and is ready to download.</div>
  </div>
  <button class="toast__close" aria-label="Dismiss"><i data-lucide="x"></i></button>
</div>
<div class="toast" data-state="open" role="status">
  <span class="toast__icon"><i data-lucide="circle-check"></i></span>
  <div class="toast__content">
    <div class="toast__header">Changes saved</div>
  </div>
  <button class="toast__close" aria-label="Dismiss"><i data-lucide="x"></i></button>
</div>
```

## Intents

An intent modifier shifts only the icon color; the surface stays neutral so a stack of mixed intents still reads as one family.

Payment received

Storage almost full

Upload failed

A new version is available

```
<div class="toast toast--success" data-state="open" role="status">
  <span class="toast__icon"><i data-lucide="circle-check"></i></span>
  <div class="toast__content"><div class="toast__header">Payment received</div></div>
  <button class="toast__close" aria-label="Dismiss"><i data-lucide="x"></i></button>
</div>
<div class="toast toast--warning" data-state="open" role="status">
  <span class="toast__icon"><i data-lucide="triangle-alert"></i></span>
  <div class="toast__content"><div class="toast__header">Storage almost full</div></div>
  <button class="toast__close" aria-label="Dismiss"><i data-lucide="x"></i></button>
</div>
<div class="toast toast--danger" data-state="open" role="status">
  <span class="toast__icon"><i data-lucide="circle-x"></i></span>
  <div class="toast__content"><div class="toast__header">Upload failed</div></div>
  <button class="toast__close" aria-label="Dismiss"><i data-lucide="x"></i></button>
</div>
<div class="toast toast--info" data-state="open" role="status">
  <span class="toast__icon"><i data-lucide="info"></i></span>
  <div class="toast__content"><div class="toast__header">A new version is available</div></div>
  <button class="toast__close" aria-label="Dismiss"><i data-lucide="x"></i></button>
</div>
```

## Timestamp and actions

A `.toast__timestamp` reads muted next to the title, and a`.toast__action` row trails the body with follow-up buttons.

Priya invited you 2 mins ago

You have been added to the Northwind project.

AcceptDismiss

```
<div class="toast" data-state="open" role="status">
  <span class="toast__icon"><i data-lucide="user-plus"></i></span>
  <div class="toast__content">
    <div class="toast__header">Priya invited you <span class="toast__timestamp">2 mins ago</span></div>
    <div class="toast__body">You have been added to the Northwind project.</div>
    <div class="toast__action">
      <button class="button button--primary button--sm">Accept</button>
      <button class="button button--ghost button--neutral button--sm">Dismiss</button>
    </div>
  </div>
  <button class="toast__close" aria-label="Dismiss"><i data-lucide="x"></i></button>
</div>
```

## Placement

A `.toast-region` pins the stack to a corner;`.toast-region--top-end` is the default. Here a real region runs inside the frame.

Page content. The region floats over the top-end corner of this frame.

Saved

Reminder

Stand-up starts in five minutes.

```
<p class="text-muted-foreground">Page content. The region floats over the top-end corner of this frame.</p>

<div class="toast-region toast-region--top-end" role="region" aria-label="Notifications">
  <div class="toast toast--success" data-state="open" role="status">
    <span class="toast__icon"><i data-lucide="circle-check"></i></span>
    <div class="toast__content"><div class="toast__header">Saved</div></div>
    <button class="toast__close" aria-label="Dismiss"><i data-lucide="x"></i></button>
  </div>
  <div class="toast" data-state="open" role="status">
    <span class="toast__icon"><i data-lucide="bell"></i></span>
    <div class="toast__content">
      <div class="toast__header">Reminder</div>
      <div class="toast__body">Stand-up starts in five minutes.</div>
    </div>
    <button class="toast__close" aria-label="Dismiss"><i data-lucide="x"></i></button>
  </div>
</div>
```

## Customization

These variables retune the toast and its region. Override on the root or any wrapper.

| Variable                                                    | Use                                                          |
| ----------------------------------------------------------- | ------------------------------------------------------------ |
| `--toast-region-z-index`                                    | Overlay stacking order                                       |
| `--toast-region-gap` / `-region-inset` /`-region-max-width` | Stack spacing, corner inset, and region width                |
| `--toast-min-width` / `-max-width`                          | Toast width bounds                                           |
| `--toast-column-gap` / `-content-gap`                       | Grid column gap and content stack gap                        |
| `--toast-padding-block` /`-padding-inline`                  | Toast interior padding                                       |
| `--toast-bg` / `-color` /`-border-color`                    | Surface fill, text, and rim                                  |
| `--toast-radius` / `-shadow`                                | Corner radius and elevation                                  |
| `--toast-icon-size` / `-icon-color`                         | Leading icon size and color (intent modifiers set the color) |
| `--toast-header-font-size` /`-header-font-weight`           | Title type                                                   |
| `--toast-body-font-size` / `-body-color`                    | Description type                                             |
| `--toast-close-size` / `-close-color` /`-close-bg-hover`    | Close chip size and paint                                    |
| `--toast-transition-duration`                               | Enter and exit timing; zeroed under reduced-motion           |

Place the region with`.toast-region--{top|bottom}-{start|center|end}`. Intent modifiers are `.toast--primary`,`.toast--success`, `.toast--warning`,`.toast--danger`, and `.toast--info`.
