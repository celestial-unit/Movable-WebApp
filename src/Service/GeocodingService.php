<?php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;


// src/Service/GeocodingService.php

class GeocodingService
{
    private const GOVERNORATE_COORDINATES = [
        'Ariana' => ['latitude' => 36.8667, 'longitude' => 10.1667],
        'Béja' => ['latitude' => 36.7333, 'longitude' => 9.1833],
        'Ben Arous' => ['latitude' => 36.7531, 'longitude' => 10.2189],
        'Bizerte' => ['latitude' => 37.2744, 'longitude' => 9.8739],
        'Gabès' => ['latitude' => 33.8814, 'longitude' => 10.0983],
        'Gafsa' => ['latitude' => 34.4167, 'longitude' => 8.7833],
        'Jendouba' => ['latitude' => 36.5011, 'longitude' => 8.7803],
        'Kairouan' => ['latitude' => 35.6781, 'longitude' => 10.0969],
        'Kasserine' => ['latitude' => 35.1667, 'longitude' => 8.8333],
        'Kébili' => ['latitude' => 33.7050, 'longitude' => 8.9650],
        'Kef' => ['latitude' => 36.1822, 'longitude' => 8.7147],
        'Mahdia' => ['latitude' => 35.5047, 'longitude' => 11.0622],
        'Manouba' => ['latitude' => 36.8078, 'longitude' => 10.1011],
        'Medenine' => ['latitude' => 33.3547, 'longitude' => 10.5053],
        'Monastir' => ['latitude' => 35.7789, 'longitude' => 10.8264],
        'Nabeul' => ['latitude' => 36.4561, 'longitude' => 10.7375],
        'Sfax' => ['latitude' => 34.7406, 'longitude' => 10.7603],
        'Sidi Bouzid' => ['latitude' => 35.0381, 'longitude' => 9.4858],
        'Siliana' => ['latitude' => 36.0833, 'longitude' => 9.3667],
        'Sousse' => ['latitude' => 35.8254, 'longitude' => 10.6364],
        'Tataouine' => ['latitude' => 32.9333, 'longitude' => 10.4500],
        'Tozeur' => ['latitude' => 33.9197, 'longitude' => 8.1336],
        'Tunis' => ['latitude' => 36.8008, 'longitude' => 10.1800],
        'Zaghouan' => ['latitude' => 36.4000, 'longitude' => 10.1500],
    ];

    public function getGovernorateCoordinates(string $governorate): array
    {
        return self::GOVERNORATE_COORDINATES[$governorate] ?? ['latitude' => 34.0000, 'longitude' => 9.0000];
    }
}

