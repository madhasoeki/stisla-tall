# Drawer

An edge-anchored panel for side drawers, filters, and quick captures.

## Basic

A trigger opens the panel via`data-stisla-drawer-trigger="<id>"`. The panel itself is a `.drawer` with an optional`.drawer__header`, a `.drawer__body`, and an optional `.drawer__footer`. The dismiss control is`.drawer__close`, an inline ghost icon button at the trailing edge of the header row. Default placement is the right edge.

### New task

## New task

Title

Description

Due

PriorityLowMediumHigh

CancelCreate task

```
<button type="button" class="button button--primary" data-stisla-drawer-trigger="drawerBasic">New task</button>

<div class="drawer" id="drawerBasic" data-stisla-drawer aria-labelledby="drawerBasicLabel">
  <div class="drawer__backdrop" data-stisla-drawer-dismiss></div>
  <div class="drawer__content">
    <div class="drawer__header">
      <h2 class="drawer__title" id="drawerBasicLabel">New task</h2>
      <button type="button" class="drawer__close" data-stisla-drawer-dismiss aria-label="Close"><i data-lucide="x"></i></button>
    </div>
    <div class="drawer__body">
      <div class="field mb-4">
        <label for="taskTitle" class="field__label">Title</label>
        <input type="text" class="input" id="taskTitle" placeholder="Write the launch announcement" />
      </div>
      <div class="field mb-4">
        <label for="taskDesc" class="field__label">Description</label>
        <textarea class="textarea" id="taskDesc" rows="4" placeholder="Anything the assignee should know before they start."></textarea>
      </div>
      <div class="grid grid-cols-2 gap-3">
        <div class="field">
          <label for="taskDue" class="field__label">Due</label>
          <input type="date" class="input" id="taskDue" />
        </div>
        <div class="field">
          <label for="taskPriority" class="field__label">Priority</label>
          <select class="select" id="taskPriority">
            <option>Low</option>
            <option selected>Medium</option>
            <option>High</option>
          </select>
        </div>
      </div>
    </div>
    <div class="drawer__footer">
      <button type="button" class="button button--ghost button--neutral" data-stisla-drawer-dismiss>Cancel</button>
      <button type="button" class="button button--primary" data-stisla-drawer-dismiss>Create task</button>
    </div>
  </div>
</div>
```

## Keyboard

In the default modal mode, focus is trapped inside the drawer while it's open. On open, focus lands on the first element marked`autofocus`, falling back to `.drawer__close`; on close, focus returns to the trigger that opened it. Non-modal drawers (the No backdrop variant) skip the focus trap so the rest of the page stays reachable.

- `Tab`: cycle focus forward through focusable controls (wraps to the first in modal mode)
- `Shift` \+ `Tab`: cycle focus backward (wraps to the last in modal mode)
- `Escape`: dismiss the drawer (unless the backdrop is static, see Static backdrop below)

## Placements

Four modifiers anchor the panel to a viewport edge.`.drawer--start` slides in from the left,`.drawer--end` from the right, `.drawer--top`from above, `.drawer--bottom` from below. Start and end take a fixed width, top and bottom take a fixed height. Bare`.drawer` behaves as end.

StartEndTopBottom

## Account

- Profile

Name, avatar, bio

- Notifications

Email, push, digest

- Billing

Plan, invoices, payment method

- Security

Password, 2FA, sessions

## Notifications

Deploy finished

Build #2147 shipped to production in 4m 12s.

2 minutes ago

Amelia replied

Let's pair on the cart bug tomorrow morning.

12 minutes ago

Disk above 80%

db-primary-2 is at 84% used. Consider expanding the volume.

35 minutes ago

## What's new in June

New

Bulk reassign

Move many tasks to a new owner in one go from the board view.

Improved

Faster search

Workspace search now returns results in under 100ms for most queries.

Fixed

Recurring task DST

Recurring tasks no longer drift by an hour around daylight saving.

## Share this report

Copy link

Email Slack Download PDF Print

