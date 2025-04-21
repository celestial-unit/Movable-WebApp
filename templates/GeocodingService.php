<?php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class GeocodingService
{
    private $httpClient;
    private $cache;
    private $apiKey;

    public function __construct(
        HttpClientInterface $httpClient,
        CacheInterface $cache,
        string $apiNinjasKey
    ) {
        $this->httpClient = $httpClient;
        $this->cache = $cache;
        $this->apiKey = $apiNinjasKey;
    }

    public function getCoordinates(string $city): array
    {
        $cacheKey = 'city_coordinates_' . md5($city);

        return $this->cache->get($cacheKey, function (ItemInterface $item) use ($city) {
            $item->expiresAfter(86400); // Cache for 24 hours

            try {
                $response = $this->httpClient->request('GET', 'https://api.api-ninjas.com/v1/geocoding', [
                    'query' => ['city' => $city],
                    'headers' => ['X-Api-Key' => $this->apiKey],
                    'timeout' => 5
                ]);

                if ($response->getStatusCode() !== 200) {
                    return $this->getDefaultCoordinates();
                }

                $data = $response->toArray();
                if (empty($data)) {
                    return $this->getDefaultCoordinates();
                }

                return [
                    'latitude' => $data[0]['latitude'],
                    'longitude' => $data[0]['longitude'],
                    'country' => $data[0]['country'],
                    'state' => $data[0]['state'] ?? 'N/A'
                ];
            } catch (\Throwable $e) {
                return $this->getDefaultCoordinates();
            }
        });
    }

    private function getDefaultCoordinates(): array
    {
        return [
            'latitude' => 36.8065,
            'longitude' => 10.1815,
            'country' => 'Tunisia',
            'state' => 'Tunis'
        ];
    }
}
