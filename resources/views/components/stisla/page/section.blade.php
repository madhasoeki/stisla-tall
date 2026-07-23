@props([
    'as' => 'section',
    'title' => null,
    'description' => null,
])

<{{ $as }} {{ $attributes->merge(['class' => 'page__section']) }}>
    @if ($title && ! \Illuminate\Support\Str::contains($slot, 'page__section-header') && ! \Illuminate\Support\Str::contains($slot, 'page__section-title'))
        <stisla::page.section-title>{{ $title }}</stisla::page.section-title>
        @if ($description)
            <stisla::page.section-description>{{ $description }}</stisla::page.section-description>
        @endif
    @endif
    {{ $slot }}
</{{ $as }}>
