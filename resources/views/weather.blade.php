<x-layouts::app.sidebar :title="'Weather'">
    <flux:main class="p-8 space-y-6 bg-background">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl font-bold mb-8">Weather Ghent</h1>
            <x-weather :weather="$weather" />
        </div>
    </flux:main>
</x-layouts::app.sidebar>
