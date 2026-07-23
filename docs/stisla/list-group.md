# List group

A container that stacks rows on one shared rounded surface.

## Basic

Add `.list-group` to the wrapper and drop`.list-group__item` rows inside. The item is a plain flex row for simple content, so compose it freely and push a trailing value to the end with a utility such as `.ms-auto`. The container owns the frame and draws a divider between rows, so each row sits flush while the end rows round to the container corners. A leading icon lines up on its own. Any list element works (`<ul>`,`<ol>`, or a `<div>`).

- Phone+62 812 3456 789
- Emailsteven@meridian.com
- LocationSan Diego, US

```
<ul class="list-group max-w-sm w-full">
  <li class="list-group__item">
    <i data-lucide="phone"></i>
    <span>Phone</span>
    <span class="ms-auto text-muted-foreground">+62 812 3456 789</span>
  </li>
  <li class="list-group__item">
    <i data-lucide="mail"></i>
    <span>Email</span>
    <span class="ms-auto text-muted-foreground">steven@meridian.com</span>
  </li>
  <li class="list-group__item">
    <i data-lucide="map-pin"></i>
    <span>Location</span>
    <span class="ms-auto text-muted-foreground">San Diego, US</span>
  </li>
</ul>
```

## Seamless

Add `.list-group--seamless` to drop the outer frame and radius while keeping the dividers. Reach for it when the list sits inside something that already owns a frame, such as a card body, a drawer, or a popover, so the rows blend into the parent surface.

- Subtotal$248.00
- Shipping$12.00
- Estimated tax$20.80
- Total$280.80

```
<ul class="list-group list-group--seamless max-w-sm w-full">
  <li class="list-group__item"><span>Subtotal</span><span class="ms-auto text-muted-foreground">$248.00</span></li>
  <li class="list-group__item"><span>Shipping</span><span class="ms-auto text-muted-foreground">$12.00</span></li>
  <li class="list-group__item"><span>Estimated tax</span><span class="ms-auto text-muted-foreground">$20.80</span></li>
  <li class="list-group__item"><span class="font-semibold">Total</span><span class="ms-auto font-semibold">$280.80</span></li>
</ul>
```

## Media rows

When a row needs more than a line of text, use a `.media`object instead of a plain item. It carries a leading glyph, a title and helper line, and a trailing action, and the container flattens and divides it the same way. Dropped as a direct child of a`.card`, the list group sheds its own outer chrome and the card owns the frame.

Integrations

- GitHubSync issues and pull requests into your board.Disconnect
- SlackPost deploy and incident alerts to a channel.Disconnect
- Google DriveAttach files from Drive to any record.Connect

```
<div class="card max-w-xl w-full">
  <div class="card__header">Integrations</div>
  <ul class="list-group">
    <li class="media">
      <span class="media__figure"><span class="icon-box"><i data-lucide="github"></i></span></span>
      <span class="media__content">
        <span class="media__title">GitHub</span>
        <span class="media__description">Sync issues and pull requests into your board.</span>
      </span>
      <span class="media__action"><button type="button" class="button button--outline button--neutral button--sm">Disconnect</button></span>
    </li>
    <li class="media">
      <span class="media__figure"><span class="icon-box"><i data-lucide="slack"></i></span></span>
      <span class="media__content">
        <span class="media__title">Slack</span>
        <span class="media__description">Post deploy and incident alerts to a channel.</span>
      </span>
      <span class="media__action"><button type="button" class="button button--outline button--neutral button--sm">Disconnect</button></span>
    </li>
    <li class="media">
      <span class="media__figure"><span class="icon-box"><i data-lucide="hard-drive"></i></span></span>
      <span class="media__content">
        <span class="media__title">Google Drive</span>
        <span class="media__description">Attach files from Drive to any record.</span>
      </span>
      <span class="media__action"><button type="button" class="button button--primary button--sm">Connect</button></span>
    </li>
  </ul>
</div>
```

## Single choice

Give each row `.media--selectable` and wrap it in a`<label>` around a native `.radio`, and the whole list becomes a choice group. The selected row fills and rings in the accent color; where two selected rows sit next to each other, their borders collapse into a single shared divider.

StarterFor a solo project getting off the ground.$0ProFor a growing team shipping every week.$29BusinessSSO, audit logs, and priority support.$99

