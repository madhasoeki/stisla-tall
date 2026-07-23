# Kbd

A chip that labels a keyboard key or shortcut.

## Basic

Add `.kbd` to a `<kbd>` (or any inline element) for the key-cap look: the neutral fill with a hairline rim and a faint bottom edge.

`?`

```
<kbd class="kbd">?</kbd>
```

## Combinations

Nest `.kbd` elements to spell out a shortcut. The outer wrapper drops its chrome and lays each inner cap out as its own chip with a small gap.

`⌘K` `CtrlShiftP` `⇧Enter`

```
<kbd class="kbd"><kbd class="kbd">⌘</kbd><kbd class="kbd">K</kbd></kbd>
<kbd class="kbd"><kbd class="kbd">Ctrl</kbd><kbd class="kbd">Shift</kbd><kbd class="kbd">P</kbd></kbd>
<kbd class="kbd"><kbd class="kbd">⇧</kbd><kbd class="kbd">Enter</kbd></kbd>
```

Add a `+` between caps if the shortcut needs spelling out for screen readers. The plus sits as a flex item between the chips.

`Ctrl + C`

```
<kbd class="kbd"><kbd class="kbd">Ctrl</kbd> + <kbd class="kbd">C</kbd></kbd>
```

## In running text

Inside `.prose`, bare `<kbd>` picks up the chip without a class so shortcut hints in long-form copy keep semantic markup. The chip's font size scales from the surrounding text, so it shrinks in small copy and grows in headings.

Press `?` on any docs page to open the shortcut sheet, or hit `⌘K` to jump to search.

```
<div class="prose">
  <p>Press <kbd>?</kbd> on any docs page to open the shortcut sheet, or hit <kbd><kbd>⌘</kbd><kbd>K</kbd></kbd> to jump to search.</p>
</div>
```

## Inside a button

Pair a chip with a button label so the shortcut sits alongside the action. The chip keeps its own background so it stays legible on top of solid intents.

Search `/`Command palette `⌘K`

```
<button type="button" class="button button--neutral">Search <kbd class="kbd">/</kbd></button>
<button type="button" class="button button--outline button--neutral">Command palette <kbd class="kbd"><kbd class="kbd">⌘</kbd><kbd class="kbd">K</kbd></kbd></button>
```

## Customization

These variables retune `.kbd` without touching component CSS. Override on the element, a parent scope, or `:root`.

| Variable               | Use                                                                                                   |
| ---------------------- | ----------------------------------------------------------------------------------------------------- |
| `--kbd-padding-block`  | Top and bottom padding                                                                                |
| `--kbd-padding-inline` | Left and right padding                                                                                |
| `--kbd-gap`            | Space between the label and a leading or trailing icon                                                |
| `--kbd-font-size`      | Cap text size                                                                                         |
| `--kbd-font-weight`    | Cap text weight                                                                                       |
| `--kbd-color`          | Cap text color                                                                                        |
| `--kbd-bg`             | Cap background                                                                                        |
| `--kbd-radius`         | Corner radius                                                                                         |
| `--kbd-rim`            | Border + bottom-edge color; same recipe as `.button--neutral` so the rim stays visible in both themes |
