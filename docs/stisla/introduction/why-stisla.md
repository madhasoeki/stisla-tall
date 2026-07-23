# Why Stisla

Tailwind gives you a great scale and an escape hatch. It does not give you constraint or components. Stisla is the layer that adds them, so your team stops drifting.

## The missing layer

Tailwind ships a great scale (spacing, color, type) and a set of utilities to apply it. What it leaves out, on purpose, is constraint and components. There is no built-in way to say “this is the button, these are its three sizes, this is how it themes.” Every team rebuilds that layer, and every team rebuilds it a little differently. That difference is where a design system drifts.

Stisla is that layer, and it has two parts. **Tokens as a single source of truth.** Change one token and every component that reads it follows. **Components with knobs.** The decision is already made, so you turn a knob instead of reassembling a chain of utilities each time.

This is true with or without a build step. The no-build vanilla implementation and the framework implementations are the same components over the same tokens. The constraint does not depend on which one you reach for.

## What constraint looks like

A button needs three sizes, ten colors, and several states (hover, active, focus, disabled, loading). That is well over a hundred visual combinations. Without a single source of truth, each combination gets re-decided somewhere, and the copies fall out of sync. With one, a single variable drives every state.

button.css

```
.button {
  --button-bg: var(--button-tone);
  background: var(--button-bg);
}
.button:hover  { --button-bg: color-mix(in oklch, var(--button-tone) 88%, black); }
.button:active { --button-bg: color-mix(in oklch, var(--button-tone) 78%, black); }
```

Drop a custom color in at the call site and every state recomputes against it. No palette config to edit, no regenerated class ramp, no rebuild. The whole state machinery follows from one variable.

```
<button class="button" style="--button-tone: oklch(0.6 0.2 30)">
  Custom brand
</button>
```

That is the payoff of constraint. The decision lives in one place, so you cannot end up with a hover that disagrees with its own base color.

You might ask why this needs a knob when a utility could set the same background. The difference is what happens after. A utility paints one property and leaves the rest to you, so matching a button’s states means writing each shade by hand:

```
<button class="bg-sky-600 hover:bg-sky-700 active:bg-sky-800">
  Save
</button>
```

Those are three separate literals with nothing holding them together. Change the base and the hover and active keep their old values until you remember to repick them. The knob version above starts from one value and derives the rest, so its states cannot drift away from it.

A knob is also a boundary. A component exposes only the knobs it was built to take, so tuning moves it within the range it was meant to have. You can retint a button or round its corners and it stays a button. Utilities have no such edge, so nothing stops you reaching past what the component offers, until it is a button in name only:

```
<!-- within the knobs: still a button -->
<button class="button" style="--button-tone: oklch(0.6 0.2 30)">Save</button>

<!-- past the knobs: a button in name only -->
<button class="button grid grid-cols-[auto_1fr] rounded-none p-6 text-left">Save</button>
```

When you find yourself reaching that far, the missing knob is the signal. The change is really a new modifier or a new component, so give it a name and define it once, the way the rest of Stisla is built:

button.css

```
@layer components {
  .button--block { display: flex; width: 100%; }
}
```

## We use Tailwind

Stisla is built on Tailwind. Tailwind v4 is the scale engine underneath it: spacing, type, color, and the build that tree-shakes what you do not use. We adopt its `@theme` for tokens and its `@layer` system for everything on top. We keep the parts that make Tailwind good, the pre-picked defaults under short names and the escape hatch for one-offs, and we add the layer it leaves to you.

Tailwind has two layers, `@layer components` and`@layer utilities`, and most projects use only the second. The official guidance is to extract a component class when you see repetition, but the extracting is left to you. Stisla commits to the component layer so your team does not have to assemble it by hand on every screen.

### No build step

The vanilla implementation ships precompiled CSS. A Stisla component displays with no Tailwind present, which is what lets it work in plain HTML, Rails templates, Django pages, and Laravel views. Tokens are plain custom properties on the root. Override one in the browser and every component repaints, with no recompile. This is also why styles live in CSS files rather than inside JavaScript: the design needs to render where there is no JavaScript at all.

### With a framework

React and Vue consumers already run Tailwind, so their build JITs the utilities they actually use. Our components sit in`@layer components` and any utilities you add for overrides sit in `@layer utilities`, which comes later in the cascade. Utilities win by layer precedence, so there is nothing to merge.

