# Illustration

Soft volumetric spot art shaded from a single accent hue.

## Intents

An `.illustration` is an inline SVG whose gradient stops, backing disc, and long shadow all derive from one accent via`color-mix`, so recolouring never touches the markup: set`--illus-accent` (and `--illus-badge` for the corner pip) and the whole piece follows. An ancestor or inline accent overrides everything. The art below is one demonstrative piece — the full metaphor set and gallery are a separate effort. The default is a neutral gray. `.illustration--primary`,`--success`, `--danger`, and`--warning` reshade the whole piece from the matching token.

```
<div class="flex flex-wrap items-end gap-5">
  <div class="w-28">
<svg class="illustration " viewBox="0 0 200 200" role="img" aria-label="Spot illustration">
  <defs>
    <linearGradient id="illo-default" x1="0.15" y1="0.1" x2="0.85" y2="0.95">
      <stop class="il-g0" offset="0"></stop>
      <stop class="il-g1" offset="0.4"></stop>
      <stop class="il-g2" offset="0.78"></stop>
      <stop class="il-g3" offset="1"></stop>
    </linearGradient>
  </defs>
  <circle class="il-disc-o" cx="100" cy="100" r="86"></circle>
  <circle class="il-disc-i" cx="100" cy="100" r="66"></circle>
  <rect class="il-obj" x="58" y="56" width="84" height="84" rx="19" fill="url(#illo-default)"></rect>
  <circle class="il-badge" cx="150" cy="52" r="15" fill="var(--_b)"></circle>
</svg></div>
  <div class="w-28">
<svg class="illustration illustration--primary" viewBox="0 0 200 200" role="img" aria-label="Spot illustration">
  <defs>
    <linearGradient id="illo-primary" x1="0.15" y1="0.1" x2="0.85" y2="0.95">
      <stop class="il-g0" offset="0"></stop>
      <stop class="il-g1" offset="0.4"></stop>
      <stop class="il-g2" offset="0.78"></stop>
      <stop class="il-g3" offset="1"></stop>
    </linearGradient>
  </defs>
  <circle class="il-disc-o" cx="100" cy="100" r="86"></circle>
  <circle class="il-disc-i" cx="100" cy="100" r="66"></circle>
  <rect class="il-obj" x="58" y="56" width="84" height="84" rx="19" fill="url(#illo-primary)"></rect>
  <circle class="il-badge" cx="150" cy="52" r="15" fill="var(--_b)"></circle>
</svg></div>
  <div class="w-28">
<svg class="illustration illustration--success" viewBox="0 0 200 200" role="img" aria-label="Spot illustration">
  <defs>
    <linearGradient id="illo-success" x1="0.15" y1="0.1" x2="0.85" y2="0.95">
      <stop class="il-g0" offset="0"></stop>
      <stop class="il-g1" offset="0.4"></stop>
      <stop class="il-g2" offset="0.78"></stop>
      <stop class="il-g3" offset="1"></stop>
    </linearGradient>
  </defs>
  <circle class="il-disc-o" cx="100" cy="100" r="86"></circle>
  <circle class="il-disc-i" cx="100" cy="100" r="66"></circle>
  <rect class="il-obj" x="58" y="56" width="84" height="84" rx="19" fill="url(#illo-success)"></rect>
  <circle class="il-badge" cx="150" cy="52" r="15" fill="var(--_b)"></circle>
</svg></div>
  <div class="w-28">
<svg class="illustration illustration--danger" viewBox="0 0 200 200" role="img" aria-label="Spot illustration">
  <defs>
    <linearGradient id="illo-danger" x1="0.15" y1="0.1" x2="0.85" y2="0.95">
      <stop class="il-g0" offset="0"></stop>
      <stop class="il-g1" offset="0.4"></stop>
      <stop class="il-g2" offset="0.78"></stop>
      <stop class="il-g3" offset="1"></stop>
    </linearGradient>
  </defs>
  <circle class="il-disc-o" cx="100" cy="100" r="86"></circle>
  <circle class="il-disc-i" cx="100" cy="100" r="66"></circle>
  <rect class="il-obj" x="58" y="56" width="84" height="84" rx="19" fill="url(#illo-danger)"></rect>
  <circle class="il-badge" cx="150" cy="52" r="15" fill="var(--_b)"></circle>
</svg></div>
  <div class="w-28">
<svg class="illustration illustration--warning" viewBox="0 0 200 200" role="img" aria-label="Spot illustration">
  <defs>
    <linearGradient id="illo-warning" x1="0.15" y1="0.1" x2="0.85" y2="0.95">
      <stop class="il-g0" offset="0"></stop>
      <stop class="il-g1" offset="0.4"></stop>
      <stop class="il-g2" offset="0.78"></stop>
      <stop class="il-g3" offset="1"></stop>
    </linearGradient>
  </defs>
  <circle class="il-disc-o" cx="100" cy="100" r="86"></circle>
  <circle class="il-disc-i" cx="100" cy="100" r="66"></circle>
  <rect class="il-obj" x="58" y="56" width="84" height="84" rx="19" fill="url(#illo-warning)"></rect>
  <circle class="il-badge" cx="150" cy="52" r="15" fill="var(--_b)"></circle>
</svg></div>
</div>
```

