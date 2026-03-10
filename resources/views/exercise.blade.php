<x-layouts::app.sidebar :title="'Exercise'">
    <flux:main class="p-8 space-y-6 bg-background">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl font-bold mb-8">Exercise</h1>
            <!-- Content in grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="p-6 bg-card rounded-lg border">Exercise 1</div>
                <!-- etc. -->
            </div>
        </div>
    </flux:main>
</x-layouts::app.sidebar>
