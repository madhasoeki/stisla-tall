# Link

An inline anchor with the primary color, underline, and hover tint.

## Basic

Add `.link` to an `<a>` in app UI. Reboot strips anchor styling globally so a bare `<a>`renders as inherited text; `.link` opts back into the primary-colored underline.

Settings have moved under [Workspace preferences](https://stisla.dev/docs/vanilla/link#).

```
<p>Settings have moved under <a class="link" href="#">Workspace preferences</a>.</p>
```

## With icon

The link is an inline flex row, so a leading or trailing icon lines up with the label and picks up the link color.

[Documentation](https://stisla.dev/docs/vanilla/link#) [Open in new tab](https://stisla.dev/docs/vanilla/link#)

```
<a class="link" href="#">Documentation <i data-lucide="arrow-up-right"></i></a>
<a class="link" href="#"><i data-lucide="external-link"></i> Open in new tab</a>
```

## Retune color

Override `--link-color` on the element, a parent scope, or`:root`. The hover color derives from`--link-color` by default, so a single override moves both states. Set `--link-color-hover` directly to break that derivation.

Pair tone with intent.
[Backup succeeded](https://stisla.dev/docs/vanilla/link#),
[three checks failed](https://stisla.dev/docs/vanilla/link#),
[two queued](https://stisla.dev/docs/vanilla/link#).

```
<p>
  Pair tone with intent.
  <a class="link" style="--link-color: var(--color-success);" href="#">Backup succeeded</a>,
  <a class="link" style="--link-color: var(--color-danger);" href="#">three checks failed</a>,
  <a class="link" style="--link-color: var(--color-warning);" href="#">two queued</a>.
</p>
```

## Customization

These variables retune `.link`. The hover color resolves from `--link-color` at component definition, so overriding the color auto-moves the hover.

| Variable                      | Use                                                                            |
| ----------------------------- | ------------------------------------------------------------------------------ |
| `--link-color`                | Resting text color and the source for the hover mix                            |
| `--link-gap`                  | Space between the label and a leading or trailing icon                         |
| `--link-decoration-offset`    | Distance between the baseline and the underline                                |
| `--link-decoration-thickness` | Underline weight                                                               |
| `--link-color-hover`          | Hover color; derives from `--link-color` by default, override to pin a literal |
