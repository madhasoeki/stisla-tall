# Menu

A floating list of actions anchored to a trigger.

## Basic

The `.menu` wrapper holds a trigger and a`.menu__popup` surface of `.menu__item` rows. Give the popup an `id` \+ `data-stisla-menu`, point a `data-stisla-menu-trigger="id"` button at it, and the `@stisla/vanilla` layer positions it with Floating UI and wires arrow-key navigation, typeahead, and outside-click / ESC dismiss. Navigable rows are matched by `role`, the keyboard cursor is `data-highlighted`, and a checkable row flips`data-state="checked"`. The demos below are live. Rows take a leading icon and an optional trailing `.menu__shortcut`. A `.menu__separator` splits groups, and`.menu__item--danger` marks a destructive action.

```
<div class="menu">
  <button class="button button--neutral" data-stisla-menu-trigger="menu-basic" aria-haspopup="menu" aria-expanded="false">Actions</button>
  <div class="menu__popup" id="menu-basic" data-stisla-menu role="menu" data-state="closed">
    <button class="menu__item" role="menuitem"><i data-lucide="pencil"></i> Edit <span class="menu__shortcut">⌘E</span></button>
    <button class="menu__item" role="menuitem"><i data-lucide="copy"></i> Duplicate <span class="menu__shortcut">⌘D</span></button>
    <button class="menu__item" role="menuitem"><i data-lucide="share-2"></i> Share</button>
    <hr class="menu__separator" role="separator" />
    <button class="menu__item menu__item--danger" role="menuitem"><i data-lucide="trash-2"></i> Delete <span class="menu__shortcut">⌫</span></button>
  </div>
</div>
```

## Keyboard

The trigger behaves like a menu button. Open it with `Enter`, `Space`, or `ArrowDown`; the first enabled item takes focus.

- `ArrowDown` / `ArrowUp`: move focus through enabled items (wraps at the ends)
- `Home` / `End`: focus the first / last enabled item
- `Enter` / `Space`: activate the focused item
- `Escape`: close the menu and return focus to the trigger
- `Tab`: close the menu and move focus to the next element on the page

## With icons

Drop an `<i data-lucide>` as the first child of an item. The icon pins to 1rem and inherits the row color on hover so it tracks the surface naturally.

```
<div class="menu">
  <button class="button button--outline button--neutral" data-stisla-menu-trigger="menu-icons" aria-haspopup="menu" aria-expanded="false" aria-controls="menu-icons">Account</button>
  <div class="menu__popup" id="menu-icons" data-stisla-menu role="menu" data-state="closed">
    <a href="#" class="menu__item" role="menuitem"><i data-lucide="user"></i><span>Profile</span></a>
    <a href="#" class="menu__item" role="menuitem"><i data-lucide="settings"></i><span>Settings</span></a>
    <a href="#" class="menu__item" role="menuitem"><i data-lucide="bell"></i><span>Notifications</span></a>
    <hr class="menu__separator" role="separator" />
    <a href="#" class="menu__item" role="menuitem"><i data-lucide="log-out"></i><span>Sign out</span></a>
  </div>
</div>
```

## Headers and dividers

Use `.menu__group-label` to label a section and`.menu__separator` to separate groups. Wrap rows in a`role="group"` with `aria-labelledby` pointing at the header so screen readers announce the grouping.

```
<div class="menu">
  <button class="button button--outline button--neutral" data-stisla-menu-trigger="menu-groups" aria-haspopup="menu" aria-expanded="false" aria-controls="menu-groups">Workspace</button>
  <div class="menu__popup" id="menu-groups" data-stisla-menu role="menu" data-state="closed">
    <div class="menu__group" role="group" aria-labelledby="menu-groups-account">
      <h3 class="menu__group-label" id="menu-groups-account">Account</h3>
      <a href="#" class="menu__item" role="menuitem">Profile</a>
      <a href="#" class="menu__item" role="menuitem">Billing</a>
    </div>
    <hr class="menu__separator" role="separator" />
    <div class="menu__group" role="group" aria-labelledby="menu-groups-workspace">
      <h3 class="menu__group-label" id="menu-groups-workspace">Workspace</h3>
      <a href="#" class="menu__item" role="menuitem">Members</a>
      <a href="#" class="menu__item" role="menuitem">Settings</a>
    </div>
  </div>
</div>
```

