<?php

namespace Hak\DataFetcher;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Fetch 
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'Content-Type' => 'application/json'
        ]);   
    }

    public function getPosts(string $url,string $method)
    {
        try {
            $res = $this->client->request($method, $url)->getBody()->getContents();
            return json_decode($res, true);
         } catch (GuzzleException $e) {
            return $e->getMessage();
         }
    }

    public function getPost(string $url, $method)
    {
        try {
            $res = $this->client->request($method, $url)->getBody()->getContents();
            return json_decode($res, true);
         } catch (GuzzleException $e) {
            return $e->getMessage();
         }
    }
}