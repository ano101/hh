<?php

class ApiClass
{
    private $client;
    public function __construct(){
        $this->client = new GuzzleHttp\Client(['base_uri' => 'https://dummy.restapiexample.com/api/v1/']);
    }
    public function getEmployees(){
        return $response = $this->client->request('GET', 'employees');
    }
    public function addEmployee($data){
        return $response = $this->client->request('POST', 'create', [
            'json' => $data
        ]);
    }
}