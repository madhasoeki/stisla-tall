# Table Component (TALL Stack)

A flat data grid for rows of structured records.

## Basic

Wrap your data in `<stisla::table>`. The first and last column cells line up with the card body gutter so a table drops into a `<stisla::card>` flush.

```blade
<stisla::table>
    <stisla::table.head>
        <stisla::table.row>
            <stisla::table.cell as="th" scope="col">Plan</stisla::table.cell>
            <stisla::table.cell as="th" scope="col">Seats</stisla::table.cell>
            <stisla::table.cell as="th" scope="col">Storage</stisla::table.cell>
            <stisla::table.cell as="th" scope="col" :alignEnd="true">Price</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.head>
    <stisla::table.body>
        <stisla::table.row>
            <stisla::table.cell as="th" scope="row">Starter</stisla::table.cell>
            <stisla::table.cell>3</stisla::table.cell>
            <stisla::table.cell>10 GB</stisla::table.cell>
            <stisla::table.cell :alignEnd="true">$0/mo</stisla::table.cell>
        </stisla::table.row>
        <stisla::table.row>
            <stisla::table.cell as="th" scope="row">Team</stisla::table.cell>
            <stisla::table.cell>15</stisla::table.cell>
            <stisla::table.cell>100 GB</stisla::table.cell>
            <stisla::table.cell :alignEnd="true">$29/mo</stisla::table.cell>
        </stisla::table.row>
        <stisla::table.row>
            <stisla::table.cell as="th" scope="row">Business</stisla::table.cell>
            <stisla::table.cell>50</stisla::table.cell>
            <stisla::table.cell>1 TB</stisla::table.cell>
            <stisla::table.cell :alignEnd="true">$99/mo</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.body>
</stisla::table>
```

---

## Row variants

Add `tone="..."` to a `<stisla::table.row>` (`primary`, `success`, `info`, `warning`, `danger`) or `tone="neutral"` for a quiet emphasis.

```blade
<stisla::table align="middle">
    <stisla::table.head>
        <stisla::table.row>
            <stisla::table.cell as="th" scope="col">Job</stisla::table.cell>
            <stisla::table.cell as="th" scope="col">Schedule</stisla::table.cell>
            <stisla::table.cell as="th" scope="col">Last run</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.head>
    <stisla::table.body>
        <stisla::table.row>
            <stisla::table.cell>nightly-backup</stisla::table.cell>
            <stisla::table.cell>Daily 02:00 UTC</stisla::table.cell>
            <stisla::table.cell>4 hours ago</stisla::table.cell>
        </stisla::table.row>
        <stisla::table.row tone="warning">
            <stisla::table.cell>events-rollup</stisla::table.cell>
            <stisla::table.cell>Hourly :00</stisla::table.cell>
            <stisla::table.cell>Retrying (2 of 5)</stisla::table.cell>
        </stisla::table.row>
        <stisla::table.row tone="danger">
            <stisla::table.cell>webhook-replay</stisla::table.cell>
            <stisla::table.cell>Every 15 min</stisla::table.cell>
            <stisla::table.cell>Failed · 12 min ago</stisla::table.cell>
        </stisla::table.row>
        <stisla::table.row tone="neutral">
            <stisla::table.cell>metrics-aggregate</stisla::table.cell>
            <stisla::table.cell>Every 5 min</stisla::table.cell>
            <stisla::table.cell>2 min ago</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.body>
</stisla::table>
```

---

## Striped rows

Add `:striped="true"` to zebra-stripe every other row in the body.

```blade
<stisla::table :striped="true">
    <stisla::table.head>
        <stisla::table.row>
            <stisla::table.cell as="th" scope="col">Region</stisla::table.cell>
            <stisla::table.cell as="th" scope="col">Latency p50</stisla::table.cell>
            <stisla::table.cell as="th" scope="col">Latency p99</stisla::table.cell>
            <stisla::table.cell as="th" scope="col" :alignEnd="true">Requests / min</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.head>
    <stisla::table.body>
        <stisla::table.row>
            <stisla::table.cell>us-east-1</stisla::table.cell>
            <stisla::table.cell>42 ms</stisla::table.cell>
            <stisla::table.cell>180 ms</stisla::table.cell>
            <stisla::table.cell :alignEnd="true">12,840</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.body>
</stisla::table>
```

