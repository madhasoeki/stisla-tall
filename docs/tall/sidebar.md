# Sidebar Component (TALL Stack)

Vertical navigation panel for app layouts. No fixed positioning, width, or background by default; the layout decides where it sits.

## Basic

One content slot, one group, one list. The current page is marked with `aria-current="page"` on the matching button via `:active="true"`.

```blade
<stisla::sidebar class="w-64">
    <stisla::sidebar.content>
        <stisla::sidebar.menu>
            <stisla::sidebar.group>
                <stisla::sidebar.list>
                    <stisla::sidebar.item>
                        <stisla::sidebar.button href="#" icon="home" :active="true">Dashboard</stisla::sidebar.button>
                    </stisla::sidebar.item>
                    <stisla::sidebar.item>
                        <stisla::sidebar.button href="#" icon="shopping-bag">Products</stisla::sidebar.button>
                    </stisla::sidebar.item>
                    <stisla::sidebar.item>
                        <stisla::sidebar.button href="#" icon="tags">Categories</stisla::sidebar.button>
                    </stisla::sidebar.item>
                    <stisla::sidebar.item>
                        <stisla::sidebar.button href="#" icon="users">Customers</stisla::sidebar.button>
                    </stisla::sidebar.item>
                </stisla::sidebar.list>
            </stisla::sidebar.group>
        </stisla::sidebar.menu>
    </stisla::sidebar.content>
</stisla::sidebar>
```

---

## With header and footer

Use `<stisla::sidebar.header>` for the brand mark; `<stisla::sidebar.brand>` lines up an icon and a wordmark. `<stisla::sidebar.footer>` pins to the bottom via `margin-block-start: auto`.

```blade
<stisla::sidebar class="w-64 h-88">
    <stisla::sidebar.header>
        <stisla::sidebar.brand href="#" icon="hexagon">Stisla</stisla::sidebar.brand>
    </stisla::sidebar.header>
    <stisla::sidebar.content>
        <stisla::sidebar.menu>
            <stisla::sidebar.group>
                <stisla::sidebar.list>
                    <stisla::sidebar.item>
                        <stisla::sidebar.button href="#" icon="home" :active="true">Dashboard</stisla::sidebar.button>
                    </stisla::sidebar.item>
                    <stisla::sidebar.item>
                        <stisla::sidebar.button href="#" icon="bar-chart-3">Analytics</stisla::sidebar.button>
                    </stisla::sidebar.item>
                    <stisla::sidebar.item>
                        <stisla::sidebar.button href="#" icon="inbox">Inbox</stisla::sidebar.button>
                    </stisla::sidebar.item>
                </stisla::sidebar.list>
            </stisla::sidebar.group>
        </stisla::sidebar.menu>
    </stisla::sidebar.content>
    <stisla::sidebar.footer>
        <stisla::sidebar.list>
            <stisla::sidebar.item>
                <stisla::sidebar.button href="#" icon="settings">Settings</stisla::sidebar.button>
            </stisla::sidebar.item>
            <stisla::sidebar.item>
                <stisla::sidebar.button href="#" icon="log-out">Log out</stisla::sidebar.button>
            </stisla::sidebar.item>
        </stisla::sidebar.list>
    </stisla::sidebar.footer>
</stisla::sidebar>
```

---

## Sizes

Three sizes: `size="sm"`, the default, and `size="lg"`. The modifier retunes button height, padding, and group gap. Outer panel padding stays the same so gutters read identically across sizes.

```blade
<stisla::sidebar size="sm" class="w-56">...</stisla::sidebar>
<stisla::sidebar class="w-56">...</stisla::sidebar>
<stisla::sidebar size="lg" class="w-56">...</stisla::sidebar>
```

---

## Groups and group action

`<stisla::sidebar.group-title>` labels each list. An optional `<stisla::sidebar.group-action>` sits to the right of the title, useful for an add or filter button.

```blade
<stisla::sidebar class="w-68">
    <stisla::sidebar.content>
        <stisla::sidebar.menu>
            <stisla::sidebar.group>
                <stisla::sidebar.group-title>Workspaces</stisla::sidebar.group-title>
                <stisla::sidebar.group-action>
                    <stisla::button mode="ghost" tone="neutral" :icon-only="true" icon="plus" aria-label="Add workspace" />
                </stisla::sidebar.group-action>
                <stisla::sidebar.list>
                    <stisla::sidebar.item>
                        <stisla::sidebar.button href="#" icon="briefcase" :active="true">Acme Co.</stisla::sidebar.button>
                    </stisla::sidebar.item>
                </stisla::sidebar.list>
            </stisla::sidebar.group>
        </stisla::sidebar.menu>
    </stisla::sidebar.content>
</stisla::sidebar>
```

---

## Active state

Two hooks. `href` links use `aria-current="page"` (via `:active="true"`); non-link buttons use `data-state="active"`. Both paint the highlight chip.

```blade
<stisla::sidebar.button href="#" icon="inbox" :active="true">Inbox</stisla::sidebar.button>
<stisla::sidebar.button icon="filter" :active="true">Filters open</stisla::sidebar.button>
```

---

## Item actions

Place a `<stisla::sidebar.item-action>` after the button to drop a badge or quiet button into the right edge of the row. Add `:reveal="true"` to show the action only on row hover or keyboard focus.

