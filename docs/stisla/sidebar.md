# Sidebar

Vertical navigation panel for app layouts. No fixed positioning, width, or background by default; the layout decides where it sits.

## Basic

One content slot, one group, one list. The current page is marked with `aria-current="page"` on the matching button.

```html
<aside class="sidebar w-64">
  <div class="sidebar__content">
    <nav class="sidebar__menu">
      <div class="sidebar__group">
        <ul class="sidebar__list">
          <li class="sidebar__item"><a class="sidebar__button" href="#" aria-current="page"><i data-lucide="home"></i>Dashboard</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="shopping-bag"></i>Products</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="tags"></i>Categories</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="users"></i>Customers</a></li>
        </ul>
      </div>
    </nav>
  </div>
</aside>
```

## With header and footer

Use `.sidebar__header` for the brand mark; `.sidebar__brand` lines up an icon and a wordmark. `.sidebar__footer` pins to the bottom via `margin-block-start: auto`.

```html
<aside class="sidebar w-64 h-88">
  <header class="sidebar__header">
    <a class="sidebar__brand" href="#"><i data-lucide="hexagon"></i><span>Stisla</span></a>
  </header>
  <div class="sidebar__content">
    <nav class="sidebar__menu">
      <div class="sidebar__group">
        <ul class="sidebar__list">
          <li class="sidebar__item"><a class="sidebar__button" href="#" aria-current="page"><i data-lucide="home"></i>Dashboard</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="bar-chart-3"></i>Analytics</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="inbox"></i>Inbox</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <footer class="sidebar__footer">
    <ul class="sidebar__list">
      <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="settings"></i>Settings</a></li>
      <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="log-out"></i>Log out</a></li>
    </ul>
  </footer>
</aside>
```

## Sizes

Three sizes: `.sidebar--sm`, the default, and `.sidebar--lg`. The modifier retunes button height, padding, and group gap. Outer panel padding stays the same so gutters read identically across sizes.

```html
<aside class="sidebar sidebar--sm w-56">
  <div class="sidebar__content">
    <nav class="sidebar__menu">
      <div class="sidebar__group">
        <span class="sidebar__group-title">Small</span>
        <ul class="sidebar__list">
          <li class="sidebar__item"><a class="sidebar__button" href="#" aria-current="page"><i data-lucide="home"></i>Dashboard</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="inbox"></i>Inbox</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="users"></i>Customers</a></li>
        </ul>
      </div>
    </nav>
  </div>
</aside>
<aside class="sidebar w-56">
  <div class="sidebar__content">
    <nav class="sidebar__menu">
      <div class="sidebar__group">
        <span class="sidebar__group-title">Default</span>
        <ul class="sidebar__list">
          <li class="sidebar__item"><a class="sidebar__button" href="#" aria-current="page"><i data-lucide="home"></i>Dashboard</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="inbox"></i>Inbox</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="users"></i>Customers</a></li>
        </ul>
      </div>
    </nav>
  </div>
</aside>
<aside class="sidebar sidebar--lg w-56">
  <div class="sidebar__content">
    <nav class="sidebar__menu">
      <div class="sidebar__group">
        <span class="sidebar__group-title">Large</span>
        <ul class="sidebar__list">
          <li class="sidebar__item"><a class="sidebar__button" href="#" aria-current="page"><i data-lucide="home"></i>Dashboard</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="inbox"></i>Inbox</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="users"></i>Customers</a></li>
        </ul>
      </div>
    </nav>
  </div>
</aside>
```

## Groups and group action

`.sidebar__group-title` labels each list. An optional `.sidebar__group-action` sits to the right of the title, useful for an add or filter button. Its contents collapse to a uniform square regardless of the button modifiers passed in. Pick a tone via `.button--ghost.button--neutral` and the slot handles the chrome.