---

## Striped columns

Use `striped="cols"` when the table reads column-first.

```blade
<stisla::table striped="cols">
    <stisla::table.head>
        <stisla::table.row>
            <stisla::table.cell as="th" scope="col">Quarter</stisla::table.cell>
            <stisla::table.cell as="th" scope="col">Q1</stisla::table.cell>
            <stisla::table.cell as="th" scope="col">Q2</stisla::table.cell>
            <stisla::table.cell as="th" scope="col">Q3</stisla::table.cell>
            <stisla::table.cell as="th" scope="col">Q4</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.head>
    <stisla::table.body>
        <stisla::table.row>
            <stisla::table.cell as="th" scope="row">New accounts</stisla::table.cell>
            <stisla::table.cell>418</stisla::table.cell>
            <stisla::table.cell>502</stisla::table.cell>
            <stisla::table.cell>611</stisla::table.cell>
            <stisla::table.cell>730</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.body>
</stisla::table>
```

---

## Hoverable and active row

`:hover="true"` highlights the row under the cursor; flag a persistent selection with `:active="true"` on `<stisla::table.row>`.

```blade
<stisla::table :hover="true">
    <stisla::table.head>
        <stisla::table.row>
            <stisla::table.cell as="th" scope="col">Branch</stisla::table.cell>
            <stisla::table.cell as="th" scope="col">Last commit</stisla::table.cell>
            <stisla::table.cell as="th" scope="col" :alignEnd="true">Behind / Ahead</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.head>
    <stisla::table.body>
        <stisla::table.row>
            <stisla::table.cell>main</stisla::table.cell>
            <stisla::table.cell>Bump axios to 1.7.4</stisla::table.cell>
            <stisla::table.cell :alignEnd="true">0 / 0</stisla::table.cell>
        </stisla::table.row>
        <stisla::table.row :active="true">
            <stisla::table.cell>feat/billing-v2</stisla::table.cell>
            <stisla::table.cell>Add proration preview</stisla::table.cell>
            <stisla::table.cell :alignEnd="true">0 / 14</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.body>
</stisla::table>
```

---

## Grid

`:grid="true"` draws a border on every side of every cell.

```blade
<stisla::table :grid="true">
    <stisla::table.head>
        <stisla::table.row>
            <stisla::table.cell as="th" scope="col">Cluster</stisla::table.cell>
            <stisla::table.cell as="th" scope="col">Nodes</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.head>
    <stisla::table.body>
        <stisla::table.row>
            <stisla::table.cell>prod-edge</stisla::table.cell>
            <stisla::table.cell>24</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.body>
</stisla::table>
```

---

## Seamless

`:seamless="true"` strips every row and cell border for a soft list look.

```blade
<stisla::table :seamless="true">
    <stisla::table.head>
        <stisla::table.row>
            <stisla::table.cell as="th" scope="col">Project</stisla::table.cell>
            <stisla::table.cell as="th" scope="col">Owner</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.head>
    <stisla::table.body>
        <stisla::table.row>
            <stisla::table.cell>billing-service</stisla::table.cell>
            <stisla::table.cell>Maya Singh</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.body>
</stisla::table>
```

---

## Small

`size="sm"` shrinks inner cell padding for denser rows.

```blade
<stisla::table size="sm">
    <stisla::table.head>
        <stisla::table.row>
            <stisla::table.cell as="th" scope="col">Key</stisla::table.cell>
            <stisla::table.cell as="th" scope="col">Value</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.head>
    <stisla::table.body>
        <stisla::table.row>
            <stisla::table.cell><code>SMTP_HOST</code></stisla::table.cell>
            <stisla::table.cell>smtp.postmark.io</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.body>
</stisla::table>
```

---

## Vertical alignment

Cell content sits at the top by default. Add `align="middle"` when rows mix multi-line text with shorter values.

