# Carousel

A swipeable slideshow with edge controls and indicator dots.

## Basic

The `.carousel` region wraps a`.carousel__viewport` that clips a`.carousel__track` of `.carousel__slide`children, with optional prev/next `.carousel__control`chips, a `.carousel__indicators` row, and per-slide`.carousel__caption` overlays. The slide motion (Embla, which writes a transform on the track) ships with the JS layer. The overlay chrome reads the theme-independent overlay tokens so it stays legible over any imagery in light or dark. This basic example is a 16:9 viewport with controls on the slide edges, a dot row at the bottom (the active dot stretches to a pill), and a caption gradient on the first slide.

Slide 1

**Mountain vista**

A wide alpine panorama at first light.

Slide 2

Slide 3

```
<div class="carousel" data-stisla-carousel tabindex="0" role="region" aria-label="Gallery">
  <div class="carousel__viewport">
    <div class="carousel__track">
      <div class="carousel__slide" role="group" aria-label="1 of 3">
        <div class="h-full w-full bg-[#0ea5e9] flex items-center justify-center text-[#fff] text-2xl font-semibold">Slide 1</div>
        <div class="carousel__caption">
          <strong>Mountain vista</strong>
          <p class="m-0">A wide alpine panorama at first light.</p>
        </div>
      </div>
      <div class="carousel__slide" role="group" aria-label="2 of 3">
        <div class="h-full w-full bg-[#8b5cf6] flex items-center justify-center text-[#fff] text-2xl font-semibold">Slide 2</div>
      </div>
      <div class="carousel__slide" role="group" aria-label="3 of 3">
        <div class="h-full w-full bg-[#10b981] flex items-center justify-center text-[#fff] text-2xl font-semibold">Slide 3</div>
      </div>
    </div>
  </div>
  <button class="carousel__control carousel__control--prev" aria-label="Previous slide"><i data-lucide="chevron-left"></i></button>
  <button class="carousel__control carousel__control--next" aria-label="Next slide"><i data-lucide="chevron-right"></i></button>
  <ul class="carousel__indicators">
    <li><button class="carousel__indicator" aria-label="Slide 1"></button></li>
    <li><button class="carousel__indicator" aria-label="Slide 2"></button></li>
    <li><button class="carousel__indicator" aria-label="Slide 3"></button></li>
  </ul>
</div>
```

## Without a fixed ratio

Add `.carousel--no-aspect` so the viewport sizes to the slide content instead of locking to 16:9 — useful for text cards of varying height.

"It is the framework I reach for first."

— A happy developer

"Tokens all the way down."

— Another one

```
<div class="carousel carousel--no-aspect" data-stisla-carousel tabindex="0" role="region" aria-label="Quotes">
  <div class="carousel__viewport">
    <div class="carousel__track">
      <div class="carousel__slide" role="group" aria-label="1 of 2">
        <div class="p-8 bg-(--color-surface)">
          <p class="mt-0 text-lg">"It is the framework I reach for first."</p>
          <p class="mb-0 text-muted-foreground">— A happy developer</p>
        </div>
      </div>
      <div class="carousel__slide" role="group" aria-label="2 of 2">
        <div class="p-8 bg-(--color-surface)">
          <p class="mt-0 text-lg">"Tokens all the way down."</p>
          <p class="mb-0 text-muted-foreground">— Another one</p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel__control carousel__control--prev" aria-label="Previous"><i data-lucide="chevron-left"></i></button>
  <button class="carousel__control carousel__control--next" aria-label="Next"><i data-lucide="chevron-right"></i></button>
</div>
```

## Keyboard

The root is focusable. Once focus lands on the carousel itself (not on a slide child), these keys move the track.

- `ArrowLeft`: previous slide
- `ArrowRight`: next slide
- `Home`: first slide
- `End`: last slide

## With controls

Add `.carousel__control--prev` and`.carousel__control--next` as direct children of the root. The wrapper auto-disables the chip at the end of the track unless`loop` is on.

Slide 1

Slide 2

Slide 3

