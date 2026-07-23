# Navbar

A top bar of brand, navigation, and trailing actions that folds on small screens.

## Basic

The `.navbar` lays out a `.navbar__brand`, a`.navbar__menu` wrapping the `.navbar__nav` link list, and any trailing extras in a flex row. The nav sits on the leading edge and the extras (here an action button) trail. Mark the current page with `data-state="active"` on its`.navbar__button`, and fade an unreachable one with `aria-disabled`. This bar carries `.navbar--expand`, which keeps it horizontal at every width.

```
<nav class="navbar navbar--block navbar--expand" aria-label="Main">
  <a class="navbar__brand" href="#">Stisla</a>
  <div class="navbar__menu">
    <ul class="navbar__nav">
      <li><a class="navbar__button" href="#" data-state="active">Dashboard</a></li>
      <li><a class="navbar__button" href="#">Reports</a></li>
      <li><a class="navbar__button" href="#">Settings</a></li>
      <li><a class="navbar__button" aria-disabled="true">Admin</a></li>
    </ul>
    <button class="button button--primary button--sm">New report</button>
  </div>
</nav>
```

## Responsive fold

A plain `.navbar` folds into a column behind the `.navbar__toggle`hamburger below the `lg` breakpoint (64rem), and rides as a horizontal row above it. Put `data-stisla-navbar` on the root and `data-stisla-navbar-toggle`on the hamburger, and the `@stisla/vanilla` layer animates the fold. The demo frame is narrower than `lg`, so the bar is folded — click the hamburger to toggle the menu.

```
<nav class="navbar navbar--block" data-stisla-navbar aria-label="Main">
  <a class="navbar__brand" href="#">Stisla</a>
  <button class="navbar__toggle" data-stisla-navbar-toggle aria-label="Toggle menu" aria-expanded="false"><i data-lucide="menu"></i></button>
  <div class="navbar__menu" data-state="closed">
    <ul class="navbar__nav">
      <li><a class="navbar__button" href="#" data-state="active">Dashboard</a></li>
      <li><a class="navbar__button" href="#">Reports</a></li>
      <li><a class="navbar__button" href="#">Settings</a></li>
    </ul>
    <button class="button button--primary button--sm">New report</button>
  </div>
</nav>
```

Move the fold point with the `.navbar--expand-*` modifiers, named after the width at which the bar expands to a row (like a `md:` utility): `--expand-sm`,`--expand-md`, `--expand-lg`, or `--expand-xl`. Plain`.navbar` matches `--expand-lg`; `.navbar--expand` never folds.

## Customization

These variables retune the navbar. Override on the root or any wrapper.

| Variable                                                   | Use                                                                   |
| ---------------------------------------------------------- | --------------------------------------------------------------------- |
| `--navbar-gap`                                             | Gap between brand, menu, and extras                                   |
| `--navbar-padding-block` / `-padding-inline`               | Bar interior padding (inline zeroes out when wrapping a `.container`) |
| `--navbar-bg` / `-color`                                   | Bar background and text                                               |
| `--navbar-button-height`                                   | Brand, toggle, and button chip height                                 |
| `--navbar-button-padding-block` / `-button-padding-inline` | Button chip padding                                                   |
| `--navbar-button-radius`                                   | Button and toggle corner radius                                       |
| `--navbar-button-gap`                                      | Gap between nav links                                                 |
| `--navbar-button-color`                                    | Resting link text                                                     |
| `--navbar-button-bg-hover` / `-button-color-hover`         | Hover / focus paint (accent)                                          |
| `--navbar-button-bg-active` / `-button-color-active`       | Current-page paint (highlight)                                        |
| `--navbar-brand-padding-inline`                            | Brand inline inset (set 0 for a flush brand)                          |
| `--navbar-toggle-size`                                     | Hamburger button size                                                 |
| `--navbar-transition-duration`                             | Hover and active timing; near-zeroed under reduced-motion             |