```html
<aside class="sidebar w-68">
  <div class="sidebar__content">
    <nav class="sidebar__menu">
      <div class="sidebar__group">
        <span class="sidebar__group-title">Workspaces</span>
        <div class="sidebar__group-action">
          <button type="button" class="button button--ghost button--neutral button--icon-only" aria-label="Add workspace"><i data-lucide="plus"></i></button>
        </div>
        <ul class="sidebar__list">
          <li class="sidebar__item"><a class="sidebar__button" href="#" aria-current="page"><i data-lucide="briefcase"></i>Acme Co.</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="briefcase"></i>Side Project</a></li>
        </ul>
      </div>
      <div class="sidebar__group">
        <span class="sidebar__group-title">Settings</span>
        <ul class="sidebar__list">
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="settings"></i>General</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="user"></i>Profile</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="credit-card"></i>Billing</a></li>
        </ul>
      </div>
    </nav>
  </div>
</aside>
```

## Active state

Two hooks. `aria-current="page"` marks the current page on a navigation link; `data-state="active"` covers non-link rows (a button toggling a panel, say). Both paint the highlight chip. The difference is semantic; it looks the same.

```html
<aside class="sidebar w-64">
  <div class="sidebar__content">
    <nav class="sidebar__menu">
      <div class="sidebar__group">
        <ul class="sidebar__list">
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="home"></i>Dashboard</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#" aria-current="page"><i data-lucide="inbox"></i>Inbox</a></li>
          <li class="sidebar__item"><button type="button" class="sidebar__button" data-state="active"><i data-lucide="filter"></i>Filters open</button></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="users"></i>Customers</a></li>
        </ul>
      </div>
    </nav>
  </div>
</aside>
```

## Item actions

Place a `.sidebar__item-action` after the button to drop a badge or quiet button into the right edge of the row. The button keeps its full click area; the action overlays only its own pixels. Add the `--reveal` modifier to show the action only on row hover or keyboard focus, for dense lists where always-visible actions feel noisy.

```html
<aside class="sidebar w-72" data-stisla-sidebar>
  <div class="sidebar__content">
    <nav class="sidebar__menu">
      <div class="sidebar__group">
        <span class="sidebar__group-title">Always visible</span>
        <ul class="sidebar__list">
          <li class="sidebar__item">
            <a class="sidebar__button" href="#"><i data-lucide="bell"></i>Notifications</a>
            <span class="sidebar__item-action"><span class="badge badge--primary">3</span></span>
          </li>
          <li class="sidebar__item">
            <a class="sidebar__button" href="#"><i data-lucide="inbox"></i>Inbox</a>
            <span class="sidebar__item-action"><span class="badge">12</span></span>
          </li>
        </ul>
      </div>
      <div class="sidebar__group">
        <span class="sidebar__group-title">Hover-reveal</span>
        <ul class="sidebar__list">
          <li class="sidebar__item">
            <a class="sidebar__button" href="#"><i data-lucide="folder"></i>Documents</a>
            <span class="sidebar__item-action sidebar__item-action--reveal">
              <button type="button" class="button button--ghost button--neutral button--icon-only" aria-label="More"><i data-lucide="more-horizontal"></i></button>
            </span>
          </li>
          <li class="sidebar__item">
            <a class="sidebar__button" href="#"><i data-lucide="folder"></i>Projects</a>
            <span class="sidebar__item-action sidebar__item-action--reveal">
              <button type="button" class="button button--ghost button--neutral button--icon-only" aria-label="More"><i data-lucide="more-horizontal"></i></button>
            </span>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</aside>
```

## Nested submenu

Wrap a child `.sidebar__list` in a `.sidebar__submenu` inside the same `.sidebar__item`. The item carries `data-state="open"` or `data-state="closed"`; an empty `<span class="sidebar__caret">` inside the trigger renders a chevron that rotates when the parent reports `aria-expanded="true"`. The first item starts open, the second closed. Toggling is wired by `@stisla/vanilla` via `data-stisla-sidebar-submenu-toggle` — click a parent to expand it.

