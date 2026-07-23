@props([
    'options' => [],
    'id' => null,
    'name' => null,
    'value' => null,
    'selected' => null,
    'placeholder' => null,
    'size' => null,
    'multiple' => false,
    'custom' => false,
    'disabled' => false,
    'readonly' => false,
    'invalid' => false,
    'required' => false,
    'vars' => [],
])

@php
    $selectedValue = $value ?? $selected;

    $classes = 'select';
    if ($size === 'sm') {
        $classes .= ' select--sm';
    } elseif ($size === 'lg') {
        $classes .= ' select--lg';
    }

    $styleString = '';
    if (! empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--select-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $selectAttrs = [
        'class' => $classes,
    ];

    if ($id) {
        $selectAttrs['id'] = $id;
    }
    if ($name) {
        $selectAttrs['name'] = $name;
    }
    if (is_numeric($size)) {
        $selectAttrs['size'] = $size;
    }
    if ($multiple) {
        $selectAttrs['multiple'] = 'multiple';
    }
    if ($custom) {
        $selectAttrs['data-stisla-select'] = true;
        if ($placeholder !== null) {
            $selectAttrs['data-placeholder'] = $placeholder;
        }
    }
    if ($disabled) {
        $selectAttrs['disabled'] = 'disabled';
    }
    if ($readonly) {
        $selectAttrs['readonly'] = 'readonly';
    }
    if ($required) {
        $selectAttrs['required'] = 'required';
    }
    if ($invalid) {
        $selectAttrs['aria-invalid'] = 'true';
    }

    $isSelected = function ($optionValue) use ($selectedValue) {
        if (is_array($selectedValue)) {
            return in_array((string) $optionValue, array_map('strval', $selectedValue), true);
        }
        if ($selectedValue !== null) {
            return (string) $selectedValue === (string) $optionValue;
        }
        return false;
    };
@endphp

<select {{ $attributes->merge($selectAttrs)->merge(['style' => trim($styleString)]) }}>
    @if ($placeholder !== null && ! $custom)
        <option value="" @if ($selectedValue === null || $selectedValue === '') selected @endif>{{ $placeholder }}</option>
    @endif

    @if (! empty($options))
        @foreach ($options as $key => $val)
            @if (is_array($val))
                <optgroup label="{{ $key }}">
                    @foreach ($val as $subKey => $subVal)
                        @php $optVal = is_int($subKey) ? $subVal : $subKey; @endphp
                        <option value="{{ $optVal }}" @if ($isSelected($optVal)) selected @endif>
                            {{ $subVal }}
                        </option>
                    @endforeach
                </optgroup>
            @else
                @php $optVal = is_int($key) ? $val : $key; @endphp
                <option value="{{ $optVal }}" @if ($isSelected($optVal)) selected @endif>
                    {{ $val }}
                </option>
            @endif
        @endforeach
    @endif

    {{ $slot }}
</select>
