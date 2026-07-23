# Dialog

A centered modal over a frosted backdrop that dims the page.

## Basic

The `.dialog` root holds a `.dialog__backdrop`and a `.dialog__panel` wrapping the visible`.dialog__content` (header, body, footer, and a floating close chip). Open and close, focus trapping, scroll lock, and the static-backdrop shake come from the `@stisla/vanilla`layer: put `data-stisla-dialog` \+ an `id` on the root, point a `data-stisla-dialog-trigger="id"` button at it, and mark the backdrop and any close controls with`data-stisla-dialog-dismiss`. A header titles the dialog, the body carries the message, and the footer trails its actions. The close chip floats over the top-trailing corner. Add`autofocus` to any control inside the panel to land focus there on open. The demos below are live, each contained to its own frame.

Invite a teammate

## Invite a teammate

Send a link by email. The invite expires in seven days.

Email

CancelSend invite

```
<button class="button button--primary" data-stisla-dialog-trigger="dlg-basic">Invite a teammate</button>

<div class="dialog" id="dlg-basic" data-stisla-dialog aria-labelledby="dlg-basic-label">
  <div class="dialog__backdrop" data-stisla-dialog-dismiss></div>
  <div class="dialog__panel">
    <div class="dialog__content">
      <button class="dialog__close" data-stisla-dialog-dismiss aria-label="Close"><i data-lucide="x"></i></button>
      <div class="dialog__header">
        <h2 class="dialog__title" id="dlg-basic-label">Invite a teammate</h2>
      </div>
      <div class="dialog__body">
        <p class="mt-0 text-muted-foreground">Send a link by email. The invite expires in seven days.</p>
        <div class="field">
          <label for="dlg-basic-email" class="field__label">Email</label>
          <input type="email" class="input" id="dlg-basic-email" placeholder="name@example.com" autocomplete="email" autofocus />
        </div>
      </div>
      <div class="dialog__footer">
        <button class="button button--ghost button--neutral" data-stisla-dialog-dismiss>Cancel</button>
        <button class="button button--primary" data-stisla-dialog-dismiss>Send invite</button>
      </div>
    </div>
  </div>
</div>
```

## Keyboard

Focus is trapped inside the dialog while it's open. On open, focus lands on the first element marked `autofocus`, falling back to `.dialog__close`; on close, focus returns to the trigger that opened it.

- `Tab`: cycle focus forward through focusable controls (wraps to the first)
- `Shift` \+ `Tab`: cycle focus backward (wraps to the last)
- `Escape`: dismiss the dialog (unless the backdrop is static, see Static backdrop below)

## Scrollable body

Add `.dialog__panel--scrollable` so a long body scrolls while the header and footer stay pinned. The panel height is bounded to the viewport.

Review terms

## Terms of service

Please review the terms before continuing.

Membership grants a non-exclusive licence to access the service for personal or business use, subject to the limits described in your plan.

You are responsible for activity under your account and for keeping your credentials secure.

We may update these terms from time to time; continued use after a change constitutes acceptance.

Either party may end the agreement at any time. On termination your data stays available for export for thirty days.

Questions about these terms can be sent to support at any time.

DeclineAccept

```
<button class="button button--neutral" data-stisla-dialog-trigger="dlg-scroll">Review terms</button>

<div class="dialog" id="dlg-scroll" data-stisla-dialog>
  <div class="dialog__backdrop" data-stisla-dialog-dismiss></div>
  <div class="dialog__panel dialog__panel--scrollable">
    <div class="dialog__content">
      <button class="dialog__close" data-stisla-dialog-dismiss aria-label="Close"><i data-lucide="x"></i></button>
      <div class="dialog__header">
        <h2 class="dialog__title">Terms of service</h2>
      </div>
      <div class="dialog__body">
        <p class="mt-0 text-muted-foreground">Please review the terms before continuing.</p>
        <p class="text-muted-foreground">Membership grants a non-exclusive licence to access the service for personal or business use, subject to the limits described in your plan.</p>
        <p class="text-muted-foreground">You are responsible for activity under your account and for keeping your credentials secure.</p>
        <p class="text-muted-foreground">We may update these terms from time to time; continued use after a change constitutes acceptance.</p>
        <p class="text-muted-foreground">Either party may end the agreement at any time. On termination your data stays available for export for thirty days.</p>
        <p class="mb-0 text-muted-foreground">Questions about these terms can be sent to support at any time.</p>
      </div>
      <div class="dialog__footer">
        <button class="button button--ghost button--neutral" data-stisla-dialog-dismiss>Decline</button>
        <button class="button button--primary" data-stisla-dialog-dismiss>Accept</button>
      </div>
    </div>
  </div>
</div>
```

