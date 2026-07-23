# Introduction

A quick read of what Stisla is and how you use it.

## What Stisla is

Stisla is a component library built on constraint. One set of design tokens defines its color, spacing, radius, and type, and every component draws from that set.

On top of that shared set, each component exposes its own knobs: the variables behind a button’s color and size, a card’s padding, an input’s radius. Each defaults to a global token, so a component you leave alone already fits the page around it, and setting one changes just that component.

Stisla is also framework-agnostic. The first implementation ships as vanilla CSS with a small JavaScript runtime for the interactive components, with React and Vue to follow. Each is built from the same constraint, so a button is the same button wherever you use it.

If you want the exact token names, the anatomy of each component, and the states they answer to, the [Specification](https://stisla.dev/docs/specification) page has the full surface.

## What Stisla isn’t

It isn’t a utility-only library. Stisla ships real components with BEM classes like `.button`,`.button--primary`, `.card`, and`.card__header`, so when you read the HTML you see what the page does. Utilities are still there for the one-offs, since Stisla runs on Tailwind underneath, but the parts you repeat are already assembled into components.

It isn’t a wrapper around Bootstrap. Stisla v2 was Bootstrap 4. The current release dropped Bootstrap and rebuilt every component from scratch.

And it doesn’t come in different flavors or prebuilt themes. There’s one Stisla. Density, radius, and brand are knobs you turn on top of it.

## Customizing it

Most customization is a single variable override, with no build step. Pick a primary color, set a radius, adjust spacing, or drop a brand-tinted preset on a wrapper class. The browser resolves the rest with `color-mix(in oklch, …)`, so hover, active, and focus all follow from the one value you set. [Theming](https://stisla.dev/docs/theming) walks through the override model with worked examples.

If you’re wondering how Stisla relates to Bootstrap and Tailwind, the [Why Stisla](https://stisla.dev/docs/why-stisla) page explains why we left Bootstrap and how Stisla builds on Tailwind to add the layer it leaves out.

## Status

Stisla 3 is stable. The token surface, BEM class names, component APIs, and vanilla JS behavior are settled and will only change if a bug forces it. The React implementation and the full docs site are the remaining work.

v2, the Bootstrap 4 release, is not getting migrated and lives on the [v2 branch on GitHub](https://github.com/stisla/stisla/tree/v2). The two versions are different enough that there’s no automatic migration path.
