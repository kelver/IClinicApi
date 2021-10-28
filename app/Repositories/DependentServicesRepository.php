<?php

namespace App\Repositories;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class DependentServicesRepository
{
    protected $router;

    public function __construct(array $header = [])
    {
        $this->router = 'https://5f71da6964a3720016e60ff8.mockapi.io/v1';
    }
    /**
     * @return HttpClientInterface
     */
    public function getEntity(int $identify, string $resource, $bearer, $retry, $timeout): Response
    {
        $data = Http::withToken($bearer)
                    ->retry($retry)
                    ->timeout($timeout)
                    ->get(
                        "{$this->router}/{$resource}/{$identify}"
                    );
        return $data;
    }

    /**
     * @return HttpClientInterface
     */
    public function sendEntity(string $resource, string $bearer, $retry, $timeout, array $request = []): Response
    {
        $data = Http::withToken($bearer)
                    ->retry($retry)
                    ->timeout($timeout)
                    ->post(
                        "{$this->router}/{$resource}}",
                        $request
                    );
        return $data;
    }
}
