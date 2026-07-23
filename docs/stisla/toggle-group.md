# Toggle group

A pill container hosting a row of toggles pressed inside its padded interior.

## Single-select (segmented)

The container owns the frame; members go ghost-rest so the cluster reads as one segmented control. Click and arrow-key wiring (`data-stisla-toggle-group`) ships with the behavior layer. Use `role="radiogroup"` on the wrapper and `role="radio"` +`aria-checked` on each member; the CSS hook is `data-state="active"` on the current one. The type autodetects from `role="radiogroup"`.

```
<div class="toggle-group" data-stisla-toggle-group role="radiogroup" aria-label="Text alignment">
  <button type="button" class="toggle toggle--icon-only" role="radio" aria-checked="false" aria-label="Align left" data-value="left"><i data-lucide="align-left"></i></button>
  <button type="button" class="toggle toggle--icon-only" role="radio" data-state="active" aria-checked="true" aria-label="Align center" data-value="center"><i data-lucide="align-center"></i></button>
  <button type="button" class="toggle toggle--icon-only" role="radio" aria-checked="false" aria-label="Align right" data-value="right"><i data-lucide="align-right"></i></button>
</div>
```

## Keyboard

Roving tabindex keeps one member in the tab order at a time, so Tab leaves the group naturally. Arrow keys move focus along the group's orientation. In single-select mode focus is selection (WAI-ARIA radio-group); multi-select decouples them.

| Key               | Single-select                                                   | Multi-select                           |
| ----------------- | --------------------------------------------------------------- | -------------------------------------- |
| `→` / `↓`         | Focus next enabled member, auto-select.                         | Focus next enabled member.             |
| `←` / `↑`         | Focus previous enabled member, auto-select.                     | Focus previous enabled member.         |
| `Home`            | Focus first enabled, auto-select.                               | Focus first enabled member.            |
| `End`             | Focus last enabled, auto-select.                                | Focus last enabled member.             |
| `Space` / `Enter` | Select focused (no-op if already selected).                     | Flip `aria-pressed` on focused member. |
| `Tab`             | Leaves the group. Only the tabbable member is in the tab order. |

## Multi-select

Each member is an independent press toggle: `role="group"` on the wrapper,`aria-pressed` on each member. The type autodetects to `multiple` when no radio role is present.

```
<div class="toggle-group" data-stisla-toggle-group role="group" aria-label="Text style">
  <button type="button" class="toggle toggle--icon-only" aria-pressed="true" aria-label="Bold" data-value="bold"><i data-lucide="bold"></i></button>
  <button type="button" class="toggle toggle--icon-only" aria-pressed="false" aria-label="Italic" data-value="italic"><i data-lucide="italic"></i></button>
  <button type="button" class="toggle toggle--icon-only" aria-pressed="true" aria-label="Underline" data-value="underline"><i data-lucide="underline"></i></button>
</div>
```

## Text labels and icon + label

Members can carry text instead of, or alongside, icons. The group's width grows to fit.

DayWeekMonth

List Grid Kanban

```
<div class="toggle-group" data-stisla-toggle-group role="radiogroup" aria-label="Calendar view">
  <button type="button" class="toggle" role="radio" data-state="active" aria-checked="true" data-value="day">Day</button>
  <button type="button" class="toggle" role="radio" aria-checked="false" data-value="week">Week</button>
  <button type="button" class="toggle" role="radio" aria-checked="false" data-value="month">Month</button>
</div>
<div class="toggle-group" data-stisla-toggle-group role="radiogroup" aria-label="View mode">
  <button type="button" class="toggle" role="radio" data-state="active" aria-checked="true" data-value="list"><i data-lucide="list"></i> List</button>
  <button type="button" class="toggle" role="radio" aria-checked="false" data-value="grid"><i data-lucide="layout-grid"></i> Grid</button>
  <button type="button" class="toggle" role="radio" aria-checked="false" data-value="kanban"><i data-lucide="columns-3"></i> Kanban</button>
</div>
```

## Form data (radio set)

For single-select that submits with a form, use native radios: a hidden`.toggle-input` drives each paired `.toggle` label. Fully interactive, no JS.

DayWeekMonth

