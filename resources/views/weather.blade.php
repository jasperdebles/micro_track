@extends('layouts.app') {{-- Gebruik je bestaande layout --}}

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Weather</h1>

    {{-- Hier toon je de weather data vanuit je controller --}}
    @if(isset($weather))
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach($weather['daily']['time'] as $i => $date)
                <div class="p-4 border rounded">
                    <h2 class="font-semibold">{{ $date }}</h2>
                    <p>Max temp: {{ $weather['daily']['temperature_2m_max'][$i] }}°C</p>
                    <p>Min temp: {{ $weather['daily']['temperature_2m_min'][$i] }}°C</p>
                    <p>Precipitation probability: {{ $weather['daily']['precipitation_probability_max'][$i] }}%</p>
                    <p>Weather code: {{ $weather['daily']['weather_code'][$i] }}</p>
                </div>
            @endforeach
        </div>
    @else
        <p>Weather data is not available.</p>
    @endif
</div>
@endsection