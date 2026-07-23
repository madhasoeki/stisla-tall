# Button group

A row of action buttons that share chrome so they read as a single control.

## Basic

For press toggles and segmented controls, see Toggle and Toggle group.`.button-group` is purely visual grouping for action buttons, with no state hooks and no JS. Wrap two or more `.button`s in `.button-group` with`role="group"` and an `aria-label`. Outer corners round, inner corners square, adjacent borders dedupe into a single seam.

LeftMiddleRight

```
<div class="button-group" role="group" aria-label="Basic example">
  <button type="button" class="button button--primary">Left</button>
  <button type="button" class="button button--primary">Middle</button>
  <button type="button" class="button button--primary">Right</button>
</div>
```

## Outline

Outline members work the same way, with adjacent borders deduping at the seam.

LeftMiddleRight

```
<div class="button-group" role="group" aria-label="Outline example">
  <button type="button" class="button button--outline button--neutral">Left</button>
  <button type="button" class="button button--outline button--neutral">Middle</button>
  <button type="button" class="button button--outline button--neutral">Right</button>
</div>
```

## Mixed

A loud action paired with a quiet alternative, locked together as one chip.

PublishSave draft

```
<div class="button-group" role="group" aria-label="Mixed example">
  <button type="button" class="button button--primary">Publish</button>
  <button type="button" class="button button--outline button--neutral">Save draft</button>
</div>
```

## Sizes

Add `.button-group--sm` or `.button-group--lg` on the wrapper. The modifier retunes the child `--button-*` vars so every member scales together.

LeftMiddleRight

LeftMiddleRight

LeftMiddleRight

```
<div class="flex flex-col gap-2 items-start">
  <div class="button-group button-group--sm" role="group" aria-label="Small">
    <button type="button" class="button button--outline button--neutral">Left</button>
    <button type="button" class="button button--outline button--neutral">Middle</button>
    <button type="button" class="button button--outline button--neutral">Right</button>
  </div>
  <div class="button-group" role="group" aria-label="Default">
    <button type="button" class="button button--outline button--neutral">Left</button>
    <button type="button" class="button button--outline button--neutral">Middle</button>
    <button type="button" class="button button--outline button--neutral">Right</button>
  </div>
  <div class="button-group button-group--lg" role="group" aria-label="Large">
    <button type="button" class="button button--outline button--neutral">Left</button>
    <button type="button" class="button button--outline button--neutral">Middle</button>
    <button type="button" class="button button--outline button--neutral">Right</button>
  </div>
</div>
```

## With icons

Icons compose the same as in standalone buttons. `.button--icon-only` gives a square slot.

```
<div class="button-group" role="group" aria-label="Format">
  <button type="button" class="button button--outline button--neutral button--icon-only" aria-label="Cut"><i data-lucide="scissors"></i></button>
  <button type="button" class="button button--outline button--neutral button--icon-only" aria-label="Copy"><i data-lucide="copy"></i></button>
  <button type="button" class="button button--outline button--neutral button--icon-only" aria-label="Paste"><i data-lucide="clipboard"></i></button>
</div>
```

## Split button

Pair a primary action with a caret-only trigger. The trigger reuses`.button--icon-only` with a chevron, so no split-specific class ships. (Menu attach behavior lands with the Menu component.)

Save

```
<div class="button-group" role="group" aria-label="Save">
  <button type="button" class="button button--primary">Save</button>
  <button type="button" class="button button--primary button--icon-only" aria-label="More save options" aria-haspopup="menu" aria-expanded="false"><i data-lucide="chevron-down"></i></button>
</div>
```

## Vertical

Swap `.button-group` for `.button-group--vertical` to stack the members. Outer corners round on the top and bottom instead of left and right.

TopMiddleBottom

```
<div class="button-group--vertical" role="group" aria-label="Vertical example">
  <button type="button" class="button button--primary">Top</button>
  <button type="button" class="button button--primary">Middle</button>
  <button type="button" class="button button--primary">Bottom</button>
</div>
```

## Toolbar

Combine multiple groups under `.button-toolbar`. It carries a default gap between groups so they breathe without inline utility classes.

123

45

```
<div class="button-toolbar" role="toolbar" aria-label="Toolbar with button groups">
  <div class="button-group" role="group" aria-label="First group">
    <button type="button" class="button button--outline button--neutral">1</button>
    <button type="button" class="button button--outline button--neutral">2</button>
    <button type="button" class="button button--outline button--neutral">3</button>
  </div>
  <div class="button-group" role="group" aria-label="Second group">
    <button type="button" class="button button--outline button--neutral">4</button>
    <button type="button" class="button button--outline button--neutral">5</button>
  </div>
</div>
```

## Customization

Two variables retune `.button-group` \+ `.button-toolbar`. Sizes retune the child `--button-*` vars in modifier scope, keeping the group free of per-size vars. To recolor a cluster, set `--button-bg` / `--button-tone` on the members themselves.

| Variable                | Use                                                                                  |
| ----------------------- | ------------------------------------------------------------------------------------ |
| `--button-group-radius` | Outer corner radius; inner corners stay square. The sm and lg variants reassign this |
| `--button-toolbar-gap`  | Space between groups inside a `.button-toolbar`                                      |