```html
<aside class="sidebar w-72" data-stisla-sidebar>
  <div class="sidebar__content">
    <nav class="sidebar__menu">
      <div class="sidebar__group">
        <ul class="sidebar__list">
          <li class="sidebar__item"><a class="sidebar__button" href="#" aria-current="page"><i data-lucide="home"></i>Dashboard</a></li>
          <li class="sidebar__item" data-state="open">
            <button type="button" class="sidebar__button" data-stisla-sidebar-submenu-toggle aria-expanded="true" aria-controls="reports">
              <i data-lucide="bar-chart-3"></i>Reports<span class="sidebar__caret"></span>
            </button>
            <div class="sidebar__submenu" id="reports">
              <ul class="sidebar__list">
                <li class="sidebar__item"><a class="sidebar__button" href="#">Sales</a></li>
                <li class="sidebar__item"><a class="sidebar__button" href="#">Traffic</a></li>
                <li class="sidebar__item"><a class="sidebar__button" href="#">Conversion</a></li>
              </ul>
            </div>
          </li>
          <li class="sidebar__item" data-state="closed">
            <button type="button" class="sidebar__button" data-stisla-sidebar-submenu-toggle aria-expanded="false" aria-controls="billing">
              <i data-lucide="credit-card"></i>Billing<span class="sidebar__caret"></span>
            </button>
            <div class="sidebar__submenu" id="billing">
              <ul class="sidebar__list">
                <li class="sidebar__item"><a class="sidebar__button" href="#">Invoices</a></li>
                <li class="sidebar__item"><a class="sidebar__button" href="#">Payment methods</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</aside>
```

## Link parent with submenu

When the parent also maps to a real page, split the two: keep the label as an `<a>` and move the disclosure into a caret button in the `.sidebar__item-action` slot. The label navigates, the caret opens the tree, and each is the right element for assistive tech.

```html
<aside class="sidebar w-72" data-stisla-sidebar>
  <div class="sidebar__content">
    <nav class="sidebar__menu">
      <div class="sidebar__group">
        <ul class="sidebar__list">
          <li class="sidebar__item"><a class="sidebar__button" href="#" aria-current="page"><i data-lucide="home"></i>Dashboard</a></li>
          <li class="sidebar__item" data-state="open">
            <a class="sidebar__button" href="#"><i data-lucide="bar-chart-3"></i>Reports</a>
            <button type="button" class="sidebar__item-action" data-stisla-sidebar-submenu-toggle aria-expanded="true" aria-controls="link-reports" aria-label="Toggle Reports submenu"><span class="sidebar__caret"></span></button>
            <div class="sidebar__submenu" id="link-reports">
              <ul class="sidebar__list">
                <li class="sidebar__item"><a class="sidebar__button" href="#">Sales</a></li>
                <li class="sidebar__item"><a class="sidebar__button" href="#">Traffic</a></li>
                <li class="sidebar__item"><a class="sidebar__button" href="#">Conversion</a></li>
              </ul>
            </div>
          </li>
          <li class="sidebar__item" data-state="closed">
            <a class="sidebar__button" href="#"><i data-lucide="credit-card"></i>Billing</a>
            <button type="button" class="sidebar__item-action" data-stisla-sidebar-submenu-toggle aria-expanded="false" aria-controls="link-billing" aria-label="Toggle Billing submenu"><span class="sidebar__caret"></span></button>
            <div class="sidebar__submenu" id="link-billing">
              <ul class="sidebar__list">
                <li class="sidebar__item"><a class="sidebar__button" href="#">Invoices</a></li>
                <li class="sidebar__item"><a class="sidebar__button" href="#">Payment methods</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</aside>
```

## As a panel

The sidebar background is transparent by default. To frame it as a standalone panel, set `--sidebar-bg` to a surface token, add a border, and round the corners.