```
<button type="button" class="button button--outline button--neutral" data-stisla-drawer-trigger="drawerStart">Start</button>
<button type="button" class="button button--outline button--neutral" data-stisla-drawer-trigger="drawerEnd">End</button>
<button type="button" class="button button--outline button--neutral" data-stisla-drawer-trigger="drawerTop">Top</button>
<button type="button" class="button button--outline button--neutral" data-stisla-drawer-trigger="drawerBottom">Bottom</button>

<div class="drawer drawer--start" id="drawerStart" data-stisla-drawer>
  <div class="drawer__backdrop" data-stisla-drawer-dismiss></div>
  <div class="drawer__content">
    <div class="drawer__header">
      <h2 class="drawer__title">Account</h2>
      <button type="button" class="drawer__close" data-stisla-drawer-dismiss aria-label="Close"><i data-lucide="x"></i></button>
    </div>
    <div class="drawer__body p-0">
      <ul class="list-group list-group--seamless">
        <li class="media">
          <span class="media__figure"><span class="icon-box icon-box--primary"><i data-lucide="user"></i></span></span>
          <div class="media__content"><div class="media__title">Profile</div><div class="media__description">Name, avatar, bio</div></div>
          <div class="media__action"><i data-lucide="chevron-right" width="18" class="text-muted-foreground"></i></div>
        </li>
        <li class="media">
          <span class="media__figure"><span class="icon-box icon-box--info"><i data-lucide="bell"></i></span></span>
          <div class="media__content"><div class="media__title">Notifications</div><div class="media__description">Email, push, digest</div></div>
          <div class="media__action"><i data-lucide="chevron-right" width="18" class="text-muted-foreground"></i></div>
        </li>
        <li class="media">
          <span class="media__figure"><span class="icon-box icon-box--warning"><i data-lucide="credit-card"></i></span></span>
          <div class="media__content"><div class="media__title">Billing</div><div class="media__description">Plan, invoices, payment method</div></div>
          <div class="media__action"><i data-lucide="chevron-right" width="18" class="text-muted-foreground"></i></div>
        </li>
        <li class="media">
          <span class="media__figure"><span class="icon-box"><i data-lucide="shield"></i></span></span>
          <div class="media__content"><div class="media__title">Security</div><div class="media__description">Password, 2FA, sessions</div></div>
          <div class="media__action"><i data-lucide="chevron-right" width="18" class="text-muted-foreground"></i></div>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="drawer drawer--end" id="drawerEnd" data-stisla-drawer>
  <div class="drawer__backdrop" data-stisla-drawer-dismiss></div>
  <div class="drawer__content">
    <div class="drawer__header">
      <h2 class="drawer__title">Notifications</h2>
      <button type="button" class="drawer__close" data-stisla-drawer-dismiss aria-label="Close"><i data-lucide="x"></i></button>
    </div>
    <div class="drawer__body">
      <div class="flex flex-wrap md:flex-nowrap gap-3 mb-4 pb-4 border-b border-[var(--color-border)]">
        <span class="media__figure"><span class="icon-box icon-box--success icon-box--circle shrink-0"><i data-lucide="check"></i></span></span>
        <div>
          <div class="font-medium">Deploy finished</div>
          <p class="text-muted-foreground m-0 mb-1 text-sm">Build #2147 shipped to production in 4m 12s.</p>
          <span class="text-sm text-muted-foreground">2 minutes ago</span>
        </div>
      </div>
      <div class="flex flex-wrap md:flex-nowrap gap-3 mb-4 pb-4 border-b border-[var(--color-border)]">
        <span class="media__figure"><span class="icon-box icon-box--info icon-box--circle shrink-0"><i data-lucide="message-square"></i></span></span>
        <div>
          <div class="font-medium">Amelia replied</div>
          <p class="text-muted-foreground m-0 mb-1 text-sm">Let's pair on the cart bug tomorrow morning.</p>
          <span class="text-sm text-muted-foreground">12 minutes ago</span>
        </div>
      </div>
      <div class="flex flex-wrap md:flex-nowrap gap-3">
        <span class="media__figure"><span class="icon-box icon-box--warning icon-box--circle shrink-0"><i data-lucide="triangle-alert"></i></span></span>
        <div>
          <div class="font-medium">Disk above 80%</div>
          <p class="text-muted-foreground m-0 mb-1 text-sm">db-primary-2 is at 84% used. Consider expanding the volume.</p>
          <span class="text-sm text-muted-foreground">35 minutes ago</span>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="drawer drawer--top" id="drawerTop" data-stisla-drawer style="--drawer-height: 16rem">
  <div class="drawer__backdrop" data-stisla-drawer-dismiss></div>
  <div class="drawer__content">
    <div class="drawer__header">
      <h2 class="drawer__title">What's new in June</h2>
      <button type="button" class="drawer__close" data-stisla-drawer-dismiss aria-label="Close"><i data-lucide="x"></i></button>
    </div>
    <div class="drawer__body">
      <div class="grid md:grid-cols-3 gap-3">
        <div>
          <span class="badge badge--primary mb-2">New</span>
          <div class="font-medium mb-1">Bulk reassign</div>
          <p class="text-muted-foreground m-0 text-sm">Move many tasks to a new owner in one go from the board view.</p>
        </div>
        <div>
          <span class="badge badge--success mb-2">Improved</span>
          <div class="font-medium mb-1">Faster search</div>
          <p class="text-muted-foreground m-0 text-sm">Workspace search now returns results in under 100ms for most queries.</p>
        </div>
        <div>
          <span class="badge badge--warning mb-2">Fixed</span>
          <div class="font-medium mb-1">Recurring task DST</div>
          <p class="text-muted-foreground m-0 text-sm">Recurring tasks no longer drift by an hour around daylight saving.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="drawer drawer--bottom" id="drawerBottom" data-stisla-drawer style="--drawer-height: 14rem">
  <div class="drawer__backdrop" data-stisla-drawer-dismiss></div>
  <div class="drawer__content">
    <div class="drawer__header">
      <div class="flex flex-wrap mx-auto w-full items-center max-w-[30rem]">
        <h2 class="drawer__title">Share this report</h2>
        <button type="button" class="drawer__close" data-stisla-drawer-dismiss aria-label="Close"><i data-lucide="x"></i></button>
      </div>
    </div>
    <div class="drawer__body">
      <div class="mx-auto w-full max-w-[30rem]">
        <div class="input-group mb-4">
          <input type="text" class="input" value="https://app.example.com/r/q3-revenue" readonly />
          <button class="button button--outline button--neutral" type="button">Copy link</button>
        </div>
        <div class="flex flex-wrap items-center gap-2">
          <button type="button" class="button button--outline button--neutral"><i data-lucide="mail"></i> Email</button>
          <button type="button" class="button button--outline button--neutral"><i data-lucide="message-circle"></i> Slack</button>
          <button type="button" class="button button--outline button--neutral"><i data-lucide="download"></i> Download PDF</button>
          <button type="button" class="button button--outline button--neutral"><i data-lucide="printer"></i> Print</button>
        </div>
      </div>
    </div>
  </div>
</div>
```

