# Switch

A track-and-thumb toggle for on / off settings.

## Basic

Add `.switch` to an `<input type="checkbox" role="switch">`. Pair with a label the same way as Checkbox or Radio; `role="switch"` makes assistive tech announce the affordance correctly.

Notifications

Auto-update

```
<div class="field w-auto max-w-96">
  <div class="field__item">
    <input class="switch" type="checkbox" role="switch" id="defaultSwitch" />
    <label class="field__label" for="defaultSwitch">Notifications</label>
  </div>
  <div class="field__item">
    <input class="switch" type="checkbox" role="switch" id="checkedSwitch" checked />
    <label class="field__label" for="checkedSwitch">Auto-update</label>
  </div>
</div>
```

## Large

Add `.switch--lg` for a larger variant, suited to standalone settings rows where the switch is the row's primary affordance.

Notifications

Auto-update

```
<div class="field w-auto max-w-96">
  <div class="field__item">
    <input class="switch switch--lg" type="checkbox" role="switch" id="lgSwitch" />
    <label class="field__label" for="lgSwitch">Notifications</label>
  </div>
  <div class="field__item">
    <input class="switch switch--lg" type="checkbox" role="switch" id="lgSwitchOn" checked />
    <label class="field__label" for="lgSwitchOn">Auto-update</label>
  </div>
</div>
```

## Settings row

Push the switch to the row's trailing edge with a plain flex row. The label sits on the left as row content; the switch pins right as the affordance.

Email notifications

Push notifications

```
<div class="flex flex-col gap-2 w-full max-w-96">
  <div class="flex flex-wrap items-center justify-between">
    <label class="field__label" for="settingEmail">Email notifications</label>
    <input class="switch switch--lg" type="checkbox" role="switch" id="settingEmail" checked />
  </div>
  <div class="flex flex-wrap items-center justify-between">
    <label class="field__label" for="settingPush">Push notifications</label>
    <input class="switch switch--lg" type="checkbox" role="switch" id="settingPush" />
  </div>
</div>
```

## Disabled

Add `disabled` to dim the input and its label, and block interaction.

Disabled off

Disabled on

```
<div class="field w-auto max-w-96">
  <div class="field__item">
    <input class="switch" type="checkbox" role="switch" id="disabledSwitchOff" disabled />
    <label class="field__label" for="disabledSwitchOff">Disabled off</label>
  </div>
  <div class="field__item">
    <input class="switch" type="checkbox" role="switch" id="disabledSwitchOn" checked disabled />
    <label class="field__label" for="disabledSwitchOn">Disabled on</label>
  </div>
</div>
```

## Without label

The `.switch` input stands on its own. Always pair with an `aria-label`.

```
<input class="switch" type="checkbox" role="switch" aria-label="Bare switch off" />
<input class="switch" type="checkbox" role="switch" aria-label="Bare switch on" checked />
```

## Browser validation

Pair `required` with the native `:user-invalid` pseudo. The browser fires it after the user interacts with the field, and clears it the moment the switch is on. Use for inline validation where the affordance owns its own state.

Enable two-factor (required)

```
<div class="field w-auto max-w-96">
  <div class="field__item">
    <input class="switch" type="checkbox" role="switch" id="reqSwitch" required />
    <label class="field__label" for="reqSwitch">Enable two-factor (required)</label>
  </div>
</div>
```

The track looks valid until you interact. Click it once then click away to trigger`:user-invalid`. Toggle it on and the red clears.

## Server validation

Set `aria-invalid="true"` from your form library. The track fill follows the on/off semantic; the border carries the invalid signal, so both compose at once.

Two-factor must be enabled

Enabled (server still flagged)

```
<div class="field w-auto max-w-96">
  <div class="field__item">
    <input class="switch" type="checkbox" role="switch" id="srvSwitch" aria-invalid="true" />
    <label class="field__label" for="srvSwitch">Two-factor must be enabled</label>
  </div>
  <div class="field__item">
    <input class="switch" type="checkbox" role="switch" id="srvSwitchOn" aria-invalid="true" checked />
    <label class="field__label" for="srvSwitchOn">Enabled (server still flagged)</label>
  </div>
</div>
```

## Customization

These variables retune `.switch` without touching component CSS. Override on the switch, a parent scope, or `:root`.

| Variable                | Use                                                                                               |
| ----------------------- | ------------------------------------------------------------------------------------------------- |
| `--switch-track-width`  | Track width; the lg variant reassigns this                                                        |
| `--switch-track-height` | Track height                                                                                      |
| `--switch-thumb-size`   | Thumb diameter                                                                                    |
| `--switch-inset`        | Visible gap between thumb edge and track edge                                                     |
| `--switch-radius`       | Track corner radius; pill by default, set a smaller value to flatten                              |
| `--switch-off-bg`       | Off-state track; a mid-gray that adapts per theme so the white thumb stays readable in both modes |
| `--switch-on-bg`        | On-state track                                                                                    |
| `--switch-thumb-color`  | Thumb fill (white literal so it reads on both track states in both themes)                        |
| `--switch-thumb-paint`  | Thumb shape; default is a radial-gradient circle, swap to a linear-gradient for a square thumb    |
