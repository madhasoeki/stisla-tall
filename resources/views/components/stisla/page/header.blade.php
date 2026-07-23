@props([
    'as' => 'header',
    'title' => null,
    'description' => null,
])

<{{ $as }} {{ $attributes->merge(['class' => 'page__header']) }}>
    @if ($title && ! \Illuminate\Support\Str::contains($slot, 'page__headline'))
        <stisla::page.headline>
            <stisla::page.title>{{ $title }}</stisla::page.title>
            @if ($description)
                <stisla::page.description>{{ $description }}</stisla::page.description>
            @endif
        </stisla::page.headline>
    @endif
    {{ $slot }}
</{{ $as }}>
