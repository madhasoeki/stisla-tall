# Tabs

A content-panel switcher: the active trigger paints with the highlight over a muted rail.

## Basic

State lives in `data-state="active|inactive"` on triggers and panels. Add`data-stisla-tabs` to the root and the `@stisla/vanilla` layer wires the ARIA, roving tabindex, and arrow-key navigation from your `data-value`s. Pair each `.tabs__trigger` with a `.tabs__panel` by `data-value`. The active trigger rises out of the rail as a pill; only the active panel shows. The demos below are live.

OverviewActivitySettings

The overview pane gives you the big picture: at-a-glance metrics and recent changes.

Activity log lists every recent event in reverse chronological order.

Settings content lives here: name, preferences, integrations.

```
<div class="tabs tabs--block" data-stisla-tabs>
  <div class="tabs__list" role="tablist">
    <button class="tabs__trigger" data-state="active" data-value="overview">Overview</button>
    <button class="tabs__trigger" data-state="inactive" data-value="activity">Activity</button>
    <button class="tabs__trigger" data-state="inactive" data-value="settings">Settings</button>
  </div>
  <div class="tabs__panel" data-state="active" data-value="overview"><p>The overview pane gives you the big picture: at-a-glance metrics and recent changes.</p></div>
  <div class="tabs__panel" data-state="inactive" data-value="activity"><p>Activity log lists every recent event in reverse chronological order.</p></div>
  <div class="tabs__panel" data-state="inactive" data-value="settings"><p>Settings content lives here: name, preferences, integrations.</p></div>
</div>
```

## Keyboard

Tabs follow the WAI-ARIA tabs pattern with a roving `tabindex`. Only the active trigger is in the tab order; arrow keys move focus along the list.

- `Tab`: focus the active trigger (or leave the list if a trigger is already focused)
- `ArrowRight` / `ArrowLeft`: move focus through enabled triggers (wraps). `ArrowDown` / `ArrowUp` in vertical mode.
- `Home` / `End`: focus the first / last enabled trigger
- `Enter` / `Space`: activate the focused trigger (only needed in manual activation mode)

Automatic activation (the default) commits the focused trigger as soon as arrow keys move focus. Manual mode decouples them; see the Manual activation section below.

## With icons

Drop an `<i>` next to the label. Icons scale with the trigger's font-size (1em).

Inbox Drafts Sent

3 unread messages.

1 draft saved.

Last sent 2 hours ago.

```
<div class="tabs tabs--block" data-stisla-tabs>
  <div class="tabs__list" role="tablist">
    <button class="tabs__trigger" data-state="active" data-value="inbox"><i data-lucide="inbox"></i> Inbox</button>
    <button class="tabs__trigger" data-state="inactive" data-value="drafts"><i data-lucide="file-text"></i> Drafts</button>
    <button class="tabs__trigger" data-state="inactive" data-value="sent"><i data-lucide="send"></i> Sent</button>
  </div>
  <div class="tabs__panel" data-state="active" data-value="inbox"><p>3 unread messages.</p></div>
  <div class="tabs__panel" data-state="inactive" data-value="drafts"><p>1 draft saved.</p></div>
  <div class="tabs__panel" data-state="inactive" data-value="sent"><p>Last sent 2 hours ago.</p></div>
</div>
```

## Vertical

Add `.tabs--vertical` to flip the layout: the rail becomes a column on the inline-start side and panels fill the remaining row.

Account Billing Team

Your account details and profile.

Plan, invoices, and payment methods.

Members and their roles.

```
<div class="tabs tabs--vertical tabs--block" data-stisla-tabs>
  <div class="tabs__list" role="tablist">
    <button class="tabs__trigger" data-state="active" data-value="account"><i data-lucide="user"></i> Account</button>
    <button class="tabs__trigger" data-state="inactive" data-value="billing"><i data-lucide="credit-card"></i> Billing</button>
    <button class="tabs__trigger" data-state="inactive" data-value="team"><i data-lucide="users"></i> Team</button>
  </div>
  <div class="tabs__panel" data-state="active" data-value="account"><p>Your account details and profile.</p></div>
  <div class="tabs__panel" data-state="inactive" data-value="billing"><p>Plan, invoices, and payment methods.</p></div>
  <div class="tabs__panel" data-state="inactive" data-value="team"><p>Members and their roles.</p></div>
</div>
```

## Disabled trigger

Add `data-disabled` (or a native `disabled` on a button) to fade a trigger and block it.

GeneralAdvancedBeta

General settings.

Advanced settings.

Beta features (locked).

