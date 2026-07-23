@props([
    'title' => '',
    'open' => false,
    'disabled' => false,
    'icon' => null,
    'heading' => 'h3',
    'id' => null,
    'vars' => [],
])

@php
    $id = $id ?? 'acc-stisla-' . \Illuminate\Support\Str::random(8);
    $triggerId = $id . '-trigger';
    $state = $open ? 'open' : 'closed';
    $ariaExpanded = $open ? 'true' : 'false';
    $headingTag = in_array($heading, ['h1', 'h2', 'h3', 'h4', 'h5', 'h6']) ? $heading : 'h3';

    $styleString = '';
    if (!empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--accordion-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp

<div {{ $attributes->merge(['class' => 'accordion__item', 'data-state' => $state])->merge(['style' => trim($styleString)]) }}>
    <{{ $headingTag }} class="accordion__heading">
        <button 
            type="button" 
            class="accordion__trigger" 
            data-stisla-accordion-trigger 
            aria-expanded="{{ $ariaExpanded }}" 
            aria-controls="{{ $id }}" 
            id="{{ $triggerId }}"
            @disabled($disabled)
        >
            @if(isset($iconSlot))
                {{ $iconSlot }}
            @elseif($icon)
                <i data-lucide="{{ $icon }}"></i>
            @endif

            {{ $title }}

            <i data-lucide="chevron-down" class="accordion__icon"></i>
        </button>
    </{{ $headingTag }}>
    <div class="accordion__body" id="{{ $id }}" role="region" aria-labelledby="{{ $triggerId }}">
        <div class="accordion__body-inner">
            {{ $slot }}
        </div>
    </div>
</div>