```html
<aside class="sidebar w-68 border border-border rounded-lg" style="--sidebar-bg: var(--color-surface);">
  <header class="sidebar__header">
    <a class="sidebar__brand" href="#"><i data-lucide="hexagon"></i><span>Stisla</span></a>
  </header>
  <div class="sidebar__content">
    <nav class="sidebar__menu">
      <div class="sidebar__group">
        <span class="sidebar__group-title">Prologue</span>
        <ul class="sidebar__list">
          <li class="sidebar__item"><a class="sidebar__button" href="#" aria-current="page">Introduction</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#">Installation</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#">Customization</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#">Upgrade guide</a></li>
        </ul>
      </div>
      <div class="sidebar__group">
        <span class="sidebar__group-title">Components</span>
        <ul class="sidebar__list">
          <li class="sidebar__item"><a class="sidebar__button" href="#">Button</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#">Card</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#">Input</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#">Sidebar</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#">Table</a></li>
        </ul>
      </div>
    </nav>
  </div>
</aside>
```

## Recolor

Every visible part wires to a `--sidebar-*` variable. Override on the panel itself, on a scoped class, or on `:root`. The example tints the sidebar with the primary brand color, paired with `--color-primary-foreground` for the chip text.

```html
<aside class="sidebar w-68 rounded-lg" data-stisla-sidebar style="
  --sidebar-bg: var(--color-primary);
  --sidebar-color: var(--color-primary-foreground);
  --sidebar-button-bg-hover: color-mix(in oklch, var(--color-primary-foreground) 12%, transparent);
  --sidebar-button-color-hover: var(--color-primary-foreground);
  --sidebar-button-bg-active: color-mix(in oklch, var(--color-primary-foreground) 20%, transparent);
  --sidebar-button-color-active: var(--color-primary-foreground);
  --sidebar-button-icon-color: color-mix(in oklch, var(--color-primary-foreground) 75%, transparent);
  --sidebar-group-title-color: color-mix(in oklch, var(--color-primary-foreground) 70%, transparent);
  --sidebar-submenu-border-color: color-mix(in oklch, var(--color-primary-foreground) 25%, transparent);
">
  <header class="sidebar__header">
    <a class="sidebar__brand" href="#"><i data-lucide="hexagon"></i><span>Stisla</span></a>
  </header>
  <div class="sidebar__content">
    <nav class="sidebar__menu">
      <div class="sidebar__group">
        <span class="sidebar__group-title">Navigation</span>
        <ul class="sidebar__list">
          <li class="sidebar__item"><a class="sidebar__button" href="#" aria-current="page"><i data-lucide="home"></i>Dashboard</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="inbox"></i>Inbox</a></li>
          <li class="sidebar__item" data-state="open">
            <button type="button" class="sidebar__button" data-stisla-sidebar-submenu-toggle aria-expanded="true" aria-controls="recolor-reports">
              <i data-lucide="bar-chart-3"></i>Reports<span class="sidebar__caret"></span>
            </button>
            <div class="sidebar__submenu" id="recolor-reports">
              <ul class="sidebar__list">
                <li class="sidebar__item"><a class="sidebar__button" href="#">Sales</a></li>
                <li class="sidebar__item"><a class="sidebar__button" href="#">Traffic</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <div class="sidebar__group">
        <span class="sidebar__group-title">Settings</span>
        <ul class="sidebar__list">
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="settings"></i>General</a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="user"></i>Profile</a></li>
        </ul>
      </div>
    </nav>
  </div>
</aside>
```

## Rail / mini mode

Add `data-collapsed` to the panel to shrink it to icons only. Each button becomes a square with its icon centered; labels, submenus, and chevrons fade out coordinated with whatever width transition the layout runs. Wrap label text in a `<span>` so it can be hidden cleanly. The button size follows `.sidebar--sm` / `.sidebar--lg`; the collapsed panel hugs the icon column on its own.

A `data-stisla-sidebar-toggle="collapse"` button flips the state; the panel animates between its full and rail width over `--sidebar-transition-duration`. Click **Collapse** below.