```
<div class="tabs tabs--block" data-stisla-tabs>
  <div class="tabs__list" role="tablist">
    <button class="tabs__trigger" data-state="active" data-value="general">General</button>
    <button class="tabs__trigger" data-state="inactive" data-value="advanced">Advanced</button>
    <button class="tabs__trigger" data-state="inactive" data-value="beta" data-disabled disabled>Beta</button>
  </div>
  <div class="tabs__panel" data-state="active" data-value="general"><p>General settings.</p></div>
  <div class="tabs__panel" data-state="inactive" data-value="advanced"><p>Advanced settings.</p></div>
  <div class="tabs__panel" data-state="inactive" data-value="beta"><p>Beta features (locked).</p></div>
</div>
```

## Manual activation

Set `data-stisla-tabs-activation-mode="manual"` to decouple focus from selection. Arrow keys move focus only; `Space` or `Enter` commits via native button click.

OneTwoThree

Pane one. Arrow keys move focus without changing the active panel.

Pane two.

Pane three.

```
<div class="tabs tabs--block" data-stisla-tabs data-stisla-tabs-activation-mode="manual">
  <div class="tabs__list" role="tablist">
    <button class="tabs__trigger" data-value="one">One</button>
    <button class="tabs__trigger" data-value="two">Two</button>
    <button class="tabs__trigger" data-value="three">Three</button>
  </div>
  <div class="tabs__panel" data-value="one"><p>Pane one. Arrow keys move focus without changing the active panel.</p></div>
  <div class="tabs__panel" data-value="two"><p>Pane two.</p></div>
  <div class="tabs__panel" data-value="three"><p>Pane three.</p></div>
</div>
```

## Programmatic control

Resolve an instance via `Stisla.Tabs.getOrCreate(el)` and drive it with`setValue(value)`. The instance fires `stisla:tabs:changing`(cancelable) and `stisla:tabs:changed` on every flip.

AlphaBetaGamma

Alpha pane.

Beta pane.

Gamma pane.

Open AlphaOpen BetaOpen Gamma

```
Listening for stisla:tabs:changed…
```

```
<div class="flex flex-col gap-3 w-full">
  <div id="tabs-programmatic" class="tabs" data-stisla-tabs>
    <div class="tabs__list" role="tablist">
      <button class="tabs__trigger" data-value="alpha">Alpha</button>
      <button class="tabs__trigger" data-value="beta">Beta</button>
      <button class="tabs__trigger" data-value="gamma">Gamma</button>
    </div>
    <div class="tabs__panel" data-value="alpha"><p>Alpha pane.</p></div>
    <div class="tabs__panel" data-value="beta"><p>Beta pane.</p></div>
    <div class="tabs__panel" data-value="gamma"><p>Gamma pane.</p></div>
  </div>
  <div class="flex flex-wrap items-center gap-2">
    <button type="button" class="button button--outline button--neutral button--sm" data-tabs-demo="alpha">Open Alpha</button>
    <button type="button" class="button button--outline button--neutral button--sm" data-tabs-demo="beta">Open Beta</button>
    <button type="button" class="button button--outline button--neutral button--sm" data-tabs-demo="gamma">Open Gamma</button>
  </div>
  <pre id="tabs-programmatic-log" class="block">Listening for stisla:tabs:changed…</pre>
</div>
<script>
  (function () {
    var root = document.getElementById('tabs-programmatic');
    var log = document.getElementById('tabs-programmatic-log');
    if (!root || !log) return;
    var inst = Stisla.Tabs.getOrCreate(root);
    document.querySelectorAll('[data-tabs-demo]').forEach(function (btn) {
      btn.addEventListener('click', function () {
        inst.setValue(btn.dataset.tabsDemo);
      });
    });
    root.addEventListener('stisla:tabs:changed', function (e) {
      log.textContent = 'changed -> ' + e.detail.value + ' (from ' + e.detail.previousValue + ')';
    });
  })();
</script>
```

## External triggers

Any element on the page can drive a tabs instance declaratively. Carry`aria-controls="<tabsRootId>"` +`data-stisla-tabs-value="<value>"` on the trigger; the click delegate flips the matching panel without imperative JS. The tabs root needs an explicit `id` for the wire-up.

Useful for sidebar links, toolbar buttons, command-palette entries, even a`.toggle-group` member that doubles as a tab switcher. Native click semantics carry, so buttons fire on click + Enter + Space, and anchors fire on click + Enter.

The `.tabs__list` is optional. Drop it entirely and the tabs run on external triggers alone. The instance resolves each value against its panels and reflects the active state back onto the triggers (`data-state="active"` +`aria-current="page"`), so a `.sidebar` used as a section nav lights its own row with no extra script. The active panel still comes from `opts.value`, an existing active trigger/panel, or the first panel.

