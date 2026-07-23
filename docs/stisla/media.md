# Media

A row that pairs media with text and an action.

## Basic

Drop `.media__figure`, `.media__content`, and`.media__action` as direct children. The row sits on the surface fill with a hairline border and a comfortable padding floor.

Order #ATL-2918

Out for delivery, arrives today by 6 PM.

Track

```
<div class="media max-w-md">
  <div class="media__figure"><span class="icon-box icon-box--primary"><i data-lucide="package"></i></span></div>
  <div class="media__content">
    <div class="media__title">Order #ATL-2918</div>
    <div class="media__description">Out for delivery, arrives today by 6 PM.</div>
  </div>
  <div class="media__action">
    <button type="button" class="button button--primary button--sm">Track</button>
  </div>
</div>
```

## Title, description, meta

Stack a `.media__meta` below the description for a secondary line at a smaller font in muted-foreground. An avatar in the figure reads as an actor.

![](https://i.pravatar.cc/96?img=12)JC

Joseph Cooper

Pushed 3 commits to atlas/main.

2 minutes ago

```
<div class="media max-w-lg">
  <div class="media__figure">
    <span class="avatar avatar--circle" data-stisla-avatar>
      <img class="avatar__image" src="https://i.pravatar.cc/96?img=12" alt="">
      <span class="avatar__fallback">JC</span>
    </span>
  </div>
  <div class="media__content">
    <div class="media__title">Joseph Cooper</div>
    <div class="media__description">Pushed 3 commits to atlas/main.</div>
    <div class="media__meta">2 minutes ago</div>
  </div>
  <div class="media__action">
    <button type="button" class="button button--ghost button--neutral button--sm button--icon-only" aria-label="Like"><i data-lucide="heart"></i></button>
  </div>
</div>
```

## Vertical

Add `.media--vertical` to stack the parts top to bottom. The action's auto inline-end pin drops and parts align to the row's start. Useful for stat tiles.

Monthly revenue

$48,210

+12.4% from last month

Churn rate

1.8%

+0.4% from last month

```
<div class="media media--vertical flex-1 min-w-48">
  <div class="media__meta">Monthly revenue</div>
  <div class="media__title text-2xl">$48,210</div>
  <div class="media__description text-success">+12.4% from last month</div>
</div>
<div class="media media--vertical flex-1 min-w-48">
  <div class="media__meta">Churn rate</div>
  <div class="media__title text-2xl">1.8%</div>
  <div class="media__description text-danger">+0.4% from last month</div>
</div>
```

## Seamless rows in a card

Stack `.media--seamless` rows inside a `.card`. The seamless items shed their own border and background and pick up the card padding, so the row edges line up with the card header. Each row stays its own row; the card stays one frame; a `.separator`between rows adds the dividing line.

Team members

![](https://i.pravatar.cc/96?img=47)MT

Maya Tanaka

maya@kredibel.com

Following

---

![](https://i.pravatar.cc/96?img=32)PR

Priya Reddy

priya@kredibel.com

Follow

---

![](https://i.pravatar.cc/96?img=15)DR

Diego Romero

diego@kredibel.com

Follow

---

![](https://i.pravatar.cc/96?img=44)LW

Lin Wei

lin@kredibel.com

Follow

```
<div class="card max-w-md w-full">
  <div class="card__header">Team members</div>
  <div class="media media--seamless">
    <div class="media__figure">
      <span class="avatar avatar--circle" data-stisla-avatar><img class="avatar__image" src="https://i.pravatar.cc/96?img=47" alt=""><span class="avatar__fallback">MT</span></span>
    </div>
    <div class="media__content">
      <div class="media__title">Maya Tanaka</div>
      <div class="media__meta">maya@kredibel.com</div>
    </div>
    <div class="media__action">
      <button type="button" class="button button--outline button--neutral button--sm">Following</button>
    </div>
  </div>
  <hr class="separator" />
  <div class="media media--seamless">
    <div class="media__figure">
      <span class="avatar avatar--circle" data-stisla-avatar><img class="avatar__image" src="https://i.pravatar.cc/96?img=32" alt=""><span class="avatar__fallback">PR</span></span>
    </div>
    <div class="media__content">
      <div class="media__title">Priya Reddy</div>
      <div class="media__meta">priya@kredibel.com</div>
    </div>
    <div class="media__action">
      <button type="button" class="button button--primary button--sm">Follow</button>
    </div>
  </div>
  <hr class="separator" />
  <div class="media media--seamless">
    <div class="media__figure">
      <span class="avatar avatar--circle" data-stisla-avatar><img class="avatar__image" src="https://i.pravatar.cc/96?img=15" alt=""><span class="avatar__fallback">DR</span></span>
    </div>
    <div class="media__content">
      <div class="media__title">Diego Romero</div>
      <div class="media__meta">diego@kredibel.com</div>
    </div>
    <div class="media__action">
      <button type="button" class="button button--primary button--sm">Follow</button>
    </div>
  </div>
  <hr class="separator" />
  <div class="media media--seamless">
    <div class="media__figure">
      <span class="avatar avatar--circle" data-stisla-avatar><img class="avatar__image" src="https://i.pravatar.cc/96?img=44" alt=""><span class="avatar__fallback">LW</span></span>
    </div>
    <div class="media__content">
      <div class="media__title">Lin Wei</div>
      <div class="media__meta">lin@kredibel.com</div>
    </div>
    <div class="media__action">
      <button type="button" class="button button--primary button--sm">Follow</button>
    </div>
  </div>
</div>
```

## Notification settings

Same flush stack, with an `.icon-box` in the figure and a`.switch` in the action slot. Each row reads as a setting whose state lives in the switch.

Notification preferences

Push notifications

Real-time alerts on this device for mentions and direct replies.

Email digest

A single recap email each Monday with last week's activity.

SMS alerts

Critical-only messages, used for billing and account recovery.

```
<div class="card max-w-lg">
  <div class="card__header">Notification preferences</div>
  <div class="media media--seamless">
    <div class="media__figure">
      <span class="icon-box icon-box--primary"><i data-lucide="bell"></i></span>
    </div>
    <div class="media__content">
      <div class="media__title">Push notifications</div>
      <div class="media__description">Real-time alerts on this device for mentions and direct replies.</div>
    </div>
    <div class="media__action">
      <input class="switch switch--lg" type="checkbox" role="switch" aria-label="Push notifications" checked>
    </div>
  </div>
  <div class="media media--seamless">
    <div class="media__figure">
      <span class="icon-box icon-box--info"><i data-lucide="mail"></i></span>
    </div>
    <div class="media__content">
      <div class="media__title">Email digest</div>
      <div class="media__description">A single recap email each Monday with last week's activity.</div>
    </div>
    <div class="media__action">
      <input class="switch switch--lg" type="checkbox" role="switch" aria-label="Email digest" checked>
    </div>
  </div>
  <div class="media media--seamless">
    <div class="media__figure">
      <span class="icon-box icon-box--warning"><i data-lucide="message-square"></i></span>
    </div>
    <div class="media__content">
      <div class="media__title">SMS alerts</div>
      <div class="media__description">Critical-only messages, used for billing and account recovery.</div>
    </div>
    <div class="media__action">
      <input class="switch switch--lg" type="checkbox" role="switch" aria-label="SMS alerts">
    </div>
  </div>
</div>
```

## Payment methods

Brand glyph in the figure, last-four in the title, expiry in the meta. The action slot can hold a badge instead of a button, or no action at all.

Payment methods

Visa ending in 4242

Expires 12 / 2027

Default

Mastercard ending in 1908

Expires 04 / 2026

Bank transfer · Mandiri

Account ending in 0073

```
<div class="card max-w-lg w-full">
  <div class="card__header">Payment methods</div>
  <div class="media media--seamless">
    <div class="media__figure">
      <span class="icon-box"><i data-lucide="credit-card"></i></span>
    </div>
    <div class="media__content">
      <div class="media__title">Visa ending in 4242</div>
      <div class="media__meta">Expires 12 / 2027</div>
    </div>
    <div class="media__action">
      <span class="badge badge--success">Default</span>
    </div>
  </div>
  <div class="media media--seamless">
    <div class="media__figure">
      <span class="icon-box"><i data-lucide="credit-card"></i></span>
    </div>
    <div class="media__content">
      <div class="media__title">Mastercard ending in 1908</div>
      <div class="media__meta">Expires 04 / 2026</div>
    </div>
  </div>
  <div class="media media--seamless">
    <div class="media__figure">
      <span class="icon-box"><i data-lucide="building-2"></i></span>
    </div>
    <div class="media__content">
      <div class="media__title">Bank transfer · Mandiri</div>
      <div class="media__meta">Account ending in 0073</div>
    </div>
  </div>
</div>
```

## File list

Two actions in the action slot work the same as one. The flex gap inside `.media__action` spaces them; both pin to the inline end as a single group.

Recent files

design-brief.pdf

2.4 MB · Edited yesterday by Maya

---

q2-revenue.xlsx

812 KB · Edited 3 days ago by Diego

---

launch-hero.png

5.1 MB · Edited last week by Priya

```
<div class="card max-w-lg">
  <div class="card__header">Recent files</div>
  <div class="media media--seamless">
    <div class="media__figure">
      <span class="icon-box icon-box--primary"><i data-lucide="file-text"></i></span>
    </div>
    <div class="media__content">
      <div class="media__title">design-brief.pdf</div>
      <div class="media__meta">2.4 MB · Edited yesterday by Maya</div>
    </div>
    <div class="media__action">
      <button type="button" class="button button--ghost button--neutral button--sm button--icon-only" aria-label="Download"><i data-lucide="download"></i></button>
      <button type="button" class="button button--ghost button--neutral button--sm button--icon-only" aria-label="Delete"><i data-lucide="trash-2"></i></button>
    </div>
  </div>
  <hr class="separator">
  <div class="media media--seamless">
    <div class="media__figure">
      <span class="icon-box icon-box--success"><i data-lucide="file-spreadsheet"></i></span>
    </div>
    <div class="media__content">
      <div class="media__title">q2-revenue.xlsx</div>
      <div class="media__meta">812 KB · Edited 3 days ago by Diego</div>
    </div>
    <div class="media__action">
      <button type="button" class="button button--ghost button--neutral button--sm button--icon-only" aria-label="Download"><i data-lucide="download"></i></button>
      <button type="button" class="button button--ghost button--neutral button--sm button--icon-only" aria-label="Delete"><i data-lucide="trash-2"></i></button>
    </div>
  </div>
  <hr class="separator">
  <div class="media media--seamless">
    <div class="media__figure">
      <span class="icon-box icon-box--info"><i data-lucide="image"></i></span>
    </div>
    <div class="media__content">
      <div class="media__title">launch-hero.png</div>
      <div class="media__meta">5.1 MB · Edited last week by Priya</div>
    </div>
    <div class="media__action">
      <button type="button" class="button button--ghost button--neutral button--sm button--icon-only" aria-label="Download"><i data-lucide="download"></i></button>
      <button type="button" class="button button--ghost button--neutral button--sm button--icon-only" aria-label="Delete"><i data-lucide="trash-2"></i></button>
    </div>
  </div>
</div>
```

## Standalone rows

Standalone items, with their own border and surface fill, sit well as a freestanding list outside a card. Image in the figure, price as the meta line, the action pinned to the inline end.

![](https://images.unsplash.com/photo-1587829741301-dc798b83add3?auto=format&fit=crop&w=200&h=200)

Keychron K2 Pro

75% wireless mechanical with brown switches.

$179.00

![](https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=200&h=200)

Sony WH-1000XM5

Wireless noise-cancelling over-ear headphones.

$399.00

![](https://images.unsplash.com/photo-1507473885765-e6ed057f782c?auto=format&fit=crop&w=200&h=200)

Anglepoise 90 Mini Mini

Articulated desk lamp in warm olive.

$245.00

```
<div class="flex flex-col gap-3 max-w-lg">
  <div class="media">
    <div class="media__figure">
      <img src="https://images.unsplash.com/photo-1587829741301-dc798b83add3?auto=format&fit=crop&w=200&h=200" alt="" width="56" height="56" class="rounded-md object-cover" />
    </div>
    <div class="media__content">
      <div class="media__title">Keychron K2 Pro</div>
      <div class="media__description">75% wireless mechanical with brown switches.</div>
      <div class="media__meta">$179.00</div>
    </div>
    <div class="media__action">
      <button type="button" class="button button--primary button--icon-only"><i data-lucide="plus"></i></button>
    </div>
  </div>
  <div class="media">
    <div class="media__figure">
      <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=200&h=200" alt="" width="56" height="56" class="rounded-md object-cover" />
    </div>
    <div class="media__content">
      <div class="media__title">Sony WH-1000XM5</div>
      <div class="media__description">Wireless noise-cancelling over-ear headphones.</div>
      <div class="media__meta">$399.00</div>
    </div>
    <div class="media__action">
      <button type="button" class="button button--primary button--icon-only"><i data-lucide="plus"></i></button>
    </div>
  </div>
  <div class="media">
    <div class="media__figure">
      <img src="https://images.unsplash.com/photo-1507473885765-e6ed057f782c?auto=format&fit=crop&w=200&h=200" alt="" width="56" height="56" class="rounded-md object-cover" />
    </div>
    <div class="media__content">
      <div class="media__title">Anglepoise 90 Mini Mini</div>
      <div class="media__description">Articulated desk lamp in warm olive.</div>
      <div class="media__meta">$245.00</div>
    </div>
    <div class="media__action">
      <button type="button" class="button button--primary button--icon-only"><i data-lucide="plus"></i></button>
    </div>
  </div>
</div>
```

## Card-style radio

Add `.media--selectable` and wrap the row in a`<label>` around a native `.radio` so the whole row becomes one option. The modifier turns on the hover, focus, and selected paint; the state itself rides the native`:checked`, so keyboard, grouping, and screen-reader semantics come for free. The border carries the selected signal and the fill washes to the highlight tint.

Express deliveryArrives next business day. Order before 2 PM to ship today.$24.00Standard deliveryThree to five business days with tracking.$6.00Pick up in storeReady within two hours at the Kemang branch.Free

```
<div role="radiogroup" aria-label="Delivery speed" class="flex flex-col gap-3 max-w-lg">
  <label class="media media--selectable">
    <span class="media__figure"><span class="icon-box icon-box--primary"><i data-lucide="zap"></i></span></span>
    <span class="media__content">
      <span class="media__title">Express delivery</span>
      <span class="media__description">Arrives next business day. Order before 2 PM to ship today.</span>
      <span class="media__meta">$24.00</span>
    </span>
    <span class="media__action"><input class="radio" type="radio" name="delivery" checked></span>
  </label>
  <label class="media media--selectable">
    <span class="media__figure"><span class="icon-box"><i data-lucide="truck"></i></span></span>
    <span class="media__content">
      <span class="media__title">Standard delivery</span>
      <span class="media__description">Three to five business days with tracking.</span>
      <span class="media__meta">$6.00</span>
    </span>
    <span class="media__action"><input class="radio" type="radio" name="delivery"></span>
  </label>
  <label class="media media--selectable">
    <span class="media__figure"><span class="icon-box"><i data-lucide="store"></i></span></span>
    <span class="media__content">
      <span class="media__title">Pick up in store</span>
      <span class="media__description">Ready within two hours at the Kemang branch.</span>
      <span class="media__meta">Free</span>
    </span>
    <span class="media__action"><input class="radio" type="radio" name="delivery"></span>
  </label>
</div>
```

## Card-style checkbox

Same shape with a `.checkbox` selects many. A row whose control is `disabled` dims and drops its hover wash while the rest of the group stays live.

Daily backupsSnapshot every database at 02:00 and keep 30 days.+$9 / monthPriority computeReserved CPU so deploys never wait in the shared queue.+$29 / monthEdge CDNIncluded on the Enterprise plan. Upgrade to enable.Enterprise only

```
<fieldset class="flex flex-col gap-3 max-w-lg border-0 p-0 m-0">
  <label class="media media--selectable">
    <span class="media__figure"><span class="icon-box icon-box--info"><i data-lucide="shield-check"></i></span></span>
    <span class="media__content">
      <span class="media__title">Daily backups</span>
      <span class="media__description">Snapshot every database at 02:00 and keep 30 days.</span>
      <span class="media__meta">+$9 / month</span>
    </span>
    <span class="media__action"><input class="checkbox" type="checkbox" checked></span>
  </label>
  <label class="media media--selectable">
    <span class="media__figure"><span class="icon-box icon-box--success"><i data-lucide="gauge"></i></span></span>
    <span class="media__content">
      <span class="media__title">Priority compute</span>
      <span class="media__description">Reserved CPU so deploys never wait in the shared queue.</span>
      <span class="media__meta">+$29 / month</span>
    </span>
    <span class="media__action"><input class="checkbox" type="checkbox"></span>
  </label>
  <label class="media media--selectable">
    <span class="media__figure"><span class="icon-box"><i data-lucide="globe"></i></span></span>
    <span class="media__content">
      <span class="media__title">Edge CDN</span>
      <span class="media__description">Included on the Enterprise plan. Upgrade to enable.</span>
      <span class="media__meta">Enterprise only</span>
    </span>
    <span class="media__action"><input class="checkbox" type="checkbox" disabled></span>
  </label>
</fieldset>
```

## Listbox option

When a framework owns the state, keep`.media--selectable` and drive selection from`aria-selected` (or `aria-checked` /`aria-pressed`) on the row instead of a native control. The same selected paint applies. Here a check glyph marks the chosen row in an assignee list.

- ![](https://i.pravatar.cc/96?img=32)PR

Priya Reddy

Reviewer · 4 open

- ![](https://i.pravatar.cc/96?img=47)MT

Maya Tanaka

Reviewer · 1 open

- ![](https://i.pravatar.cc/96?img=15)DR

Diego Romero

Reviewer · 7 open

```
<ul role="listbox" aria-label="Assignee" class="flex flex-col gap-2 max-w-md list-none p-0 m-0">
  <li role="option" tabindex="0" aria-selected="true" class="media media--selectable">
    <div class="media__figure">
      <span class="avatar avatar--circle" data-stisla-avatar><img class="avatar__image" src="https://i.pravatar.cc/96?img=32" alt=""><span class="avatar__fallback">PR</span></span>
    </div>
    <div class="media__content">
      <div class="media__title">Priya Reddy</div>
      <div class="media__meta">Reviewer · 4 open</div>
    </div>
    <div class="media__action"><i data-lucide="check" class="text-primary"></i></div>
  </li>
  <li role="option" tabindex="-1" aria-selected="false" class="media media--selectable">
    <div class="media__figure">
      <span class="avatar avatar--circle" data-stisla-avatar><img class="avatar__image" src="https://i.pravatar.cc/96?img=47" alt=""><span class="avatar__fallback">MT</span></span>
    </div>
    <div class="media__content">
      <div class="media__title">Maya Tanaka</div>
      <div class="media__meta">Reviewer · 1 open</div>
    </div>
  </li>
  <li role="option" tabindex="-1" aria-selected="false" class="media media--selectable">
    <div class="media__figure">
      <span class="avatar avatar--circle" data-stisla-avatar><img class="avatar__image" src="https://i.pravatar.cc/96?img=15" alt=""><span class="avatar__fallback">DR</span></span>
    </div>
    <div class="media__content">
      <div class="media__title">Diego Romero</div>
      <div class="media__meta">Reviewer · 7 open</div>
    </div>
  </li>
</ul>
```

## Customization

These variables retune `.media` without touching component CSS. Override on the row, a parent scope, or `:root`. Inside a `.card`, the flush variant additionally reads the card's `--card-padding-inline` so the row's inline edges align with the card header and footer.

| Variable                        | Use                                                                                                                 |
| ------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `--media-radius`                | Corner radius; cleared to `0` by `--seamless`                                                                       |
| `--media-padding-block`         | Top and bottom padding                                                                                              |
| `--media-padding-inline`        | Left and right padding; a flush row inside a card aligns to the card's inline padding                               |
| `--media-gap`                   | Spacing between figure, content, and action                                                                         |
| `--media-bg`                    | Background; cleared to `transparent` by`--seamless`                                                                 |
| `--media-color`                 | Text color                                                                                                          |
| `--media-border-width`          | Border thickness; cleared to `0` by`--seamless`                                                                     |
| `--media-border-color`          | Border color                                                                                                        |
| `--media-bg-hover`              | Background on hover or keyboard highlight of an interactive or selectable row                                       |
| `--media-bg-selected`           | Fill of a selected row (checked, pressed, or aria-selected)                                                         |
| `--media-border-color-selected` | Outline color of a selected row; drawn as an inset ring so it shows even where a container has flattened the border |
| `--media-disabled-opacity`      | Dimming applied to a disabled selectable row                                                                        |