## Floating

Add `.drawer--floating` to detach the panel from the viewport. It gains a gap on every side, rounded corners, and a full border so it reads as a raised card instead of a flush sheet. The modifier stacks onto any placement. Tune the breathing room with`--drawer-gap` and the corners with`--drawer-radius`.

StartEndBottom

## Invite people

Send an invite and they'll join the workspace right away.

Email

RoleMemberAdminViewer

CancelSend invite

## Help & resources

- Documentation

Guides and API reference

- Contact support

Replies within a day

- Keyboard shortcuts

Work faster with hotkeys

## Cookie preferences

We use cookies to keep you signed in, remember your preferences, and understand how the app is used.

Reject allAccept all

```
<button type="button" class="button button--outline button--neutral" data-stisla-drawer-trigger="drawerFloatStart">Start</button>
<button type="button" class="button button--outline button--neutral" data-stisla-drawer-trigger="drawerFloatEnd">End</button>
<button type="button" class="button button--outline button--neutral" data-stisla-drawer-trigger="drawerFloatBottom">Bottom</button>

<div class="drawer drawer--floating drawer--start" id="drawerFloatStart" data-stisla-drawer>
  <div class="drawer__backdrop" data-stisla-drawer-dismiss></div>
  <div class="drawer__content">
    <div class="drawer__header">
      <h2 class="drawer__title">Invite people</h2>
      <button type="button" class="drawer__close" data-stisla-drawer-dismiss aria-label="Close"><i data-lucide="x"></i></button>
    </div>
    <div class="drawer__body">
      <p class="text-muted-foreground">Send an invite and they'll join the workspace right away.</p>
      <div class="field mb-4">
        <label for="inviteEmail" class="field__label">Email</label>
        <input type="email" class="input" id="inviteEmail" placeholder="teammate@example.com" />
      </div>
      <div class="field">
        <label for="inviteRole" class="field__label">Role</label>
        <select class="select" id="inviteRole">
          <option selected>Member</option>
          <option>Admin</option>
          <option>Viewer</option>
        </select>
      </div>
    </div>
    <div class="drawer__footer">
      <button type="button" class="button button--ghost button--neutral" data-stisla-drawer-dismiss>Cancel</button>
      <button type="button" class="button button--primary" data-stisla-drawer-dismiss>Send invite</button>
    </div>
  </div>
</div>
<div class="drawer drawer--floating" id="drawerFloatEnd" data-stisla-drawer>
  <div class="drawer__backdrop" data-stisla-drawer-dismiss></div>
  <div class="drawer__content">
    <div class="drawer__header">
      <h2 class="drawer__title">Help &amp; resources</h2>
      <button type="button" class="drawer__close" data-stisla-drawer-dismiss aria-label="Close"><i data-lucide="x"></i></button>
    </div>
    <div class="drawer__body p-0">
      <ul class="list-group list-group--seamless">
        <li class="media">
          <span class="media__figure"><span class="icon-box icon-box--primary"><i data-lucide="book-open"></i></span></span>
          <div class="media__content"><div class="media__title">Documentation</div><div class="media__description">Guides and API reference</div></div>
          <div class="media__action"><i data-lucide="chevron-right" width="18" class="text-muted-foreground"></i></div>
        </li>
        <li class="media">
          <span class="media__figure"><span class="icon-box icon-box--info"><i data-lucide="message-circle"></i></span></span>
          <div class="media__content"><div class="media__title">Contact support</div><div class="media__description">Replies within a day</div></div>
          <div class="media__action"><i data-lucide="chevron-right" width="18" class="text-muted-foreground"></i></div>
        </li>
        <li class="media">
          <span class="media__figure"><span class="icon-box icon-box--warning"><i data-lucide="keyboard"></i></span></span>
          <div class="media__content"><div class="media__title">Keyboard shortcuts</div><div class="media__description">Work faster with hotkeys</div></div>
          <div class="media__action"><i data-lucide="chevron-right" width="18" class="text-muted-foreground"></i></div>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="drawer drawer--floating drawer--bottom" id="drawerFloatBottom" data-stisla-drawer style="--drawer-height: 14rem">
  <div class="drawer__backdrop" data-stisla-drawer-dismiss></div>
  <div class="drawer__content">
    <div class="drawer__header">
      <h2 class="drawer__title">Cookie preferences</h2>
      <button type="button" class="drawer__close" data-stisla-drawer-dismiss aria-label="Close"><i data-lucide="x"></i></button>
    </div>
    <div class="drawer__body">
      <p class="text-muted-foreground m-0">We use cookies to keep you signed in, remember your preferences, and understand how the app is used.</p>
    </div>
    <div class="drawer__footer">
      <button type="button" class="button button--ghost button--neutral" data-stisla-drawer-dismiss>Reject all</button>
      <button type="button" class="button button--primary" data-stisla-drawer-dismiss>Accept all</button>
    </div>
  </div>
</div>
```