## Where this comes from

Stisla started on Bootstrap. When the rewrite began, the plan was to move to the next Bootstrap, so we ported the components onto it to see how it would feel.

The thing we kept running into was the variable and color system. Bootstrap spans two worlds at once. Some values live in Sass and are resolved at build time, others live in custom properties and are resolved at runtime in the browser. Following one color from its Sass source all the way to the variable a component actually reads is more involved than it looks. It is a capable system, and honestly a bit more machinery than we wanted to carry.

By the time the components were finished, customization still was not where we wanted it. Because the two systems stayed mixed, a change in one place did not always reach the other, so theming never came down to turning a single knob. The token surface is different too. Bootstrap offers a large, layered set of variables, where Stisla exposes far fewer, a small set you can hold in your head and override at runtime.

None of this is a knock on Bootstrap. It is a complete design system, and that is the point of it. If you want a finished product with sensible defaults and less customization to manage, Bootstrap is a great choice. Stisla starts somewhere else. We treat the system as a starting point you reshape. Bootstrap and Stisla just want different things, so we built our own foundation.

## Common questions

**Are you violating Tailwind’s atomic principle by using BEM classes?** No. That framing is wrong and defensive. Tailwind ships`@layer components` and `@apply` for exactly this, and its own guidance is to extract a component class when you see repetition. Tailwind has two layers, components and utilities, and most people use only one. We use both: constrained components for the repeated stuff, atomic utilities for the one-offs. We are committing to a layer Tailwind leaves optional, exactly as it is meant to be used.

**How do I customize a component?** Tune the knobs first, with the `tune` prop, or by overriding the component’s `--*` variables in CSS. Need more control? Override with utilities, covered just below.

**Will utilities override the component?** Yes. Utilities sit in a later cascade layer than components.`@layer utilities` comes after`@layer components`, so they win deterministically, by layer precedence, regardless of source order.

```
@layer components { .button { border-radius: var(--button-radius); } }
@layer utilities  { .rounded-none { border-radius: 0; } }

/* <button class="button rounded-none"> wins, no !important, nothing to merge */
```

**Isn’t assembling utilities the recommended Tailwind approach?** For one-offs, yes, and you still can. Utilities are the escape hatch. But assembling raw utilities for reused UI means every instance re-decides spacing and color, and your team drifts. Our components are the pre-assembled, constrained version. Reach for utilities when composing or overriding. Reach for a component when you want the decision already made.

**How do I build a new custom component?** Start by assembling Tailwind utilities. When it repeats, abstract it into its own component file so you can reuse it. Then add knobs, the`--*` variables plus `tune`, if you want stronger constraint. This is exactly how Stisla’s own components are built.

**Isn’t the bundle bigger than a utilities-only approach?** Yes, the CSS file is larger. But the weight does not disappear, it just moves. Utilities push the same visual rules into the markup instead of the stylesheet, so the total page weight stays about the same. The question is not how to remove the weight, it is where to put it, and we put it in the CSS file. A static stylesheet is sent once and cached for a long time (fingerprinted filenames make that safe), while bytes inside the markup are re-sent on every page request, since HTML is cached less aggressively than assets. Keeping the rules in the stylesheet also keeps styling out of the render function, where utilities tend to mix it back in with behavior. For the server-rendered case Stisla targets, the cached file wins across navigations.

**Why packages, not shadcn-style copy-paste?** shadcn’s pitch is “own the code.” Ours is “don’t think about the code.” A versioned design system that spans React, Vue, and vanilla cannot have every consumer fork and freeze it, because copy-paste can never receive an update. You will mostly write `<Button size tune className />`, not edit our source. Compiled CSS-in-CSS plus JS is not a daily-editable file. Updates arrive through a dependency bump, the same way every other library you depend on works.

## What this means

Stisla is a design specification. The vanilla implementation is what exists today. The next one is React on top of a headless behavior primitive library, with Vue and Svelte on the roadmap. Every implementation follows the same contract over the same tokens.

See the [Specification](https://stisla.dev/docs/specification) for the cross-implementation contract. See [Theming](https://stisla.dev/docs/theming) for the override model and the worked examples.
