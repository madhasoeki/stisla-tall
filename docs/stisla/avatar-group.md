# Avatar group

A row of overlapping avatars that reads as a single cluster.

## Basic

For the single portrait, sizes, and indicator, see Avatar. `.avatar-group` is purely visual stacking, and lets every member keep its own paint. Wrap two or more`.avatar` children in `.avatar-group`. Members overlap via a negative inline margin, and the group turns the per-avatar ring on so adjacent shapes read as separate objects.

![](https://i.pravatar.cc/96?img=1)A![](https://i.pravatar.cc/96?img=2)B![](https://i.pravatar.cc/96?img=3)C+2

```
<div class="avatar-group">
  <span class="avatar avatar--circle" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=1" alt=""><span class="avatar__fallback">A</span></span>
  <span class="avatar avatar--circle" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=2" alt=""><span class="avatar__fallback">B</span></span>
  <span class="avatar avatar--circle" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=3" alt=""><span class="avatar__fallback">C</span></span>
  <span class="avatar avatar--circle avatar-group__more">+2</span>
</div>
```

## Composition with avatar modifiers

The group is shape- and size-agnostic. Mix in any `.avatar` modifier (`--sm`, `--lg`, `--circle`) and the stack composes flat.

![](https://i.pravatar.cc/96?img=11)A![](https://i.pravatar.cc/96?img=12)B![](https://i.pravatar.cc/96?img=13)C+8

![](https://i.pravatar.cc/96?img=21)A![](https://i.pravatar.cc/96?img=22)B![](https://i.pravatar.cc/96?img=23)C![](https://i.pravatar.cc/96?img=24)D

```
<div class="avatar-group">
  <span class="avatar avatar--sm" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=11" alt=""><span class="avatar__fallback">A</span></span>
  <span class="avatar avatar--sm" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=12" alt=""><span class="avatar__fallback">B</span></span>
  <span class="avatar avatar--sm" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=13" alt=""><span class="avatar__fallback">C</span></span>
  <span class="avatar avatar--sm avatar-group__more">+8</span>
</div>
<div class="avatar-group">
  <span class="avatar avatar--lg avatar--circle" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=21" alt=""><span class="avatar__fallback">A</span></span>
  <span class="avatar avatar--lg avatar--circle" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=22" alt=""><span class="avatar__fallback">B</span></span>
  <span class="avatar avatar--lg avatar--circle" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=23" alt=""><span class="avatar__fallback">C</span></span>
  <span class="avatar avatar--lg avatar--circle" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=24" alt=""><span class="avatar__fallback">D</span></span>
</div>
```

## Overflow tail

Add `.avatar-group__more` as the final child to summarize the rest. It's a regular`.avatar`, so size and shape modifiers compose; the modifier just retints the paint to read as "more."

![](https://i.pravatar.cc/96?img=31)A![](https://i.pravatar.cc/96?img=32)B+12

```
<div class="avatar-group">
  <span class="avatar avatar--circle" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=31" alt=""><span class="avatar__fallback">A</span></span>
  <span class="avatar avatar--circle" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=32" alt=""><span class="avatar__fallback">B</span></span>
  <span class="avatar avatar--circle avatar-group__more">+12</span>
</div>
```

Retint the tail to a brand color by overriding `--avatar-bg` /`--avatar-color` on the element. Same vars the base `.avatar` reads.

![](https://i.pravatar.cc/96?img=41)A![](https://i.pravatar.cc/96?img=42)B+9

```
<div class="avatar-group">
  <span class="avatar avatar--circle" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=41" alt=""><span class="avatar__fallback">A</span></span>
  <span class="avatar avatar--circle" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=42" alt=""><span class="avatar__fallback">B</span></span>
  <span class="avatar avatar--circle avatar-group__more" style="--avatar-bg: var(--color-primary); --avatar-color: var(--color-primary-foreground);">+9</span>
</div>
```

## Overlap density

Tighten or loosen the stack by overriding `--avatar-group-overlap` on the group — the negative inline margin per neighbor. Set it to zero for a non-overlapping strip with the ring still applied, or to half the avatar size for a tight stack.

![](https://i.pravatar.cc/96?img=51)A![](https://i.pravatar.cc/96?img=52)B![](https://i.pravatar.cc/96?img=53)C![](https://i.pravatar.cc/96?img=54)D

![](https://i.pravatar.cc/96?img=61)A![](https://i.pravatar.cc/96?img=62)B![](https://i.pravatar.cc/96?img=63)C![](https://i.pravatar.cc/96?img=64)D

```
<div class="avatar-group" style="--avatar-group-overlap: 1.25rem;">
  <span class="avatar avatar--circle" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=51" alt=""><span class="avatar__fallback">A</span></span>
  <span class="avatar avatar--circle" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=52" alt=""><span class="avatar__fallback">B</span></span>
  <span class="avatar avatar--circle" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=53" alt=""><span class="avatar__fallback">C</span></span>
  <span class="avatar avatar--circle" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=54" alt=""><span class="avatar__fallback">D</span></span>
</div>
<div class="avatar-group" style="--avatar-group-overlap: 0.25rem;">
  <span class="avatar avatar--circle" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=61" alt=""><span class="avatar__fallback">A</span></span>
  <span class="avatar avatar--circle" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=62" alt=""><span class="avatar__fallback">B</span></span>
  <span class="avatar avatar--circle" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=63" alt=""><span class="avatar__fallback">C</span></span>
  <span class="avatar avatar--circle" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=64" alt=""><span class="avatar__fallback">D</span></span>
</div>
```

## On a tinted surface

The per-member ring tracks the page background by default. On a tinted surface, publish a matching `--avatar-group-ring-color` on the group so the ring blends with the host instead of punching through it.

![](https://i.pravatar.cc/96?img=14)A![](https://i.pravatar.cc/96?img=25)B![](https://i.pravatar.cc/96?img=36)C+4

```
<div class="card p-5" style="--card-bg: var(--color-surface-3);">
  <div class="avatar-group" style="--avatar-group-ring-color: var(--color-surface-3);">
    <span class="avatar avatar--circle" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=14" alt=""><span class="avatar__fallback">A</span></span>
    <span class="avatar avatar--circle" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=25" alt=""><span class="avatar__fallback">B</span></span>
    <span class="avatar avatar--circle" data-status="loaded"><img class="avatar__image" src="https://i.pravatar.cc/96?img=36" alt=""><span class="avatar__fallback">C</span></span>
    <span class="avatar avatar--circle avatar-group__more" style="--avatar-bg: var(--color-surface); --avatar-color: var(--color-muted-foreground);">+4</span>
  </div>
</div>
```

## Customization

Three variables retune `.avatar-group`. Per-member paint comes from the avatar's own variables (see Avatar).

| Variable                    | Use                                                                                                    |
| --------------------------- | ------------------------------------------------------------------------------------------------------ |
| `--avatar-group-overlap`    | Negative inline margin per member; rides the spacing scale so the overlap retunes with the avatar size |
| `--avatar-group-ring-width` | Outline width published into each member's `--avatar-ring-width`                                       |
| `--avatar-group-ring-color` | Outline color published into each member's `--avatar-ring-color`                                       |
