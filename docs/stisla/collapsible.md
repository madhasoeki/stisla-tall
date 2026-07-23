# Collapsible

A region that opens and closes from a trigger.

## Basic

The primitive that `.accordion`, `.sidebar`submenus, and `.navbar` mobile menu compose for their own collapse behavior. A trigger button and a content region tied by id. The trigger points at the region via`data-stisla-collapsible-trigger`; the region carries`data-stisla-collapsible` and`data-state="open"` or `"closed"` driving the paint. The height transition runs around every state flip.

Toggle details

A collapsible is a region whose visibility flips between open and closed. The state lives on the element itself; the height transition runs around the flip so the panel does not jump.

```
<div class="flex flex-col items-center">
  <button type="button" class="button button--neutral" data-stisla-collapsible-trigger="collapsible-basic" aria-controls="collapsible-basic" aria-expanded="false">Toggle details</button>
  <div id="collapsible-basic" class="collapsible" data-stisla-collapsible data-state="closed" role="region">
    <div class="rounded-md border border-border bg-(--color-surface) p-4 mt-2">A collapsible is a region whose visibility flips between open and closed. The state lives on the element itself; the height transition runs around the flip so the panel does not jump.</div>
  </div>
</div>
```

## Keyboard

The trigger is whatever element you wire to the region. The collapsible itself adds no key bindings beyond the trigger's native ones. When the trigger is a native `<button>`, the browser handles focus and activation.

- `Tab`: focus the trigger
- `Enter` / `Space`: toggle the panel

## Open by default

Render the region with `data-state="open"` to start open. The trigger's `aria-expanded` follows on construction.

Toggle details

This region started open. Click the trigger to close it. The opening transition is the same one the trigger fires.

```
<div class="flex flex-col items-center">
  <button type="button" class="button button--neutral" data-stisla-collapsible-trigger="collapsible-open" aria-controls="collapsible-open" aria-expanded="true">Toggle details</button>
  <div id="collapsible-open" class="collapsible" data-stisla-collapsible data-state="open" role="region">
    <div class="rounded-md border border-border bg-(--color-surface) p-4 mt-2">This region started open. Click the trigger to close it. The opening transition is the same one the trigger fires.</div>
  </div>
</div>
```

## Inside a card

A common shape: a card with extra detail hidden behind a trigger. The region's content owns its own surface so the card body doesn't paint inside the collapsed footprint.

#### API token

Created two weeks ago. Last used yesterday.

Show permissions

- read:repo
- write:issues
- read:user

```
<div class="card max-w-96">
  <div class="card__body">
    <h4 class="card__title">API token</h4>
    <p class="card__text text-muted-foreground">Created two weeks ago. Last used yesterday.</p>
    <div class="mt-3 flex flex-wrap items-center gap-2">
      <button type="button" class="button button--sm button--ghost button--neutral button--flush-start" data-stisla-collapsible-trigger="collapsible-card" aria-controls="collapsible-card" aria-expanded="false">Show permissions</button>
    </div>
    <div id="collapsible-card" class="collapsible" data-stisla-collapsible data-state="closed" role="region">
      <ul class="m-0 text-muted-foreground">
        <li>read:repo</li>
        <li>write:issues</li>
        <li>read:user</li>
      </ul>
    </div>
  </div>
</div>
```

## Programmatic control

Build a `Stisla.Collapsible` directly to drive a region from code. The buttons below call `open()`,`close()`, and `toggle()` on an instance from`Stisla.Collapsible.getOrCreate(el)`.

OpenCloseToggle

This region is opened and closed by the buttons above through the imperative API.

```
<div class="flex flex-col items-center">
  <div class="flex flex-wrap items-center gap-2">
    <button type="button" class="button button--sm button--neutral" data-demo-collapsible="open">Open</button>
    <button type="button" class="button button--sm button--neutral" data-demo-collapsible="close">Close</button>
    <button type="button" class="button button--sm button--neutral" data-demo-collapsible="toggle">Toggle</button>
  </div>
  <div id="collapsible-programmatic" class="collapsible" data-stisla-collapsible data-state="closed" role="region">
    <div class="rounded-md border border-border bg-(--color-surface) p-4 mt-2">This region is opened and closed by the buttons above through the imperative API.</div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var el = document.getElementById('collapsible-programmatic');
    if (!el || !window.Stisla) return;
    var inst = window.Stisla.Collapsible.getOrCreate(el);
    document.addEventListener('click', function (e) {
      var btn = e.target.closest('[data-demo-collapsible]');
      if (!btn) return;
      var action = btn.dataset.demoCollapsible;
      if (action === 'open') inst.open();
      else if (action === 'close') inst.close();
      else if (action === 'toggle') inst.toggle();
    });
  });
</script>
```

## Events

Four events bubble from the region element. The `opening`and `closing` events are cancelable.

`stisla:collapsible:opening` fires before the open transition starts. Call `preventDefault()` to abort.

`stisla:collapsible:opened` fires after the open transition ends.

`stisla:collapsible:closing` fires before the close transition starts. Call `preventDefault()` to keep it open.

`stisla:collapsible:closed` fires after the close transition ends.

## Customization

One variable retunes the animation. Override on the root, a wrapper, or a single region.

| Variable                            | Use                                              |
| ----------------------------------- | ------------------------------------------------ |
| `--collapsible-transition-duration` | Height tween timing; zeroed under reduced-motion |
