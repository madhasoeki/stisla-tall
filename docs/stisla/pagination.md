# Pagination

A row of page chips for moving through a long list or paginated view.

## Basic

Wrap a list of `.pagination__button` in`.pagination`. Mark the current page with`data-state="active"` and `aria-current="page"`: it paints the highlight, while hover paints the lighter accent.

```
<nav aria-label="Page navigation">
  <ul class="pagination">
    <li><a class="pagination__button" href="#">Previous</a></li>
    <li><a class="pagination__button" href="#">1</a></li>
    <li><a class="pagination__button" href="#" data-state="active" aria-current="page">2</a></li>
    <li><a class="pagination__button" href="#">3</a></li>
    <li><a class="pagination__button" href="#">Next</a></li>
  </ul>
</nav>
```

## With icons

Drop an `<svg>` or `<i>` inside the chip. Icons sit at `1em` so they scale with the chip's font size and stay on the label baseline.

```
<nav aria-label="Page navigation">
  <ul class="pagination">
    <li><a class="pagination__button" href="#" aria-label="Previous"><i data-lucide="chevron-left"></i><span>Previous</span></a></li>
    <li><a class="pagination__button" href="#">1</a></li>
    <li><a class="pagination__button" href="#" data-state="active" aria-current="page">2</a></li>
    <li><a class="pagination__button" href="#">3</a></li>
    <li><a class="pagination__button" href="#" aria-label="Next"><span>Next</span><i data-lucide="chevron-right"></i></a></li>
  </ul>
</nav>
```

## Disabled and ellipsis

Set `aria-disabled="true"` on a chip (or a bare`<span>`) to gray it out and drop pointer events — use it on the edge chip at the start/end of the range. Drop`.pagination__ellipsis` in as a truncation marker between page ranges; it takes the same footprint with no hover or focus.

```
<nav aria-label="Page navigation">
  <ul class="pagination">
    <li><span class="pagination__button" aria-label="Previous" aria-disabled="true"><i data-lucide="chevron-left"></i><span>Previous</span></span></li>
    <li><a class="pagination__button" href="#" data-state="active" aria-current="page">1</a></li>
    <li><a class="pagination__button" href="#">2</a></li>
    <li><a class="pagination__button" href="#">3</a></li>
    <li><a class="pagination__button" href="#">4</a></li>
    <li><span class="pagination__ellipsis" aria-hidden="true">…</span></li>
    <li><a class="pagination__button" href="#">12</a></li>
    <li><a class="pagination__button" href="#" aria-label="Next"><span>Next</span><i data-lucide="chevron-right"></i></a></li>
  </ul>
</nav>
```

## Sizes

Add `.pagination--sm` or `.pagination--lg` for compact or large chips. Heights match the button scale.

