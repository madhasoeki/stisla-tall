# Empty state

A centred block shown in place of content that is absent.

## Basic

The `.empty-state` stacks a `.empty-state__media` (a tinted circle holding one glyph by default), a `.empty-state__title`, supporting`.empty-state__text`, and a trailing `.empty-state__action`. Tone modifiers recolour the media for error or success states; the text stays neutral so the message reads as words. Drop an `.illustration`, `<img>`,`.icon-box`, `.avatar`, or `.spinner` into the media slot and it sheds its circle so the richer art isn't double-framed. A glyph, a title, a line of guidance, and a primary action.

### No messages

Your inbox is empty. New messages will show up here.

Compose

```
<div class="empty-state">
  <span class="empty-state__media"><i data-lucide="inbox"></i></span>
  <h3 class="empty-state__title">No messages</h3>
  <p class="empty-state__text">Your inbox is empty. New messages will show up here.</p>
  <div class="empty-state__action">
    <button class="button button--primary">Compose</button>
  </div>
</div>
```

## With actions

Add `.empty-state__action` to move the person forward. The slot centers and wraps its controls, so a primary plus a secondary action stacks cleanly on a narrow region.

### No projects yet

Create your first project to start organizing your work.

New projectImport

```
<div class="empty-state">
  <span class="empty-state__media"><i data-lucide="folder-plus"></i></span>
  <h3 class="empty-state__title">No projects yet</h3>
  <p class="empty-state__text">Create your first project to start organizing your work.</p>
  <div class="empty-state__action">
    <button type="button" class="button button--primary"><i data-lucide="plus"></i> New project</button>
    <button type="button" class="button button--neutral button--outline">Import</button>
  </div>
</div>
```

## Tones

Set a tone with `.empty-state--danger` (an error) or`.empty-state--success` (a done state); only the media recolours.

### Something went wrong

We couldn't load your reports. Try again in a moment.

Retry

### All caught up

You've cleared every task on your list.

```
<div class="empty-state empty-state--danger">
  <span class="empty-state__media"><i data-lucide="circle-alert"></i></span>
  <h3 class="empty-state__title">Something went wrong</h3>
  <p class="empty-state__text">We couldn't load your reports. Try again in a moment.</p>
  <div class="empty-state__action">
    <button class="button button--neutral button--outline">Retry</button>
  </div>
</div>
<div class="empty-state empty-state--success">
  <span class="empty-state__media"><i data-lucide="circle-check"></i></span>
  <h3 class="empty-state__title">All caught up</h3>
  <p class="empty-state__text">You've cleared every task on your list.</p>
</div>
```

## Small

`.empty-state--sm` shrinks the media and tightens the padding for an empty region inside a card or table.

### No results

No items match your filters.

```
<div class="card">
  <div class="card__body">
    <div class="empty-state empty-state--sm">
      <span class="empty-state__media"><i data-lucide="search-x"></i></span>
      <h3 class="empty-state__title">No results</h3>
      <p class="empty-state__text">No items match your filters.</p>
    </div>
  </div>
</div>
```

## Media

The media slot hosts more than a bare icon. Drop in an `.icon-box`, an`.avatar`, or a `.spinner` and the slot sheds its own circle so the media is never double-framed. A spinner suits a region that is loading toward empty.

### No team members

Invite people to collaborate.

### Loading

Fetching your latest data.

```
<div class="flex flex-wrap gap-4">
  <div class="empty-state empty-state--sm">
    <span class="empty-state__media">
      <span class="icon-box icon-box--primary icon-box--circle icon-box--lg"><i data-lucide="users"></i></span>
    </span>
    <h3 class="empty-state__title">No team members</h3>
    <p class="empty-state__text">Invite people to collaborate.</p>
  </div>
  <div class="empty-state empty-state--sm">
    <span class="empty-state__media"><span class="spinner" aria-hidden="true"></span></span>
    <h3 class="empty-state__title">Loading</h3>
    <p class="empty-state__text">Fetching your latest data.</p>
  </div>
</div>
```

## With an illustration

For a richer empty state, pair it with an `.illustration` in the media slot. The slot sheds its circle and caps the art width, so the spot art sits on its own. See the Illustrations page for the full set and how to re-tone them.

## Customization

These variables retune the block. Override on the root or any wrapper.

| Variable                                          | Use                                                                                             |
| ------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `--empty-state-max-width`                         | Measure the block centres within                                                                |
| `--empty-state-padding-block` / `-padding-inline` | Block padding                                                                                   |
| `--empty-state-tone`                              | Media fill and tint (the tone modifiers set this)                                               |
| `--empty-state-tone-emphasis`                     | Glyph colour on the media tint; intents set it from `--color-<intent>-emphasis` for AA contrast |
| `--empty-state-media-size` / `-icon-size`         | Media circle and glyph size                                                                     |
| `--empty-state-art-size`                          | Width cap for a richer illustration or image                                                    |
| `--empty-state-media-gap`                         | Gap below the media                                                                             |
| `--empty-state-gap`                               | Gap between the title and the text                                                              |
| `--empty-state-action-gap`                        | Gap above the actions                                                                           |