```
<div class="carousel" data-stisla-carousel tabindex="0" role="region" aria-roledescription="carousel" aria-label="Travel destinations">
  <div class="carousel__viewport">
    <div class="carousel__track">
      <div class="carousel__slide" role="group" aria-roledescription="slide" aria-label="1 of 3">
        <div class="h-full w-full bg-[#0ea5e9] flex items-center justify-center text-[#fff] text-2xl font-semibold">Slide 1</div>
      </div>
      <div class="carousel__slide" role="group" aria-roledescription="slide" aria-label="2 of 3">
        <div class="h-full w-full bg-[#8b5cf6] flex items-center justify-center text-[#fff] text-2xl font-semibold">Slide 2</div>
      </div>
      <div class="carousel__slide" role="group" aria-roledescription="slide" aria-label="3 of 3">
        <div class="h-full w-full bg-[#10b981] flex items-center justify-center text-[#fff] text-2xl font-semibold">Slide 3</div>
      </div>
    </div>
  </div>
  <button type="button" class="carousel__control carousel__control--prev" aria-label="Previous slide"><i data-lucide="chevron-left"></i></button>
  <button type="button" class="carousel__control carousel__control--next" aria-label="Next slide"><i data-lucide="chevron-right"></i></button>
</div>
```

## With indicators

One `.carousel__indicator` button per slide inside`.carousel__indicators`. The wrapper paints the active chip via `[data-state="active"]` and`aria-current="true"`.

Slide 1

Slide 2

Slide 3

```
<div class="carousel" data-stisla-carousel tabindex="0" role="region" aria-roledescription="carousel" aria-label="Travel destinations">
  <div class="carousel__viewport">
    <div class="carousel__track">
      <div class="carousel__slide" role="group" aria-roledescription="slide" aria-label="1 of 3">
        <div class="h-full w-full bg-[#0ea5e9] flex items-center justify-center text-[#fff] text-2xl font-semibold">Slide 1</div>
      </div>
      <div class="carousel__slide" role="group" aria-roledescription="slide" aria-label="2 of 3">
        <div class="h-full w-full bg-[#8b5cf6] flex items-center justify-center text-[#fff] text-2xl font-semibold">Slide 2</div>
      </div>
      <div class="carousel__slide" role="group" aria-roledescription="slide" aria-label="3 of 3">
        <div class="h-full w-full bg-[#10b981] flex items-center justify-center text-[#fff] text-2xl font-semibold">Slide 3</div>
      </div>
    </div>
  </div>
  <button type="button" class="carousel__control carousel__control--prev" aria-label="Previous slide"><i data-lucide="chevron-left"></i></button>
  <button type="button" class="carousel__control carousel__control--next" aria-label="Next slide"><i data-lucide="chevron-right"></i></button>
  <div class="carousel__indicators" role="group" aria-label="Slides">
    <button type="button" class="carousel__indicator" data-state="active" aria-current="true" aria-label="Go to slide 1"></button>
    <button type="button" class="carousel__indicator" aria-label="Go to slide 2"></button>
    <button type="button" class="carousel__indicator" aria-label="Go to slide 3"></button>
  </div>
</div>
```

## With captions

Drop a `.carousel__caption` inside any`.carousel__slide`. It pins to the bottom edge with a gradient overlay.

### Above the clouds

A break in the weather over the eastern alps.

### City after dark

Lights up just as the last of the day fades out.

### Iron lattice

Paris in the gold hour from the Trocadero.

```
<div class="carousel" data-stisla-carousel tabindex="0" role="region" aria-roledescription="carousel" aria-label="Travel destinations">
  <div class="carousel__viewport">
    <div class="carousel__track">
      <div class="carousel__slide" role="group" aria-roledescription="slide" aria-label="1 of 3">
        <div class="h-full w-full bg-[#0ea5e9]"></div>
        <div class="carousel__caption">
          <h3 class="m-0 mb-1 text-lg font-semibold">Above the clouds</h3>
          <p class="m-0 text-sm">A break in the weather over the eastern alps.</p>
        </div>
      </div>
      <div class="carousel__slide" role="group" aria-roledescription="slide" aria-label="2 of 3">
        <div class="h-full w-full bg-[#8b5cf6]"></div>
        <div class="carousel__caption">
          <h3 class="m-0 mb-1 text-lg font-semibold">City after dark</h3>
          <p class="m-0 text-sm">Lights up just as the last of the day fades out.</p>
        </div>
      </div>
      <div class="carousel__slide" role="group" aria-roledescription="slide" aria-label="3 of 3">
        <div class="h-full w-full bg-[#10b981]"></div>
        <div class="carousel__caption">
          <h3 class="m-0 mb-1 text-lg font-semibold">Iron lattice</h3>
          <p class="m-0 text-sm">Paris in the gold hour from the Trocadero.</p>
        </div>
      </div>
    </div>
  </div>
  <button type="button" class="carousel__control carousel__control--prev" aria-label="Previous slide"><i data-lucide="chevron-left"></i></button>
  <button type="button" class="carousel__control carousel__control--next" aria-label="Next slide"><i data-lucide="chevron-right"></i></button>
  <div class="carousel__indicators" role="group" aria-label="Slides">
    <button type="button" class="carousel__indicator" data-state="active" aria-current="true" aria-label="Go to slide 1"></button>
    <button type="button" class="carousel__indicator" aria-label="Go to slide 2"></button>
    <button type="button" class="carousel__indicator" aria-label="Go to slide 3"></button>
  </div>
</div>
```