## Active and disabled

Mark the user's currently-applied choice with`aria-current="true"` or `data-state="active"`. Both paint the persistent selected fill. Disabled rows take`aria-disabled="true"` on anchors or the native`disabled` attribute on buttons.

```
<div class="menu">
  <button class="button button--outline button--neutral" data-stisla-menu-trigger="menu-sort" aria-haspopup="menu" aria-expanded="false" aria-controls="menu-sort">Sort by</button>
  <div class="menu__popup" id="menu-sort" data-stisla-menu role="menu" data-state="closed">
    <button class="menu__item" role="menuitem" aria-current="true">Newest first</button>
    <button class="menu__item" role="menuitem">Oldest first</button>
    <button class="menu__item" role="menuitem">Alphabetical</button>
    <button class="menu__item" role="menuitem" disabled>By owner (Pro)</button>
  </div>
</div>
```

## Destructive items

Add `.menu__item--danger` for actions that delete data or sign the user out. The color flips to the danger token and hover paints a soft danger tint instead of the standard accent fill so the row never reads like a routine choice.

```
<div class="menu">
  <button class="button button--outline button--neutral" data-stisla-menu-trigger="menu-danger" aria-haspopup="menu" aria-expanded="false" aria-controls="menu-danger">Manage project</button>
  <div class="menu__popup" id="menu-danger" data-stisla-menu role="menu" data-state="closed">
    <button class="menu__item" role="menuitem"><i data-lucide="pencil"></i><span>Rename</span></button>
    <button class="menu__item" role="menuitem"><i data-lucide="copy"></i><span>Duplicate</span></button>
    <button class="menu__item" role="menuitem"><i data-lucide="archive"></i><span>Archive</span></button>
    <hr class="menu__separator" role="separator" />
    <button class="menu__item menu__item--danger" role="menuitem"><i data-lucide="trash-2"></i><span>Delete project</span></button>
  </div>
</div>
```

## Checkbox items

Items with `role="menuitemcheckbox"` toggle between checked and unchecked on click. The framework flips `data-state`and `aria-checked`; the leading`.menu__indicator` slot paints the check glyph when checked. The menu stays open between toggles via`data-stisla-menu-auto-close="outside"`.

```
<div class="menu">
  <button class="button button--outline button--neutral" data-stisla-menu-trigger="menu-check" aria-haspopup="menu" aria-expanded="false" aria-controls="menu-check">View</button>
  <div class="menu__popup" id="menu-check" data-stisla-menu data-stisla-menu-auto-close="outside" role="menu" data-state="closed">
    <button class="menu__item" role="menuitemcheckbox" data-state="checked" aria-checked="true"><span class="menu__indicator"><i data-lucide="check"></i></span><span>Show grid</span></button>
    <button class="menu__item" role="menuitemcheckbox" data-state="unchecked" aria-checked="false"><span class="menu__indicator"><i data-lucide="check"></i></span><span>Show ruler</span></button>
    <button class="menu__item" role="menuitemcheckbox" data-state="checked" aria-checked="true"><span class="menu__indicator"><i data-lucide="check"></i></span><span>Snap to pixels</span></button>
  </div>
</div>
```

## Radio items

Items with `role="menuitemradio"` inside a`role="group"` behave like a radio group. Clicking one item checks it and unchecks every sibling in the same group. They use the same indicator slot as checkbox items.