```blade
<stisla::table align="middle">
    <stisla::table.head>
        <stisla::table.row>
            <stisla::table.cell as="th" scope="col">Document</stisla::table.cell>
            <stisla::table.cell as="th" scope="col">Summary</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.head>
    <stisla::table.body>
        <stisla::table.row>
            <stisla::table.cell>Onboarding handbook</stisla::table.cell>
            <stisla::table.cell>Day-1 setup, IT accounts, payroll forms, and reading list.</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.body>
</stisla::table>
```

---

## Header alt and sortable

`:alt="true"` on `<stisla::table.head>` opts the header onto the alt surface. Wrap a header label in `<stisla::table.sort>` for a sort control with a CSS-drawn caret; set `state="asc|desc"` on active column.

```blade
<stisla::table :hover="true">
    <stisla::table.head :alt="true">
        <stisla::table.row>
            <stisla::table.cell as="th" scope="col">
                <stisla::table.sort>Customer</stisla::table.sort>
            </stisla::table.cell>
            <stisla::table.cell as="th" scope="col">
                <stisla::table.sort>Plan</stisla::table.sort>
            </stisla::table.cell>
            <stisla::table.cell as="th" scope="col" :alignEnd="true" aria-sort="descending">
                <stisla::table.sort state="desc">MRR</stisla::table.sort>
            </stisla::table.cell>
        </stisla::table.row>
    </stisla::table.head>
    <stisla::table.body>
        <stisla::table.row>
            <stisla::table.cell>Northwind</stisla::table.cell>
            <stisla::table.cell>Enterprise</stisla::table.cell>
            <stisla::table.cell :alignEnd="true">$8,200</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.body>
</stisla::table>
```

---

## Caption and group divider

A `<caption>` reads like a footnote below the table. Add `:divider="true"` to a `<stisla::table.body>` for a heavier rule above it.

```blade
<stisla::table>
    <caption>Last refreshed at 09:42 UTC</caption>
    <stisla::table.head>
        <stisla::table.row>
            <stisla::table.cell as="th" scope="col">Item</stisla::table.cell>
            <stisla::table.cell as="th" scope="col" :alignEnd="true">Line total</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.head>
    <stisla::table.body :divider="true">
        <stisla::table.row>
            <stisla::table.cell>Pro seat license</stisla::table.cell>
            <stisla::table.cell :alignEnd="true">$435.00</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.body>
</stisla::table>
```

---

## With status badges

Drop a `<stisla::badge>` into a cell to flag state.

```blade
<stisla::table :responsive="true" :hover="true" align="middle">
    <stisla::table.head :alt="true">
        <stisla::table.row>
            <stisla::table.cell as="th" scope="col">Invoice</stisla::table.cell>
            <stisla::table.cell as="th" scope="col">Status</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.head>
    <stisla::table.body>
        <stisla::table.row>
            <stisla::table.cell><code>INV-1042</code></stisla::table.cell>
            <stisla::table.cell><stisla::badge :soft="true" tone="info" icon="send">Sent</stisla::badge></stisla::table.cell>
        </stisla::table.row>
    </stisla::table.body>
</stisla::table>
```

---

## With user avatars

Stack an avatar and text in a flex cell to pair an avatar with name and subtitle line.

```blade
<stisla::table :responsive="true" align="middle">
    <stisla::table.head :alt="true">
        <stisla::table.row>
            <stisla::table.cell as="th" scope="col">Member</stisla::table.cell>
            <stisla::table.cell as="th" scope="col">Role</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.head>
    <stisla::table.body>
        <stisla::table.row>
            <stisla::table.cell>
                <div class="flex flex-wrap items-center gap-2">
                    <img src="https://i.pravatar.cc/64?img=12" alt="" width="32" height="32" class="rounded-full" />
                    <div><div>Maya Singh</div><div class="text-muted-foreground text-xs">maya@acme.co</div></div>
                </div>
            </stisla::table.cell>
            <stisla::table.cell>Admin</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.body>
</stisla::table>
```

---

## Row actions

Trailing buttons go in the last cell with `:alignEnd="true"`.

