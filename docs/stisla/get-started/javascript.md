# JavaScript

A small vanilla runtime drives every interactive component. Mark up the HTML, load the bundle, and the runtime does the rest.

## How it boots

Importing `@stisla/vanilla` (or loading `stisla.js` from the CDN snippet on the [Installation](https://stisla.dev/docs/vanilla/installation) page) does three things at startup.

- Registers every component class that ships in the bundle.
- Exposes them on `window.Stisla`, so any of them is reachable as `Stisla.Dialog`, `Stisla.Toast`, and so on.
- Walks the document on the next microtask and wires up anything marked with a `data-stisla-*` attribute.

There is no `init()` call to make at startup. If the markup is already in the page when the bundle loads, the runtime finds it.

## What it’s built on

The runtime is around 600 lines of our own code plus a few vendored primitives for the hard parts. No jQuery, no Bootstrap JS, no framework runtime.

| Library                                                            | Used by                     | Why                                                                                                |
| ------------------------------------------------------------------ | --------------------------- | -------------------------------------------------------------------------------------------------- |
| [Floating UI](https://floating-ui.com/)                            | menu, popover, tooltip      | Position calculation for floating elements (collision detection, placement flips, arrow rendering) |
| [focus-trap](https://focus-trap.github.io/focus-trap/)             | dialog, drawer              | Keyboard focus containment inside overlays                                                         |
| [Embla](https://www.embla-carousel.com/)                           | carousel (optional)         | Touch-friendly scroll mechanics. Lives in the optional bundle                                      |
| [OverlayScrollbars](https://kingsora.github.io/OverlayScrollbars/) | scroll-area (optional)      | Custom-styled scrollbars that overlay the content without taking layout space                      |
| `tabbable`                                                         | focus-trap, sidebar dismiss | Walks the focusable tree. Tiny shared utility                                                      |

## Declarative usage

The runtime is driven mostly from HTML. Mark a component root with `data-stisla-<name>`, give its triggers and dismissers their matching attributes, and the scanner wires the behavior on first paint.

```
<button type="button" class="button button--primary" data-stisla-dialog-trigger="hello">
  Open
</button>

<div class="dialog" id="hello" data-stisla-dialog data-state="closed" role="dialog" aria-modal="true" tabindex="-1">
  <div class="dialog__backdrop" data-stisla-dialog-dismiss></div>
  <div class="dialog__content">
    <div class="dialog__body">Hello.</div>
  </div>
</div>
```

Every component page documents the attributes it understands. Options serialize as per-attribute kebab-case (`data-stisla-dialog-close-on-backdrop="false"`), or as a single JSON blob on `data-stisla-opts` for values that don’t fit cleanly in an attribute.

## Programmatic usage

If you need a handle to open from JS, listen for events, or destroy on unmount, construct the class directly. Each component class is also a named export on the bundle.

```
const dialog = new Stisla.Dialog(document.getElementById('hello'));
dialog.open();
dialog.el.addEventListener('stisla:dialog:closed', () => {
  // ...
});
```

The same class is what the declarative path constructs under the hood. Instances created either way share the same API and the same event surface.

## Re-scanning

The initial scan runs once per page load. For dynamic content like SPA route changes, AJAX-injected fragments, or server-streamed HTML, call `Stisla.init()` against the affected subtree to wire up anything new. The scanner is idempotent, so elements that already have an instance are skipped.

```
// After fetching and inserting HTML into a container:
Stisla.init(document.getElementById('panel'));
```

Calling `Stisla.init()` with no argument re-scans the whole document. Prefer scoping it to the inserted subtree when you can; it’s cheaper and avoids touching nodes you didn’t change.

## React and other SPA frameworks

For React apps, use `@stisla/react`. It exposes components as idiomatic React with props, refs, and controlled state. See the React component pages for usage. When you need the vanilla layer directly (mixed apps, quick integrations, or before a React wrapper exists for a component), the vanilla classes work from inside `useEffect`: construct on mount, destroy on cleanup.

```
import { useEffect, useRef } from 'react';
import { Dialog } from '@stisla/vanilla';

function HelloDialog() {
  const ref = useRef(null);

  useEffect(() => {
    const dialog = new Dialog(ref.current);
    const onOpened = (e) => console.log('opened', e.detail);
    ref.current.addEventListener('stisla:dialog:opened', onOpened);
    return () => {
      ref.current?.removeEventListener('stisla:dialog:opened', onOpened);
      dialog.destroy();
    };
  }, []);

  return (
    <div ref={ref} className="dialog" data-state="closed" role="dialog" aria-modal="true" tabIndex={-1}>
      <div className="dialog__backdrop" data-stisla-dialog-dismiss />
      <div className="dialog__content">
        <div className="dialog__body">Hello.</div>
      </div>
    </div>
  );
}
```

There is no `onOpened`-style prop yet, so attach listeners with `addEventListener` against the root element and remove them on cleanup. The constructor auto-destroys any prior instance on the same element, which keeps React’s StrictMode double-mount safe. Vue, Svelte, and Solid follow the same shape with their own lifecycle hooks.

### What works

- Construct, listen, and destroy from a `useEffect` against a stable ref.
- Pass options to the constructor as a second argument. They replace the per-attribute `data-stisla-*` path.
- Call `Stisla.init(ref.current)` after rendering server-fetched HTML that already carries `data-stisla-*` markup. The scanner skips elements that already have an instance, so it’s safe to call repeatedly.
- Render the markup on the server. The runtime guards `document` access, so importing the bundle is fine in SSR; instances are only constructed once the effect fires on the client.

### What to watch

- Some components mutate DOM outside their own subtree. Popover and tooltip portal into `body`; dialog and drawer set `inert` on siblings. React does not know about those mutations, so keep the component mounted for its full lifetime rather than toggling it through a parent rerender.
- Open and close state lives on the instance, which toggles `data-state` on the root. To drive it from React state, call `instance.open()` and `instance.close()` from a `useEffect` keyed on your value. Don’t conditionally unmount the root, or the instance dies with it.
- The scanner has no `destroyAll(root)` counterpart. If you used `Stisla.init(root)` over a subtree, walk that same subtree on cleanup and call `Stisla.get(el).destroy()` on each one you wired up.
- This path works for most cases. For new React projects, `@stisla/react` is the better fit since it exposes components with proper props, refs, and controlled state without the manual wiring.
