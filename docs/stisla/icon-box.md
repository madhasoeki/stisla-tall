# Icon box

A square, tinted container for a single icon.

## Basic

A bare `.icon-box` renders a muted neutral tile. Use for non-semantic icons in a list or row.

```
<span class="icon-box"><i data-lucide="zap"></i></span>
```

## Intent variants

Add an intent modifier like `.icon-box--primary` for a tinted tile in the matching color. The background sits at a 15% tint, the icon holds the solid intent color.

```
<span class="icon-box icon-box--primary"><i data-lucide="zap"></i></span>
<span class="icon-box icon-box--success"><i data-lucide="check"></i></span>
<span class="icon-box icon-box--warning"><i data-lucide="clock"></i></span>
<span class="icon-box icon-box--danger"><i data-lucide="triangle-alert"></i></span>
<span class="icon-box icon-box--info"><i data-lucide="info"></i></span>
```

## Shape

The box is a rounded square by default. Add`.icon-box--circle` for a circle.

```
<span class="icon-box icon-box--primary"><i data-lucide="bell"></i></span>
<span class="icon-box icon-box--primary icon-box--circle"><i data-lucide="bell"></i></span>
```

## Sizes

Three sizes. Add `.icon-box--sm` or `.icon-box--lg`.

```
<span class="icon-box icon-box--primary icon-box--sm"><i data-lucide="zap"></i></span>
<span class="icon-box icon-box--primary"><i data-lucide="zap"></i></span>
<span class="icon-box icon-box--primary icon-box--lg"><i data-lucide="zap"></i></span>
```

## Custom color

For one-off colors outside the shipped intents, set `--icon-box-tone` inline. The bg and icon color both derive from it.

```
<span class="icon-box" style="--icon-box-tone: oklch(0.62 0.20 295);"><i data-lucide="sparkles"></i></span>
<span class="icon-box" style="--icon-box-tone: oklch(0.62 0.21 0);"><i data-lucide="heart"></i></span>
<span class="icon-box" style="--icon-box-tone: oklch(0.65 0.13 175);"><i data-lucide="leaf"></i></span>
```

## Customization

These variables retune `.icon-box` without touching component CSS. Override on the element, a parent scope, or `:root`.

| Variable                   | Use                                                                                           |
| -------------------------- | --------------------------------------------------------------------------------------------- |
| `--icon-box-size`          | Outer square dimension; size modifiers reassign this                                          |
| `--icon-box-icon-size`     | Inner icon size                                                                               |
| `--icon-box-radius`        | Corner radius; `.icon-box--circle` overrides it to a full circle                              |
| `--icon-box-tone`          | Color the bg tint derives from; intents reassign this                                         |
| `--icon-box-tone-emphasis` | Icon glyph color on the tint; intents set it from `--color-<intent>-emphasis` for AA contrast |
| `--icon-box-bg`            | Background tint                                                                               |
| `--icon-box-color`         | Icon color (direct override; wins over the tone-derived default)                              |