```
<div class="list-group max-w-md w-full" role="radiogroup" aria-label="Plan">
  <label class="media media--selectable">
    <span class="media__figure"><span class="icon-box"><i data-lucide="sprout"></i></span></span>
    <span class="media__content">
      <span class="media__title">Starter</span>
      <span class="media__description">For a solo project getting off the ground.</span>
    </span>
    <span class="media__action">
      <span class="font-semibold">$0</span>
      <input class="radio" type="radio" name="plan" aria-label="Starter">
    </span>
  </label>
  <label class="media media--selectable">
    <span class="media__figure"><span class="icon-box icon-box--primary"><i data-lucide="rocket"></i></span></span>
    <span class="media__content">
      <span class="media__title">Pro</span>
      <span class="media__description">For a growing team shipping every week.</span>
    </span>
    <span class="media__action">
      <span class="font-semibold">$29</span>
      <input class="radio" type="radio" name="plan" checked aria-label="Pro">
    </span>
  </label>
  <label class="media media--selectable">
    <span class="media__figure"><span class="icon-box"><i data-lucide="building-2"></i></span></span>
    <span class="media__content">
      <span class="media__title">Business</span>
      <span class="media__description">SSO, audit logs, and priority support.</span>
    </span>
    <span class="media__action">
      <span class="font-semibold">$99</span>
      <input class="radio" type="radio" name="plan" aria-label="Business">
    </span>
  </label>
</div>
```

## Multiple choice

Swap the radio for a `.checkbox` and the same selectable rows take many selections at once. A row whose control is`disabled` dims and stops responding while the rest stay live.

US EastVirginia · 12 msEU WestIreland · 38 msAsia PacificComing soon

```
<div class="list-group max-w-md w-full" role="group" aria-label="Deploy regions">
  <label class="media media--selectable">
    <span class="media__figure"><span class="icon-box icon-box--success"><i data-lucide="globe"></i></span></span>
    <span class="media__content">
      <span class="media__title">US East</span>
      <span class="media__meta">Virginia · 12 ms</span>
    </span>
    <span class="media__action"><input class="checkbox" type="checkbox" checked aria-label="US East"></span>
  </label>
  <label class="media media--selectable">
    <span class="media__figure"><span class="icon-box icon-box--success"><i data-lucide="globe"></i></span></span>
    <span class="media__content">
      <span class="media__title">EU West</span>
      <span class="media__meta">Ireland · 38 ms</span>
    </span>
    <span class="media__action"><input class="checkbox" type="checkbox" checked aria-label="EU West"></span>
  </label>
  <label class="media media--selectable">
    <span class="media__figure"><span class="icon-box"><i data-lucide="globe"></i></span></span>
    <span class="media__content">
      <span class="media__title">Asia Pacific</span>
      <span class="media__meta">Coming soon</span>
    </span>
    <span class="media__action"><input class="checkbox" type="checkbox" disabled aria-label="Asia Pacific"></span>
  </label>
</div>
```

## Horizontal

Use `.list-group--horizontal` to lay rows side by side; the divider moves from the row top to the row start. Pair it with`.media--vertical` rows for a divided metric strip. Add a breakpoint suffix (`-sm` through `-2xl`) to switch to the row layout only above that width.

- Revenue$48.2k+12.4%
- Orders1,284+3.1%
- Refunds27+0.8%

```
<ul class="list-group list-group--horizontal w-full">
  <li class="media media--vertical flex-1">
    <span class="media__meta">Revenue</span>
    <span class="media__title text-2xl">$48.2k</span>
    <span class="media__description text-success">+12.4%</span>
  </li>
  <li class="media media--vertical flex-1">
    <span class="media__meta">Orders</span>
    <span class="media__title text-2xl">1,284</span>
    <span class="media__description text-success">+3.1%</span>
  </li>
  <li class="media media--vertical flex-1">
    <span class="media__meta">Refunds</span>
    <span class="media__title text-2xl">27</span>
    <span class="media__description text-danger">+0.8%</span>
  </li>
</ul>
```

## Customization

These variables retune `.list-group`. Override on the root or any wrapper. To keep the frame but drop the rules between rows, set`--list-group-divider-color` to `transparent`. Row internals belong to the media component, so reach for the`--media-*` variables to restyle the rows themselves.

| Variable                             | Use                                              |
| ------------------------------------ | ------------------------------------------------ |
| `--list-group-bg`                    | Frame background                                 |
| `--list-group-border-color`          | Outer frame border color                         |
| `--list-group-border-width`          | Outer frame border thickness                     |
| `--list-group-radius`                | Outer corner radius; the end rows round to match |
| `--list-group-divider-color`         | Rule between adjacent rows                       |
| `--list-group-item-gap`              | Gap between parts of a plain item row            |
| `--list-group-item-icon-size`        | Size of a leading icon in a plain item row       |
| `--list-group-item-padding-block`    | Row vertical padding                             |
| `--list-group-item-padding-inline`   | Row horizontal padding                           |
| `--list-group-item-bg-active`        | Fill of the current or selected row              |
| `--list-group-item-disabled-opacity` | Dimming applied to a disabled row                |
