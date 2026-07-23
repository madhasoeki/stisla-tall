<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto">
    {{-- 1. Intents (Spot Illustration) --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Intents (Spot Illustration)</h2>
            <p class="text-sm text-gray-500">Default neutral gray, primary, success, danger, and warning intents using custom slotted SVG.</p>
        </div>

        <div class="flex flex-wrap items-end gap-6">
            {{-- Default / Neutral --}}
            <div class="flex flex-col items-center gap-2">
                <stisla::illustration class="w-28">
                    <svg viewBox="0 0 200 200" role="img" aria-label="Spot illustration">
                        <defs>
                            <linearGradient id="illo-default" x1="0.15" y1="0.1" x2="0.85" y2="0.95">
                                <stop class="il-g0" offset="0"></stop>
                                <stop class="il-g1" offset="0.4"></stop>
                                <stop class="il-g2" offset="0.78"></stop>
                                <stop class="il-g3" offset="1"></stop>
                            </linearGradient>
                        </defs>
                        <circle class="il-disc-o" cx="100" cy="100" r="86"></circle>
                        <circle class="il-disc-i" cx="100" cy="100" r="66"></circle>
                        <rect class="il-obj" x="58" y="56" width="84" height="84" rx="19" fill="url(#illo-default)"></rect>
                        <circle class="il-badge" cx="150" cy="52" r="15" fill="var(--_b)"></circle>
                    </svg>
                </stisla::illustration>
                <span class="text-xs text-gray-500">Default</span>
            </div>

            {{-- Primary --}}
            <div class="flex flex-col items-center gap-2">
                <stisla::illustration class="illustration--primary w-28">
                    <svg viewBox="0 0 200 200" role="img" aria-label="Spot illustration">
                        <defs>
                            <linearGradient id="illo-primary" x1="0.15" y1="0.1" x2="0.85" y2="0.95">
                                <stop class="il-g0" offset="0"></stop>
                                <stop class="il-g1" offset="0.4"></stop>
                                <stop class="il-g2" offset="0.78"></stop>
                                <stop class="il-g3" offset="1"></stop>
                            </linearGradient>
                        </defs>
                        <circle class="il-disc-o" cx="100" cy="100" r="86"></circle>
                        <circle class="il-disc-i" cx="100" cy="100" r="66"></circle>
                        <rect class="il-obj" x="58" y="56" width="84" height="84" rx="19" fill="url(#illo-primary)"></rect>
                        <circle class="il-badge" cx="150" cy="52" r="15" fill="var(--_b)"></circle>
                    </svg>
                </stisla::illustration>
                <span class="text-xs text-gray-500">Primary</span>
            </div>

            {{-- Success --}}
            <div class="flex flex-col items-center gap-2">
                <stisla::illustration class="illustration--success w-28">
                    <svg viewBox="0 0 200 200" role="img" aria-label="Spot illustration">
                        <defs>
                            <linearGradient id="illo-success" x1="0.15" y1="0.1" x2="0.85" y2="0.95">
                                <stop class="il-g0" offset="0"></stop>
                                <stop class="il-g1" offset="0.4"></stop>
                                <stop class="il-g2" offset="0.78"></stop>
                                <stop class="il-g3" offset="1"></stop>
                            </linearGradient>
                        </defs>
                        <circle class="il-disc-o" cx="100" cy="100" r="86"></circle>
                        <circle class="il-disc-i" cx="100" cy="100" r="66"></circle>
                        <rect class="il-obj" x="58" y="56" width="84" height="84" rx="19" fill="url(#illo-success)"></rect>
                        <circle class="il-badge" cx="150" cy="52" r="15" fill="var(--_b)"></circle>
                    </svg>
                </stisla::illustration>
                <span class="text-xs text-gray-500">Success</span>
            </div>

            {{-- Danger --}}
            <div class="flex flex-col items-center gap-2">
                <stisla::illustration class="illustration--danger w-28">
                    <svg viewBox="0 0 200 200" role="img" aria-label="Spot illustration">
                        <defs>
                            <linearGradient id="illo-danger" x1="0.15" y1="0.1" x2="0.85" y2="0.95">
                                <stop class="il-g0" offset="0"></stop>
                                <stop class="il-g1" offset="0.4"></stop>
                                <stop class="il-g2" offset="0.78"></stop>
                                <stop class="il-g3" offset="1"></stop>
                            </linearGradient>
                        </defs>
                        <circle class="il-disc-o" cx="100" cy="100" r="86"></circle>
                        <circle class="il-disc-i" cx="100" cy="100" r="66"></circle>
                        <rect class="il-obj" x="58" y="56" width="84" height="84" rx="19" fill="url(#illo-danger)"></rect>
                        <circle class="il-badge" cx="150" cy="52" r="15" fill="var(--_b)"></circle>
                    </svg>
                </stisla::illustration>
                <span class="text-xs text-gray-500">Danger</span>
            </div>

            {{-- Warning --}}
            <div class="flex flex-col items-center gap-2">
                <stisla::illustration class="illustration--warning w-28">
                    <svg viewBox="0 0 200 200" role="img" aria-label="Spot illustration">
                        <defs>
                            <linearGradient id="illo-warning" x1="0.15" y1="0.1" x2="0.85" y2="0.95">
                                <stop class="il-g0" offset="0"></stop>
                                <stop class="il-g1" offset="0.4"></stop>
                                <stop class="il-g2" offset="0.78"></stop>
                                <stop class="il-g3" offset="1"></stop>
                            </linearGradient>
                        </defs>
                        <circle class="il-disc-o" cx="100" cy="100" r="86"></circle>
                        <circle class="il-disc-i" cx="100" cy="100" r="66"></circle>
                        <rect class="il-obj" x="58" y="56" width="84" height="84" rx="19" fill="url(#illo-warning)"></rect>
                        <circle class="il-badge" cx="150" cy="52" r="15" fill="var(--_b)"></circle>
                    </svg>
                </stisla::illustration>
                <span class="text-xs text-gray-500">Warning</span>
            </div>
        </div>
    </section>

    {{-- 2. Custom Accents & Badges --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Custom Accents & Badges</h2>
            <p class="text-sm text-gray-500">illustrations customized using --illus-accent and --illus-badge overrides.</p>
        </div>

        <div class="flex flex-wrap items-end gap-6">
            {{-- Custom Violet Accent --}}
            <div class="flex flex-col items-center gap-2">
                <stisla::illustration accent="oklch(0.62 0.20 295)" class="w-28">
                    <svg viewBox="0 0 200 200" role="img" aria-label="Spot illustration">
                        <defs>
                            <linearGradient id="illo-custom-1" x1="0.15" y1="0.1" x2="0.85" y2="0.95">
                                <stop class="il-g0" offset="0"></stop>
                                <stop class="il-g1" offset="0.4"></stop>
                                <stop class="il-g2" offset="0.78"></stop>
                                <stop class="il-g3" offset="1"></stop>
                            </linearGradient>
                        </defs>
                        <circle class="il-disc-o" cx="100" cy="100" r="86"></circle>
                        <circle class="il-disc-i" cx="100" cy="100" r="66"></circle>
                        <rect class="il-obj" x="58" y="56" width="84" height="84" rx="19" fill="url(#illo-custom-1)"></rect>
                        <circle class="il-badge" cx="150" cy="52" r="15" fill="var(--_b)"></circle>
                    </svg>
                </stisla::illustration>
                <span class="text-xs text-gray-500">Violet Accent (Pip follows)</span>
            </div>

            {{-- Custom Accent + Custom Badge --}}
            <div class="flex flex-col items-center gap-2">
                <stisla::illustration accent="var(--color-info)" badge="var(--color-success)" class="w-28">
                    <svg viewBox="0 0 200 200" role="img" aria-label="Spot illustration">
                        <defs>
                            <linearGradient id="illo-custom-2" x1="0.15" y1="0.1" x2="0.85" y2="0.95">
                                <stop class="il-g0" offset="0"></stop>
                                <stop class="il-g1" offset="0.4"></stop>
                                <stop class="il-g2" offset="0.78"></stop>
                                <stop class="il-g3" offset="1"></stop>
                            </linearGradient>
                        </defs>
                        <circle class="il-disc-o" cx="100" cy="100" r="86"></circle>
                        <circle class="il-disc-i" cx="100" cy="100" r="66"></circle>
                        <rect class="il-obj" x="58" y="56" width="84" height="84" rx="19" fill="url(#illo-custom-2)"></rect>
                        <circle class="il-badge" cx="150" cy="52" r="15" fill="var(--_b)"></circle>
                    </svg>
                </stisla::illustration>
                <span class="text-xs text-gray-500">Info Accent + Success Pip</span>
            </div>
        </div>
    </section>

    {{-- 3. Animated (Spot Illustration) --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Animated</h2>
            <p class="text-sm text-gray-500">Spot illustration with float animation on the main object and pop scaling on the badge pip.</p>
        </div>

        <div class="flex flex-wrap items-end gap-6">
            <stisla::illustration :animated="true" class="illustration--primary w-28">
                <svg viewBox="0 0 200 200" role="img" aria-label="Spot illustration">
                    <defs>
                        <linearGradient id="illo-anim-1" x1="0.15" y1="0.1" x2="0.85" y2="0.95">
                            <stop class="il-g0" offset="0"></stop>
                            <stop class="il-g1" offset="0.4"></stop>
                            <stop class="il-g2" offset="0.78"></stop>
                            <stop class="il-g3" offset="1"></stop>
                        </linearGradient>
                    </defs>
                    <circle class="il-disc-o" cx="100" cy="100" r="86"></circle>
                    <circle class="il-disc-i" cx="100" cy="100" r="66"></circle>
                    <rect class="il-obj" x="58" y="56" width="84" height="84" rx="19" fill="url(#illo-anim-1)"></rect>
                    <circle class="il-badge" cx="150" cy="52" r="15" fill="var(--_b)"></circle>
                </svg>
            </stisla::illustration>

            <stisla::illustration :animated="true" class="illustration--success w-28">
                <svg viewBox="0 0 200 200" role="img" aria-label="Spot illustration">
                    <defs>
                        <linearGradient id="illo-anim-2" x1="0.15" y1="0.1" x2="0.85" y2="0.95">
                            <stop class="il-g0" offset="0"></stop>
                            <stop class="il-g1" offset="0.4"></stop>
                            <stop class="il-g2" offset="0.78"></stop>
                            <stop class="il-g3" offset="1"></stop>
                        </linearGradient>
                    </defs>
                    <circle class="il-disc-o" cx="100" cy="100" r="86"></circle>
                    <circle class="il-disc-i" cx="100" cy="100" r="66"></circle>
                    <rect class="il-obj" x="58" y="56" width="84" height="84" rx="19" fill="url(#illo-anim-2)"></rect>
                    <circle class="il-badge" cx="150" cy="52" r="15" fill="var(--_b)"></circle>
                </svg>
            </stisla::illustration>
        </div>
    </section>

    {{-- 4. Preset Metaphorical SVGs --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Metaphorical Illustrations (Preset SVGs)</h2>
            <p class="text-sm text-gray-500">Preset illustrations loaded from the metaphorical SVGs collection with dynamic variables resolved.</p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 items-end">
            <div class="flex flex-col items-center gap-2">
                <stisla::illustration name="chat" class="w-28" />
                <span class="text-xs text-gray-500">chat (Default)</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <stisla::illustration name="folder" class="illustration--success w-28" />
                <span class="text-xs text-gray-500">folder (Success Intent)</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <stisla::illustration name="secure" class="illustration--danger w-28" />
                <span class="text-xs text-gray-500">secure (Danger Intent)</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <stisla::illustration name="locked" class="illustration--warning w-28" />
                <span class="text-xs text-gray-500">locked (Warning Intent)</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <stisla::illustration name="no-messages" accent="oklch(0.62 0.20 295)" class="w-28" />
                <span class="text-xs text-gray-500">no-messages (Custom Violet Accent)</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <stisla::illustration name="notification" accent="var(--color-info)" badge="var(--color-success)" class="w-28" />
                <span class="text-xs text-gray-500">notification (Info Accent + Success Pip)</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <stisla::illustration name="get-started" :animated="true" class="illustration--primary w-28" />
                <span class="text-xs text-gray-500">get-started (Animated Primary)</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <stisla::illustration name="404" :animated="true" class="illustration--danger w-28" />
                <span class="text-xs text-gray-500">404 (Animated Danger)</span>
            </div>
        </div>
    </section>
</div>
