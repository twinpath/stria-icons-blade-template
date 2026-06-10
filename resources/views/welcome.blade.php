<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stria Icons - Laravel Blade Starter Kit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif;
        }
    </style>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex flex-col items-center justify-center p-6">
    <div class="max-w-xl w-full bg-slate-800 rounded-2xl shadow-xl p-8 border border-slate-700 text-center">
        <div class="flex justify-center mb-6 space-x-4">
            <!-- Render solid user icon using Blade Component -->
            <div class="p-3 bg-slate-700 rounded-lg">
                <x-stria-solid-user class="w-8 h-8 text-indigo-400" />
            </div>
            <!-- Render regular home icon using Blade Component -->
            <div class="p-3 bg-slate-700 rounded-lg">
                <x-stria-regular-home class="w-8 h-8 text-emerald-400" />
            </div>
            <!-- Render light settings icon using Blade Component -->
            <div class="p-3 bg-slate-700 rounded-lg">
                <x-stria-light-settings class="w-8 h-8 text-amber-400" />
            </div>
        </div>

        <h1 class="text-3xl font-extrabold text-white mb-2">Stria Icons</h1>
        <p class="text-slate-400 mb-6">Laravel Blade Starter Kit</p>

        <div class="space-y-4 text-left bg-slate-950 p-5 rounded-xl border border-slate-800 font-mono text-sm">
            <div>
                <p class="text-indigo-300 font-semibold mb-1">// Usage via Blade Component:</p>
                <code class="text-slate-300">&lt;x-stria-solid-user class="w-6 h-6" /&gt;</code>
            </div>
            <hr class="border-slate-800">
            <div>
                <p class="text-indigo-300 font-semibold mb-1">// Usage via @stria directive:</p>
                <code class="text-slate-300">@stria('user', 'solid', ['class' => 'w-6 h-6'])</code>
            </div>
        </div>

        <div class="mt-8">
            <a href="https://stria-icons.dev" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-5 py-3 rounded-lg text-sm font-semibold bg-indigo-600 text-white hover:bg-indigo-500 transition-colors">
                Explore Documentation
            </a>
        </div>
    </div>
</body>
</html>