## Sized

Override `--drawer-width` (start/end) or`--drawer-height` (top/bottom) inline on the root to retune a single instance. The default width is `22rem`; this one widens to `28rem` for a roomier form layout.

Edit profile

## Edit profile

First name

Last name

Bio

Email

CancelSave changes

```
<button type="button" class="button button--primary" data-stisla-drawer-trigger="drawerSized">Edit profile</button>

<div class="drawer" id="drawerSized" data-stisla-drawer style="--drawer-width: 28rem">
  <div class="drawer__backdrop" data-stisla-drawer-dismiss></div>
  <div class="drawer__content">
    <div class="drawer__header">
      <h2 class="drawer__title">Edit profile</h2>
      <button type="button" class="drawer__close" data-stisla-drawer-dismiss aria-label="Close"><i data-lucide="x"></i></button>
    </div>
    <div class="drawer__body">
      <div class="grid grid-cols-2 gap-3">
        <div class="field">
          <label for="profileFirst" class="field__label">First name</label>
          <input type="text" class="input" id="profileFirst" value="Nauval" />
        </div>
        <div class="field">
          <label for="profileLast" class="field__label">Last name</label>
          <input type="text" class="input" id="profileLast" value="Azhar" />
        </div>
        <div class="field col-span-2">
          <label for="profileBio" class="field__label">Bio</label>
          <textarea class="textarea" id="profileBio" rows="3">Designer and maintainer of Stisla.</textarea>
        </div>
        <div class="field col-span-2">
          <label for="profileEmail" class="field__label">Email</label>
          <input type="email" class="input" id="profileEmail" value="nauvalazhar2@gmail.com" />
        </div>
      </div>
    </div>
    <div class="drawer__footer">
      <button type="button" class="button button--ghost button--neutral" data-stisla-drawer-dismiss>Cancel</button>
      <button type="button" class="button button--primary" data-stisla-drawer-dismiss>Save changes</button>
    </div>
  </div>
</div>
```