## Fullscreen

`.dialog--fullscreen` drops the outer margin and corner radius so the panel takes the whole viewport, for immersive flows.

Compose

## Compose

A fullscreen surface for focused, long-form tasks such as composing or editing.

DiscardSave

```
<button class="button button--neutral" data-stisla-dialog-trigger="dlg-full">Compose</button>

<div class="dialog dialog--fullscreen" id="dlg-full" data-stisla-dialog>
  <div class="dialog__backdrop" data-stisla-dialog-dismiss></div>
  <div class="dialog__panel">
    <div class="dialog__content">
      <button class="dialog__close" data-stisla-dialog-dismiss aria-label="Close"><i data-lucide="x"></i></button>
      <div class="dialog__header">
        <h2 class="dialog__title">Compose</h2>
      </div>
      <div class="dialog__body">
        <p class="m-0 text-muted-foreground">A fullscreen surface for focused, long-form tasks such as composing or editing.</p>
      </div>
      <div class="dialog__footer">
        <button class="button button--ghost button--neutral" data-stisla-dialog-dismiss>Discard</button>
        <button class="button button--primary" data-stisla-dialog-dismiss>Save</button>
      </div>
    </div>
  </div>
</div>
```

## Sizes

Width modifiers on the root swap the panel size: the default sits mid-scale, with `.dialog--sm`, `.dialog--lg`,`.dialog--xl`, and`.dialog--almost-fullscreen` (a breathing strip around an otherwise full-viewport panel).

SmallDefaultLargeExtra largeAlmost fullscreen

## Small

A narrow panel for a short prompt.

Close

## Default

The default width sits in the middle of the scale.

Close

## Large

A wider panel for forms or richer content.

Close

## Extra large

The widest fixed size, for dense layouts.

Close

## Almost fullscreen

Fills the viewport but keeps a strip of page around it.

Close

```
<button class="button button--neutral button--outline" data-stisla-dialog-trigger="dlg-sm">Small</button>
<button class="button button--neutral button--outline" data-stisla-dialog-trigger="dlg-default">Default</button>
<button class="button button--neutral button--outline" data-stisla-dialog-trigger="dlg-lg">Large</button>
<button class="button button--neutral button--outline" data-stisla-dialog-trigger="dlg-xl">Extra large</button>
<button class="button button--neutral button--outline" data-stisla-dialog-trigger="dlg-afs">Almost fullscreen</button>

<div class="dialog dialog--sm" id="dlg-sm" data-stisla-dialog>
  <div class="dialog__backdrop" data-stisla-dialog-dismiss></div>
  <div class="dialog__panel ">
    <div class="dialog__content">
      <button class="dialog__close" data-stisla-dialog-dismiss aria-label="Close"><i data-lucide="x"></i></button>
      <div class="dialog__header"><h2 class="dialog__title">Small</h2></div>
      <div class="dialog__body"><p class="m-0 text-muted-foreground">A narrow panel for a short prompt.</p></div>
      <div class="dialog__footer"><button class="button button--ghost button--neutral" data-stisla-dialog-dismiss>Close</button></div>
    </div>
  </div>
</div>

<div class="dialog " id="dlg-default" data-stisla-dialog>
  <div class="dialog__backdrop" data-stisla-dialog-dismiss></div>
  <div class="dialog__panel ">
    <div class="dialog__content">
      <button class="dialog__close" data-stisla-dialog-dismiss aria-label="Close"><i data-lucide="x"></i></button>
      <div class="dialog__header"><h2 class="dialog__title">Default</h2></div>
      <div class="dialog__body"><p class="m-0 text-muted-foreground">The default width sits in the middle of the scale.</p></div>
      <div class="dialog__footer"><button class="button button--ghost button--neutral" data-stisla-dialog-dismiss>Close</button></div>
    </div>
  </div>
</div>

<div class="dialog dialog--lg" id="dlg-lg" data-stisla-dialog>
  <div class="dialog__backdrop" data-stisla-dialog-dismiss></div>
  <div class="dialog__panel ">
    <div class="dialog__content">
      <button class="dialog__close" data-stisla-dialog-dismiss aria-label="Close"><i data-lucide="x"></i></button>
      <div class="dialog__header"><h2 class="dialog__title">Large</h2></div>
      <div class="dialog__body"><p class="m-0 text-muted-foreground">A wider panel for forms or richer content.</p></div>
      <div class="dialog__footer"><button class="button button--ghost button--neutral" data-stisla-dialog-dismiss>Close</button></div>
    </div>
  </div>
</div>

<div class="dialog dialog--xl" id="dlg-xl" data-stisla-dialog>
  <div class="dialog__backdrop" data-stisla-dialog-dismiss></div>
  <div class="dialog__panel ">
    <div class="dialog__content">
      <button class="dialog__close" data-stisla-dialog-dismiss aria-label="Close"><i data-lucide="x"></i></button>
      <div class="dialog__header"><h2 class="dialog__title">Extra large</h2></div>
      <div class="dialog__body"><p class="m-0 text-muted-foreground">The widest fixed size, for dense layouts.</p></div>
      <div class="dialog__footer"><button class="button button--ghost button--neutral" data-stisla-dialog-dismiss>Close</button></div>
    </div>
  </div>
</div>

<div class="dialog dialog--almost-fullscreen" id="dlg-afs" data-stisla-dialog>
  <div class="dialog__backdrop" data-stisla-dialog-dismiss></div>
  <div class="dialog__panel ">
    <div class="dialog__content">
      <button class="dialog__close" data-stisla-dialog-dismiss aria-label="Close"><i data-lucide="x"></i></button>
      <div class="dialog__header"><h2 class="dialog__title">Almost fullscreen</h2></div>
      <div class="dialog__body"><p class="m-0 text-muted-foreground">Fills the viewport but keeps a strip of page around it.</p></div>
      <div class="dialog__footer"><button class="button button--ghost button--neutral" data-stisla-dialog-dismiss>Close</button></div>
    </div>
  </div>
</div>
```