## Card content

Slides aren't limited to images. Add `.carousel--no-aspect`on the root and the viewport sizes to its tallest slide instead of locking to 16:9. The chrome tokens can be retuned to track theme surfaces so the controls and indicators read on both light and dark.

"Stisla took the headache out of rebuilding our internal admin tool. The token system meant we could ship a brand refresh in a single PR, with no per-component overrides."

**Maya Tanaka**

Engineering Lead, Northwind Labs

"We bought into the older version for a client project two years ago. The rewrite kept everything we liked and dropped the bits we were already hacking around."

**Diego Romero**

Design Engineer, Forge and Tide

"Dark mode used to be a quarterly bug ticket. Now it's a single data-theme flip on the root element and we don't think about it again."

**Priya Reddy**

Product Engineer, Helix Health

```
<div class="carousel carousel--no-aspect" data-stisla-carousel data-stisla-carousel-loop="true" tabindex="0" role="region" aria-roledescription="carousel" aria-label="Customer stories"
     style="--carousel-control-bg: var(--color-surface); --carousel-control-bg-hover: var(--color-accent); --carousel-control-color: var(--color-foreground); --carousel-indicator-bg: var(--color-border); --carousel-indicator-bg-active: var(--color-primary); --carousel-indicators-inset: -1rem;">
  <div class="carousel__viewport">
    <div class="carousel__track">
      <div class="carousel__slide" role="group" aria-roledescription="slide" aria-label="1 of 3">
        <div class="card m-0">
          <div class="card__body">
            <p class="m-0 text-lg leading-relaxed">"Stisla took the headache out of rebuilding our internal admin tool. The token system meant we could ship a brand refresh in a single PR, with no per-component overrides."</p>
            <div class="mt-5">
              <strong>Maya Tanaka</strong>
              <div class="text-muted-foreground text-sm">Engineering Lead, Northwind Labs</div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel__slide" role="group" aria-roledescription="slide" aria-label="2 of 3">
        <div class="card m-0">
          <div class="card__body">
            <p class="m-0 text-lg leading-relaxed">"We bought into the older version for a client project two years ago. The rewrite kept everything we liked and dropped the bits we were already hacking around."</p>
            <div class="mt-5">
              <strong>Diego Romero</strong>
              <div class="text-muted-foreground text-sm">Design Engineer, Forge and Tide</div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel__slide" role="group" aria-roledescription="slide" aria-label="3 of 3">
        <div class="card m-0">
          <div class="card__body">
            <p class="m-0 text-lg leading-relaxed">"Dark mode used to be a quarterly bug ticket. Now it's a single data-theme flip on the root element and we don't think about it again."</p>
            <div class="mt-5">
              <strong>Priya Reddy</strong>
              <div class="text-muted-foreground text-sm">Product Engineer, Helix Health</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <button type="button" class="carousel__control carousel__control--prev" aria-label="Previous testimonial"><i data-lucide="chevron-left"></i></button>
  <button type="button" class="carousel__control carousel__control--next" aria-label="Next testimonial"><i data-lucide="chevron-right"></i></button>
  <div class="carousel__indicators" role="group" aria-label="Testimonials">
    <button type="button" class="carousel__indicator" data-state="active" aria-current="true" aria-label="Testimonial 1"></button>
    <button type="button" class="carousel__indicator" aria-label="Testimonial 2"></button>
    <button type="button" class="carousel__indicator" aria-label="Testimonial 3"></button>
  </div>
</div>
```

## Autoplay

Pass `data-stisla-carousel-autoplay="true"` for a 4s tick. Autoplay pauses on hover, on focus, while dragging, and while the tab is hidden. Reduced motion turns it off entirely.

Slide 1

Slide 2

Slide 3

