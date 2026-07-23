# Timeline

A sequence of events laid along a rail.

## Basic

Each event is a `.timeline__item` holding a `.timeline__marker` on the rail and a `.timeline__body` beside it. The rail line draws itself between markers and stops at the last one. It is pure layout with no JS; status rides an author-set`data-state` and intent rides a `.timeline__marker--*` modifier. An empty marker paints a dot on the rail. Use an `<ol>` for the root so the order carries to screen readers.

1. Today, 09:24

Signed in

Chrome on macOS from Jakarta, Indonesia.

2. Yesterday, 18:02

Password changed

Updated from the security settings page.

3. Jun 19, 2026

New device authorized

iPhone 15 added to your trusted devices.

4. Jun 16, 2026

Two-factor authentication enabled

Authenticator app linked to your account.

```
<ol class="timeline max-w-lg">
  <li class="timeline__item">
    <span class="timeline__marker"></span>
    <div class="timeline__body">
      <div class="timeline__time">Today, 09:24</div>
      <div class="timeline__title">Signed in</div>
      <div class="timeline__text">Chrome on macOS from Jakarta, Indonesia.</div>
    </div>
  </li>
  <li class="timeline__item">
    <span class="timeline__marker"></span>
    <div class="timeline__body">
      <div class="timeline__time">Yesterday, 18:02</div>
      <div class="timeline__title">Password changed</div>
      <div class="timeline__text">Updated from the security settings page.</div>
    </div>
  </li>
  <li class="timeline__item">
    <span class="timeline__marker"></span>
    <div class="timeline__body">
      <div class="timeline__time">Jun 19, 2026</div>
      <div class="timeline__title">New device authorized</div>
      <div class="timeline__text">iPhone 15 added to your trusted devices.</div>
    </div>
  </li>
  <li class="timeline__item">
    <span class="timeline__marker"></span>
    <div class="timeline__body">
      <div class="timeline__time">Jun 16, 2026</div>
      <div class="timeline__title">Two-factor authentication enabled</div>
      <div class="timeline__text">Authenticator app linked to your account.</div>
    </div>
  </li>
</ol>
```

## Icon and avatar markers

Drop an icon inside a marker for a system event or an avatar for a person. Every marker is the same size, so they line up however you mix them; bump `--timeline-marker-size` on the root to scale them together. Avatars and images sit on the rail directly, without the tinted ring an icon marker gets.