## Positioning

The panel centers by default. `.dialog__panel--top` drops it in from above and `.dialog__panel--bottom` anchors it to the lower edge.

TopCenterBottom

## Pinned to top

This panel drops in from the top edge.

Close

## Centered

The default vertical position.

Close

## Anchored to bottom

This panel sits against the lower edge.

Close

```
<button class="button button--neutral button--outline" data-stisla-dialog-trigger="dlg-top">Top</button>
<button class="button button--neutral button--outline" data-stisla-dialog-trigger="dlg-center">Center</button>
<button class="button button--neutral button--outline" data-stisla-dialog-trigger="dlg-bottom">Bottom</button>

<div class="dialog " id="dlg-top" data-stisla-dialog>
  <div class="dialog__backdrop" data-stisla-dialog-dismiss></div>
  <div class="dialog__panel dialog__panel--top">
    <div class="dialog__content">
      <button class="dialog__close" data-stisla-dialog-dismiss aria-label="Close"><i data-lucide="x"></i></button>
      <div class="dialog__header"><h2 class="dialog__title">Pinned to top</h2></div>
      <div class="dialog__body"><p class="m-0 text-muted-foreground">This panel drops in from the top edge.</p></div>
      <div class="dialog__footer"><button class="button button--ghost button--neutral" data-stisla-dialog-dismiss>Close</button></div>
    </div>
  </div>
</div>

<div class="dialog " id="dlg-center" data-stisla-dialog>
  <div class="dialog__backdrop" data-stisla-dialog-dismiss></div>
  <div class="dialog__panel ">
    <div class="dialog__content">
      <button class="dialog__close" data-stisla-dialog-dismiss aria-label="Close"><i data-lucide="x"></i></button>
      <div class="dialog__header"><h2 class="dialog__title">Centered</h2></div>
      <div class="dialog__body"><p class="m-0 text-muted-foreground">The default vertical position.</p></div>
      <div class="dialog__footer"><button class="button button--ghost button--neutral" data-stisla-dialog-dismiss>Close</button></div>
    </div>
  </div>
</div>

<div class="dialog " id="dlg-bottom" data-stisla-dialog>
  <div class="dialog__backdrop" data-stisla-dialog-dismiss></div>
  <div class="dialog__panel dialog__panel--bottom">
    <div class="dialog__content">
      <button class="dialog__close" data-stisla-dialog-dismiss aria-label="Close"><i data-lucide="x"></i></button>
      <div class="dialog__header"><h2 class="dialog__title">Anchored to bottom</h2></div>
      <div class="dialog__body"><p class="m-0 text-muted-foreground">This panel sits against the lower edge.</p></div>
      <div class="dialog__footer"><button class="button button--ghost button--neutral" data-stisla-dialog-dismiss>Close</button></div>
    </div>
  </div>
</div>
```