```
<div class="carousel" data-stisla-carousel data-stisla-carousel-autoplay="true" data-stisla-carousel-loop="true" tabindex="0" role="region" aria-roledescription="carousel" aria-label="Travel destinations">
  <div class="carousel__viewport">
    <div class="carousel__track">
      <div class="carousel__slide" role="group" aria-roledescription="slide" aria-label="1 of 3">
        <div class="h-full w-full bg-[#0ea5e9] flex items-center justify-center text-[#fff] text-2xl font-semibold">Slide 1</div>
      </div>
      <div class="carousel__slide" role="group" aria-roledescription="slide" aria-label="2 of 3">
        <div class="h-full w-full bg-[#8b5cf6] flex items-center justify-center text-[#fff] text-2xl font-semibold">Slide 2</div>
      </div>
      <div class="carousel__slide" role="group" aria-roledescription="slide" aria-label="3 of 3">
        <div class="h-full w-full bg-[#10b981] flex items-center justify-center text-[#fff] text-2xl font-semibold">Slide 3</div>
      </div>
    </div>
  </div>
  <div class="carousel__indicators" role="group" aria-label="Slides">
    <button type="button" class="carousel__indicator" data-state="active" aria-current="true" aria-label="Go to slide 1"></button>
    <button type="button" class="carousel__indicator" aria-label="Go to slide 2"></button>
    <button type="button" class="carousel__indicator" aria-label="Go to slide 3"></button>
  </div>
</div>
```

## Loop

`data-stisla-carousel-loop="true"` wraps past the last slide back to the first. The prev / next chips stay enabled at the ends.

Slide 1

Slide 2

Slide 3

```
<div class="carousel" data-stisla-carousel data-stisla-carousel-loop="true" tabindex="0" role="region" aria-roledescription="carousel" aria-label="Travel destinations">
  <div class="carousel__viewport">
    <div class="carousel__track">
      <div class="carousel__slide" role="group" aria-roledescription="slide" aria-label="1 of 3">
        <div class="h-full w-full bg-[#0ea5e9] flex items-center justify-center text-[#fff] text-2xl font-semibold">Slide 1</div>
      </div>
      <div class="carousel__slide" role="group" aria-roledescription="slide" aria-label="2 of 3">
        <div class="h-full w-full bg-[#8b5cf6] flex items-center justify-center text-[#fff] text-2xl font-semibold">Slide 2</div>
      </div>
      <div class="carousel__slide" role="group" aria-roledescription="slide" aria-label="3 of 3">
        <div class="h-full w-full bg-[#10b981] flex items-center justify-center text-[#fff] text-2xl font-semibold">Slide 3</div>
      </div>
    </div>
  </div>
  <button type="button" class="carousel__control carousel__control--prev" aria-label="Previous slide"><i data-lucide="chevron-left"></i></button>
  <button type="button" class="carousel__control carousel__control--next" aria-label="Next slide"><i data-lucide="chevron-right"></i></button>
</div>
```

## Events

Four events fire on the carousel root. None are cancelable; they report state after the change has already landed.

`stisla:carousel:selected` fires when the highlighted slide changes (drag, click, key, or autoplay). The `detail`object carries the new `index` and the`previousIndex`. Use it for highlight sync.

`stisla:carousel:settled` fires after the slide transition ends and the track is at rest at the new `index`. Use it for work that should wait until motion is done, like lazy-loading the visible slide.

`stisla:carousel:autoplay-paused` fires when autoplay pauses; the `detail.reason` is one of `"hover"`,`"focus"`, `"drag"`, or`"visibility"`.

`stisla:carousel:autoplay-resumed` fires when autoplay resumes, with the same `detail.reason` field.

## Customization

These variables retune the carousel. Override on the root or any wrapper.

| Variable                                                        | Use                                                       |
| --------------------------------------------------------------- | --------------------------------------------------------- |
| `--carousel-radius`                                             | Viewport corner radius                                    |
| `--carousel-aspect-ratio`                                       | Viewport ratio (default 16/9; ignored under --no-aspect)  |
| `--carousel-slide-gap`                                          | Inline gap between slides                                 |
| `--carousel-control-size` /`-control-inset`                     | Control chip size and edge inset                          |
| `--carousel-control-bg` /`-control-bg-hover` / `-control-color` | Control chip paint                                        |
| `--carousel-indicators-inset` /`-indicator-gap`                 | Indicator row position and spacing                        |
| `--carousel-indicator-size` /`-indicator-width-active`          | Dot size and active pill width                            |
| `--carousel-indicator-bg` /`-indicator-bg-active`               | Dot color, resting and active                             |
| `--carousel-caption-padding-block` /`-caption-padding-inline`   | Caption padding                                           |
| `--carousel-caption-bg` / `-caption-color`                      | Caption gradient and text                                 |
| `--carousel-transition-duration`                                | Control and indicator timing; zeroed under reduced-motion |
