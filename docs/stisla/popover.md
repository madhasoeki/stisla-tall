# Popover

A surface-tier panel anchored to a trigger, holding rich content.

## Basic

A plain popover is a `.popover__title` over a`.popover__body`. Adding a `.popover__header`turns it into a panel: the root padding drops so header and footer dividers run edge to edge, and each part owns its padding. Give the`.popover` an `id` +`data-stisla-popover`, point a`data-stisla-popover-trigger="id"` button at it, and the`@stisla/vanilla` layer positions it with Floating UI, traps focus, and closes on outside click or ESC. The arrow is injected automatically, pointing back at the trigger. The demos below are live.

Details

### Storage almost full

You have used 92% of your plan. Archive old projects or upgrade to keep syncing.

```
<button class="button button--neutral" data-stisla-popover-trigger="pop-basic">Details</button>
<div class="popover" id="pop-basic" data-stisla-popover data-stisla-popover-placement="bottom">
  <h3 class="popover__title">Storage almost full</h3>
  <p class="popover__body">You have used 92% of your plan. Archive old projects or upgrade to keep syncing.</p>
</div>
```

## Keyboard

Hover-trigger popovers open on focus too, so keyboard users get the same affordance as hover users. Focus is not trapped, so `Tab` can leave the panel naturally. Pointer down outside the popover also dismisses.

- `Enter` / `Space`: open the popover when the trigger is focused (click-trigger mode)
- `Escape`: close the popover and return focus to the trigger
- `Tab`: move focus through the panel and out the other side

## With a close chip

Drop in `.popover__close` for a corner dismiss affordance; the title clears it automatically.

What's new

### Faster exports

Exports now stream in the background so you can keep working while they finish.

```
<button class="button button--neutral" data-stisla-popover-trigger="pop-close">What's new</button>
<div class="popover" id="pop-close" data-stisla-popover data-stisla-popover-placement="bottom">
  <button class="popover__close" data-stisla-popover-dismiss aria-label="Dismiss"><i data-lucide="x"></i></button>
  <h3 class="popover__title">Faster exports</h3>
  <p class="popover__body">Exports now stream in the background so you can keep working while they finish.</p>
</div>
```

## Placements

`data-stisla-popover-placement` picks the resting side. Floating UI flips automatically when the chosen side would overflow the viewport.

TopRightBottomLeft

### Top

Anchors above the trigger.

### Right

Anchors to the right of the trigger.

### Bottom

Anchors below the trigger.

### Left

Anchors to the left of the trigger.

```
<div class="flex flex-wrap items-center justify-center gap-3 pt-2 pb-48">
  <button class="button button--outline button--neutral" data-stisla-popover-trigger="pop-place-top">Top</button>
  <button class="button button--outline button--neutral" data-stisla-popover-trigger="pop-place-right">Right</button>
  <button class="button button--outline button--neutral" data-stisla-popover-trigger="pop-place-bottom">Bottom</button>
  <button class="button button--outline button--neutral" data-stisla-popover-trigger="pop-place-left">Left</button>
  <div class="popover" id="pop-place-top" data-stisla-popover data-stisla-popover-placement="top">
    <h3 class="popover__title">Top</h3>
    <p class="popover__body">Anchors above the trigger.</p>
  </div>
  <div class="popover" id="pop-place-right" data-stisla-popover data-stisla-popover-placement="right">
    <h3 class="popover__title">Right</h3>
    <p class="popover__body">Anchors to the right of the trigger.</p>
  </div>
  <div class="popover" id="pop-place-bottom" data-stisla-popover data-stisla-popover-placement="bottom">
    <h3 class="popover__title">Bottom</h3>
    <p class="popover__body">Anchors below the trigger.</p>
  </div>
  <div class="popover" id="pop-place-left" data-stisla-popover data-stisla-popover-placement="left">
    <h3 class="popover__title">Left</h3>
    <p class="popover__body">Anchors to the left of the trigger.</p>
  </div>
</div>
```