## Static backdrop

Set `data-stisla-dialog-backdrop="static"` (with`data-stisla-dialog-keyboard="false"` to also block ESC) for a deliberate dismiss: a backdrop click shakes the panel instead of closing. Explicit dismiss controls still close.

Begin setup

## Finish setup

Clicking outside won't dismiss this. Choose an action to continue.

SkipDone

```
<button class="button button--primary" data-stisla-dialog-trigger="dlg-static">Begin setup</button>

<div class="dialog" id="dlg-static" data-stisla-dialog data-stisla-dialog-backdrop="static" data-stisla-dialog-keyboard="false">
  <div class="dialog__backdrop" data-stisla-dialog-dismiss></div>
  <div class="dialog__panel">
    <div class="dialog__content">
      <div class="dialog__header"><h2 class="dialog__title">Finish setup</h2></div>
      <div class="dialog__body"><p class="m-0 text-muted-foreground">Clicking outside won't dismiss this. Choose an action to continue.</p></div>
      <div class="dialog__footer">
        <button class="button button--ghost button--neutral" data-stisla-dialog-dismiss>Skip</button>
        <button class="button button--primary" data-stisla-dialog-dismiss>Done</button>
      </div>
    </div>
  </div>
</div>
```

## Confirmation

The alert-dialog pattern for a destructive action:`role="alertdialog"`, a tinted`.icon-box` for tone, a centered heading and description, and a Cancel / confirm pair. A small width keeps it focused.

Delete workspace

### Delete this workspace?

This removes every project, file, and member. The action can't be undone.

CancelDelete

```
<button class="button button--outline button--danger" data-stisla-dialog-trigger="dlg-confirm">Delete workspace</button>

<div class="dialog dialog--sm" id="dlg-confirm" data-stisla-dialog role="alertdialog" aria-labelledby="dlg-confirm-label" aria-describedby="dlg-confirm-desc">
  <div class="dialog__backdrop" data-stisla-dialog-dismiss></div>
  <div class="dialog__panel">
    <div class="dialog__content">
      <button class="dialog__close" data-stisla-dialog-dismiss aria-label="Close"><i data-lucide="x"></i></button>
      <div class="dialog__body text-center pt-6">
        <span class="icon-box icon-box--danger icon-box--circle mb-3" style="--icon-box-size: 3rem; --icon-box-icon-size: 1.25rem;"><i data-lucide="trash-2"></i></span>
        <h3 class="dialog__title m-0 mb-1" id="dlg-confirm-label">Delete this workspace?</h3>
        <p class="text-muted-foreground m-0" id="dlg-confirm-desc">This removes every project, file, and member. The action can't be undone.</p>
      </div>
      <div class="dialog__footer justify-center">
        <button class="button button--ghost button--neutral" data-stisla-dialog-dismiss>Cancel</button>
        <button class="button button--danger" data-stisla-dialog-dismiss>Delete</button>
      </div>
    </div>
  </div>
</div>
```

## Success

A celebratory end-of-flow state: the icon on top, the heading and description in the middle, and a single block button to the next step.

Submit order

### Order placed

We've emailed the receipt and a tracking link. Delivery lands in two to three business days.

View order

```
<button class="button" style="--button-tone: var(--color-success); --button-color: var(--color-success-foreground)" data-stisla-dialog-trigger="dlg-success">Submit order</button>

<div class="dialog dialog--sm" id="dlg-success" data-stisla-dialog aria-labelledby="dlg-success-label">
  <div class="dialog__backdrop" data-stisla-dialog-dismiss></div>
  <div class="dialog__panel">
    <div class="dialog__content">
      <button class="dialog__close" data-stisla-dialog-dismiss aria-label="Close"><i data-lucide="x"></i></button>
      <div class="dialog__body text-center pt-6">
        <span class="icon-box icon-box--success icon-box--circle mb-3" style="--icon-box-size: 3.5rem; --icon-box-icon-size: 1.5rem;"><i data-lucide="check"></i></span>
        <h3 class="dialog__title m-0 mb-1" id="dlg-success-label">Order placed</h3>
        <p class="text-muted-foreground m-0">We've emailed the receipt and a tracking link. Delivery lands in two to three business days.</p>
      </div>
      <div class="dialog__footer">
        <button class="button button--block" style="--button-tone: var(--color-success); --button-color: var(--color-success-foreground)" data-stisla-dialog-dismiss>View order</button>
      </div>
    </div>
  </div>
</div>
```

