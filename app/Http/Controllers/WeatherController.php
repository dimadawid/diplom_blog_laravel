<?php

namespace App\Http\Controllers;
use App\Services\WeatherService;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherController extends Controller
{
    public function getWeather()
    {
        $apiKey = '6c719dcaa25d47165762a0f56b17419d'; // Замените на ваш API ключ
        $cityId = '625144'; // ID города Минск

        $client = new Client();
        $response = $client->get("https://api.openweathermap.org/data/2.5/weather?id=$cityId&appid=$apiKey&units=metric");
        $data = json_decode($response->getBody(), true);

        $temperature = $data['main']['temp'];
        $humidity = $data['main']['humidity'];
        $description = $data['weather'][0]['description'];

        return view('weather', compact('temperature', 'humidity', 'description'));
      
        
    }
}