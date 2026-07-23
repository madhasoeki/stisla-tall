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
            <h2 class="text-xl font-bold">1. Basic</h2>
            <p class="text-sm text-gray-500">Each event is a timeline item with a marker on the rail and a body beside it.</p>
        </div>

        <stisla::timeline class="max-w-lg">
            <stisla::timeline.item>
                <stisla::timeline.marker />
                <stisla::timeline.body>
                    <stisla::timeline.time>Today, 09:24</stisla::timeline.time>
                    <stisla::timeline.title>Signed in</stisla::timeline.title>
                    <stisla::timeline.text>Chrome on macOS from Jakarta, Indonesia.</stisla::timeline.text>
                </stisla::timeline.body>
            </stisla::timeline.item>
            <stisla::timeline.item>
                <stisla::timeline.marker />
                <stisla::timeline.body>
                    <stisla::timeline.time>Yesterday, 18:02</stisla::timeline.time>
                    <stisla::timeline.title>Password changed</stisla::timeline.title>
                    <stisla::timeline.text>Updated from the security settings page.</stisla::timeline.text>
                </stisla::timeline.body>
            </stisla::timeline.item>
            <stisla::timeline.item>
                <stisla::timeline.marker />
                <stisla::timeline.body>
                    <stisla::timeline.time>Jun 19, 2026</stisla::timeline.time>
                    <stisla::timeline.title>New device authorized</stisla::timeline.title>
                    <stisla::timeline.text>iPhone 15 added to your trusted devices.</stisla::timeline.text>
                </stisla::timeline.body>
            </stisla::timeline.item>
            <stisla::timeline.item>
                <stisla::timeline.marker />
                <stisla::timeline.body>
                    <stisla::timeline.time>Jun 16, 2026</stisla::timeline.time>
                    <stisla::timeline.title>Two-factor authentication enabled</stisla::timeline.title>
                    <stisla::timeline.text>Authenticator app linked to your account.</stisla::timeline.text>
                </stisla::timeline.body>
            </stisla::timeline.item>
        </stisla::timeline>
    </section>

    {{-- 2. Icon and avatar markers --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">2. Icon and avatar markers</h2>
            <p class="text-sm text-gray-500">Drop an icon inside a marker for a system event or an avatar for a person.</p>
        </div>

        <stisla::timeline class="max-w-lg" :vars="['marker-size' => '2.5rem']">
            <stisla::timeline.item>
                <stisla::timeline.marker>
                    <stisla::avatar src="https://i.pravatar.cc/96?img=47" fallback="MT" shape="circle" />
                </stisla::timeline.marker>
                <stisla::timeline.body>
                    <stisla::timeline.time>11:40</stisla::timeline.time>
                    <stisla::timeline.title>Maya opened this pull request</stisla::timeline.title>
                    <stisla::timeline.text>Add a Google OAuth provider for sign-in. #482</stisla::timeline.text>
                </stisla::timeline.body>
            </stisla::timeline.item>
            <stisla::timeline.item>
                <stisla::timeline.marker icon="git-commit-horizontal" />
                <stisla::timeline.body>
                    <stisla::timeline.time>12:15</stisla::timeline.time>
                    <stisla::timeline.title>3 commits pushed</stisla::timeline.title>
                    <stisla::timeline.text>Rebased onto main and resolved the merge conflicts.</stisla::timeline.text>
                </stisla::timeline.body>
            </stisla::timeline.item>
            <stisla::timeline.item>
                <stisla::timeline.marker tone="success" icon="check" />
                <stisla::timeline.body>
                    <stisla::timeline.time>12:41</stisla::timeline.time>
                    <stisla::timeline.title>All checks passed</stisla::timeline.title>
                    <stisla::timeline.text>Lint, unit, and end-to-end suites are green.</stisla::timeline.text>
                </stisla::timeline.body>
            </stisla::timeline.item>
            <stisla::timeline.item>
                <stisla::timeline.marker>
                    <stisla::avatar src="https://i.pravatar.cc/96?img=32" fallback="PR" shape="circle" />
                </stisla::timeline.marker>
                <stisla::timeline.body>
                    <stisla::timeline.time>13:08</stisla::timeline.time>
                    <stisla::timeline.title>Priya merged into main</stisla::timeline.title>
                    <stisla::timeline.text>Squashed 3 commits and closed the pull request.</stisla::timeline.text>
                </stisla::timeline.body>
            </stisla::timeline.item>
        </stisla::timeline>
    </section>

    {{-- 3. Status --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">3. Status</h2>
            <p class="text-sm text-gray-500">Set <code>state</code> to <code>complete</code>, <code>current</code>, or <code>pending</code>.</p>
        </div>

        <stisla::timeline class="max-w-lg">
            <stisla::timeline.item state="complete">
                <stisla::timeline.marker icon="check" />
                <stisla::timeline.body>
                    <stisla::timeline.time>Jun 20, 09:12</stisla::timeline.time>
                    <stisla::timeline.title>Order placed</stisla::timeline.title>
                    <stisla::timeline.text>Order #ATL-2918 confirmed.</stisla::timeline.text>
                </stisla::timeline.body>
            </stisla::timeline.item>
            <stisla::timeline.item state="complete">
                <stisla::timeline.marker icon="credit-card" />
                <stisla::timeline.body>
                    <stisla::timeline.time>Jun 20, 09:13</stisla::timeline.time>
                    <stisla::timeline.title>Payment received</stisla::timeline.title>
                    <stisla::timeline.text>Visa ending in 4242.</stisla::timeline.text>
                </stisla::timeline.body>
            </stisla::timeline.item>
            <stisla::timeline.item state="complete">
                <stisla::timeline.marker icon="package" />
                <stisla::timeline.body>
                    <stisla::timeline.time>Jun 21, 14:30</stisla::timeline.time>
                    <stisla::timeline.title>Packed at the warehouse</stisla::timeline.title>
                    <stisla::timeline.text>Handed to the courier in Bekasi.</stisla::timeline.text>
                </stisla::timeline.body>
            </stisla::timeline.item>
            <stisla::timeline.item state="current">
                <stisla::timeline.marker icon="truck" />
                <stisla::timeline.body>
                    <stisla::timeline.time>Today, 08:05</stisla::timeline.time>
                    <stisla::timeline.title>Out for delivery</stisla::timeline.title>
                    <stisla::timeline.text>The courier is on the way and arrives by 6 PM.</stisla::timeline.text>
                </stisla::timeline.body>
            </stisla::timeline.item>
            <stisla::timeline.item state="pending">
                <stisla::timeline.marker icon="house" />
                <stisla::timeline.body>
                    <stisla::timeline.time>Estimated today</stisla::timeline.time>
                    <stisla::timeline.title>Delivered</stisla::timeline.title>
                    <stisla::timeline.text>Left at the front door with a photo.</stisla::timeline.text>
                </stisla::timeline.body>
            </stisla::timeline.item>
        </stisla::timeline>
    </section>

    {{-- 4. Time at the bottom --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">4. Time at the bottom</h2>
            <p class="text-sm text-gray-500">Drop <code>&lt;stisla::timeline.time&gt;</code> to the bottom of the body.</p>
        </div>

        <stisla::timeline class="max-w-lg">
            <stisla::timeline.item>
                <stisla::timeline.marker icon="tag" />
                <stisla::timeline.body>
                    <stisla::timeline.title>v2.4.1</stisla::timeline.title>
                    <stisla::timeline.text>Fixed a rounding error in multi-currency invoices and sped up the dashboard's first paint.</stisla::timeline.text>
                    <stisla::timeline.time>Released Jun 22, 2026</stisla::timeline.time>
                </stisla::timeline.body>
            </stisla::timeline.item>
            <stisla::timeline.item>
                <stisla::timeline.marker icon="tag" />
                <stisla::timeline.body>
                    <stisla::timeline.title>v2.4.0</stisla::timeline.title>
                    <stisla::timeline.text>Added saved views to the reports table and a dark theme for the mobile app.</stisla::timeline.text>
                    <stisla::timeline.time>Released Jun 15, 2026</stisla::timeline.time>
                </stisla::timeline.body>
            </stisla::timeline.item>
            <stisla::timeline.item>
                <stisla::timeline.marker icon="tag" />
                <stisla::timeline.body>
                    <stisla::timeline.title>v2.3.9</stisla::timeline.title>
                    <stisla::timeline.text>Security patch for the session cookie and minor copy fixes across settings.</stisla::timeline.text>
                    <stisla::timeline.time>Released Jun 8, 2026</stisla::timeline.time>
                </stisla::timeline.body>
            </stisla::timeline.item>
        </stisla::timeline>
    </section>

    {{-- 5. Marker colors --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">5. Marker colors</h2>
            <p class="text-sm text-gray-500">Coloring markers using intent tones (success, danger, warning, info).</p>
        </div>

        <stisla::timeline class="max-w-lg">
            <stisla::timeline.item>
                <stisla::timeline.marker tone="success" icon="rocket" />
                <stisla::timeline.body>
                    <stisla::timeline.time>Today, 10:02</stisla::timeline.time>
                    <stisla::timeline.title>Deployed v2.4.1 to production</stisla::timeline.title>
                    <stisla::timeline.text>Shipped by the pipeline. No errors in the first hour.</stisla::timeline.text>
                </stisla::timeline.body>
            </stisla::timeline.item>
            <stisla::timeline.item>
                <stisla::timeline.marker tone="danger" icon="x" />
                <stisla::timeline.body>
                    <stisla::timeline.time>Today, 08:47</stisla::timeline.time>
                    <stisla::timeline.title>Build failed on v2.4.0</stisla::timeline.title>
                    <stisla::timeline.text>Unit tests broke in the billing module.</stisla::timeline.text>
                </stisla::timeline.body>
            </stisla::timeline.item>
            <stisla::timeline.item>
                <stisla::timeline.marker tone="warning" icon="rotate-ccw" />
                <stisla::timeline.body>
                    <stisla::timeline.time>Yesterday, 22:15</stisla::timeline.time>
                    <stisla::timeline.title>Rolled back to v2.3.9</stisla::timeline.title>
                    <stisla::timeline.text>Reverted after a spike in 500 responses.</stisla::timeline.text>
                </stisla::timeline.body>
            </stisla::timeline.item>
            <stisla::timeline.item>
                <stisla::timeline.marker tone="info" icon="flask-conical" />
                <stisla::timeline.body>
                    <stisla::timeline.time>Yesterday, 16:40</stisla::timeline.time>
                    <stisla::timeline.title>Deployed v2.4.2 to staging</stisla::timeline.title>
                    <stisla::timeline.text>Waiting on QA before the production push.</stisla::timeline.text>
                </stisla::timeline.body>
            </stisla::timeline.item>
        </stisla::timeline>
    </section>

    {{-- 6. Alternate --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">6. Alternate</h2>
            <p class="text-sm text-gray-500">Centered rail with events alternating sides using <code>:alternate="true"</code>.</p>
        </div>

        <stisla::timeline :alternate="true">
            <stisla::timeline.item state="complete">
                <stisla::timeline.marker>1</stisla::timeline.marker>
                <stisla::timeline.body>
                    <stisla::timeline.time>Q1 2026</stisla::timeline.time>
                    <stisla::timeline.title>Private beta</stisla::timeline.title>
                    <stisla::timeline.text>Closed beta with 50 design partners.</stisla::timeline.text>
                </stisla::timeline.body>
            </stisla::timeline.item>
            <stisla::timeline.item state="current">
                <stisla::timeline.marker>2</stisla::timeline.marker>
                <stisla::timeline.body>
                    <stisla::timeline.time>Q2 2026</stisla::timeline.time>
                    <stisla::timeline.title>Public launch</stisla::timeline.title>
                    <stisla::timeline.text>Open sign-ups and the v1 dashboard.</stisla::timeline.text>
                </stisla::timeline.body>
            </stisla::timeline.item>
            <stisla::timeline.item state="pending">
                <stisla::timeline.marker>3</stisla::timeline.marker>
                <stisla::timeline.body>
                    <stisla::timeline.time>Q3 2026</stisla::timeline.time>
                    <stisla::timeline.title>Mobile apps</stisla::timeline.title>
                    <stisla::timeline.text>iOS and Android, built on the same API.</stisla::timeline.text>
                </stisla::timeline.body>
            </stisla::timeline.item>
            <stisla::timeline.item state="pending">
                <stisla::timeline.marker>4</stisla::timeline.marker>
                <stisla::timeline.body>
                    <stisla::timeline.time>Q4 2026</stisla::timeline.time>
                    <stisla::timeline.title>Team workspaces</stisla::timeline.title>
                    <stisla::timeline.text>Shared projects and role-based access.</stisla::timeline.text>
                </stisla::timeline.body>
            </stisla::timeline.item>
        </stisla::timeline>
    </section>

    {{-- 7. Customization --}}
    <section class="space-y-4">
        <div>
            <h2 class="text-xl font-bold">7. Customization</h2>
            <p class="text-sm text-gray-500">Retuning marker color and connector line using <code>:vars</code>.</p>
        </div>

        <stisla::timeline class="max-w-lg" :vars="['marker-color' => 'var(--color-primary)', 'connector-color' => 'var(--color-primary-subtle)']">
            <stisla::timeline.item>
                <stisla::timeline.marker icon="circle-dot" />
                <stisla::timeline.body>
                    <stisla::timeline.title>Custom Retuned Timeline</stisla::timeline.title>
                    <stisla::timeline.text>Marker and rail line custom colored using <code>:vars</code>.</stisla::timeline.text>
                    <stisla::timeline.time>Just now</stisla::timeline.time>
                </stisla::timeline.body>
            </stisla::timeline.item>
        </stisla::timeline>
    </section>
</div>
