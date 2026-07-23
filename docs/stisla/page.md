# Page

A layout primitive that owns the vertical rhythm inside the main column.

## Basic

The `.page` flow is a flex column whose gap spaces a`.page__header` and a series of `.page__section`siblings, so children carry no outer margin (the reboot already zeroes headings and paragraphs). The header pairs a`.page__headline` (title + description) with a trailing`.page__action`; sections repeat the shape at a tighter scale. Title and section-title carry opinionated cadences so you drop the recurring heading utility. A header with a title, a muted description, and an action, followed by a section with its own header.

```
<div class="page w-full">
  <header class="page__header">
    <div class="page__headline">
      <h1 class="page__title">Reports</h1>
      <p class="page__description">Everything your team shipped this week.</p>
    </div>
    <div class="page__action">
      <button class="button button--neutral button--outline">Export</button>
      <button class="button button--primary">New report</button>
    </div>
  </header>
  <section class="page__section">
    <div class="page__section-header">
      <h2 class="page__section-title">Overview</h2>
      <div class="page__action">
        <button class="button button--neutral button--ghost button--sm">Filter</button>
      </div>
    </div>
    <div class="card"><div class="card__body">Section content sits here.</div></div>
  </section>
  <section class="page__section">
    <div class="page__section-header">
      <h2 class="page__section-title">Activity</h2>
      <p class="page__section-description">Recent changes across your reports.</p>
    </div>
    <div class="card"><div class="card__body">Another block of content.</div></div>
  </section>
</div>
```

## The page wrapper

Drop a `.page` inside the main column.`.page__header` carries the title and primary actions and sits above `.page__body`, the flow that holds the sections. The header's bottom margin supplies the rhythm between them.

```
<div class="page w-full">
  <header class="page__header">
    <div class="page__headline">
      <h1 class="page__title">Orders</h1>
      <p class="page__description">42 orders this month.</p>
    </div>
    <div class="page__action">
      <button type="button" class="button button--outline button--neutral"><i data-lucide="download"></i>Export</button>
      <button type="button" class="button button--primary"><i data-lucide="plus"></i>New order</button>
    </div>
  </header>
  <div class="page__body">
    <section class="page__section">
      <div class="card">
        <div class="card__header card__header--alt">
          <span>Recent</span>
          <a href="#" class="link ml-auto">View all</a>
        </div>
        <div class="table-responsive">
          <table class="table table--hover table--align-middle mb-0">
            <thead>
              <tr>
                <th scope="col">Order</th>
                <th scope="col">Customer</th>
                <th scope="col">Date</th>
                <th scope="col" class="text-right">Total</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"><code>#10428</code></th>
                <td>Acme Corp</td>
                <td>Jun 18</td>
                <td class="text-right">$1,490.00</td>
                <td><span class="badge badge--soft badge--success"><i data-lucide="check"></i> Paid</span></td>
              </tr>
              <tr>
                <th scope="row"><code>#10427</code></th>
                <td>Riverway Ltd</td>
                <td>Jun 17</td>
                <td class="text-right">$580.00</td>
                <td><span class="badge badge--soft badge--info"><i data-lucide="truck"></i> Shipped</span></td>
              </tr>
              <tr>
                <th scope="row"><code>#10426</code></th>
                <td>Northwind</td>
                <td>Jun 17</td>
                <td class="text-right">$8,200.00</td>
                <td><span class="badge badge--soft badge--warning"><i data-lucide="clock"></i> Pending</span></td>
              </tr>
              <tr>
                <th scope="row"><code>#10425</code></th>
                <td>Globex</td>
                <td>Jun 16</td>
                <td class="text-right">$240.00</td>
                <td><span class="badge badge--soft badge--danger"><i data-lucide="alert-triangle"></i> Refunded</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
</div>
```

## Page header

`.page__header` is a flex row with a`.page__headline` group on the leading edge and a`.page__action` slot on the trailing edge. The heading group stacks a `.page__title` with an optional`.page__description`; the action slot takes any button row.

```
<div class="page w-full">
  <header class="page__header">
    <div class="page__headline">
      <h1 class="page__title">Customers</h1>
      <p class="page__description">All accounts in this workspace.</p>
    </div>
    <div class="page__action">
      <button type="button" class="button button--outline button--neutral"><i data-lucide="download"></i>Export</button>
      <button type="button" class="button button--primary"><i data-lucide="plus"></i>Add customer</button>
    </div>
  </header>
</div>
```

### Without actions

Drop the action slot. The title block sits alone.

```
<div class="page w-full">
  <header class="page__header">
    <div class="page__headline">
      <h1 class="page__title">Settings</h1>
      <p class="page__description">Manage your account, billing, and integrations.</p>
    </div>
  </header>
</div>
```

## Sections

