# Card

A content container with body, optional header and footer, and image regions.

## Basic

A card with just `.card__body`. Drop in a form, a stack of fields, or any block of content.

##### Sign in

Welcome back. Enter your details to continue.

Email

Password

Remember me

Sign in

```
<div class="card w-full max-w-sm">
  <div class="card__body">
    <h5 class="card__title">Sign in</h5>
    <p class="card__text">Welcome back. Enter your details to continue.</p>
    <form class="flex flex-col gap-4 w-full mt-4">
      <div class="field">
        <label for="cardLoginEmail" class="field__label">Email</label>
        <input type="email" class="input" id="cardLoginEmail" placeholder="you@example.com" />
      </div>
      <div class="field">
        <label for="cardLoginPwd" class="field__label">Password</label>
        <input type="password" class="input" id="cardLoginPwd" />
      </div>
      <div class="field__item">
        <input class="checkbox" type="checkbox" id="cardLoginRemember" />
        <label class="field__label" for="cardLoginRemember">Remember me</label>
      </div>
      <button type="submit" class="button button--primary">Sign in</button>
    </form>
  </div>
</div>
```

## Title, subtitle, text, links

`.card__title` sits at a fixed font size regardless of the heading tag you pick. `.card__subtitle` reads`--color-muted-foreground` so the muted treatment is baked in and no utility is needed.

##### Card title

###### Card subtitle

Some quick example text to build on the card title and make up the bulk of the card's content.

[Card link](https://stisla.dev/docs/vanilla/card#)

```
<div class="card w-72">
  <div class="card__body">
    <h5 class="card__title">Card title</h5>
    <h6 class="card__subtitle">Card subtitle</h6>
    <p class="card__text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card__link">Card link</a>
  </div>
</div>
```

## Images

`.card__image` is position-aware. As the first child it rounds its top corners; as the last child it rounds the bottom. Wrap content in `.card__overlay` to sit it over the image.

![Mountain landscape](https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=900&q=70)

##### Image top

A card with supporting text below.

![Forest path](https://images.unsplash.com/photo-1503264116251-35a269479413?auto=format&fit=crop&w=900&q=60)

##### Image overlay

Supporting text laid over the image.

```
<div class="card w-72">
  <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=900&q=70" class="card__image" alt="Mountain landscape" />
  <div class="card__body">
    <h5 class="card__title">Image top</h5>
    <p class="card__text">A card with supporting text below.</p>
  </div>
</div>
<div class="card w-72">
  <img src="https://images.unsplash.com/photo-1503264116251-35a269479413?auto=format&fit=crop&w=900&q=60" class="card__image" alt="Forest path" />
  <div class="card__overlay">
    <h5 class="card__title">Image overlay</h5>
    <p class="card__text">Supporting text laid over the image.</p>
  </div>
</div>
```

## Header, body, footer

The default header is transparent and inherits the card body background. The footer sits on `--color-surface-2` so the body and footer split reads without a heavy border. Wrap trailing controls in a `.card__action` slot to push them to the end of the header row.

Featured

Action

##### Special title treatment

With supporting text below as a natural lead-in to additional content.

Go somewhere

2 days ago

```
<div class="card w-88">
  <div class="card__header">
    Featured
    <div class="card__action">
      <button type="button" class="button button--neutral button--sm">Action</button>
    </div>
  </div>
  <div class="card__body">
    <h5 class="card__title">Special title treatment</h5>
    <p class="card__text">With supporting text below as a natural lead-in to additional content.</p>
    <button type="button" class="button button--primary">Go somewhere</button>
  </div>
  <div class="card__footer">
    <span class="card__subtitle">2 days ago</span>
  </div>
</div>
```

## Heading row

`.card__heading` is a section sub-header for use inside the body: a title with optional trailing controls. Put the controls in a`.card__action` slot and they sit at the end of the row while the title packs to the start, the same slot the header row uses.

Recent activity

[See all](https://stisla.dev/docs/vanilla/card#)

Three new comments and a deploy since your last visit.

```
<div class="card w-full max-w-sm">
  <div class="card__body">
    <div class="card__heading">
      <span class="card__title">Recent activity</span>
      <div class="card__action">
        <a class="card__link" href="#">See all</a>
      </div>
    </div>
    <p class="card__text">Three new comments and a deploy since your last visit.</p>
  </div>
</div>
```

## Alternate header

Opt the header onto `--color-surface-2` with`.card__header--alt` to mirror the footer's contrast. Composes with `.card__header`.

Default header

Header inherits the card body background.

Alt header

Header sits on the alt surface.

```
<div class="card w-full max-w-sm">
  <div class="card__header">Default header</div>
  <div class="card__body">
    <p class="card__text">Header inherits the card body background.</p>
  </div>
</div>
<div class="card w-full max-w-sm">
  <div class="card__header card__header--alt">Alt header</div>
  <div class="card__body">
    <p class="card__text">Header sits on the alt surface.</p>
  </div>
</div>
```

## Small header

The header row defaults to a taller height. Add`.card__header--sm` to tighten it for dense layouts.

Default header

The standard header height.

Small header

A tighter header for dense rows.

```
<div class="card w-72">
  <div class="card__header">Default header</div>
  <div class="card__body">
    <p class="card__text">The standard header height.</p>
  </div>
</div>
<div class="card w-72">
  <div class="card__header card__header--sm">Small header</div>
  <div class="card__body">
    <p class="card__text">A tighter header for dense rows.</p>
  </div>
</div>
```

## Customization

These variables retune `.card` without touching component CSS. Override on `.card` itself, on a parent scope, or on`:root`. The cascade scopes the change.

| Variable                | Use                                                                             |
| ----------------------- | ------------------------------------------------------------------------------- |
| `--card-radius`         | Corner radius                                                                   |
| `--card-padding-inline` | Left and right padding, shared by header, body, and footer so their edges align |
| `--card-padding-block`  | Top and bottom padding of the body                                              |
| `--card-bg`             | Background                                                                      |
| `--card-color`          | Text color                                                                      |
| `--card-border-width`   | Border thickness; set `0` to drop the border                                    |
| `--card-border-color`   | Border color                                                                    |
| `--card-shadow`         | Drop shadow; set to `none` for a flat, frame-only card                          |
| `--card-header-height`  | Minimum height of the header row; `.card__header--sm`lowers it                  |