1. ![](https://i.pravatar.cc/96?img=47)MT

11:40

Maya opened this pull request

Add a Google OAuth provider for sign-in. #482

2. 12:15

3 commits pushed

Rebased onto main and resolved the merge conflicts.

3. 12:41

All checks passed

Lint, unit, and end-to-end suites are green.

4. ![](https://i.pravatar.cc/96?img=32)PR

13:08

Priya merged into main

Squashed 3 commits and closed the pull request.

```
<ol class="timeline max-w-lg" style="--timeline-marker-size: 2.5rem;">
  <li class="timeline__item">
    <span class="timeline__marker">
      <span class="avatar avatar--circle" data-stisla-avatar>
        <img class="avatar__image" src="https://i.pravatar.cc/96?img=47" alt="">
        <span class="avatar__fallback">MT</span>
      </span>
    </span>
    <div class="timeline__body">
      <div class="timeline__time">11:40</div>
      <div class="timeline__title">Maya opened this pull request</div>
      <div class="timeline__text">Add a Google OAuth provider for sign-in. #482</div>
    </div>
  </li>
  <li class="timeline__item">
    <span class="timeline__marker"><i data-lucide="git-commit-horizontal"></i></span>
    <div class="timeline__body">
      <div class="timeline__time">12:15</div>
      <div class="timeline__title">3 commits pushed</div>
      <div class="timeline__text">Rebased onto main and resolved the merge conflicts.</div>
    </div>
  </li>
  <li class="timeline__item">
    <span class="timeline__marker timeline__marker--success"><i data-lucide="check"></i></span>
    <div class="timeline__body">
      <div class="timeline__time">12:41</div>
      <div class="timeline__title">All checks passed</div>
      <div class="timeline__text">Lint, unit, and end-to-end suites are green.</div>
    </div>
  </li>
  <li class="timeline__item">
    <span class="timeline__marker">
      <span class="avatar avatar--circle" data-stisla-avatar>
        <img class="avatar__image" src="https://i.pravatar.cc/96?img=32" alt="">
        <span class="avatar__fallback">PR</span>
      </span>
    </span>
    <div class="timeline__body">
      <div class="timeline__time">13:08</div>
      <div class="timeline__title">Priya merged into main</div>
      <div class="timeline__text">Squashed 3 commits and closed the pull request.</div>
    </div>
  </li>
</ol>
```

## Status

Set `data-state` on an item to show where it sits in a process. A`complete` step fills its marker and keeps the rail solid, `current`rings the marker and dashes the rail leaving it, and `pending` mutes the marker and dashes the rest.

1. Jun 20, 09:12

Order placed

Order #ATL-2918 confirmed.

2. Jun 20, 09:13

Payment received

Visa ending in 4242.

3. Jun 21, 14:30

Packed at the warehouse

Handed to the courier in Bekasi.

4. Today, 08:05

Out for delivery

The courier is on the way and arrives by 6 PM.

5. Estimated today

Delivered

Left at the front door with a photo.

```
<ol class="timeline max-w-lg">
  <li class="timeline__item" data-state="complete">
    <span class="timeline__marker"><i data-lucide="check"></i></span>
    <div class="timeline__body">
      <div class="timeline__time">Jun 20, 09:12</div>
      <div class="timeline__title">Order placed</div>
      <div class="timeline__text">Order #ATL-2918 confirmed.</div>
    </div>
  </li>
  <li class="timeline__item" data-state="complete">
    <span class="timeline__marker"><i data-lucide="credit-card"></i></span>
    <div class="timeline__body">
      <div class="timeline__time">Jun 20, 09:13</div>
      <div class="timeline__title">Payment received</div>
      <div class="timeline__text">Visa ending in 4242.</div>
    </div>
  </li>
  <li class="timeline__item" data-state="complete">
    <span class="timeline__marker"><i data-lucide="package"></i></span>
    <div class="timeline__body">
      <div class="timeline__time">Jun 21, 14:30</div>
      <div class="timeline__title">Packed at the warehouse</div>
      <div class="timeline__text">Handed to the courier in Bekasi.</div>
    </div>
  </li>
  <li class="timeline__item" data-state="current">
    <span class="timeline__marker"><i data-lucide="truck"></i></span>
    <div class="timeline__body">
      <div class="timeline__time">Today, 08:05</div>
      <div class="timeline__title">Out for delivery</div>
      <div class="timeline__text">The courier is on the way and arrives by 6 PM.</div>
    </div>
  </li>
  <li class="timeline__item" data-state="pending">
    <span class="timeline__marker"><i data-lucide="house"></i></span>
    <div class="timeline__body">
      <div class="timeline__time">Estimated today</div>
      <div class="timeline__title">Delivered</div>
      <div class="timeline__text">Left at the front door with a photo.</div>
    </div>
  </li>
</ol>
```

## Time at the bottom

The body is a plain stack, so the time sits wherever you place it. Lead with the title and drop `.timeline__time` to the last line when it reads better as a caption. The marker aligns to the first line.

1. v2.4.1

Fixed a rounding error in multi-currency invoices and sped up the dashboard's first paint.

Released Jun 22, 2026

2. v2.4.0

Added saved views to the reports table and a dark theme for the mobile app.

Released Jun 15, 2026

3. v2.3.9

Security patch for the session cookie and minor copy fixes across settings.

Released Jun 8, 2026

```
<ol class="timeline max-w-lg">
  <li class="timeline__item">
    <span class="timeline__marker"><i data-lucide="tag"></i></span>
    <div class="timeline__body">
      <div class="timeline__title">v2.4.1</div>
      <div class="timeline__text">Fixed a rounding error in multi-currency invoices and sped up the dashboard's first paint.</div>
      <div class="timeline__time">Released Jun 22, 2026</div>
    </div>
  </li>
  <li class="timeline__item">
    <span class="timeline__marker"><i data-lucide="tag"></i></span>
    <div class="timeline__body">
      <div class="timeline__title">v2.4.0</div>
      <div class="timeline__text">Added saved views to the reports table and a dark theme for the mobile app.</div>
      <div class="timeline__time">Released Jun 15, 2026</div>
    </div>
  </li>
  <li class="timeline__item">
    <span class="timeline__marker"><i data-lucide="tag"></i></span>
    <div class="timeline__body">
      <div class="timeline__title">v2.3.9</div>
      <div class="timeline__text">Security patch for the session cookie and minor copy fixes across settings.</div>
      <div class="timeline__time">Released Jun 8, 2026</div>
    </div>
  </li>
</ol>
```

## Marker colors

Add a `.timeline__marker--*` modifier to color a marker for a fixed meaning. Color is separate from status, so a marker can carry an intent color whether or not the item has a`data-state`. For a one-off color, set `--timeline-marker-color` on the item instead.

1. Today, 10:02

Deployed v2.4.1 to production

Shipped by the pipeline. No errors in the first hour.

2. Today, 08:47

Build failed on v2.4.0

Unit tests broke in the billing module.

3. Yesterday, 22:15

Rolled back to v2.3.9

Reverted after a spike in 500 responses.

4. Yesterday, 16:40

Deployed v2.4.2 to staging

Waiting on QA before the production push.

```
<ol class="timeline max-w-lg">
  <li class="timeline__item">
    <span class="timeline__marker timeline__marker--success"><i data-lucide="rocket"></i></span>
    <div class="timeline__body">
      <div class="timeline__time">Today, 10:02</div>
      <div class="timeline__title">Deployed v2.4.1 to production</div>
      <div class="timeline__text">Shipped by the pipeline. No errors in the first hour.</div>
    </div>
  </li>
  <li class="timeline__item">
    <span class="timeline__marker timeline__marker--danger"><i data-lucide="x"></i></span>
    <div class="timeline__body">
      <div class="timeline__time">Today, 08:47</div>
      <div class="timeline__title">Build failed on v2.4.0</div>
      <div class="timeline__text">Unit tests broke in the billing module.</div>
    </div>
  </li>
  <li class="timeline__item">
    <span class="timeline__marker timeline__marker--warning"><i data-lucide="rotate-ccw"></i></span>
    <div class="timeline__body">
      <div class="timeline__time">Yesterday, 22:15</div>
      <div class="timeline__title">Rolled back to v2.3.9</div>
      <div class="timeline__text">Reverted after a spike in 500 responses.</div>
    </div>
  </li>
  <li class="timeline__item">
    <span class="timeline__marker timeline__marker--info"><i data-lucide="flask-conical"></i></span>
    <div class="timeline__body">
      <div class="timeline__time">Yesterday, 16:40</div>
      <div class="timeline__title">Deployed v2.4.2 to staging</div>
      <div class="timeline__text">Waiting on QA before the production push.</div>
    </div>
  </li>
</ol>
```

## Alternate

Add `.timeline--alternate` to center the rail and place events on either side of it. It needs room, so on a narrow screen it folds back to the standard left rail. Status and marker content work the same way.

1. 1

Q1 2026

Private beta

Closed beta with 50 design partners.

2. 2

Q2 2026

Public launch

Open sign-ups and the v1 dashboard.

3. 3

Q3 2026

Mobile apps

iOS and Android, built on the same API.

4. 4

Q4 2026

Team workspaces

Shared projects and role-based access.

```
<ol class="timeline timeline--alternate">
  <li class="timeline__item" data-state="complete">
    <span class="timeline__marker">1</span>
    <div class="timeline__body">
      <div class="timeline__time">Q1 2026</div>
      <div class="timeline__title">Private beta</div>
      <div class="timeline__text">Closed beta with 50 design partners.</div>
    </div>
  </li>
  <li class="timeline__item" data-state="current">
    <span class="timeline__marker">2</span>
    <div class="timeline__body">
      <div class="timeline__time">Q2 2026</div>
      <div class="timeline__title">Public launch</div>
      <div class="timeline__text">Open sign-ups and the v1 dashboard.</div>
    </div>
  </li>
  <li class="timeline__item" data-state="pending">
    <span class="timeline__marker">3</span>
    <div class="timeline__body">
      <div class="timeline__time">Q3 2026</div>
      <div class="timeline__title">Mobile apps</div>
      <div class="timeline__text">iOS and Android, built on the same API.</div>
    </div>
  </li>
  <li class="timeline__item" data-state="pending">
    <span class="timeline__marker">4</span>
    <div class="timeline__body">
      <div class="timeline__time">Q4 2026</div>
      <div class="timeline__title">Team workspaces</div>
      <div class="timeline__text">Shared projects and role-based access.</div>
    </div>
  </li>
</ol>
```

## Customization

These variables retune `.timeline` without touching component CSS. Set them on the timeline, a parent scope, or `:root`. The marker color also reads on a single`.timeline__item`, which is how the intent modifiers and a one-off override work. For a neutral activity feed, set `--timeline-marker-color` to`var(--color-muted-foreground)` on the root.

### Geometry

| Variable                     | Use                                                                                   |
| ---------------------------- | ------------------------------------------------------------------------------------- |
| `--timeline-marker-size`     | Marker size; every marker is a circle of this size and one value scales them all      |
| `--timeline-dot-size`        | Diameter of the dot shown when a marker is empty                                      |
| `--timeline-connector-width` | Thickness of the rail line                                                            |
| `--timeline-connector-gap`   | Space between a marker and the line at both ends of each segment                      |
| `--timeline-connector-style` | Rail line style; solid by default, the current and pending states switch it to dashed |
| `--timeline-gutter`          | Space between the rail and the event body                                             |
| `--timeline-gap`             | Vertical space between events                                                         |

### Paint

| Variable                           | Use                                                                                                   |
| ---------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `--timeline-marker-color`          | Marker fill, dot, and tint; the intent modifiers set this and an item-level override wins for one row |
| `--timeline-marker-color-emphasis` | Glyph colour inside a tinted marker; intents set it from `--color-<intent>-emphasis` for AA contrast  |
| `--timeline-marker-ring`           | Ring color around a current marker                                                                    |
| `--timeline-marker-ring-size`      | Static halo thickness on a current marker                                                             |
| `--timeline-ping-duration`         | How long one ping of a current marker takes; dropped under reduced motion                             |
| `--timeline-connector-color`       | Rail line color                                                                                       |
