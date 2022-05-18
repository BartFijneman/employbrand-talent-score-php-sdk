<?php

namespace EmploybrandTS\Http;

use Psr\Http\Message\ResponseInterface;


class Response
{

    private $data;


    public function __construct(ResponseInterface $response)
    {
        $this->data = json_decode($response->getBody());
    }


    public function getData()
    {
        return $this->data;
    }


}