```html
<aside class="sidebar border border-border rounded-lg" data-stisla-sidebar style="--sidebar-bg: var(--color-surface);">
  <header class="sidebar__header">
    <a class="sidebar__brand" href="#" aria-label="Stisla"><i data-lucide="hexagon"></i><span>Stisla</span></a>
  </header>
  <div class="sidebar__content">
    <nav class="sidebar__menu">
      <div class="sidebar__group">
        <ul class="sidebar__list">
          <li class="sidebar__item"><a class="sidebar__button" href="#" aria-current="page"><i data-lucide="home"></i><span>Dashboard</span></a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="inbox"></i><span>Inbox</span></a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="users"></i><span>Customers</span></a></li>
        </ul>
      </div>
    </nav>
  </div>
  <footer class="sidebar__footer">
    <button type="button" class="sidebar__button" data-stisla-sidebar-toggle="collapse" aria-expanded="true"><i data-lucide="panel-left"></i><span>Collapse</span></button>
  </footer>
</aside>
```

Statically collapsed at each size, for reference:

```html
<aside class="sidebar sidebar--sm border border-border rounded-lg" data-collapsed style="--sidebar-bg: var(--color-surface);">
  <header class="sidebar__header">
    <a class="sidebar__brand" href="#" aria-label="Stisla"><i data-lucide="hexagon"></i><span>Stisla</span></a>
  </header>
  <div class="sidebar__content">
    <nav class="sidebar__menu">
      <div class="sidebar__group">
        <ul class="sidebar__list">
          <li class="sidebar__item"><a class="sidebar__button" href="#" aria-current="page"><i data-lucide="home"></i><span>Dashboard</span></a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="inbox"></i><span>Inbox</span></a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="users"></i><span>Customers</span></a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="settings"></i><span>Settings</span></a></li>
        </ul>
      </div>
    </nav>
  </div>
</aside>
<aside class="sidebar border border-border rounded-lg" data-collapsed style="--sidebar-bg: var(--color-surface);">
  <header class="sidebar__header">
    <a class="sidebar__brand" href="#" aria-label="Stisla"><i data-lucide="hexagon"></i><span>Stisla</span></a>
  </header>
  <div class="sidebar__content">
    <nav class="sidebar__menu">
      <div class="sidebar__group">
        <ul class="sidebar__list">
          <li class="sidebar__item"><a class="sidebar__button" href="#" aria-current="page"><i data-lucide="home"></i><span>Dashboard</span></a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="inbox"></i><span>Inbox</span></a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="users"></i><span>Customers</span></a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="settings"></i><span>Settings</span></a></li>
        </ul>
      </div>
    </nav>
  </div>
</aside>
<aside class="sidebar sidebar--lg border border-border rounded-lg" data-collapsed style="--sidebar-bg: var(--color-surface);">
  <header class="sidebar__header">
    <a class="sidebar__brand" href="#" aria-label="Stisla"><i data-lucide="hexagon"></i><span>Stisla</span></a>
  </header>
  <div class="sidebar__content">
    <nav class="sidebar__menu">
      <div class="sidebar__group">
        <ul class="sidebar__list">
          <li class="sidebar__item"><a class="sidebar__button" href="#" aria-current="page"><i data-lucide="home"></i><span>Dashboard</span></a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="inbox"></i><span>Inbox</span></a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="users"></i><span>Customers</span></a></li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="settings"></i><span>Settings</span></a></li>
        </ul>
      </div>
    </nav>
  </div>
</aside>
```

## Collapse toggle

Add `data-stisla-sidebar-toggle="collapse"` to any element to flip the panel between expanded and rail. `@stisla/vanilla` toggles `[data-collapsed]` on the closest `[data-stisla-sidebar]`, or, when the trigger lives outside the sidebar, on the panel referenced by `aria-controls`. The trigger's `aria-expanded` stays in sync, and a `stisla:sidebar:collapse-change` event bubbles up so you can react to the state in your own code.

The width animates pure-CSS on its own (no inline width changes, no script). The panel is `16rem` expanded and the collapsed rail derives from the icon cell, so both ends are real lengths the transition can interpolate over `--sidebar-transition-duration`. Set `--sidebar-width` / `--sidebar-width-collapsed` only to override those defaults.

