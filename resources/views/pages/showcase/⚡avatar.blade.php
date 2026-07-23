<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto">
    {{-- 1. Basic Text & Icon --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Basic Text &amp; Icon Avatars</h2>
            <p class="text-sm text-gray-500">Plain neutral tile with centered initials or icon.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::avatar initials="RF" />
            <stisla::avatar initials="NA" />
            <stisla::avatar icon="user" />
        </div>
    </section>

    {{-- 2. Image with Fallback --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Image with Graceful Fallback</h2>
            <p class="text-sm text-gray-500">JS preloads image source and reveals only on confirmed load.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::avatar src="https://i.pravatar.cc/96?img=12" alt="Rafiq" fallback="RF" />
            <stisla::avatar src="https://i.pravatar.cc/96?img=32" alt="Nauval" fallback="NA" />
            <stisla::avatar src="https://i.pravatar.cc/96?img=48" alt="Ida" fallback="ID" />
        </div>
    </section>

    {{-- 3. Broken Source --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Broken Image Source Fallback</h2>
            <p class="text-sm text-gray-500">If image fails to load, fallback tile stays cleanly visible.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::avatar src="https://example.invalid/nope.png" fallback="NA" />
            <stisla::avatar shape="circle" src="https://example.invalid/nope.png" icon="user" />
        </div>
    </section>

    {{-- 4. Circle --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Circle Shape</h2>
            <p class="text-sm text-gray-500">Full circle shape variant using <code>shape="circle"</code>.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=15" fallback="RF" />
            <stisla::avatar shape="circle" initials="NA" />
            <stisla::avatar shape="circle" icon="user" />
        </div>
    </section>

    {{-- 5. Sizes --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Sizes</h2>
            <p class="text-sm text-gray-500">Small, default (md), large, and XL avatar sizes.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::avatar size="sm" initials="SM" />
            <stisla::avatar initials="MD" />
            <stisla::avatar size="lg" initials="LG" />
            <stisla::avatar size="xl" initials="XL" />
        </div>
    </section>

    {{-- 6. Indicators --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Status Indicators</h2>
            <p class="text-sm text-gray-500">Pinned status dots, unread counters, or checkmarks.</p>
        </div>

        <div class="flex items-center gap-4">
            <stisla::avatar src="https://i.pravatar.cc/96?img=22" fallback="RF">
                <stisla::avatar.indicator />
            </stisla::avatar>

            <stisla::avatar src="https://i.pravatar.cc/96?img=33" fallback="NA">
                <stisla::avatar.indicator bg="var(--color-muted-foreground)" />
            </stisla::avatar>

            <stisla::avatar src="https://i.pravatar.cc/96?img=44" fallback="ID">
                <stisla::avatar.indicator position="top" size="lg" bg="var(--color-danger)" color="var(--color-danger-foreground)">
                    3
                </stisla::avatar.indicator>
            </stisla::avatar>

            <stisla::avatar src="https://i.pravatar.cc/96?img=55" fallback="BS">
                <stisla::avatar.indicator size="xl" bg="var(--color-info)" color="var(--color-info-foreground)" icon="check" />
            </stisla::avatar>
        </div>
    </section>

    {{-- 7. Loading State / Delay --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Loading State Delay</h2>
            <p class="text-sm text-gray-500">Holding loading state artificially via <code>delay="1500"</code>.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::avatar src="https://i.pravatar.cc/96?img=64" fallback="…" delay="1500" />
            <p class="m-0 text-muted-foreground text-sm">Source reveals after a 1.5s artificial delay.</p>
        </div>
    </section>

    {{-- 8. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">8. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning avatar background and radius via <code>:vars</code>.</p>
        </div>

        <div class="flex items-center gap-3">
            <stisla::avatar initials="ST" :vars="['bg' => 'oklch(0.5 0.2 280)', 'color' => 'white', 'radius' => '0px']" />
        </div>
    </section>
</div>
