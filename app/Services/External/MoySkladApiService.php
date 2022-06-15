<?php

namespace App\Services\External;


use GuzzleHttp\Client as GuzzleClient;

class MoySkladApiService
{
    /** @var GuzzleClient|null */
    protected $apiClient;

    protected function getApiClient(): GuzzleClient
    {
        if (!$this->apiClient) {
            $client = new GuzzleClient();
            $login = config('services.moy_sklad.login');
            $password = config('services.moy_sklad.password');
            $options = base64_encode($login . ':' . $password);
            $headers = [
                'Authorization' => "Basic " . $options,
            ];
            $token_request = $client->request(
                'post',
                'https://online.moysklad.ru/api/remap/1.2/security/token',
                [
                    'headers' => $headers,
                ]
            );
            $token = json_decode($token_request->getBody()->getContents())->access_token;
            $this->apiClient = new GuzzleClient([
                'base_url' => 'https://online.moysklad.ru',
                'headers' => [
                    'Authorization' => "Bearer $token",
                ]
            ]);
        }
        return $this->apiClient;
    }

    public function getProducts()
    {
        $productsRequest = $this->getApiClient()->request('get', '/api/remap/1.2/entity/product');
        return json_decode($productsRequest->getBody()->getContents())->rows;
    }
    public function getGroups()
    {
        $productsRequest = $this->getApiClient()->request('get', '/api/remap/1.2/entity/productfolder');
        return json_decode($productsRequest->getBody()->getContents())->rows;
    }
    public function getProductRemains()
    {
        $remainsRequest = $this->getApiClient()->request('get', 'https://online.moysklad.ru/api/remap/1.2/report/stock/all');
        return json_decode($remainsRequest->getBody()->getContents())->rows;
    }
}