## Hover trigger

Add `data-stisla-popover-trigger-mode="hover focus"` to open on hover and keyboard focus. The 100ms close delay bridges the cursor from the trigger into the popover so it stays open while you read it.

Hover or focus me

### Read-only

Members with the viewer role can browse but not edit shared boards.

```
<div class="flex justify-center pt-2 pb-40">
  <button class="button button--outline button--neutral" data-stisla-popover-trigger="pop-hover">Hover or focus me</button>
  <div class="popover" id="pop-hover" data-stisla-popover data-stisla-popover-trigger-mode="hover focus" data-stisla-popover-placement="bottom">
    <h3 class="popover__title">Read-only</h3>
    <p class="popover__body">Members with the viewer role can browse but not edit shared boards.</p>
  </div>
</div>
```

## Rich content

Author the body with whatever markup the popover needs. Paragraphs, links, buttons, and form bits all work. There's no string-content opt-in.

Invite teammate

### Invite by email

CancelSend invite

```
<div class="flex justify-center pt-2 pb-48">
  <button class="button button--primary" data-stisla-popover-trigger="pop-rich">Invite teammate</button>
  <div class="popover" id="pop-rich" data-stisla-popover data-stisla-popover-placement="bottom-start" style="min-width: 17rem;">
    <h3 class="popover__title">Invite by email</h3>
    <div class="popover__body text-foreground">
      <div class="flex flex-col gap-2">
        <input type="email" class="input" placeholder="name@example.com" aria-label="Email address">
        <div class="flex flex-wrap items-center gap-2 justify-end">
          <button class="button button--sm button--ghost button--neutral" data-stisla-popover-dismiss>Cancel</button>
          <button class="button button--sm button--primary">Send invite</button>
        </div>
      </div>
    </div>
  </div>
</div>
```

## Panel

A `.popover__header` holds the title with a trailing`.popover__action`, a list sits in the body, and a`.popover__footer` closes it out. Add`.popover--menu` when the body is a list of rows so each`.media` row carries its own hover and the panel reads like a menu. Each row's leading slot takes an icon box or an avatar.

Notifications

### Notifications

