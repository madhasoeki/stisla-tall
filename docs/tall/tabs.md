# Tabs Component (TALL Stack)

A content-panel switcher: the active trigger paints with the highlight over a muted rail.

## Basic

State lives in `data-state="active|inactive"` on triggers and panels. Pair each `<stisla::tabs.trigger>` with a `<stisla::tabs.panel>` by `value`.

```blade
<stisla::tabs :block="true">
    <stisla::tabs.list>
        <stisla::tabs.trigger state="active" value="overview">Overview</stisla::tabs.trigger>
        <stisla::tabs.trigger state="inactive" value="activity">Activity</stisla::tabs.trigger>
        <stisla::tabs.trigger state="inactive" value="settings">Settings</stisla::tabs.trigger>
    </stisla::tabs.list>
    <stisla::tabs.panel state="active" value="overview">
        <p>The overview pane gives you the big picture: at-a-glance metrics and recent changes.</p>
    </stisla::tabs.panel>
    <stisla::tabs.panel state="inactive" value="activity">
        <p>Activity log lists every recent event in reverse chronological order.</p>
    </stisla::tabs.panel>
    <stisla::tabs.panel state="inactive" value="settings">
        <p>Settings content lives here: name, preferences, integrations.</p>
    </stisla::tabs.panel>
</stisla::tabs>
```

---

## Keyboard

Tabs follow the WAI-ARIA tabs pattern with a roving `tabindex`. Only the active trigger is in the tab order; arrow keys move focus along the list.

- `Tab`: focus the active trigger
- `ArrowRight` / `ArrowLeft`: move focus through enabled triggers (wraps)
- `Home` / `End`: focus the first / last enabled trigger
- `Enter` / `Space`: activate the focused trigger (only needed in manual activation mode)

---

## With icons

Drop an `icon="..."` prop on `<stisla::tabs.trigger>`.

```blade
<stisla::tabs :block="true">
    <stisla::tabs.list>
        <stisla::tabs.trigger state="active" value="inbox" icon="inbox">Inbox</stisla::tabs.trigger>
        <stisla::tabs.trigger state="inactive" value="drafts" icon="file-text">Drafts</stisla::tabs.trigger>
        <stisla::tabs.trigger state="inactive" value="sent" icon="send">Sent</stisla::tabs.trigger>
    </stisla::tabs.list>
    <stisla::tabs.panel state="active" value="inbox">
        <p>3 unread messages.</p>
    </stisla::tabs.panel>
    <stisla::tabs.panel state="inactive" value="drafts">
        <p>1 draft saved.</p>
    </stisla::tabs.panel>
    <stisla::tabs.panel state="inactive" value="sent">
        <p>Last sent 2 hours ago.</p>
    </stisla::tabs.panel>
</stisla::tabs>
```

---

## Vertical

Add `:vertical="true"` to flip the layout: the rail becomes a column on the inline-start side and panels fill the remaining row.

```blade
<stisla::tabs :vertical="true" :block="true">
    <stisla::tabs.list>
        <stisla::tabs.trigger state="active" value="account" icon="user">Account</stisla::tabs.trigger>
        <stisla::tabs.trigger state="inactive" value="billing" icon="credit-card">Billing</stisla::tabs.trigger>
        <stisla::tabs.trigger state="inactive" value="team" icon="users">Team</stisla::tabs.trigger>
    </stisla::tabs.list>
    <stisla::tabs.panel state="active" value="account">
        <p>Your account details and profile.</p>
    </stisla::tabs.panel>
    <stisla::tabs.panel state="inactive" value="billing">
        <p>Plan, invoices, and payment methods.</p>
    </stisla::tabs.panel>
    <stisla::tabs.panel state="inactive" value="team">
        <p>Members and their roles.</p>
    </stisla::tabs.panel>
</stisla::tabs>
```

---

## Disabled trigger

Add `:disabled="true"` to fade a trigger and block interaction.

```blade
<stisla::tabs :block="true">
    <stisla::tabs.list>
        <stisla::tabs.trigger state="active" value="general">General</stisla::tabs.trigger>
        <stisla::tabs.trigger state="inactive" value="advanced">Advanced</stisla::tabs.trigger>
        <stisla::tabs.trigger state="inactive" value="beta" :disabled="true">Beta</stisla::tabs.trigger>
    </stisla::tabs.list>
    <stisla::tabs.panel state="active" value="general">
        <p>General settings.</p>
    </stisla::tabs.panel>
    <stisla::tabs.panel state="inactive" value="advanced">
        <p>Advanced settings.</p>
    </stisla::tabs.panel>
    <stisla::tabs.panel state="inactive" value="beta">
        <p>Beta features (locked).</p>
    </stisla::tabs.panel>
</stisla::tabs>
```

---

## Manual activation

Set `activation-mode="manual"` to decouple focus from selection. Arrow keys move focus only; `Space` or `Enter` commits via button click.

```blade
<stisla::tabs :block="true" activation-mode="manual">
    <stisla::tabs.list>
        <stisla::tabs.trigger state="active" value="one">One</stisla::tabs.trigger>
        <stisla::tabs.trigger state="inactive" value="two">Two</stisla::tabs.trigger>
        <stisla::tabs.trigger state="inactive" value="three">Three</stisla::tabs.trigger>
    </stisla::tabs.list>
    <stisla::tabs.panel state="active" value="one">
        <p>Pane one. Arrow keys move focus without changing the active panel.</p>
    </stisla::tabs.panel>
    <stisla::tabs.panel state="inactive" value="two">
        <p>Pane two.</p>
    </stisla::tabs.panel>
    <stisla::tabs.panel state="inactive" value="three">
        <p>Pane three.</p>
    </stisla::tabs.panel>
</stisla::tabs>
```