Jump to OverviewJump to ActivityJump to Settings

OverviewActivitySettings

Overview pane. Open me from the external buttons above.

Activity pane.

Settings pane.

```
<div class="flex flex-col gap-4 w-full">
  <div class="flex flex-wrap items-center gap-2">
    <button type="button" class="button button--outline button--neutral button--sm" aria-controls="tabs-external" data-stisla-tabs-value="overview">Jump to Overview</button>
    <button type="button" class="button button--outline button--neutral button--sm" aria-controls="tabs-external" data-stisla-tabs-value="activity">Jump to Activity</button>
    <button type="button" class="button button--outline button--neutral button--sm" aria-controls="tabs-external" data-stisla-tabs-value="settings">Jump to Settings</button>
  </div>
  <div id="tabs-external" class="tabs" data-stisla-tabs>
    <div class="tabs__list" role="tablist">
      <button class="tabs__trigger" data-value="overview">Overview</button>
      <button class="tabs__trigger" data-value="activity">Activity</button>
      <button class="tabs__trigger" data-value="settings">Settings</button>
    </div>
    <div class="tabs__panel" data-value="overview"><p>Overview pane. Open me from the external buttons above.</p></div>
    <div class="tabs__panel" data-value="activity"><p>Activity pane.</p></div>
    <div class="tabs__panel" data-value="settings"><p>Settings pane.</p></div>
  </div>
</div>
```

### Without a list

Drop the `.tabs__list` entirely and the external triggers become the whole trigger set. The instance resolves each value against its panels and writes`data-state="active"` \+ `aria-current="page"` back onto the active trigger, so the triggers light themselves with no extra script. Here a`.toggle-group` of plain toggles (no toggle-group JS) is the nav; the same wiring lets a `.sidebar` drive a settings page. The first panel activates on init.

GeneralMembersBilling

General workspace settings.

People with access to the workspace.

Plan, payment method, and invoices.

```
<div class="flex flex-col items-start gap-3 w-full">
  <div class="toggle-group" role="group" aria-label="Workspace section">
    <button type="button" class="toggle" aria-controls="tabs-listless" data-stisla-tabs-value="general">General</button>
    <button type="button" class="toggle" aria-controls="tabs-listless" data-stisla-tabs-value="members">Members</button>
    <button type="button" class="toggle" aria-controls="tabs-listless" data-stisla-tabs-value="billing">Billing</button>
  </div>
  <div id="tabs-listless" class="tabs" data-stisla-tabs>
    <div class="tabs__panel" data-value="general"><p>General workspace settings.</p></div>
    <div class="tabs__panel" data-value="members"><p>People with access to the workspace.</p></div>
    <div class="tabs__panel" data-value="billing"><p>Plan, payment method, and invoices.</p></div>
  </div>
</div>
```

## Events

Two events fire on the tabs root. Both carry `value` (the new selection) and`previousValue` (the prior selection) in `detail`.

`stisla:tabs:changing` fires before the flip and is cancelable. Call`preventDefault()` on the event to keep the current selection (useful for unsaved-changes guards).

`stisla:tabs:changed` fires after the new panel is active. Use it to sync URL hash state or persist the last-open tab.

## Customization

These variables retune `.tabs`. Override on the root or any wrapper.

| Variable                                        | Use                                                           |
| ----------------------------------------------- | ------------------------------------------------------------- |
| `--tabs-gap`                                    | Space between the rail and the panel                          |
| `--tabs-list-height`                            | Rail height (horizontal mode)                                 |
| `--tabs-list-bg`                                | Rail background                                               |
| `--tabs-list-radius`                            | Rail corner radius; triggers derive a concentric inner radius |
| `--tabs-list-padding-block` / `-padding-inline` | Rail interior padding                                         |
| `--tabs-list-gap`                               | Gap between triggers                                          |
| `--tabs-trigger-padding-inline`                 | Trigger horizontal padding                                    |
| `--tabs-trigger-font-size` / `-font-weight`     | Trigger label size / weight                                   |
| `--tabs-trigger-color-hover`                    | Hover text color on inactive triggers                         |
| `--tabs-trigger-bg-active` / `-color-active`    | Active trigger fill / text (highlight tier)                   |
| `--tabs-trigger-border-color-active`            | Active trigger rim; defaults to the active bg                 |
| `--tabs-ring`                                   | Focus outline color                                           |
| `--tabs-transition-duration`                    | Trigger state change; zeroed under reduced-motion             |