## Body scroll allowed

Set `data-stisla-drawer-scroll="true"` to let the page behind keep scrolling while the panel is open. Useful for activity feeds or reference panels that support the main task without interrupting it.

Open activity

```
<button type="button" class="button button--primary" data-stisla-drawer-trigger="drawerActivity">Open activity</button>

<aside class="drawer" id="drawerActivity" data-stisla-drawer data-stisla-drawer-scroll="true" data-stisla-drawer-backdrop="false" aria-label="Activity">
  <div class="drawer__backdrop" data-stisla-drawer-dismiss></div>
  <div class="drawer__content">
    <div class="drawer__header">
      <h2 class="drawer__title">Activity</h2>
      <button type="button" class="drawer__close" data-stisla-drawer-dismiss aria-label="Close"><i data-lucide="x"></i></button>
    </div>
    <div class="drawer__body">
      <ol class="m-0 p-0 list-none">
        <li class="flex flex-wrap items-center gap-3 mb-4">
          <div class="icon-box icon-box--primary icon-box--circle shrink-0" style="--icon-box-size: 2rem"><i data-lucide="git-commit"></i></div>
          <div><div><span class="font-medium">Amelia</span> pushed 3 commits to <code>main</code></div><span class="text-sm text-muted-foreground">9:42 AM</span></div>
        </li>
        <li class="flex flex-wrap items-center gap-3 mb-4">
          <div class="icon-box icon-box--success icon-box--circle shrink-0" style="--icon-box-size: 2rem"><i data-lucide="check"></i></div>
          <div><div><span class="font-medium">Jonas</span> completed Audit checkout copy</div><span class="text-sm text-muted-foreground">9:31 AM</span></div>
        </li>
        <li class="flex flex-wrap items-center gap-3 mb-4">
          <div class="icon-box icon-box--warning icon-box--circle shrink-0" style="--icon-box-size: 2rem"><i data-lucide="user-plus"></i></div>
          <div><div><span class="font-medium">Lena</span> joined the workspace</div><span class="text-sm text-muted-foreground">Yesterday</span></div>
        </li>
        <li class="flex flex-wrap items-center gap-3">
          <div class="icon-box icon-box--danger icon-box--circle shrink-0" style="--icon-box-size: 2rem"><i data-lucide="circle-alert"></i></div>
          <div><div>Build #2143 failed on <code>release/v2</code></div><span class="text-sm text-muted-foreground">Yesterday</span></div>
        </li>
      </ol>
    </div>
  </div>
</aside>
```

## Static backdrop