`.page__section` is a flex-column for each block inside the page. The `.page` parent supplies the gap between sections; each section supplies its own inner gap via`--page-section-inner-gap`. Pair`.page__section-title` with`.page__section-description` for muted helper copy beneath it, the section-scale counterpart to `.page__description`.

```
<div class="page w-full">
  <section class="page__section">
    <h2 class="page__section-title">Overview</h2>
    <p class="page__section-description">Headline stats and the period selector live here.</p>
  </section>
  <section class="page__section">
    <h2 class="page__section-title">Recent activity</h2>
    <p class="page__section-description">A timeline of the last events on this account.</p>
  </section>
  <section class="page__section">
    <h2 class="page__section-title">Quick actions</h2>
    <p class="page__section-description">Shortcuts to the most-used flows.</p>
  </section>
</div>
```

### With section header + actions

For sections that need their own action row, wrap the title in`.page__section-header` and reuse`.page__action` as the slot. Same flex recipe at a tighter scale.

```
<div class="page w-full">
  <section class="page__section">
    <header class="page__section-header">
      <h2 class="page__section-title">Active customers</h2>
      <div class="page__action">
        <button type="button" class="button button--outline button--neutral button--sm">Filter</button>
        <button type="button" class="button button--primary button--sm">Invite</button>
      </div>
    </header>
    <p class="text-muted-foreground">1,284 accounts.</p>
  </section>
</div>
```

## Content width

`.page` is unopinionated about width. Wrap it (or set its own width on a parent) to clamp the content column.

- Full width (`.container-fluid` or no container) for dashboards, tables, anything dense.
- Breakpoint-clamped (`.container`) for marketing pages, or anything that should match the standard column widths.
- Custom max-width (40 to 60rem) for settings forms, articles, anything text-heavy where long lines hurt readability.

Container

```
<!-- Full width -->
<main>
  <div class="page container-fluid">...</div>
</main>

<!-- Breakpoint-clamped -->
<main>
  <div class="page container">...</div>
</main>

<!-- Custom narrow column for reading -->
<main>
  <div class="page mx-auto max-w-3xl">...</div>
</main>
```

### Nesting a container

Putting `.container` on the `.page` element itself, as above, keeps the sections as direct children, so the row gap still spaces them. When the container has to be a separate wrapper, it becomes the only child of `.page` and the sections inside it fall outside the gap. Move the flow into`.page__body`. It owns the same section rhythm, so a container can sit between the frame and the content without flattening the spacing.

Nesting Container

```
<div class="page w-full">
  <div class="container">
    <div class="page__body">
      <header class="page__header">...</header>
      <section class="page__section">...</section>
      <section class="page__section">...</section>
    </div>
  </div>
</div>
```

`.page__body` reads the same`--page-section-gap` as `.page`, so a gap override set on the page still reaches the nested sections. Reach for it only when a container nests inside the page; the plain`.page` already flows its own direct children.

## Putting it together

Page header, sections, and a section with its own header, all inside one `.page` that supplies the rhythm.

```
<div class="page w-full">
  <header class="page__header">
    <div class="page__headline">
      <h1 class="page__title">Customers</h1>
      <p class="page__description">All accounts in this workspace.</p>
    </div>
    <div class="page__action">
      <button type="button" class="button button--outline button--neutral"><i data-lucide="download"></i>Export</button>
      <button type="button" class="button button--primary"><i data-lucide="plus"></i>Add customer</button>
    </div>
  </header>
  <section class="page__section">
    <header class="page__section-header">
      <h2 class="page__section-title">Active</h2>
      <div class="page__action">
        <button type="button" class="button button--outline button--neutral button--sm">Filter</button>
      </div>
    </header>
    <p class="text-muted-foreground">1,284 customers.</p>
  </section>
  <section class="page__section">
    <h2 class="page__section-title">Inactive</h2>
    <p class="text-muted-foreground">312 customers.</p>
  </section>
</div>
```

## Customization

These variables retune the flow and the heading cadences. Override on the root or any wrapper.

| Variable                                                             | Use                                                                |
| -------------------------------------------------------------------- | ------------------------------------------------------------------ |
| `--page-section-gap`                                                 | Gap between the header and each section (cascades to`.page__body`) |
| `--page-header-gap`                                                  | Gap between the headline and the actions                           |
| `--page-heading-gap`                                                 | Gap between a title and its description                            |
| `--page-action-gap`                                                  | Gap between action buttons                                         |
| `--page-section-inner-gap`                                           | Gap between a section header and its content                       |
| `--page-section-header-gap`                                          | Gap inside a section header                                        |
| `--page-title-font-size` /`-title-font-weight`                       | Page title type                                                    |
| `--page-description-font-size` /`-description-color`                 | Page description type                                              |
| `--page-section-title-font-size` /`-section-title-font-weight`       | Section title type                                                 |
| `--page-section-description-font-size` /`-section-description-color` | Section description type                                           |
