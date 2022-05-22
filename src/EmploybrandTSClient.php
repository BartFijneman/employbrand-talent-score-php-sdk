<?php

namespace EmploybrandTS;

use EmploybrandTS\Api\RespondentField;
use EmploybrandTS\Exceptions\Http\InternalServerError;
use EmploybrandTS\Exceptions\Http\NotFound;
use EmploybrandTS\Exceptions\Http\NotValid;
use EmploybrandTS\Exceptions\Http\PerformingMaintenance;
use EmploybrandTS\Exceptions\Http\TooManyAttempts;
use EmploybrandTS\Exceptions\Http\Unauthenticated;
use EmploybrandTS\Api\Respondent;
use Exception;
use GuzzleHttp\Client;


class EmploybrandTSClient
{


    private $guzzle;

    private $url = 'https://api.talent-score.employbrand.app';

    private $respondent;

    private $respondentFields;


    public function __construct(string $companyId, string $token)
    {
        $this->guzzle = new Client([
            'base_uri' => $this->url,
            'http_errors' => false,
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'X-Company' => $companyId,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);

        return $this;
    }


    public function makeAPICall(string $url, string $method = 'GET', array $options = []): \stdClass|array
    {
        if( !in_array($method, ['GET', 'POST', 'PUT', 'DELETE']) ) {
            throw new Exception('Invalid method type');
        }

        $response = $this->guzzle->request($method, $url, $options);

        switch ( $response->getStatusCode() ) {
            case 401:
                throw new Unauthenticated($response->getBody());
            case 404:
                throw new NotFound($response->getBody());
            case 422:
                throw new NotValid($response->getBody());
            case 429:
                throw new TooManyAttempts($response->getBody());
            case 500:
                throw new InternalServerError($response->getBody());
            case 503:
                throw new PerformingMaintenance($response->getBody());
        }

        return json_decode($response->getBody()->getContents(), true);
    }


    public function respondents(): Respondent
    {
        if( $this->respondent == null )
            $this->respondent = new Respondent($this);
        return $this->respondent;
    }


    public function respondentFields(): RespondentField
    {
        if( $this->respondentFields == null )
            $this->respondentFields = new RespondentField($this);
        return $this->respondentFields;
    }

}