```blade
<stisla::table :hover="true" align="middle">
    <stisla::table.head :alt="true">
        <stisla::table.row>
            <stisla::table.cell as="th" scope="col">API key</stisla::table.cell>
            <stisla::table.cell as="th" scope="col" :alignEnd="true">Actions</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.head>
    <stisla::table.body>
        <stisla::table.row>
            <stisla::table.cell><code>sk_live_•••••8a1c</code></stisla::table.cell>
            <stisla::table.cell :alignEnd="true">
                <div class="flex flex-wrap items-center justify-end gap-1">
                    <stisla::button mode="ghost" tone="neutral" size="sm" icon="copy" :icon-only="true" aria-label="Copy" />
                </div>
            </stisla::table.cell>
        </stisla::table.row>
    </stisla::table.body>
</stisla::table>
```

---

## Selectable rows

Put a checkbox in the first column and set `:active="true"` on selected rows.

```blade
<stisla::table :hover="true" align="middle">
    <stisla::table.head :alt="true">
        <stisla::table.row>
            <stisla::table.cell as="th" scope="col" class="w-4"><input class="checkbox" type="checkbox" aria-label="Select all" /></stisla::table.cell>
            <stisla::table.cell as="th" scope="col">Email</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.head>
    <stisla::table.body>
        <stisla::table.row :active="true">
            <stisla::table.cell><input class="checkbox" type="checkbox" aria-label="Select mateo@acme.co" checked /></stisla::table.cell>
            <stisla::table.cell>mateo@acme.co</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.body>
</stisla::table>
```

---

## Inside a card

Drop the table straight into a `<stisla::card>` and it sits flush.

```blade
<stisla::card class="w-full">
    <stisla::card.header :alt="true">
        Deployments
        <stisla::button tone="primary" size="sm" class="ms-auto">Deploy</stisla::button>
    </stisla::card.header>
    <stisla::table :responsive="true" :hover="true" align="middle">
        <stisla::table.head>
            <stisla::table.row>
                <stisla::table.cell as="th" scope="col">Service</stisla::table.cell>
                <stisla::table.cell as="th" scope="col">Status</stisla::table.cell>
            </stisla::table.row>
        </stisla::table.head>
        <stisla::table.body>
            <stisla::table.row>
                <stisla::table.cell>api</stisla::table.cell>
                <stisla::table.cell><stisla::badge :soft="true" tone="success" icon="circle-check">Healthy</stisla::badge></stisla::table.cell>
            </stisla::table.row>
        </stisla::table.body>
    </stisla::table>
</stisla::card>
```

---

## Grid, inside a card

A `:grid="true"` table inside a card drops its outer perimeter.

```blade
<stisla::card class="w-full">
    <stisla::table :grid="true">
        <stisla::table.head>
            <stisla::table.row>
                <stisla::table.cell as="th" scope="col">Region</stisla::table.cell>
                <stisla::table.cell as="th" scope="col">Orders</stisla::table.cell>
            </stisla::table.row>
        </stisla::table.head>
        <stisla::table.body>
            <stisla::table.row>
                <stisla::table.cell>North</stisla::table.cell>
                <stisla::table.cell>1,284</stisla::table.cell>
            </stisla::table.row>
        </stisla::table.body>
    </stisla::table>
</stisla::card>
```

---

## Full dashboard table

Composes header alt, avatars, badges, and trailing actions inside a card.

```blade
<stisla::card class="w-full">
    <stisla::card.header :alt="true">
        Team members
        <stisla::badge :soft="true" class="ms-2">5 of 15 seats</stisla::badge>
        <stisla::button tone="primary" size="sm" icon="user-plus" class="ms-auto">Invite</stisla::button>
    </stisla::card.header>
    <stisla::table :responsive="true" :hover="true" align="middle">
        <stisla::table.head>
            <stisla::table.row>
                <stisla::table.cell as="th" scope="col">Member</stisla::table.cell>
                <stisla::table.cell as="th" scope="col">Status</stisla::table.cell>
            </stisla::table.row>
        </stisla::table.head>
        <stisla::table.body>
            <stisla::table.row>
                <stisla::table.cell>Alex Park</stisla::table.cell>
                <stisla::table.cell><stisla::badge :soft="true" tone="success">Active</stisla::badge></stisla::table.cell>
            </stisla::table.row>
        </stisla::table.body>
    </stisla::table>
</stisla::card>
```