```
<div class="menu">
  <button class="button button--outline button--neutral" data-stisla-menu-trigger="menu-radio" aria-haspopup="menu" aria-expanded="false" aria-controls="menu-radio">Theme</button>
  <div class="menu__popup" id="menu-radio" data-stisla-menu data-stisla-menu-auto-close="outside" role="menu" data-state="closed">
    <div role="group" aria-labelledby="menu-radio-header" class="flex flex-col gap-0.5">
      <h3 class="menu__group-label" id="menu-radio-header">Appearance</h3>
      <button class="menu__item" role="menuitemradio" data-state="checked" aria-checked="true"><span class="menu__indicator"><i data-lucide="check"></i></span><span>Light</span></button>
      <button class="menu__item" role="menuitemradio" data-state="unchecked" aria-checked="false"><span class="menu__indicator"><i data-lucide="check"></i></span><span>Dark</span></button>
      <button class="menu__item" role="menuitemradio" data-state="unchecked" aria-checked="false"><span class="menu__indicator"><i data-lucide="check"></i></span><span>System</span></button>
    </div>
  </div>
</div>
```

## Item shortcuts

Append a `.menu__shortcut` chip after the label and auto-margin pushes it to the trailing edge of the row. Pair with`<kbd>` for the keystroke glyphs. The chip color inherits in hover and active paint so it stays readable on the highlight surface.

```
<div class="menu">
  <button class="button button--outline button--neutral" data-stisla-menu-trigger="menu-shortcut" aria-haspopup="menu" aria-expanded="false" aria-controls="menu-shortcut">File</button>
  <div class="menu__popup max-w-56" id="menu-shortcut" data-stisla-menu role="menu" data-state="closed">
    <button class="menu__item" role="menuitem"><span>New file</span><span class="menu__shortcut"><kbd>⌘</kbd><kbd>N</kbd></span></button>
    <button class="menu__item" role="menuitem"><span>Open…</span><span class="menu__shortcut"><kbd>⌘</kbd><kbd>O</kbd></span></button>
    <button class="menu__item" role="menuitem"><span>Save</span><span class="menu__shortcut"><kbd>⌘</kbd><kbd>S</kbd></span></button>
    <hr class="menu__separator" role="separator" />
    <button class="menu__item" role="menuitem"><span>Print</span><span class="menu__shortcut"><kbd>⌘</kbd><kbd>P</kbd></span></button>
  </div>
</div>
```

## Media rows

Borrow the `.media` row for notification or message menus that pair an avatar or icon with a title and supporting lines. Give each row `role="menuitem"` and the menu folds it into keyboard navigation. The menu matches items by their role, so hover and arrow-key highlight paint the same as a plain item and round to the same row corners.

```
<div class="menu">
  <button class="button button--outline button--neutral" data-stisla-menu-trigger="menu-media" aria-haspopup="menu" aria-expanded="false" aria-controls="menu-media">Notifications</button>
  <div class="menu__popup w-80" id="menu-media" data-stisla-menu role="menu" data-state="closed">
    <a href="#" class="media media--seamless items-start" role="menuitem">
      <div class="media__figure mt-1"><span class="icon-box icon-box--primary"><i data-lucide="shopping-bag"></i></span></div>
      <div class="media__content">
        <div class="media__title">New order #10428</div>
        <div class="media__description">Acme Corp placed an order for 12 items.</div>
        <div class="media__meta">2 minutes ago</div>
      </div>
    </a>
    <a href="#" class="media media--seamless items-start" role="menuitem">
      <div class="media__figure mt-1"><span class="icon-box icon-box--warning"><i data-lucide="triangle-alert"></i></span></div>
      <div class="media__content">
        <div class="media__title">Low stock</div>
        <div class="media__description">Headphone Blitz is down to 4 units.</div>
        <div class="media__meta">1 hour ago</div>
      </div>
    </a>
    <a href="#" class="media media--seamless items-start" role="menuitem">
      <div class="media__figure mt-1"><span class="icon-box icon-box--success"><i data-lucide="user-plus"></i></span></div>
      <div class="media__content">
        <div class="media__title">12 new customers</div>
        <div class="media__description">Sign-ups climbed this week.</div>
        <div class="media__meta">Today</div>
      </div>
    </a>
    <hr class="menu__separator" role="separator" />
    <a href="#" class="menu__item justify-center" role="menuitem">View all notifications</a>
  </div>
</div>
```

## Placement

Set `data-stisla-menu-placement` on the menu to override the default `bottom-start`. Floating UI flips the menu automatically when it would overflow the viewport, so the value is a preference.

