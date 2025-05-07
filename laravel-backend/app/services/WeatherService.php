<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherService
{
    protected $base = 'https://api.openweathermap.org/data/2.5/';

    public function getByCity(string $city): array
    {
        $key = config('services.openweathermap.key');
        $resp = Http::get("{$this->base}weather", [
            'q'     => $city,
            'appid' => $key,
            'units' => 'metric',
        ]);
        return $resp->json();
    }
}