Set `data-stisla-drawer-backdrop="static"` and`data-stisla-drawer-keyboard="false"` to force a deliberate dismiss. The backdrop click shakes the panel along its slide axis instead of closing. Explicit dismiss controls still close.

Finish setup

## Finish your profile

A few details so teammates know who they're working with.

Full name

RoleEngineeringDesignProductOperations

TimezoneUTC−05:00 New YorkUTC+00:00 LondonUTC+07:00 JakartaUTC+09:00 Tokyo

Save and continue

```
<button type="button" class="button button--primary" data-stisla-drawer-trigger="drawerSetup">Finish setup</button>

<div class="drawer" id="drawerSetup" data-stisla-drawer data-stisla-drawer-backdrop="static" data-stisla-drawer-keyboard="false">
  <div class="drawer__backdrop" data-stisla-drawer-dismiss></div>
  <div class="drawer__content">
    <div class="drawer__header">
      <h2 class="drawer__title">Finish your profile</h2>
    </div>
    <div class="drawer__body">
      <p class="text-muted-foreground">A few details so teammates know who they're working with.</p>
      <div class="field mb-4">
        <label for="setupName" class="field__label">Full name</label>
        <input type="text" class="input" id="setupName" value="Nauval Azhar" />
      </div>
      <div class="field mb-4">
        <label for="setupRole" class="field__label">Role</label>
        <select class="select" id="setupRole">
          <option>Engineering</option>
          <option selected>Design</option>
          <option>Product</option>
          <option>Operations</option>
        </select>
      </div>
      <div class="field">
        <label for="setupTimezone" class="field__label">Timezone</label>
        <select class="select" id="setupTimezone">
          <option>UTC−05:00 New York</option>
          <option>UTC+00:00 London</option>
          <option selected>UTC+07:00 Jakarta</option>
          <option>UTC+09:00 Tokyo</option>
        </select>
      </div>
    </div>
    <div class="drawer__footer">
      <button type="button" class="button button--primary button--block" data-stisla-drawer-dismiss>Save and continue</button>
    </div>
  </div>
</div>
```

## No backdrop

Set `data-stisla-drawer-backdrop="false"` to drop the dim entirely so the panel sits alongside the main content. Pair with`data-stisla-drawer-scroll="true"` for filter panels and inspector strips the user wants to keep open while they read or click around.

Filters

```
<button type="button" class="button button--outline button--neutral" data-stisla-drawer-trigger="drawerFilters"><i data-lucide="filter"></i> Filters</button>

<aside class="drawer drawer--start" id="drawerFilters" data-stisla-drawer data-stisla-drawer-backdrop="false" data-stisla-drawer-scroll="true" aria-label="Filters">
  <div class="drawer__backdrop" data-stisla-drawer-dismiss></div>
  <div class="drawer__content">
    <div class="drawer__header">
      <h2 class="drawer__title">Filters</h2>
      <button type="button" class="drawer__close" data-stisla-drawer-dismiss aria-label="Close"><i data-lucide="x"></i></button>
    </div>
    <div class="drawer__body">
      <div class="mb-6">
        <div class="font-medium mb-2">Status</div>
        <div class="field">
          <div class="field__item">
            <input class="checkbox" type="checkbox" id="fStatusOpen" checked />
            <label class="field__label" for="fStatusOpen">Open</label>
          </div>
          <div class="field__item">
            <input class="checkbox" type="checkbox" id="fStatusProgress" checked />
            <label class="field__label" for="fStatusProgress">In progress</label>
          </div>
          <div class="field__item">
            <input class="checkbox" type="checkbox" id="fStatusReview" />
            <label class="field__label" for="fStatusReview">In review</label>
          </div>
          <div class="field__item">
            <input class="checkbox" type="checkbox" id="fStatusDone" />
            <label class="field__label" for="fStatusDone">Done</label>
          </div>
        </div>
      </div>
      <div class="mb-6">
        <div class="font-medium mb-2">Priority</div>
        <div class="field">
          <div class="field__item">
            <input class="checkbox" type="checkbox" id="fPriorityHigh" checked />
            <label class="field__label" for="fPriorityHigh">High</label>
          </div>
          <div class="field__item">
            <input class="checkbox" type="checkbox" id="fPriorityMed" />
            <label class="field__label" for="fPriorityMed">Medium</label>
          </div>
          <div class="field__item">
            <input class="checkbox" type="checkbox" id="fPriorityLow" />
            <label class="field__label" for="fPriorityLow">Low</label>
          </div>
        </div>
      </div>
      <div class="field">
        <label for="fAssignee" class="field__label font-medium">Assignee</label>
        <select class="select" id="fAssignee">
          <option selected>Anyone</option>
          <option>Me</option>
          <option>Amelia</option>
          <option>Jonas</option>
          <option>Priya</option>
        </select>
      </div>
    </div>
    <div class="drawer__footer">
      <button type="button" class="button button--ghost button--neutral" data-stisla-drawer-dismiss>Reset</button>
      <button type="button" class="button button--primary" data-stisla-drawer-dismiss>Apply filters</button>
    </div>
  </div>
</aside>
```