---

## Programmatic control

Resolve an instance via `Stisla.Tabs.getOrCreate(el)` and drive it with `setValue(value)`.

```blade
<stisla::tabs id="tabs-programmatic">
    <stisla::tabs.list>
        <stisla::tabs.trigger state="active" value="alpha">Alpha</stisla::tabs.trigger>
        <stisla::tabs.trigger state="inactive" value="beta">Beta</stisla::tabs.trigger>
    </stisla::tabs.list>
    <stisla::tabs.panel state="active" value="alpha">
        <p>Alpha pane.</p>
    </stisla::tabs.panel>
    <stisla::tabs.panel state="inactive" value="beta">
        <p>Beta pane.</p>
    </stisla::tabs.panel>
</stisla::tabs>
```

---

## External triggers

Carry `aria-controls="<tabsRootId>"` + `data-stisla-tabs-value="<value>"` on any button or link to control tabs declaratively.

```blade
<stisla::button mode="outline" tone="neutral" size="sm" aria-controls="tabs-external" data-stisla-tabs-value="overview">Jump to Overview</stisla::button>

<stisla::tabs id="tabs-external">
    <stisla::tabs.list>
        <stisla::tabs.trigger state="active" value="overview">Overview</stisla::tabs.trigger>
        <stisla::tabs.trigger state="inactive" value="activity">Activity</stisla::tabs.trigger>
    </stisla::tabs.list>
    <stisla::tabs.panel state="active" value="overview">
        <p>Overview pane.</p>
    </stisla::tabs.panel>
</stisla::tabs>
```

### Without a list

Drop the `<stisla::tabs.list>` entirely and external triggers become the whole trigger set.

```blade
<div class="toggle-group" role="group" aria-label="Workspace section">
    <button type="button" class="toggle" aria-controls="tabs-listless" data-stisla-tabs-value="general">General</button>
    <button type="button" class="toggle" aria-controls="tabs-listless" data-stisla-tabs-value="members">Members</button>
</div>
<stisla::tabs id="tabs-listless">
    <stisla::tabs.panel state="active" value="general">
        <p>General workspace settings.</p>
    </stisla::tabs.panel>
    <stisla::tabs.panel state="inactive" value="members">
        <p>People with access to the workspace.</p>
    </stisla::tabs.panel>
</stisla::tabs>
```

---

## Events

Two events fire on the tabs root: `stisla:tabs:changing` (cancelable) and `stisla:tabs:changed`.

---

## Customization

These variables retune `.tabs`.

| Variable | Use |
| :--- | :--- |
| `--tabs-gap` | Space between the rail and the panel |
| `--tabs-list-height` | Rail height (horizontal mode) |
| `--tabs-list-bg` | Rail background |
| `--tabs-list-radius` | Rail corner radius |
| `--tabs-list-padding-block` / `-padding-inline` | Rail interior padding |
| `--tabs-list-gap` | Gap between triggers |
| `--tabs-trigger-padding-inline` | Trigger horizontal padding |
| `--tabs-trigger-font-size` / `-font-weight` | Trigger label size / weight |
| `--tabs-trigger-color-hover` | Hover text color on inactive triggers |
| `--tabs-trigger-bg-active` / `-color-active` | Active trigger fill / text |
| `--tabs-trigger-border-color-active` | Active trigger rim |
| `--tabs-ring` | Focus outline color |
| `--tabs-transition-duration` | Trigger state change animation duration |

---

## Props Reference

### `<stisla::tabs>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'div'` | Tag HTML elemen (`'div'`, `'section'`) |
| `vertical` | `bool` | `false` | Menata rail dalam mode kolom vertikal (`.tabs--vertical`) |
| `block` | `bool` | `false` | Membentangkan komponen secara selebar pembungkus (`.tabs--block`) |
| `defaultValue` | `string` | `null` | Nilai tab aktif default (`data-value`) |
| `activationMode` | `string` | `null` | Mode aktivasi navigasi (`'manual'`) |
| `id` | `string` | `null` | Unique ID elemen |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--tabs-*`) |

### `<stisla::tabs.list>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'div'` | Tag HTML elemen (`'div'`, `'nav'`) |

### `<stisla::tabs.trigger>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'button'` | Tag HTML elemen (`'button'`, `'a'`) |
| `value` | `string` | `null` | Nilai kunci tab (`data-value`) |
| `state` | `string` | `'inactive'` | State aktif tab (`'active'`, `'inactive'`) |
| `disabled` | `bool` | `false` | Mematikan interaksi tombol (`:disabled="true"`) |
| `icon` | `string` | `null` | Nama ikon Lucide |

### `<stisla::tabs.panel>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'div'` | Tag HTML elemen (`'div'`) |
| `value` | `string` | `null` | Nilai kunci panel yang berpasangan (`data-value`) |
| `state` | `string` | `'inactive'` | State aktif panel (`'active'`, `'inactive'`) |