- [Previous](https://stisla.dev/docs/vanilla/pagination#)
- [1](https://stisla.dev/docs/vanilla/pagination#)
- [2](https://stisla.dev/docs/vanilla/pagination#)
- [3](https://stisla.dev/docs/vanilla/pagination#)
- [Next](https://stisla.dev/docs/vanilla/pagination#)

- [Previous](https://stisla.dev/docs/vanilla/pagination#)
- [1](https://stisla.dev/docs/vanilla/pagination#)
- [2](https://stisla.dev/docs/vanilla/pagination#)
- [3](https://stisla.dev/docs/vanilla/pagination#)
- [Next](https://stisla.dev/docs/vanilla/pagination#)

- [Previous](https://stisla.dev/docs/vanilla/pagination#)
- [1](https://stisla.dev/docs/vanilla/pagination#)
- [2](https://stisla.dev/docs/vanilla/pagination#)
- [3](https://stisla.dev/docs/vanilla/pagination#)
- [Next](https://stisla.dev/docs/vanilla/pagination#)

```
<div class="flex flex-col gap-4 w-full items-center">
  <ul class="pagination pagination--sm">
    <li><a class="pagination__button" href="#">Previous</a></li>
    <li><a class="pagination__button" href="#">1</a></li>
    <li><a class="pagination__button" href="#" data-state="active" aria-current="page">2</a></li>
    <li><a class="pagination__button" href="#">3</a></li>
    <li><a class="pagination__button" href="#">Next</a></li>
  </ul>
  <ul class="pagination">
    <li><a class="pagination__button" href="#">Previous</a></li>
    <li><a class="pagination__button" href="#">1</a></li>
    <li><a class="pagination__button" href="#" data-state="active" aria-current="page">2</a></li>
    <li><a class="pagination__button" href="#">3</a></li>
    <li><a class="pagination__button" href="#">Next</a></li>
  </ul>
  <ul class="pagination pagination--lg">
    <li><a class="pagination__button" href="#">Previous</a></li>
    <li><a class="pagination__button" href="#">1</a></li>
    <li><a class="pagination__button" href="#" data-state="active" aria-current="page">2</a></li>
    <li><a class="pagination__button" href="#">3</a></li>
    <li><a class="pagination__button" href="#">Next</a></li>
  </ul>
</div>
```

## Alignment

Add `.pagination--center` or `.pagination--end`to flip the row's `justify-content`. Default is start.

- [Previous](https://stisla.dev/docs/vanilla/pagination#)
- [1](https://stisla.dev/docs/vanilla/pagination#)
- [2](https://stisla.dev/docs/vanilla/pagination#)
- [3](https://stisla.dev/docs/vanilla/pagination#)
- [Next](https://stisla.dev/docs/vanilla/pagination#)

- [Previous](https://stisla.dev/docs/vanilla/pagination#)
- [1](https://stisla.dev/docs/vanilla/pagination#)
- [2](https://stisla.dev/docs/vanilla/pagination#)
- [3](https://stisla.dev/docs/vanilla/pagination#)
- [Next](https://stisla.dev/docs/vanilla/pagination#)

```
<div class="flex flex-col gap-4 w-full">
  <ul class="pagination pagination--center">
    <li><a class="pagination__button" href="#">Previous</a></li>
    <li><a class="pagination__button" href="#">1</a></li>
    <li><a class="pagination__button" href="#" data-state="active" aria-current="page">2</a></li>
    <li><a class="pagination__button" href="#">3</a></li>
    <li><a class="pagination__button" href="#">Next</a></li>
  </ul>
  <ul class="pagination pagination--end">
    <li><a class="pagination__button" href="#">Previous</a></li>
    <li><a class="pagination__button" href="#">1</a></li>
    <li><a class="pagination__button" href="#" data-state="active" aria-current="page">2</a></li>
    <li><a class="pagination__button" href="#">3</a></li>
    <li><a class="pagination__button" href="#">Next</a></li>
  </ul>
</div>
```

## Customization

These variables retune `.pagination`. Override on the element, a parent scope, or `:root`.

| Variable                                         | Use                                                                           |
| ------------------------------------------------ | ----------------------------------------------------------------------------- |
| `--pagination-gap`                               | Space between chips                                                           |
| `--pagination-font-size`                         | Chip text size; size modifiers reassign this                                  |
| `--pagination-button-height`                     | Chip height and min-width (square single glyph); size modifiers reassign this |
| `--pagination-button-padding-inline`             | Horizontal padding on multi-char chips                                        |
| `--pagination-button-padding-block`              | Vertical padding; defaults to `0` since the chip height owns the rhythm       |
| `--pagination-button-radius`                     | Chip corner radius                                                            |
| `--pagination-button-bg` / `-color`              | Rest fill / text                                                              |
| `--pagination-button-bg-hover` /`-color-hover`   | Hover fill / text (accent tier)                                               |
| `--pagination-button-bg-active` /`-color-active` | Current-page fill / text (highlight tier)                                     |
| `--pagination-button-color-disabled`             | Disabled and ellipsis text color                                              |