---

## Responsive

Wrap table in `:responsive="true"` or `responsive="md"` for breakpoint horizontal scrolling.

```blade
<stisla::table :responsive="true">
    <stisla::table.head :alt="true">
        <stisla::table.row>
            <stisla::table.cell as="th" scope="col">Customer</stisla::table.cell>
            <stisla::table.cell as="th" scope="col">Status</stisla::table.cell>
        </stisla::table.row>
    </stisla::table.head>
    <stisla::table.body>
        <stisla::table.row>
            <stisla::table.cell>Acme Corp</stisla::table.cell>
            <stisla::table.cell><stisla::badge :soft="true" tone="success">Active</stisla::badge></stisla::table.cell>
        </stisla::table.row>
    </stisla::table.body>
</stisla::table>
```

---

## Customization

These variables retune `.table`. Override on the table, a parent scope, or `:root`.

```blade
<stisla::table :vars="['cell-padding-block' => '1rem', 'border-color' => 'var(--color-primary-subtle)']">
    ...
</stisla::table>
```

### Geometry

| Variable | Use |
| :--- | :--- |
| `--table-cell-padding-block` | Vertical cell padding |
| `--table-cell-padding-inline` | Horizontal cell padding |
| `--table-cell-padding-sm` | Cell padding under `.table--sm` |
| `--table-edge-padding` | First/last column inset |
| `--table-group-divider-width` | Rule above `.table__body--divider` |

### Head and surface

| Variable | Use |
| :--- | :--- |
| `--table-head-font-size` / `-font-weight` / `-color` | Header label size / weight / color |
| `--table-head-bg-alt` | Fill applied by `.table__head--alt` |
| `--table-color` | Body text color |
| `--table-bg` | Cell background (rest layer) |
| `--table-border-color` | Row and cell border color |

### Row states

| Variable | Use |
| :--- | :--- |
| `--table-striped-bg` / `-color` | Odd-row / even-column tint + text |
| `--table-bg-hover` / `-color-hover` | Row hover fill / text under `.table--hover` |
| `--table-bg-active` / `-color-active` | Selected-row fill / text for `data-state="active"` |

---

## Props Reference

### `<stisla::table>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `striped` | `bool\|string` | `false` | Baris belang (`true` atau `'cols'`) |
| `hover` | `bool` | `false` | Sorot hover baris (`.table--hover`) |
| `grid` | `bool` | `false` | Border di setiap sisi sel (`.table--grid`) |
| `seamless` | `bool` | `false` | Tanpa border baris & sel (`.table--seamless`) |
| `size` | `string` | `null` | Ukuran rapat (`'sm'`) |
| `align` | `string` | `null` | Rata vertikal sel (`'middle'`) |
| `responsive` | `bool\|string` | `false` | Pembungkus responsif (`true` atau breakpoint e.g. `'md'`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--table-*`) |

### `<stisla::table.head>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `alt` | `bool` | `false` | Mengaktifkan latar permukaan alt (`.table__head--alt`) |

### `<stisla::table.body>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `divider` | `bool` | `false` | Garis pembagi tebal di atas body (`.table__body--divider`) |

### `<stisla::table.row>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `tone` | `string` | `null` | Varian intent baris (`'primary'`, `'success'`, `'danger'`, `'warning'`, `'info'`, `'neutral'`) |
| `active` | `bool` | `false` | Baris terpilih / aktif (`data-state="active"`) |

### `<stisla::table.cell>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'td'` | Tag elemen sel (`'td'`, `'th'`) |
| `alignEnd` | `bool` | `false` | Rata kanan isi sel (`.text-end`) |
| `scope` | `string` | `null` | Atribut scope ARIA (`'col'`, `'row'`) |

### `<stisla::table.sort>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `state` | `string` | `null` | Arah urutan (`'asc'`, `'desc'`) |
| `type` | `string` | `'button'` | Atribut type pada button |
