# Installation

Stisla ships as a stylesheet and a small JS runtime. Drop them in from a CDN, or install from a package manager.

## Using CDN

No build step. Drop the two files into a plain HTML page: the stylesheet in the `<head>`, the runtime at the end of the `<body>`. They cover every component.

index.html

```
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stisla starter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@stisla/css@3/dist/stisla.css">
  </head>
  <body>
    <button type="button" class="button button--primary">Hello</button>

    <script src="https://cdn.jsdelivr.net/npm/@stisla/vanilla@3/dist/stisla.js"></script>
  </body>
</html>
```

The runtime is a classic script. It exposes `window.Stisla`and auto-initializes any `data-stisla-*` markup already in the page, so it carries no `type="module"`.

The `@3` tag tracks the latest 3.x release. Pin an exact version instead for fully reproducible builds.

## Using package manager

The same pieces, resolved and bundled by your build tool.

```
npm install @stisla/css @stisla/vanilla
```

Import the stylesheet and the runtime once at your app entry. That covers every component.

main.js

```
import '@stisla/css';
import '@stisla/vanilla';
```

Once the runtime is loaded, the [JavaScript](https://stisla.dev/docs/vanilla/javascript) page covers driving components from markup or from JS.

To ship only the components you use, install`@stisla/style` instead of the precompiled bundle and compile a subset from source. The [Optimization](https://stisla.dev/docs/vanilla/optimization) page walks through it.

## Components that carry a library

Three components pull in a third-party library, which is most of the runtime’s weight. They ship in the bundle like everything else, so nothing extra is needed to use them. If you don’t use them and want their libraries left out, compile a subset from the [style source](https://stisla.dev/docs/vanilla/optimization).

| Component                                                                               | Library           |
| --------------------------------------------------------------------------------------- | ----------------- |
| [Carousel](https://stisla.dev/docs/vanilla/carousel)                                    | Embla             |
| [Combobox](https://stisla.dev/docs/vanilla/combobox)(searchable, multi-select, tagging) | Tom Select        |
| [Scroll area](https://stisla.dev/docs/vanilla/scroll-area)(custom scrollbars)           | OverlayScrollbars |

## Browser support

Safari 16.4 or newer, Chrome 111 or newer, and Firefox 121 or newer. No polyfills. The features Stisla relies on (OKLCH,`color-mix`, `:has()`, `@layer`, container queries, `inert`) are stable across that range. If you need to support older browsers, falling back to an earlier version of the framework won’t help, because the runtime token surface is what makes Stisla what it is.

## What’s next

Learn how [JavaScript](https://stisla.dev/docs/vanilla/javascript) wires up components, pick a [primary color](https://stisla.dev/docs/theming#brand-color), or jump straight into the [component pages](https://stisla.dev/docs/vanilla/button).
