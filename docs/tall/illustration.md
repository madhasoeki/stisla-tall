# Illustration

Soft volumetric spot art shaded from a single accent hue.

## Basic Usage

The `<stisla::illustration>` component renders responsive, dynamically theme-able SVGs inline.

### METAPHOR PRESETS

To use one of the 20 metaphorical preset illustrations provided by Stisla, pass the `name` prop:

```blade
<stisla::illustration name="chat" />
<stisla::illustration name="folder" />
<stisla::illustration name="secure" />
```

### CUSTOM/GENERIC INLINE SVGS (SLOTTED)

To use custom or generic SVGs, omit the `name` prop and pass the SVG inside the default slot:

```blade
<stisla::illustration>
    <svg class="illustration" viewBox="0 0 200 200" role="img" aria-label="Spot illustration">
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
        <circle class="il-badge" cx="150" cy="52" r="15"></circle>
    </svg>
</stisla::illustration>
```

## Features & Variations

### INTENTS

Recolor the entire illustration dynamically by passing any of the preset Stisla intents as CSS classes (e.g. `illustration--primary`, `illustration--success`, `illustration--danger`, `illustration--warning`):

```blade
<stisla::illustration name="chat" class="illustration--success" />
```

### ANIMATED

Add floating animation to the object and scaling animations to the badge pip by enabling the `animated` prop:

```blade
<stisla::illustration name="chat" :animated="true" class="illustration--primary" />
```

## Props & Slots Reference

### Props

| Prop       | Type      | Default | Description |
| :--------- | :-------- | :------ | :---------- |
| `name`     | `string`  | `null`  | The name of the preset SVG file in `components/stisla/illustration/svg/` |
| `accent`   | `string`  | `null`  | Sets custom `--illus-accent` (takes precedence over theme intents) |
| `badge`    | `string`  | `null`  | Sets custom `--illus-badge` for the status pip |
| `animated` | `boolean` | `false` | Enables floating animation |
| `vars`     | `array`   | `[]`    | Array of custom CSS variables to pass to the component |

### Slots

| Slot      | Description |
| :-------- | :---------- |
| `default` | Used when rendering custom/generic SVGs without the `name` prop |

## Customization

You can dynamically customize the accent color and badge pip color via the props `:accent` and `:badge`, or by overriding the CSS variables directly:

```blade
<stisla::illustration name="folder" accent="oklch(0.62 0.20 295)" badge="var(--color-success)" />
```
