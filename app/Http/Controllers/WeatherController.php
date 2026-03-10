<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
  public function index()
  {
    $response = Http::get('https://api.open-meteo.com/v1/forecast', [
      'latitude' => 51.05,    // Gent
      'longitude' => 3.72,
      'daily' => 'temperature_2m_max,temperature_2m_min,precipitation_probability_max,weather_code',
      'current_weather' => true,
      'timezone' => 'Europe/Brussels',
      'forecast_days' => 5
    ]);

    $weather = $response->json();

    return view('weather',compact('weather'));
  }
}