```
<div class="menu">
  <button class="button button--outline button--neutral" data-stisla-menu-trigger="menu-top" aria-haspopup="menu" aria-expanded="false" aria-controls="menu-top">Top</button>
  <div class="menu__popup" id="menu-top" data-stisla-menu data-stisla-menu-placement="top" role="menu" data-state="closed">
    <button class="menu__item" role="menuitem">Action</button>
    <button class="menu__item" role="menuitem">Another action</button>
  </div>
</div>
<div class="menu">
  <button class="button button--outline button--neutral" data-stisla-menu-trigger="menu-right" aria-haspopup="menu" aria-expanded="false" aria-controls="menu-right">Right</button>
  <div class="menu__popup" id="menu-right" data-stisla-menu data-stisla-menu-placement="right-start" role="menu" data-state="closed">
    <button class="menu__item" role="menuitem">Action</button>
    <button class="menu__item" role="menuitem">Another action</button>
  </div>
</div>
<div class="menu">
  <button class="button button--outline button--neutral" data-stisla-menu-trigger="menu-left" aria-haspopup="menu" aria-expanded="false" aria-controls="menu-left">Left</button>
  <div class="menu__popup" id="menu-left" data-stisla-menu data-stisla-menu-placement="left-start" role="menu" data-state="closed">
    <button class="menu__item" role="menuitem">Action</button>
    <button class="menu__item" role="menuitem">Another action</button>
  </div>
</div>
<div class="menu">
  <button class="button button--outline button--neutral" data-stisla-menu-trigger="menu-bottom-end" aria-haspopup="menu" aria-expanded="false" aria-controls="menu-bottom-end">Bottom-end</button>
  <div class="menu__popup" id="menu-bottom-end" data-stisla-menu data-stisla-menu-placement="bottom-end" role="menu" data-state="closed">
    <button class="menu__item" role="menuitem">Action</button>
    <button class="menu__item" role="menuitem">Another action</button>
  </div>
</div>
```

## Events

Four events fire on the `.menu` root. The`opening` and `closing` events are cancelable.

`stisla:menu:opening` fires before the menu mounts. Call`preventDefault()` to abort.

`stisla:menu:opened` fires once the menu is positioned and focus has moved to the first item.

`stisla:menu:closing` fires before the menu dismisses. Call`preventDefault()` to keep it open.

`stisla:menu:closed` fires once the menu is hidden and focus has returned to the trigger.

## Customization

These variables retune the menu. Override on the root or any wrapper.

| Variable                                                                              | Use                                                                            |
| ------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------ |
| `--menu-z-index`                                                                      | Overlay stacking order                                                         |
| `--menu-min-width`                                                                    | Popup minimum width                                                            |
| `--menu-gap`                                                                          | Gap between rows                                                               |
| `--menu-padding-block` / `-padding-inline`                                            | Popup interior padding; the inline value also feeds the concentric item radius |
| `--menu-bg` / `-color` /`-border-color`                                               | Popup fill, text, and rim                                                      |
| `--menu-radius` / `-shadow`                                                           | Popup corner radius and elevation                                              |
| `--menu-item-gap` / `-item-min-height` /`-item-padding-block` /`-item-padding-inline` | Row layout                                                                     |
| `--menu-item-bg-hover` /`-item-color-hover`                                           | Hover and keyboard-highlight paint (accent)                                    |
| `--menu-item-bg-active` /`-item-color-active`                                         | Selected-row paint (highlight)                                                 |
| `--menu-item-color-disabled`                                                          | Disabled row text                                                              |
| `--menu-item-color-danger` /`-item-bg-danger-hover`                                   | Destructive row text and hover tint                                            |
| `--menu-item-icon-size` /`-item-icon-color`                                           | Leading icon size and color (tracks row text by default)                       |
| `--menu-shortcut-font-size` /`-shortcut-color`                                        | Trailing shortcut chip type                                                    |
| `--menu-group-label-*`                                                                | Section label padding, type, and color                                         |
| `--menu-separator-color` /`-separator-margin-block`                                   | Divider stroke and spacing                                                     |
| `--menu-transition-duration`                                                          | Open fade timing; zeroed under reduced-motion                                  |
