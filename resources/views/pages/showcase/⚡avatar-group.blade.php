<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto">
    {{-- 1. Basic Avatar Group --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Basic Avatar Group</h2>
            <p class="text-sm text-gray-500">Overlapping row of avatars reading as a single cluster.</p>
        </div>

        <stisla::avatar-group>
            <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=1" fallback="A" />
            <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=2" fallback="B" />
            <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=3" fallback="C" />
            <stisla::avatar.more shape="circle" count="+2" />
        </stisla::avatar-group>
    </section>

    {{-- 2. Composition with Avatar Modifiers --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Composition with Avatar Modifiers</h2>
            <p class="text-sm text-gray-500">Group composes with size (<code>size="sm"</code>, <code>size="lg"</code>) and shape modifiers.</p>
        </div>

        <div class="space-y-4">
            <stisla::avatar-group>
                <stisla::avatar size="sm" src="https://i.pravatar.cc/96?img=11" fallback="A" />
                <stisla::avatar size="sm" src="https://i.pravatar.cc/96?img=12" fallback="B" />
                <stisla::avatar size="sm" src="https://i.pravatar.cc/96?img=13" fallback="C" />
                <stisla::avatar.more size="sm" count="+8" />
            </stisla::avatar-group>

            <stisla::avatar-group>
                <stisla::avatar size="lg" shape="circle" src="https://i.pravatar.cc/96?img=21" fallback="A" />
                <stisla::avatar size="lg" shape="circle" src="https://i.pravatar.cc/96?img=22" fallback="B" />
                <stisla::avatar size="lg" shape="circle" src="https://i.pravatar.cc/96?img=23" fallback="C" />
                <stisla::avatar size="lg" shape="circle" src="https://i.pravatar.cc/96?img=24" fallback="D" />
            </stisla::avatar-group>
        </div>
    </section>

    {{-- 3. Overflow Tail --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Overflow Tail</h2>
            <p class="text-sm text-gray-500">Summarizing extra members with <code>&lt;stisla::avatar.more&gt;</code> and custom brand fill.</p>
        </div>

        <div class="space-y-4">
            <stisla::avatar-group>
                <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=31" fallback="A" />
                <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=32" fallback="B" />
                <stisla::avatar.more shape="circle" count="+12" />
            </stisla::avatar-group>

            <stisla::avatar-group>
                <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=41" fallback="A" />
                <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=42" fallback="B" />
                <stisla::avatar.more shape="circle" count="+9" bg="var(--color-primary)" color="var(--color-primary-foreground)" />
            </stisla::avatar-group>
        </div>
    </section>

    {{-- 4. Overlap Density --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Overlap Density</h2>
            <p class="text-sm text-gray-500">Adjusting negative margin per neighbor via <code>overlap="..."</code>.</p>
        </div>

        <div class="space-y-4">
            <stisla::avatar-group overlap="1.25rem">
                <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=51" fallback="A" />
                <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=52" fallback="B" />
                <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=53" fallback="C" />
                <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=54" fallback="D" />
            </stisla::avatar-group>

            <stisla::avatar-group overlap="0.25rem">
                <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=61" fallback="A" />
                <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=62" fallback="B" />
                <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=63" fallback="C" />
                <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=64" fallback="D" />
            </stisla::avatar-group>
        </div>
    </section>

    {{-- 5. On a Tinted Surface --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. On a Tinted Surface</h2>
            <p class="text-sm text-gray-500">Matching host background with <code>ring-color="var(--color-surface-3)"</code>.</p>
        </div>

        <div class="p-5 rounded-lg border border-border" style="background-color: var(--color-surface-3);">
            <stisla::avatar-group ring-color="var(--color-surface-3)">
                <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=14" fallback="A" />
                <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=25" fallback="B" />
                <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=36" fallback="C" />
                <stisla::avatar.more shape="circle" count="+4" bg="var(--color-surface)" color="var(--color-muted-foreground)" />
            </stisla::avatar-group>
        </div>
    </section>

    {{-- 6. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Customization (CSS Variables / :vars)</h2>
            <p class="text-sm text-gray-500">Retuning group overlap and ring width via <code>:vars</code>.</p>
        </div>

        <stisla::avatar-group :vars="['overlap' => '0.75rem', 'ring-width' => '3px']">
            <stisla::avatar initials="A" />
            <stisla::avatar initials="B" />
            <stisla::avatar initials="C" />
        </stisla::avatar-group>
    </section>
</div>