```
<div class="toggle-group">
  <input type="radio" name="planRange" class="toggle-input" id="tgDay" value="day" checked>
  <label class="toggle" for="tgDay">Day</label>
  <input type="radio" name="planRange" class="toggle-input" id="tgWeek" value="week">
  <label class="toggle" for="tgWeek">Week</label>
  <input type="radio" name="planRange" class="toggle-input" id="tgMonth" value="month">
  <label class="toggle" for="tgMonth">Month</label>
</div>
```

## Form data (checkbox set)

For multi-select form data, use native checkboxes the same way. Multiple labels can be active at once.

```
<div class="toggle-group">
  <input type="checkbox" name="tools" class="toggle-input" id="toolBold" value="bold" checked>
  <label class="toggle toggle--icon-only" for="toolBold" aria-label="Bold"><i data-lucide="bold"></i></label>
  <input type="checkbox" name="tools" class="toggle-input" id="toolItalic" value="italic">
  <label class="toggle toggle--icon-only" for="toolItalic" aria-label="Italic"><i data-lucide="italic"></i></label>
  <input type="checkbox" name="tools" class="toggle-input" id="toolUnderline" value="underline" checked>
  <label class="toggle toggle--icon-only" for="toolUnderline" aria-label="Underline"><i data-lucide="underline"></i></label>
</div>
```

## Vertical

Add `.toggle-group--vertical` to stack members as a menu list (full-width, start-aligned, compact row height).

Inbox Archive Trash

```
<div class="toggle-group toggle-group--vertical max-w-3xs" data-stisla-toggle-group role="radiogroup" aria-label="Mailbox">
  <button type="button" class="toggle" role="radio" data-state="active" aria-checked="true" data-value="inbox"><i data-lucide="inbox"></i> Inbox</button>
  <button type="button" class="toggle" role="radio" aria-checked="false" data-value="archive"><i data-lucide="archive"></i> Archive</button>
  <button type="button" class="toggle" role="radio" aria-checked="false" data-value="trash"><i data-lucide="trash-2"></i> Trash</button>
</div>
```

## Sizes

Add `.toggle-group--sm` or `.toggle-group--lg`; the container and its members scale together.

DayWeekMonth

DayWeekMonth

DayWeekMonth

```
<div class="toggle-group toggle-group--sm" data-stisla-toggle-group role="radiogroup" aria-label="Small">
  <button type="button" class="toggle" role="radio" data-state="active" aria-checked="true">Day</button>
  <button type="button" class="toggle" role="radio" aria-checked="false">Week</button>
  <button type="button" class="toggle" role="radio" aria-checked="false">Month</button>
</div>
<div class="toggle-group" data-stisla-toggle-group role="radiogroup" aria-label="Default">
  <button type="button" class="toggle" role="radio" data-state="active" aria-checked="true">Day</button>
  <button type="button" class="toggle" role="radio" aria-checked="false">Week</button>
  <button type="button" class="toggle" role="radio" aria-checked="false">Month</button>
</div>
<div class="toggle-group toggle-group--lg" data-stisla-toggle-group role="radiogroup" aria-label="Large">
  <button type="button" class="toggle" role="radio" data-state="active" aria-checked="true">Day</button>
  <button type="button" class="toggle" role="radio" aria-checked="false">Week</button>
  <button type="button" class="toggle" role="radio" aria-checked="false">Month</button>
</div>
```

## Events

Two events fire on the group's root.

`stisla:toggle-group:changing` fires before a flip and is cancelable. In single-select mode `detail` carries `value`, `member`,`previousValue`, and `previousMember`. In multi-select mode`detail` carries the proposed `value` array, the `member`being toggled, and `action` (`'pressed'` or `'unpressed'`). Call `preventDefault()` to abort the flip.

`stisla:toggle-group:changed` fires after the flip lands with the same`detail` shape (final values). Not cancelable.

## Customization

These variables retune `.toggle-group`; member chips read the `--toggle-*`variables (see Toggle).

| Variable                                           | Use                                                                   |
| -------------------------------------------------- | --------------------------------------------------------------------- |
| `--toggle-group-height`                            | Outer container height; size modifiers reassign this                  |
| `--toggle-group-radius`                            | Outer corner radius; members derive a concentric inner radius from it |
| `--toggle-group-padding-block` / `-padding-inline` | Interior padding around the members                                   |
| `--toggle-group-gap`                               | Gap between members                                                   |
| `--toggle-group-bg`                                | Container background                                                  |
| `--toggle-group-border-color` / `-border-width`    | Container rim color / thickness                                       |