[Mark all as read](https://stisla.dev/docs/vanilla/popover#)

[New order #10428\\
\\
Acme Corp placed an order for 12 items.\\
\\
5 minutes ago](https://stisla.dev/docs/vanilla/popover#) [Low stock alert\\
\\
Headphone Blitz is down to 4 units.\\
\\
1 hour ago](https://stisla.dev/docs/vanilla/popover#) [PP\\
\\
Priya Patel\\
\\
Started following your store.\\
\\
3 hours ago](https://stisla.dev/docs/vanilla/popover#)

[View all notifications](https://stisla.dev/docs/vanilla/popover#)

```
<div class="flex justify-center pt-2 pb-72">
  <button class="button button--outline button--neutral" data-stisla-popover-trigger="pop-notify">Notifications</button>
  <div class="popover popover--menu" id="pop-notify" data-stisla-popover data-stisla-popover-placement="bottom-end" style="width: 20rem; max-width: 100%;">
    <div class="popover__header">
      <h3 class="popover__title">Notifications</h3>
      <div class="popover__action">
        <a class="link" href="#">Mark all as read</a>
      </div>
    </div>
    <div class="popover__body">
      <a href="#" class="media media--unread items-start">
        <div class="media__figure">
          <span class="icon-box icon-box--primary"><i data-lucide="shopping-cart"></i></span>
        </div>
        <div class="media__content">
          <div class="media__title">New order #10428</div>
          <div class="media__description">Acme Corp placed an order for 12 items.</div>
          <div class="media__meta">5 minutes ago</div>
        </div>
      </a>
      <a href="#" class="media items-start">
        <div class="media__figure">
          <span class="icon-box icon-box--danger"><i data-lucide="alert-triangle"></i></span>
        </div>
        <div class="media__content">
          <div class="media__title">Low stock alert</div>
          <div class="media__description">Headphone Blitz is down to 4 units.</div>
          <div class="media__meta">1 hour ago</div>
        </div>
      </a>
      <a href="#" class="media items-start">
        <div class="media__figure">
          <span class="avatar avatar--sm avatar--circle" data-stisla-avatar>
            <span class="avatar__fallback">PP</span>
          </span>
        </div>
        <div class="media__content">
          <div class="media__title">Priya Patel</div>
          <div class="media__description">Started following your store.</div>
          <div class="media__meta">3 hours ago</div>
        </div>
      </a>
    </div>
    <div class="popover__footer">
      <a href="#" class="button button--block button--outline button--neutral">View all notifications</a>
    </div>
  </div>
</div>
```

## Imperative

Reach a marked popover via`Stisla.get(document.getElementById('id'))` and call`Stisla.Popover.getOrCreate(el).open()` when you need to drive it from script without a click trigger.

Open via JSAnchor

### Programmatic

Opened by a script, anchored to the marked trigger.

```
<div class="flex flex-wrap items-center justify-center gap-3 pt-2 pb-40">
  <button class="button button--neutral" data-demo-popover-open="pop-imperative">Open via JS</button>
  <button class="button button--outline button--neutral" data-stisla-popover-trigger="pop-imperative">Anchor</button>
  <div class="popover" id="pop-imperative" data-stisla-popover data-stisla-popover-placement="bottom">
    <h3 class="popover__title">Programmatic</h3>
    <p class="popover__body">Opened by a script, anchored to the marked trigger.</p>
  </div>
  <script>
    document.addEventListener('click', function (e) {
      var openBtn = e.target.closest('[data-demo-popover-open]');
      if (!openBtn || !window.Stisla) return;
      var el = document.getElementById(openBtn.getAttribute('data-demo-popover-open'));
      if (!el) return;
      var inst = window.Stisla.get(el) || new window.Stisla.Popover(el);
      inst.open();
      e.stopImmediatePropagation();
    });
  </script>
</div>
```

## Events

Four events fire on the `.popover` root. The`opening` and `closing` events are cancelable.

`stisla:popover:opening` fires before the panel mounts. Call `preventDefault()` to abort.

`stisla:popover:opened` fires once the panel is positioned and visible.

`stisla:popover:closing` fires before the panel dismisses. Call `preventDefault()` to keep it open.

`stisla:popover:closed` fires once the panel is fully hidden and focus has returned to the trigger.

## Customization

These variables retune the panel. Override on the root or any wrapper.

| Variable                                                                  | Use                                                 |
| ------------------------------------------------------------------------- | --------------------------------------------------- |
| `--popover-z-index`                                                       | Overlay stacking order                              |
| `--popover-min-width` / `-max-width`                                      | Panel width bounds                                  |
| `--popover-padding-block` /`-padding-inline`                              | Root padding (plain popover only; a panel drops it) |
| `--popover-color` / `-bg` /`-border-color`                                | Panel text, fill, and rim                           |
| `--popover-radius` / `-shadow`                                            | Panel corner radius and elevation                   |
| `--popover-title-color` / `-font-size` /`-font-weight`                    | Title type                                          |
| `--popover-body-color` / `-font-size` /`-line-height`                     | Body type (muted by default)                        |
| `--popover-header-gap` /`-header-padding-block` /`-header-padding-inline` | Header row layout                                   |
| `--popover-footer-padding-block` /`-footer-padding-inline`                | Footer padding                                      |
| `--popover-close-size` / `-close-color` /`-close-bg-hover`                | Close chip size and paint                           |
| `--popover-arrow-size`                                                    | Caret square size                                   |
| `--popover-transition-duration`                                           | Fade and slide timing; zeroed under reduced-motion  |