## Events

Four events fire on the `.drawer` root. The`opening` and `closing` events are cancelable.

`stisla:drawer:opening` fires before the panel slides in. Call `preventDefault()` to abort.

`stisla:drawer:opened` fires once the open transition lands and focus is in place.

`stisla:drawer:closing` fires before the panel slides out. Call `preventDefault()` to keep it open.

`stisla:drawer:closed` fires once the panel is fully hidden and (in modal mode) focus has returned to the trigger.

## Customization

Override these on the `.drawer` root (or globally) to retune a single instance.

### Geometry

| Variable                  | Use                                                 |
| ------------------------- | --------------------------------------------------- |
| `--drawer-width`          | Panel width for `--start` and `--end`(default).     |
| `--drawer-height`         | Panel height for `--top` and `--bottom`.            |
| `--drawer-padding-block`  | Top and bottom padding of the header and body.      |
| `--drawer-padding-inline` | Left and right padding of the header and body.      |
| `--drawer-gap`            | Breathing room around the panel under `--floating`. |
| `--drawer-z-index`        | Stack level. One tier below dialog.                 |

### Surface

| Variable                | Use                                                    |
| ----------------------- | ------------------------------------------------------ |
| `--drawer-bg`           | Panel fill.                                            |
| `--drawer-color`        | Panel text color.                                      |
| `--drawer-border-width` | Inner-edge border thickness; set `0` to drop it.       |
| `--drawer-border-color` | Inner-edge border (only the side facing the viewport). |
| `--drawer-radius`       | Corner radius under `--floating`.                      |
| `--drawer-shadow`       | Soft ambient shadow around the panel.                  |

### Backdrop

| Variable                 | Use                             |
| ------------------------ | ------------------------------- |
| `--drawer-backdrop-bg`   | Dim color over the page behind. |
| `--drawer-backdrop-blur` | Backdrop blur radius.           |

### Title

| Variable                     | Use                                                    |
| ---------------------------- | ------------------------------------------------------ |
| `--drawer-title-font-size`   | Pins the title size so any heading tag reads the same. |
| `--drawer-title-font-weight` | Title weight.                                          |

### Close chip

| Variable                     | Use                                   |
| ---------------------------- | ------------------------------------- |
| `--drawer-close-size`        | Width and height of the dismiss chip. |
| `--drawer-close-color`       | Resting icon color.                   |
| `--drawer-close-color-hover` | Hover and focus icon color.           |
| `--drawer-close-bg-hover`    | Hover and focus chip background.      |

| Variable                        | Use                                                                       |
| ------------------------------- | ------------------------------------------------------------------------- |
| `--drawer-footer-padding-block` | Top and bottom padding for the footer band.                               |
| `--drawer-footer-bg`            | Footer fill. Tints to the alt surface so the seam reads against the body. |
| `--drawer-footer-border-color`  | Top border of the footer band.                                            |

### Motion

| Variable                       | Use                                                                             |
| ------------------------------ | ------------------------------------------------------------------------------- |
| `--drawer-transition-duration` | Slide and backdrop fade duration. Zeroed under`prefers-reduced-motion: reduce`. |