```html
<aside class="sidebar fixed left-0 top-0 h-full border-r border-border" data-stisla-sidebar style="--sidebar-bg: var(--color-surface);">
  <header class="sidebar__header">
    <a class="sidebar__brand" href="#"><i data-lucide="hexagon"></i><span>Acme</span></a>
  </header>
  <div class="sidebar__content">
    <nav class="sidebar__menu">
      <div class="sidebar__group">
        <span class="sidebar__group-title">Workspace</span>
        <div class="sidebar__group-action">
          <button type="button" class="button button--ghost button--neutral button--icon-only" aria-label="Add workspace"><i data-lucide="plus"></i></button>
        </div>
        <ul class="sidebar__list">
          <li class="sidebar__item"><a class="sidebar__button" href="#" aria-current="page"><i data-lucide="home"></i><span>Dashboard</span></a></li>
          <li class="sidebar__item" data-state="open">
            <button type="button" class="sidebar__button" data-stisla-sidebar-submenu-toggle aria-expanded="true" aria-controls="toggleable-analytics">
              <i data-lucide="bar-chart-3"></i><span>Analytics</span><span class="sidebar__caret"></span>
            </button>
            <div class="sidebar__submenu" id="toggleable-analytics">
              <ul class="sidebar__list">
                <li class="sidebar__item"><a class="sidebar__button" href="#"><span>Sales</span></a></li>
                <li class="sidebar__item"><a class="sidebar__button" href="#"><span>Traffic</span></a></li>
                <li class="sidebar__item"><a class="sidebar__button" href="#"><span>Conversion</span></a></li>
              </ul>
            </div>
          </li>
          <li class="sidebar__item">
            <a class="sidebar__button" href="#"><i data-lucide="inbox"></i><span>Inbox</span></a>
            <span class="sidebar__item-action"><span class="badge badge--primary">12</span></span>
          </li>
        </ul>
      </div>
      <div class="sidebar__group">
        <span class="sidebar__group-title">Library</span>
        <ul class="sidebar__list">
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="folder"></i><span>Documents</span></a></li>
          <li class="sidebar__item">
            <a class="sidebar__button" href="#"><i data-lucide="folder-open"></i><span>Projects</span></a>
            <span class="sidebar__item-action sidebar__item-action--reveal">
              <button type="button" class="button button--ghost button--neutral button--icon-only" aria-label="More"><i data-lucide="more-horizontal"></i></button>
            </span>
          </li>
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="layout-template"></i><span>Templates</span></a></li>
        </ul>
      </div>
      <div class="sidebar__group">
        <span class="sidebar__group-title">Team</span>
        <ul class="sidebar__list">
          <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="users"></i><span>Members</span></a></li>
          <li class="sidebar__item" data-state="closed">
            <button type="button" class="sidebar__button" data-stisla-sidebar-submenu-toggle aria-expanded="false" aria-controls="toggleable-settings">
              <i data-lucide="settings"></i><span>Settings</span><span class="sidebar__caret"></span>
            </button>
            <div class="sidebar__submenu" id="toggleable-settings">
              <ul class="sidebar__list">
                <li class="sidebar__item"><a class="sidebar__button" href="#"><span>General</span></a></li>
                <li class="sidebar__item"><a class="sidebar__button" href="#"><span>Profile</span></a></li>
                <li class="sidebar__item"><a class="sidebar__button" href="#"><span>Billing</span></a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <footer class="sidebar__footer">
    <ul class="sidebar__list">
      <li class="sidebar__item"><a class="sidebar__button" href="#"><i data-lucide="life-buoy"></i><span>Help &amp; support</span></a></li>
      <li class="sidebar__item">
        <button type="button" class="sidebar__button" data-stisla-sidebar-toggle="collapse" aria-expanded="true">
          <i data-lucide="panel-left-close"></i><span>Collapse</span>
        </button>
      </li>
    </ul>
  </footer>
</aside>
```

Any open submenus close in sync with the width transition: the framework calls `closeAllSubmenus()` as part of the collapse so each height animation runs alongside the rail shrink. Expanding back doesn't reopen them; the user clicks back into whichever menu they want. To drive the toggle from outside the sidebar (a topbar button, a keyboard shortcut), point at it with `aria-controls` set to the sidebar's `id`.

