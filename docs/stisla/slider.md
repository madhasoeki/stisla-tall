# Slider

A filled-track input for picking a value from a continuous span.

## Basic

A slider is real DOM — `.slider__track` wraps `.slider__range`, plus a`.slider__thumb` and a hidden `.slider__input` for form participation. Compose the four parts under `.slider` and tag the root with`data-stisla-slider`, and the behavior layer owns pointer, keyboard, and ARIA, writing `--slider-fraction` on the host as the value moves. The filled portion paints in primary; the thumb sits as a narrow vertical pill at the value's position.

Brightness

```
<div class="field max-w-xl">
  <label for="basicSlider" class="field__label">Brightness</label>
  <div class="slider" id="basicSlider" data-stisla-slider data-value="40" data-value-text="{value}%">
    <div class="slider__track"><div class="slider__range"></div></div>
    <div class="slider__thumb"></div>
    <input type="hidden" class="slider__input" name="brightness">
  </div>
</div>
```

## Keyboard

The slider mirrors a native `<input type="range">`. Focus the thumb with `Tab`, then step the value with the keys below.

- `ArrowLeft` / `ArrowDown`: step down by `data-step` (default 1)
- `ArrowRight` / `ArrowUp`: step up
- `Shift` \+ arrow: jump by ten steps
- `PageDown` / `PageUp`: also jump by ten steps
- `Home` / `End`: jump to `data-min` / `data-max`

## Announced value

On each change a screen reader re-reads the raw number. Add`data-value-text` to have it announce a value with context instead. The`{value}`, `{min}`, and `{max}` placeholders fill in on every step, so `data-value-text="{value}%"` reads "56%" and`data-value-text="{value} of {max}"` reads "56 of 100". The Brightness slider above uses the percent form.

## Value display

Listen for `stisla:slider:input` to read the current value as the user drags or steps. The event's `detail.value` already reflects step snapping and bounds.

Opacity30

```
<div class="field max-w-xl">
  <div class="flex flex-wrap justify-between items-baseline">
    <label for="outputSlider" class="field__label">Opacity</label>
    <output for="outputSlider" class="text-muted-foreground">30</output>
  </div>
  <div class="slider" id="outputSlider" data-stisla-slider data-value="30">
    <div class="slider__track"><div class="slider__range"></div></div>
    <div class="slider__thumb"></div>
    <input type="hidden" class="slider__input" name="opacity">
  </div>
</div>
<script>
  (function () {
    var el = document.getElementById('outputSlider');
    var out = el.parentElement.querySelector('output');
    el.addEventListener('stisla:slider:input', function (e) { out.value = e.detail.value; });
  })();
</script>
```

## Min and max

Set `data-min` and `data-max` on the host to bound the slider. Defaults to `0` through `100`.

Year

```
<div class="field max-w-xl">
  <label for="minMaxSlider" class="field__label">Year</label>
  <div class="slider" id="minMaxSlider" data-stisla-slider data-min="2000" data-max="2030" data-value="2026">
    <div class="slider__track"><div class="slider__range"></div></div>
    <div class="slider__thumb"></div>
    <input type="hidden" class="slider__input" name="year">
  </div>
</div>
```

## Steps

Add `data-step` to snap the thumb to fixed increments. Arrow keys step by this amount; `Shift` \+ arrow and the Page keys jump by ten steps at a time.

Rating

```
<div class="field max-w-xl">
  <label for="stepSlider" class="field__label">Rating</label>
  <div class="slider" id="stepSlider" data-stisla-slider data-min="0" data-max="5" data-step="0.5" data-value="3">
    <div class="slider__track"><div class="slider__range"></div></div>
    <div class="slider__thumb"></div>
    <input type="hidden" class="slider__input" name="rating">
  </div>
</div>
```

## Sizes

Three sizes match the `.input` family: `.slider--sm`, default, and`.slider--lg`. The thumb is shorter than the track so it reads as a vertical pill, and every dimension rides the spacing scale.

Small

Default

Large

```
<div class="field">
  <label for="smSlider" class="field__label">Small</label>
  <div class="slider slider--sm" id="smSlider" data-stisla-slider data-value="40">
    <div class="slider__track"><div class="slider__range"></div></div>
    <div class="slider__thumb"></div>
  </div>
</div>
<div class="field">
  <label for="defaultSlider" class="field__label">Default</label>
  <div class="slider" id="defaultSlider" data-stisla-slider data-value="60">
    <div class="slider__track"><div class="slider__range"></div></div>
    <div class="slider__thumb"></div>
  </div>
</div>
<div class="field">
  <label for="lgSlider" class="field__label">Large</label>
  <div class="slider slider--lg" id="lgSlider" data-stisla-slider data-value="80">
    <div class="slider__track"><div class="slider__range"></div></div>
    <div class="slider__thumb"></div>
  </div>
</div>
```

## Disabled

Add `data-disabled="true"` on the host to dim the track and thumb and block pointer and keyboard interaction.

Playback speed

```
<div class="field max-w-xl">
  <label for="disabledSlider" class="field__label">Playback speed</label>
  <div class="slider" id="disabledSlider" data-stisla-slider data-value="40" data-disabled="true">
    <div class="slider__track"><div class="slider__range"></div></div>
    <div class="slider__thumb"></div>
    <input type="hidden" class="slider__input" name="speed" disabled>
  </div>
</div>
```

## Invalid

Set `aria-invalid="true"` on the host from your form library. A danger border paints around the track and the focus halo on the thumb flips to danger.

Threshold

```
<div class="field max-w-xl">
  <label for="srvSlider" class="field__label">Threshold</label>
  <div class="slider" id="srvSlider" data-stisla-slider data-value="60" aria-invalid="true">
    <div class="slider__track"><div class="slider__range"></div></div>
    <div class="slider__thumb"></div>
    <input type="hidden" class="slider__input" name="threshold">
  </div>
</div>
```

## Events

Two events fire on the host. Both carry the current value in `detail.value`, already snapped to `data-step` and clamped to the min/max bounds.

`stisla:slider:input` fires on every value change during a drag or key step. Use it for live previews like color or brightness, or to mirror the value into an`<output>`.

`stisla:slider:change` fires on commit (pointerup at the end of a drag, or after each key step). It mirrors the native `change` event on`<input type="range">`. Use it for save or submit triggers.

## Customization

These variables retune `.slider` without touching component CSS. Override on the element, a parent scope, or `:root`.

| Variable                | Use                                                                                                                                         |
| ----------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `--slider-height`       | Track and shell height (matches `.input`)                                                                                                   |
| `--slider-thumb-width`  | Thumb width (narrow vertical pill)                                                                                                          |
| `--slider-thumb-height` | Thumb height (centered inside the track)                                                                                                    |
| `--slider-thumb-gap`    | Padding around the thumb; sets the gap to the unfilled track and the inset from the slider's edges so the thumb never kisses the pill curve |
| `--slider-radius`       | Track and thumb corner radius; pilled by default, override to flatten                                                                       |
| `--slider-track-bg`     | Unfilled segment                                                                                                                            |
| `--slider-fill`         | Filled segment                                                                                                                              |
| `--slider-thumb-bg`     | Thumb fill                                                                                                                                  |
| `--slider-thumb-shadow` | Thumb edge definition                                                                                                                       |
| `--slider-ring`         | Focus halo color                                                                                                                            |

The track and thumb opt out of the global radius by default; the pill shape carries meaning, so it stays fixed. Set `--slider-radius` at the scope you want softened.