## Media hero

Drop the header when the leading row is media. The floating close still sits at the top-trailing corner and reads against the image.

What's new

![](https://picsum.photos/seed/stisla-autumn/1200/520)

### Autumn release

A round-up of what's new this season, with notes on what's still in flight.

```
<button class="button button--primary" data-stisla-dialog-trigger="dlg-hero">What's new</button>

<div class="dialog" id="dlg-hero" data-stisla-dialog aria-labelledby="dlg-hero-label">
  <div class="dialog__backdrop" data-stisla-dialog-dismiss></div>
  <div class="dialog__panel">
    <div class="dialog__content">
      <button class="dialog__close" data-stisla-dialog-dismiss aria-label="Close"><i data-lucide="x"></i></button>
      <img class="block w-full" src="https://picsum.photos/seed/stisla-autumn/1200/520" alt="" />
      <div class="dialog__body">
        <h3 class="dialog__title m-0 mb-1" id="dlg-hero-label">Autumn release</h3>
        <p class="text-muted-foreground m-0">A round-up of what's new this season, with notes on what's still in flight.</p>
      </div>
    </div>
  </div>
</div>
```

## Lightbox

Override the surface variables on a single dialog to turn it into a frame for media. The blurred backdrop and the floating close carry the affordance.

[![Open image](https://picsum.photos/seed/stisla-shot/480/320)](https://stisla.dev/docs/vanilla/dialog#)

![](https://picsum.photos/seed/stisla-shot/1600/1066)

```
<a class="inline-block cursor-zoom-in" href="#" data-stisla-dialog-trigger="dlg-lightbox">
  <img src="https://picsum.photos/seed/stisla-shot/480/320" alt="Open image" width="240" height="160" class="rounded-md object-cover" />
</a>

<div class="dialog dialog--xl" id="dlg-lightbox" data-stisla-dialog style="--dialog-bg: transparent; --dialog-border-color: transparent; --dialog-shadow: none;">
  <div class="dialog__backdrop" data-stisla-dialog-dismiss></div>
  <div class="dialog__panel">
    <div class="dialog__content">
      <button class="dialog__close" data-stisla-dialog-dismiss aria-label="Close"><i data-lucide="x"></i></button>
      <img class="block w-full max-h-[calc(100dvh-5rem)] object-contain rounded-md" src="https://picsum.photos/seed/stisla-shot/1600/1066" alt="" />
    </div>
  </div>
</div>
```

## Events

Four events fire on the `.dialog` root. The`opening` and `closing` events are cancelable.

`stisla:dialog:opening` fires before the panel mounts and the backdrop fades in. Call `preventDefault()` to abort (useful for an external readiness check).

`stisla:dialog:opened` fires once the open transition lands and focus is in place.

`stisla:dialog:closing` fires before the close transition starts. Call `preventDefault()` to keep it open (useful for unsaved-changes guards).

`stisla:dialog:closed` fires once the panel is fully hidden and focus has returned to the trigger.

## Customization

These variables retune the dialog. Override on the root or any wrapper.

| Variable                                                                | Use                                                |
| ----------------------------------------------------------------------- | -------------------------------------------------- |
| `--dialog-z-index`                                                      | Overlay stacking order                             |
| `--dialog-width`                                                        | Panel width cap; the size modifiers retune this    |
| `--dialog-margin-block` / `-margin-inline`                              | Gap between the panel and the viewport edges       |
| `--dialog-bg` / `-color` /`-border-color`                               | Content fill, text, and rim                        |
| `--dialog-radius` / `-shadow`                                           | Content corner radius and elevation                |
| `--dialog-padding-block` /`-padding-inline`                             | Header and body interior padding                   |
| `--dialog-title-font-size` /`-title-font-weight`                        | Title type                                         |
| `--dialog-footer-bg` /`-footer-border-color` /`-footer-padding-block`   | Footer seam fill, divider, and padding             |
| `--dialog-backdrop-bg` / `-backdrop-blur`                               | Scrim color and blur radius                        |
| `--dialog-close-size` / `-close-color` /`-close-bg` / `-close-bg-hover` | Close chip size and frosted paint                  |
| `--dialog-transition-duration`                                          | Fade and scale timing; zeroed under reduced-motion |

Size modifiers set `--dialog-width`:`.dialog--sm`, `.dialog--lg`,`.dialog--xl`, plus`.dialog--almost-fullscreen`. Position the panel with`.dialog__panel--top` or`.dialog__panel--bottom` instead of the default center.
