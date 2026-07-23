@props([
    'id' => null,
    'name' => null,
    'value' => null,
    'placeholder' => null,
    'size' => null,
    'multiple' => false,
    'create' => false,
    'disabled' => false,
    'invalid' => false,
    'required' => false,
    'options' => null,
    'vars' => [],
])

@php
    $id = $id ?? 'stisla-combo-' . \Illuminate\Support\Str::random(8);

    $classes = 'combobox';
    if ($size === 'sm') {
        $classes .= ' combobox--sm';
    } elseif ($size === 'lg') {
        $classes .= ' combobox--lg';
    }

    $styleString = '';
    if (!empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--combobox-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }

    $selectAttrs = [
        'class' => $classes,
        'id' => $id,
        'data-stisla-combobox' => '',
    ];

    if ($name) {
        $selectAttrs['name'] = $name;
    }
    if ($placeholder !== null) {
        $selectAttrs['data-placeholder'] = $placeholder;
    }
    if ($multiple) {
        $selectAttrs['multiple'] = 'multiple';
    }
    if ($create) {
        $selectAttrs['data-stisla-combobox-create'] = 'true';
    }
    if ($disabled) {
        $selectAttrs['disabled'] = 'disabled';
    }
    if ($required) {
        $selectAttrs['required'] = 'required';
    }
    if ($invalid) {
        $selectAttrs['aria-invalid'] = 'true';
    }

    $isSelected = function ($optValue) use ($value) {
        if ($value === null) {
            return false;
        }
        if (is_array($value) || $value instanceof \Illuminate\Support\Collection) {
            return in_array($optValue, is_array($value) ? $value : $value->toArray());
        }
        return (string) $value === (string) $optValue;
    };
@endphp

<select {{ $attributes->merge($selectAttrs)->merge(['style' => trim($styleString)]) }}>
    @if ($placeholder !== null)
        <option value=""></option>
    @endif

    @if ($options !== null)
        @foreach ($options as $optKey => $optVal)
            @if (is_array($optVal) && !isset($optVal['label']) && !isset($optVal['value']))
                <optgroup label="{{ $optKey }}">
                    @foreach ($optVal as $subKey => $subVal)
                        @php
                            $val = is_array($subVal) || is_object($subVal) ? data_get($subVal, 'value', data_get($subVal, 'id', $subKey)) : (is_int($subKey) ? $subVal : $subKey);
                            $label = is_array($subVal) || is_object($subVal) ? data_get($subVal, 'label', data_get($subVal, 'name', '')) : $subVal;
                        @endphp
                        <option value="{{ $val }}" @selected($isSelected($val))>
                            {{ $label }}
                        </option>
                    @endforeach
                </optgroup>
            @else
                @php
                    $val = is_array($optVal) || is_object($optVal) ? data_get($optVal, 'value', data_get($optVal, 'id', $optKey)) : (is_int($optKey) ? $optVal : $optKey);
                    $label = is_array($optVal) || is_object($optVal) ? data_get($optVal, 'label', data_get($optVal, 'name', '')) : $optVal;
                @endphp
                <option value="{{ $val }}" @selected($isSelected($val))>
                    {{ $label }}
                </option>
            @endif
        @endforeach
    @endif

    {{ $slot }}
</select>
