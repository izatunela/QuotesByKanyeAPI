<?php

namespace App\Services;

use GuzzleHttp;
use GuzzleHttp\TransferStats;

class GuzzleService {

    /**
     * Guzzle client
     *
     * @var GuzzleHttp\Client
     */
    private $_guzzle;

    /**
     * GuzzleService constructor
     *
     * @param GuzzleHttp\Client $guzzle
     */
    public function __construct(GuzzleHttp\Client $guzzle)
    {
        $this->_guzzle = $guzzle;
    }

    /**
     * Make request to an API
     *
     * @param string $url
     * @param Illuminate\Database\Eloquent $model
     * @return object
     */
    public function makeRequest($url,$model): object
    {
        try {
            $req = $this->_guzzle->request('GET', $url,[
                'on_stats' => function (TransferStats $stats) use ($model) {
                    $model->create($stats->getHandlerStats());
                }
            ])->getBody()->getContents();
            return json_decode($req);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}