```html
<button data-stisla-sidebar-toggle="collapse"
        aria-controls="my-sidebar"
        aria-expanded="true">Toggle sidebar</button>

<aside id="my-sidebar" class="sidebar" data-stisla-sidebar>...</aside>
```

Or call the API directly with `Stisla.get(sidebarEl).toggleCollapsed()`, `.collapse()`, `.expand()`, or `.isCollapsed()`. Persist the state to `localStorage` by listening for `stisla:sidebar:collapse-change`.

## Customization

These variables retune `.sidebar` without touching component CSS. Override on the panel, a parent scope, or `:root`.

### Shell

| Variable | Use |
| :--- | :--- |
| `--sidebar-bg` | Panel background |
| `--sidebar-color` | Panel foreground (brand and buttons inherit) |
| `--sidebar-padding-block` | Top and bottom padding on header / footer |
| `--sidebar-padding-inline` | Panel outer gutter; feeds the rail-width recipe |
| `--sidebar-gap` | Space between header, content, footer |
| `--sidebar-width` | Expanded panel width. Opt-in; set it to let the sidebar own its width and animate the collapse. Loses to inline `width` or a parent that sizes the panel. |
| `--sidebar-width-collapsed` | Rail width applied under `[data-collapsed]`. Pair with `--sidebar-width` and the flip animates via `--sidebar-transition-duration`. |

### Brand

| Variable | Use |
| :--- | :--- |
| `--sidebar-brand-color` | Brand text color |
| `--sidebar-brand-icon-size` | Brand icon dimensions; load-bearing for rail re-center math |
| `--sidebar-brand-gap` | Space between brand icon and wordmark |

### Button (item)

| Variable | Use |
| :--- | :--- |
| `--sidebar-button-height` | Hard height |
| `--sidebar-button-padding-inline` | Horizontal inset. Load-bearing for rail symmetry: `padding + icon-size + padding` equals `button-height` so the icon centers at rail width with no `justify-content` override. |
| `--sidebar-button-padding-block` | Vertical padding; defaults to `0` since the row height owns the rhythm |
| `--sidebar-button-radius` | Corner radius |
| `--sidebar-button-gap` | Space between icon and label |
| `--sidebar-button-font-weight` | Label weight |
| `--sidebar-button-color` | Rest text color |
| `--sidebar-button-bg-hover` | Hover chip fill |
| `--sidebar-button-color-hover` | Hover text color |
| `--sidebar-button-bg-active` | Active chip fill (`aria-current="page"` or `data-state="active"`) |
| `--sidebar-button-color-active` | Active text color |
| `--sidebar-button-icon-size` | Icon dimensions; load-bearing for the rail recipe and the chevron |
| `--sidebar-button-icon-color` | Icon color at rest and hover. Active rows flip the icon to `--sidebar-button-color-active` so the row reads unified. |

### Item action

| Variable | Use |
| :--- | :--- |
| `--sidebar-item-action-size` | Right-edge slot reserved size (matches button height so the slot fills the row vertically). A `.button` inside still collapses to a fixed square via an internal override. |

### Group

| Variable | Use |
| :--- | :--- |
| `--sidebar-group-gap` | Space between groups in the menu |
| `--sidebar-group-title-font-size` | Caption text size |
| `--sidebar-group-title-font-weight` | Caption weight |
| `--sidebar-group-title-color` | Caption color (also tints `.sidebar__group-action`) |

### Submenu

| Variable | Use |
| :--- | :--- |
| `--sidebar-submenu-border-color` | Guide-line color |
| `--sidebar-submenu-padding-inline-start` | Space between the guide line and submenu rows |
| `--sidebar-submenu-margin-inline-start` | Inset from the panel edge; aligns the guide line on the parent icon's center axis |

### Motion

| Variable | Use |
| :--- | :--- |
| `--sidebar-transition-duration` | Rail-mode soft-hide and width transition. Zeroed under `prefers-reduced-motion`. |
