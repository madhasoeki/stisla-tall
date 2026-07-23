@props([
    'as' => 'div',
    'grow' => false,
    'size' => null,
    'tone' => null,
    'label' => 'Loading…',
    'ariaHidden' => false,
    'sizeValue' => null,
    'widthValue' => null,
    'duration' => null,
    'vars' => [],
])

@php
    $classes = 'spinner';
    if ($grow) {
        $classes .= ' spinner--grow';
    }
    if ($size) {
        $classes .= " spinner--{$size}";
    }
    if ($tone) {
        $toneClass = $tone === 'muted' ? 'text-muted-foreground' : "text-{$tone}";
        $classes .= " {$toneClass}";
    }

    $vars = is_array($vars) ? $vars : [];
    if ($sizeValue) {
        $vars['size'] = $sizeValue;
    }
    if ($widthValue) {
        $vars['width'] = $widthValue;
    }
    if ($duration) {
        $vars['duration'] = $duration;
    }

    $styleString = '';
    if (! empty($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--spinner-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $attrs = ['class' => $classes];
    if ($ariaHidden) {
        $attrs['aria-hidden'] = 'true';
    } else {
        $attrs['role'] = 'status';
    }
@endphp

<{{ $as }} {{ $attributes->merge($attrs)->merge(['style' => trim($styleString)]) }}>
    @if (! $ariaHidden)
        <span class="sr-only">{{ $label }}</span>
    @endif
</{{ $as }}>
