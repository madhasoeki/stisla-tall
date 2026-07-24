<?php

namespace Stisla\TALL\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Livewire\Livewire;
use Symfony\Component\Process\Process;

class StislaInstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stisla:install
                            {--force : Overwrite existing configuration and assets}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Stisla TALL Stack components, dependencies, and Tailwind tokens';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('🚀 Installing Stisla TALL Stack...');

        $this->ensureLivewireIsInstalled();
        $this->ensureNpmPackagesInstalled();
        $this->configureAppJs();
        $this->configureAppCss();
        $this->buildAssets();

        $this->newLine();
        $this->info('✨ Stisla TALL Stack installed successfully!');
        $this->comment('You can now use <stisla::button tone="primary">Button</stisla::button> in your Blade views.');

        return self::SUCCESS;
    }

    /**
     * Ensure Livewire is installed in the project.
     */
    protected function ensureLivewireIsInstalled(): void
    {
        if (class_exists(Livewire::class)) {
            $this->components->info('Livewire is already installed. Skipping Livewire installation.');

            return;
        }

        $this->components->info('Livewire not found. Installing livewire/livewire via Composer...');
        $this->runProcess(['composer', 'require', 'livewire/livewire']);
    }

    /**
     * Ensure required npm dependencies are added to package.json and installed.
     */
    protected function ensureNpmPackagesInstalled(): void
    {
        $packageJsonPath = base_path('package.json');

        if (! File::exists($packageJsonPath)) {
            $this->components->warn('package.json not found in root project.');

            return;
        }

        $packageJson = json_decode(File::get($packageJsonPath), true) ?: [];

        $requiredPackages = [
            '@stisla/css' => '^3.0.1',
            '@stisla/vanilla' => '^3.0.2',
            'lucide' => '^1.25.0',
        ];

        $missingPackages = [];
        $dependencies = $packageJson['dependencies'] ?? [];

        foreach ($requiredPackages as $pkg => $version) {
            if (! isset($dependencies[$pkg])) {
                $missingPackages[$pkg] = $version;
            }
        }

        if (empty($missingPackages)) {
            $this->components->info('NPM packages (@stisla/css, @stisla/vanilla, lucide) already configured.');

            return;
        }

        $this->components->info('Adding required NPM packages to package.json...');

        foreach ($missingPackages as $pkg => $version) {
            $packageJson['dependencies'][$pkg] = $version;
        }

        File::put($packageJsonPath, json_encode($packageJson, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

        $this->components->info('Running npm install...');
        $this->runProcess(['npm', 'install']);
    }

    /**
     * Configure resources/js/app.js to include Stisla CSS/JS imports and Lucide icons.
     */
    protected function configureAppJs(): void
    {
        $appJsPath = resource_path('js/app.js');

        if (! File::exists($appJsPath)) {
            $this->components->warn('resources/js/app.js not found.');

            return;
        }

        $content = File::get($appJsPath);

        if (str_contains($content, '@stisla/css')) {
            $this->components->info('Stisla imports already configured in resources/js/app.js.');

            return;
        }

        $this->components->info('Injecting Stisla and Lucide imports into resources/js/app.js...');

        $stislaImports = <<<'JS'
import '@stisla/css';
import { Stisla } from '@stisla/vanilla';
import { createIcons, icons } from 'lucide';

window.lucide = {
    createIcons: (options = {}) => createIcons({ icons, ...options }),
};

const initIcons = () => createIcons({ icons });

document.addEventListener('DOMContentLoaded', initIcons);
document.addEventListener('livewire:navigated', initIcons);

JS;

        File::put($appJsPath, $stislaImports."\n".$content);
    }

    /**
     * Configure resources/css/app.css to include Tailwind CSS v4 @theme tokens.
     */
    protected function configureAppCss(): void
    {
        $appCssPath = resource_path('css/app.css');

        if (! File::exists($appCssPath)) {
            $this->components->warn('resources/css/app.css not found.');

            return;
        }

        $content = File::get($appCssPath);

        if (str_contains($content, '--color-surface-2')) {
            $this->components->info('Stisla color tokens already configured in resources/css/app.css.');

            return;
        }

        $this->components->info('Injecting Stisla Tailwind CSS v4 @theme tokens into resources/css/app.css...');

        $themeTokens = <<<'CSS'

@theme {
    --font-sans: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';

    /* Surface & Layout tokens */
    --color-border: var(--color-border);
    --color-border-strong: var(--color-border-strong);
    --color-surface: var(--color-surface);
    --color-surface-2: var(--color-surface-2);
    --color-surface-3: var(--color-surface-3);
    --color-background: var(--color-background);
    --color-foreground: var(--color-foreground);
    --color-muted-foreground: var(--color-muted-foreground);
    --color-ring: var(--color-ring);
    --color-overlay: var(--color-overlay);
    --color-overlay-foreground: var(--color-overlay-foreground);

    /* Brand & Intent tokens */
    --color-primary: var(--color-primary);
    --color-primary-foreground: var(--color-primary-foreground);
    --color-primary-emphasis: var(--color-primary-emphasis);

    --color-success: var(--color-success);
    --color-success-foreground: var(--color-success-foreground);
    --color-success-emphasis: var(--color-success-emphasis);

    --color-danger: var(--color-danger);
    --color-danger-foreground: var(--color-danger-foreground);
    --color-danger-emphasis: var(--color-danger-emphasis);

    --color-warning: var(--color-warning);
    --color-warning-foreground: var(--color-warning-foreground);
    --color-warning-emphasis: var(--color-warning-emphasis);

    --color-info: var(--color-info);
    --color-info-foreground: var(--color-info-foreground);
    --color-info-emphasis: var(--color-info-emphasis);

    --color-accent: var(--color-accent);
    --color-accent-foreground: var(--color-accent-foreground);

    --color-neutral: var(--color-neutral);
    --color-neutral-foreground: var(--color-neutral-foreground);

    --color-highlight: var(--color-highlight);
    --color-highlight-foreground: var(--color-highlight-foreground);
}
CSS;

        File::append($appCssPath, $themeTokens);
    }

    /**
     * Run npm build process.
     */
    protected function buildAssets(): void
    {
        $this->components->info('Compiling asset bundle via npm run build...');
        $this->runProcess(['npm', 'run', 'build']);
    }

    /**
     * Run an external CLI command.
     */
    protected function runProcess(array $command): void
    {
        $process = new Process($command, base_path());
        $process->setTimeout(300);
        $process->run(function ($type, $buffer) {
            $this->output->write($buffer);
        });
    }
}