## Custom accent

Set `--illus-accent` on the SVG or any ancestor for an arbitrary hue, and `--illus-badge` to give the corner pip its own colour.

```
<div class="flex flex-wrap items-end gap-5">
  <div class="w-28" style="--illus-accent: var(--color-info)">
<svg class="illustration " viewBox="0 0 200 200" role="img" aria-label="Spot illustration">
  <defs>
    <linearGradient id="illo-info" x1="0.15" y1="0.1" x2="0.85" y2="0.95">
      <stop class="il-g0" offset="0"></stop>
      <stop class="il-g1" offset="0.4"></stop>
      <stop class="il-g2" offset="0.78"></stop>
      <stop class="il-g3" offset="1"></stop>
    </linearGradient>
  </defs>
  <circle class="il-disc-o" cx="100" cy="100" r="86"></circle>
  <circle class="il-disc-i" cx="100" cy="100" r="66"></circle>
  <rect class="il-obj" x="58" y="56" width="84" height="84" rx="19" fill="url(#illo-info)"></rect>
  <circle class="il-badge" cx="150" cy="52" r="15" fill="var(--_b)"></circle>
</svg></div>
  <div class="w-28" style="--illus-accent: var(--color-primary); --illus-badge: var(--color-success)">
<svg class="illustration " viewBox="0 0 200 200" role="img" aria-label="Spot illustration">
  <defs>
    <linearGradient id="illo-mix" x1="0.15" y1="0.1" x2="0.85" y2="0.95">
      <stop class="il-g0" offset="0"></stop>
      <stop class="il-g1" offset="0.4"></stop>
      <stop class="il-g2" offset="0.78"></stop>
      <stop class="il-g3" offset="1"></stop>
    </linearGradient>
  </defs>
  <circle class="il-disc-o" cx="100" cy="100" r="86"></circle>
  <circle class="il-disc-i" cx="100" cy="100" r="66"></circle>
  <rect class="il-obj" x="58" y="56" width="84" height="84" rx="19" fill="url(#illo-mix)"></rect>
  <circle class="il-badge" cx="150" cy="52" r="15" fill="var(--_b)"></circle>
</svg></div>
</div>
```

## Animated

Add `.illustration--animated` for a gentle float on the object and a pop on the badge. It is suppressed under reduced motion.

```
<div class="w-32">
<svg class="illustration illustration--animated illustration--primary" viewBox="0 0 200 200" role="img" aria-label="Spot illustration">
  <defs>
    <linearGradient id="illo-animate" x1="0.15" y1="0.1" x2="0.85" y2="0.95">
      <stop class="il-g0" offset="0"></stop>
      <stop class="il-g1" offset="0.4"></stop>
      <stop class="il-g2" offset="0.78"></stop>
      <stop class="il-g3" offset="1"></stop>
    </linearGradient>
  </defs>
  <circle class="il-disc-o" cx="100" cy="100" r="86"></circle>
  <circle class="il-disc-i" cx="100" cy="100" r="66"></circle>
  <rect class="il-obj" x="58" y="56" width="84" height="84" rx="19" fill="url(#illo-animate)"></rect>
  <circle class="il-badge" cx="150" cy="52" r="15" fill="var(--_b)"></circle>
</svg></div>
```

## In an empty state

Drop an illustration into an `.empty-state__media` slot; the slot sheds its circle so the art isn't double-framed and caps the width.

### Nothing here yet

Create your first project to get started.

New project

```
<div class="empty-state">
  <span class="empty-state__media">
<svg class="illustration illustration--primary size-20" viewBox="0 0 200 200" role="img" aria-label="Spot illustration">
  <defs>
    <linearGradient id="illo-empty" x1="0.15" y1="0.1" x2="0.85" y2="0.95">
      <stop class="il-g0" offset="0"></stop>
      <stop class="il-g1" offset="0.4"></stop>
      <stop class="il-g2" offset="0.78"></stop>
      <stop class="il-g3" offset="1"></stop>
    </linearGradient>
  </defs>
  <circle class="il-disc-o" cx="100" cy="100" r="86"></circle>
  <circle class="il-disc-i" cx="100" cy="100" r="66"></circle>
  <rect class="il-obj" x="58" y="56" width="84" height="84" rx="19" fill="url(#illo-empty)"></rect>
  <circle class="il-badge" cx="150" cy="52" r="15" fill="var(--_b)"></circle>
</svg></span>
  <h3 class="empty-state__title">Nothing here yet</h3>
  <p class="empty-state__text">Create your first project to get started.</p>
  <div class="empty-state__action">
    <button class="button button--primary">New project</button>
  </div>
</div>
```

## Customization

These variables retune the art. Set them on the SVG or any ancestor.

| Variable         | Use                                                                        |
| ---------------- | -------------------------------------------------------------------------- |
| `--illus-accent` | The single hue the whole piece shades from (the intent modifiers set this) |
| `--illus-badge`  | Corner pip colour (follows the accent by default)                          |

The SVG markup carries the paint hooks: `.il-g0`–`.il-g3` (gradient stops), `.il-disc-o` /`.il-disc-i` (backing disc), `.il-obj` (the shadowed object), and `.il-badge` (the pip).
