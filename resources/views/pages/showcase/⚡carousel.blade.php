<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-12 max-w-4xl mx-auto">
    {{-- 1. Basic --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">1. Basic 16:9 Carousel</h2>
            <p class="text-sm text-gray-500">Default slideshow locked to 16:9 aspect ratio with controls, indicators, and caption.</p>
        </div>

        <stisla::carousel label="Gallery" :controls="true" :indicators="3">
            <stisla::carousel.slide label="1 of 3">
                <div class="h-full w-full bg-[#0ea5e9] flex items-center justify-center text-white text-2xl font-semibold">Slide 1</div>
                <stisla::carousel.caption title="Mountain vista" description="A wide alpine panorama at first light." />
            </stisla::carousel.slide>

            <stisla::carousel.slide label="2 of 3">
                <div class="h-full w-full bg-[#8b5cf6] flex items-center justify-center text-white text-2xl font-semibold">Slide 2</div>
            </stisla::carousel.slide>

            <stisla::carousel.slide label="3 of 3">
                <div class="h-full w-full bg-[#10b981] flex items-center justify-center text-white text-2xl font-semibold">Slide 3</div>
            </stisla::carousel.slide>
        </stisla::carousel>
    </section>

    {{-- 2. Without fixed aspect ratio --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Without Fixed Aspect Ratio</h2>
            <p class="text-sm text-gray-500">Viewport sizes dynamically to slide content using <code>:aspect="false"</code>.</p>
        </div>

        <stisla::carousel :aspect="false" label="Quotes" :controls="true">
            <stisla::carousel.slide label="1 of 2">
                <div class="p-8 bg-surface">
                    <p class="mt-0 text-lg">"It is the framework I reach for first."</p>
                    <p class="mb-0 text-muted-foreground">— A happy developer</p>
                </div>
            </stisla::carousel.slide>

            <stisla::carousel.slide label="2 of 2">
                <div class="p-8 bg-surface">
                    <p class="mt-0 text-lg">"Tokens all the way down."</p>
                    <p class="mb-0 text-muted-foreground">— Another one</p>
                </div>
            </stisla::carousel.slide>
        </stisla::carousel>
    </section>

    {{-- 3. With Captions --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. With Captions</h2>
            <p class="text-sm text-gray-500">Overlying caption gradient pinned to bottom edge.</p>
        </div>

        <stisla::carousel label="Travel destinations">
            <stisla::carousel.viewport>
                <stisla::carousel.slide label="1 of 3">
                    <div class="h-full w-full bg-[#0ea5e9]"></div>
                    <stisla::carousel.caption title="Above the clouds" description="A break in the weather over the eastern alps." />
                </stisla::carousel.slide>

                <stisla::carousel.slide label="2 of 3">
                    <div class="h-full w-full bg-[#8b5cf6]"></div>
                    <stisla::carousel.caption title="City after dark" description="Lights up just as the last of the day fades out." />
                </stisla::carousel.slide>

                <stisla::carousel.slide label="3 of 3">
                    <div class="h-full w-full bg-[#10b981]"></div>
                    <stisla::carousel.caption title="Iron lattice" description="Paris in the gold hour from the Trocadero." />
                </stisla::carousel.slide>
            </stisla::carousel.viewport>

            <stisla::carousel.controls />

            <stisla::carousel.indicators>
                <stisla::carousel.indicator :active="true" label="Go to slide 1" />
                <stisla::carousel.indicator label="Go to slide 2" />
                <stisla::carousel.indicator label="Go to slide 3" />
            </stisla::carousel.indicators>
        </stisla::carousel>
    </section>

    {{-- 4. Card Content inside Slides --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Card Content inside Slides</h2>
            <p class="text-sm text-gray-500">Sliding cards of customer testimonials.</p>
        </div>

        <stisla::carousel
            :aspect="false"
            :loop="true"
            label="Customer stories"
            :vars="[
                'control-bg' => 'var(--color-surface)',
                'control-bg-hover' => 'var(--color-accent)',
                'control-color' => 'var(--color-foreground)',
                'indicator-bg' => 'var(--color-border)',
                'indicator-bg-active' => 'var(--color-primary)',
                'indicators-inset' => '-1rem'
            ]"
        >
            <stisla::carousel.viewport>
                <stisla::carousel.slide label="1 of 3">
                    <stisla::card class="m-0">
                        <stisla::card.body>
                            <p class="m-0 text-lg leading-relaxed">"Stisla took the headache out of rebuilding our internal admin tool. The token system meant we could ship a brand refresh in a single PR."</p>
                            <div class="mt-5">
                                <strong>Maya Tanaka</strong>
                                <div class="text-muted-foreground text-sm">Engineering Lead, Northwind Labs</div>
                            </div>
                        </stisla::card.body>
                    </stisla::card>
                </stisla::carousel.slide>

                <stisla::carousel.slide label="2 of 3">
                    <stisla::card class="m-0">
                        <stisla::card.body>
                            <p class="m-0 text-lg leading-relaxed">"We bought into the older version for a client project two years ago. The rewrite kept everything we liked."</p>
                            <div class="mt-5">
                                <strong>Diego Romero</strong>
                                <div class="text-muted-foreground text-sm">Design Engineer, Forge and Tide</div>
                            </div>
                        </stisla::card.body>
                    </stisla::card>
                </stisla::carousel.slide>

                <stisla::carousel.slide label="3 of 3">
                    <stisla::card class="m-0">
                        <stisla::card.body>
                            <p class="m-0 text-lg leading-relaxed">"Dark mode used to be a quarterly bug ticket. Now it's a single data-theme flip on the root element."</p>
                            <div class="mt-5">
                                <strong>Priya Reddy</strong>
                                <div class="text-muted-foreground text-sm">Product Engineer, Helix Health</div>
                            </div>
                        </stisla::card.body>
                    </stisla::card>
                </stisla::carousel.slide>
            </stisla::carousel.viewport>

            <stisla::carousel.controls />
            <stisla::carousel.indicators count="3" active="0" />
        </stisla::carousel>
    </section>

    {{-- 5. Autoplay & Loop --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Autoplay & Loop</h2>
            <p class="text-sm text-gray-500">Automatic 4s slide tick with infinite looping using <code>:autoplay="true" :loop="true"</code>.</p>
        </div>

        <stisla::carousel :autoplay="true" :loop="true" label="Autoplay destinations" :controls="true" :indicators="3">
            <stisla::carousel.slide label="1 of 3">
                <div class="h-full w-full bg-[#0ea5e9] flex items-center justify-center text-white text-2xl font-semibold">Slide 1</div>
            </stisla::carousel.slide>

            <stisla::carousel.slide label="2 of 3">
                <div class="h-full w-full bg-[#8b5cf6] flex items-center justify-center text-white text-2xl font-semibold">Slide 2</div>
            </stisla::carousel.slide>

            <stisla::carousel.slide label="3 of 3">
                <div class="h-full w-full bg-[#10b981] flex items-center justify-center text-white text-2xl font-semibold">Slide 3</div>
            </stisla::carousel.slide>
        </stisla::carousel>
    </section>
</div>
