<pre>{{ print_r($weather, true) }}</pre>

@props(['weather'])

<div class="grid auto-rows-min gap-4 md:grid-cols-3 mb-8">

  <div class="p-6 rounded-xl border border-neutral-200 dark:border-neutral-700 bg-gradient-to-r from-blue-500 to-indigo-600 text-white">
    <h3 class="text-lg font-semibold mb-2">Huidig</h3>
    <p class="text-3xl font-bold">
        {{ $weather['current_weather']['temperature'] ?? '--' }}°C
    </p>
  </div>

  <div class="p-6 rounded-xl border border-neutral-200 dark:border-neutral-700 bg-gradient-to-r from-orange-500 to-red-500 text-white">
    <h3 class="text-lg font-semibold mb-2">Vandaag</h3>
    <p class="text-3xl font-bold">
        {{ $weather['daily']['temperature_2m_max'][0] ?? '--' }}°
    </p>
  </div>

  <div class="p-6 rounded-xl border border-neutral-200 dark:border-neutral-700 bg-gradient-to-r from-green-500 to-emerald-600 text-white">
    <h3 class="text-lg font-semibold mb-2">Neerslag</h3>
    <p class="text-3xl font-bold">
        {{ $weather['daily']['precipitation_probability_max'][0] ?? '--' }}%
    </p>
  </div>

</div>