# Optimization

The precompiled bundle ships every component, and for most apps that is the right default. When you need to ship less, there are two ways to get there: purge the classes you never use, or compile a custom build that contains only the components you import.

## Starting point

What you link from `@stisla/css` and `@stisla/vanilla` is precompiled and ready to use. The stylesheet is plain CSS with no build step, and the runtime is already bundled. These are approximate gzipped sizes for the single bundle each ships.

| File                           | Gzip   |
| ------------------------------ | ------ |
| `stisla.css` (every component) | ~27 KB |
| `stisla.js` (every component)  | ~90 KB |

Most of the JS weight comes from three components that carry a third-party library (Carousel uses Embla, Combobox uses Tom Select, Scroll area uses OverlayScrollbars). The CSS is small enough that most apps can take the whole bundle without concern. Both approaches below trade the no-build convenience for a smaller result, so each one adds a build step.

## PurgeCSS

PurgeCSS scans your rendered HTML and templates, then deletes the CSS selectors you never reference. You keep linking the precompiled `stisla.css` and run a purge pass over it as a build step, so the output is the same bundle with the unreached rules stripped out.

Reach for it when you don’t know up front which components you use, which is most teams. It is the cheapest win. A typical app references 30 to 40 percent of the BEM classes Stisla ships, and the rest drops away. Point it at your content and the bundle, and safelist the classes that only appear at runtime.

purge.config.js

```
import { PurgeCSS } from 'purgecss';

const result = await new PurgeCSS().purge({
  content: ['dist/**/*.html', 'src/**/*.{js,ts,jsx,tsx,vue}'],
  css: ['node_modules/@stisla/css/dist/stisla.css'],
  safelist: {
    standard: [/^data-state/, /^data-theme/, /^data-stisla/],
    deep: [/^sidebar__/, /^dialog__/, /^drawer__/, /^menu__/],
    greedy: [/^data-/],
  },
});

await fs.writeFile('dist/stisla.purged.css', result[0].css);
```

The `safelist` is the part that matters. Stisla uses data attributes for runtime state (`data-state="open"`, `data-state="active"`) and BEM children that JavaScript adds to the DOM after load. PurgeCSS only sees what is in your static templates, so those attribute selectors and runtime-added children have to be listed by pattern or they get purged with everything else. Measure before and after, since the win depends on how many components your app actually touches.

## Custom build

Instead of linking the precompiled bundle, you compile your own stylesheet from `@stisla/style` and import only the components you use. Where `@stisla/css` is precompiled, `@stisla/style` ships the **raw** CSS source for every component (Tailwind-dependent, so it has to be compiled) alongside the Tailwind `@theme` foundation. Anything you don’t import never enters the output and never enters your dependency tree, so this is not a purge of dead rules but an absence of them.

This is the only way to ship a subset, since the precompiled bundle is everything. It also lets you bake token values into the cascade at compile time instead of resolving them through `var()` at runtime, which shrinks the token surface for a single locked theme. The cost is that runtime overrides no longer flow through, so a `--color-primary` set on a wrapper stops cascading once the theme is frozen at build time.

Install Tailwind and the style source.

```
npm install -D tailwindcss @tailwindcss/cli
npm install @stisla/style
```

Author one input stylesheet. Pull in Tailwind, then the token theme, then the components you want. List them individually for a subset, or use the `components.css` barrel to pull in every component behind one line.

app.css

```
@import "tailwindcss";
@import "@stisla/style/theme.css";

/* Only the components you use: */
@import "@stisla/style/button.css";
@import "@stisla/style/input.css";
@import "@stisla/style/field.css";
@import "@stisla/style/card.css";

/* ...or every component in one line: */
/* @import "@stisla/style/components.css"; */
```

Compile it with the Tailwind CLI, watching for changes during development.

```
npx @tailwindcss/cli -i app.css -o dist/app.css --watch
```

Link the compiled output the same way you would the bundle.

```
<link rel="stylesheet" href="dist/app.css">
```

Pulling Tailwind in here also brings the utility classes you arrange components with, so this one build covers both the components and the layout surface. The [Utilities](https://stisla.dev/docs/vanilla/utilities) page walks through that setup, and it is the same build path the [Theming](https://stisla.dev/docs/theming#setting-up-overrides) and [Styling](https://stisla.dev/docs/styling) pages refer to. Pair it with PurgeCSS on top if you also want to drop unreached BEM children inside the components you kept.

## Custom build for the runtime

The same idea applies to `@stisla/vanilla`. The default entry registers every component, which is what pulls in the three third-party libraries whether you use them or not. The package also ships each component as a **raw** ESM module, so from the same `@stisla/vanilla` install you can skip the default entry, import only the components you use, register them, and run the scan once. Your bundler compiles and tree-shakes the result.

stisla-runtime.js

```
import { register, init } from '@stisla/vanilla/core/init.js';
import { Dialog } from '@stisla/vanilla/components/dialog.js';
import { Tabs } from '@stisla/vanilla/components/tabs.js';
import { Toast } from '@stisla/vanilla/components/toast.js';

register('dialog', Dialog);
register('tabs', Tabs);
register('toast', Toast);

init(); // walk the DOM and wire up [data-stisla-*] markup
```

Each module name matches the `data-stisla-<name>` attribute it drives. Leaving out the three library-backed components (carousel, combobox, scroll-area) keeps their libraries out of the bundle, which is where most of the runtime weight lives.

## Which one

- **PurgeCSS if you don’t know which components you use.** Most teams don’t. Keep a precompiled bundle and ship what your markup reaches.
- **Custom build if you do, or if the defaults are wrong for you.** It removes component code from the build entirely, and it is the only path that ships a subset or bakes tokens at compile time.

Most apps need at most one. Framework apps (React, Vue) almost always land on a custom build, because they already run a build and import Tailwind once at the root, so the components and the utility surface come from the same step.