```blade
<stisla::sidebar.item>
    <stisla::sidebar.button href="#" icon="bell">Notifications</stisla::sidebar.button>
    <stisla::sidebar.item-action>
        <stisla::badge tone="primary">3</stisla::badge>
    </stisla::sidebar.item-action>
</stisla::sidebar.item>

<stisla::sidebar.item>
    <stisla::sidebar.button href="#" icon="folder">Documents</stisla::sidebar.button>
    <stisla::sidebar.item-action :reveal="true">
        <stisla::button mode="ghost" tone="neutral" :icon-only="true" icon="more-horizontal" aria-label="More" />
    </stisla::sidebar.item-action>
</stisla::sidebar.item>
```

---

## Nested submenu

Wrap a child `<stisla::sidebar.list>` in a `<stisla::sidebar.submenu>` inside the same `<stisla::sidebar.item>`. Pass `state="open"` or `state="closed"` to `<stisla::sidebar.item>`, and set `:toggle-submenu="true"` on `<stisla::sidebar.button>`.

```blade
<stisla::sidebar.item state="open">
    <stisla::sidebar.button icon="bar-chart-3" :toggle-submenu="true" expanded="true" controls="reports">
        Reports
    </stisla::sidebar.button>
    <stisla::sidebar.submenu id="reports">
        <stisla::sidebar.list>
            <stisla::sidebar.item>
                <stisla::sidebar.button href="#">Sales</stisla::sidebar.button>
            </stisla::sidebar.item>
        </stisla::sidebar.list>
    </stisla::sidebar.submenu>
</stisla::sidebar.item>
```

---

## Link parent with submenu

When the parent also maps to a real page, split the two: keep the label as an `<a>` link and move the disclosure into a caret button in the `<stisla::sidebar.item-action>` slot.

```blade
<stisla::sidebar.item state="open">
    <stisla::sidebar.button href="#" icon="bar-chart-3">Reports</stisla::sidebar.button>
    <stisla::sidebar.item-action :toggle-submenu="true" expanded="true" controls="link-reports" label="Toggle Reports submenu" />
    <stisla::sidebar.submenu id="link-reports">
        <stisla::sidebar.list>
            <stisla::sidebar.item>
                <stisla::sidebar.button href="#">Sales</stisla::sidebar.button>
            </stisla::sidebar.item>
        </stisla::sidebar.list>
    </stisla::sidebar.submenu>
</stisla::sidebar.item>
```

---

## As a panel

Set `:vars="['bg' => 'var(--color-surface)']"` to frame sidebar as a standalone panel.

```blade
<stisla::sidebar class="w-68 border border-border rounded-lg" :vars="['bg' => 'var(--color-surface)']">
    ...
</stisla::sidebar>
```

---

## Recolor

Every visible part wires to a `--sidebar-*` variable via `:vars`.

```blade
<stisla::sidebar
    class="w-68 rounded-lg"
    :vars="[
        'bg' => 'var(--color-primary)',
        'color' => 'var(--color-primary-foreground)',
        'button-bg-hover' => 'color-mix(in oklch, var(--color-primary-foreground) 12%, transparent)',
        'button-color-hover' => 'var(--color-primary-foreground)',
        'button-bg-active' => 'color-mix(in oklch, var(--color-primary-foreground) 20%, transparent)',
        'button-color-active' => 'var(--color-primary-foreground)',
    ]"
>
    ...
</stisla::sidebar>
```

---

## Rail / mini mode

Add `:collapsed="true"` to the panel to shrink it to icons only.

```blade
<stisla::sidebar :collapsed="true" class="border border-border rounded-lg" :vars="['bg' => 'var(--color-surface)']">
    ...
</stisla::sidebar>
```

---

## Collapse toggle

Add `:toggle-collapse="true"` to a button to flip between expanded and rail width.

```blade
<stisla::sidebar.button icon="panel-left" :toggle-collapse="true" expanded="true">
    Collapse
</stisla::sidebar.button>
```

---

## Props & Sub-components Reference

### `<stisla::sidebar>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'aside'` | Tag HTML elemen utama |
| `size` | `string` | `null` | Ukuran sidebar (`'sm'`, `'lg'`) |
| `collapsed` | `bool` | `false` | Mode ringkas rail/mini (`data-collapsed`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--sidebar-*`) |

### Sub-Components Overview
- `<stisla::sidebar.header>`: Header sidebar untuk logo/brand.
- `<stisla::sidebar.brand>`: Logo & nama brand (`href`, `icon`).
- `<stisla::sidebar.content>`: Area konten utama sidebar.
- `<stisla::sidebar.menu>`: Pembungkus nav menu.
- `<stisla::sidebar.group>`: Kelompok menu.
- `<stisla::sidebar.group-title>`: Judul kelompok menu.
- `<stisla::sidebar.group-action>`: Tombol aksi kelompok menu.
- `<stisla::sidebar.list>`: Daftar menu (`<ul>`).
- `<stisla::sidebar.item>`: Item menu (`<li>`, `state="open|closed"`).
- `<stisla::sidebar.button>`: Tombol/link menu (`href`, `icon`, `active`, `toggleSubmenu`, `toggleCollapse`).
- `<stisla::sidebar.item-action>`: Slot aksi di sebelah kanan item (`reveal`, `toggleSubmenu`).
- `<stisla::sidebar.caret>`: Ikon panah submenu.
- `<stisla::sidebar.submenu>`: Kontainer menu bersarang.
- `<stisla::sidebar.footer>`: Footer sidebar.
