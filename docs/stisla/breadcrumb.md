# Breadcrumb

A trail of links showing where the user is inside the page hierarchy.

## Basic

Wrap an ordered list in a `<nav>`. Mark the current page with`aria-current="page"` — it takes the full body color while the trail stays muted.

```
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb__item"><a href="#">Home</a></li>
    <li class="breadcrumb__item" aria-current="page">Library</li>
  </ol>
</nav>
```

## Multiple levels

Any number of crumbs work; the default chevron sits between each item.

```
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb__item"><a href="#">Home</a></li>
    <li class="breadcrumb__item"><a href="#">Library</a></li>
    <li class="breadcrumb__item" aria-current="page">Data</li>
  </ol>
</nav>
```

## With icon

Drop an `<svg>` or `<i>` inside a crumb. It pins to`--breadcrumb-icon-size` and tracks the crumb's color through hover.

```
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb__item"><a href="#"><i data-lucide="house"></i><span>Home</span></a></li>
    <li class="breadcrumb__item"><a href="#">Library</a></li>
    <li class="breadcrumb__item" aria-current="page">Data</li>
  </ol>
</nav>
```

## String divider

Override `--breadcrumb-divider` on the wrapper to swap the chevron for any string. Any `content` value works (string, `url()`, counter).

```
<nav style="--breadcrumb-divider: '/';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb__item"><a href="#">Home</a></li>
    <li class="breadcrumb__item"><a href="#">Library</a></li>
    <li class="breadcrumb__item" aria-current="page">Data</li>
  </ol>
</nav>
```

## Embedded SVG divider

Use a URL-encoded SVG to drop in any glyph. Bake the stroke or fill tone in hex. Browsers parse data-URL SVGs in their own context, so `currentColor` and CSS vars inside the SVG don't track the trail color. Pick a tone that reads in both themes, or use a Unicode glyph instead.

```
<nav style="--breadcrumb-divider: url('data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%228%22 height=%228%22%3E%3Cpath d=%22M0 4h8M5 1l3 3-3 3%22 fill=%22none%22 stroke=%22%23999%22 stroke-width=%221%22/%3E%3C/svg%3E');" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb__item"><a href="#">Home</a></li>
    <li class="breadcrumb__item"><a href="#">Library</a></li>
    <li class="breadcrumb__item" aria-current="page">Data</li>
  </ol>
</nav>
```

## Customization

These variables retune `.breadcrumb`. Override on the element, a parent scope, or`:root`. Set `--breadcrumb-bg` \+ padding + radius to wrap the trail in a chip.

| Variable                      | Use                                                           |
| ----------------------------- | ------------------------------------------------------------- |
| `--breadcrumb-padding-block`  | Vertical padding around the trail                             |
| `--breadcrumb-padding-inline` | Horizontal padding around the trail                           |
| `--breadcrumb-gap`            | Space between crumbs and between divider and text             |
| `--breadcrumb-font-size`      | Crumb text size                                               |
| `--breadcrumb-bg`             | Background fill (with padding + radius for a chip wrap)       |
| `--breadcrumb-radius`         | Outer corner radius (opt-in for chip wrap)                    |
| `--breadcrumb-color`          | Trail color (also paints the divider via currentColor)        |
| `--breadcrumb-color-hover`    | Trail link hover color                                        |
| `--breadcrumb-color-active`   | Current page color (`aria-current="page"`)                    |
| `--breadcrumb-divider`        | Glyph between crumbs; override on the wrapper or any ancestor |
| `--breadcrumb-icon-size`      | Leading / trailing icon width and height                      |
