<?php

namespace jamesvweston\Stripe\Http;


use jamesvweston\Stripe\Exceptions\StripeException;
use jamesvweston\Stripe\Responses\Error;
use jamesvweston\Stripe\StripeConfiguration;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class StripeApi
{

    /**
     * @var StripeConfiguration
     */
    protected $stripe_configuration;

    /**
     * @var Client
     */
    protected $guzzle;


    /**
     * @param StripeConfiguration $stripe_configuration
     * @param Client|null $guzzle
     */
    public function __construct(StripeConfiguration &$stripe_configuration, $guzzle = null)
    {
        $this->stripe_configuration     = $stripe_configuration;
        $this->guzzle                   = !is_null($guzzle) ? $guzzle : new Client([
            'base_uri'        => $this->stripe_configuration->getBaseUrl() . 'v1/',
            'headers'   => [
                'Authorization'     => 'Bearer ' . $this->stripe_configuration->getSecret(),
                'Stripe-Version'    => $this->stripe_configuration->getVersion(),
            ],
        ]);
    }

    /**
     * @param   string      $method
     * @param   string      $path
     * @param   array|\JsonSerializable|null  $apiRequest
     * @return  array
     * @throws  StripeException|ClientException
     */
    public function makeHttpRequest($method, $path, $apiRequest = null)
    {
        $apiRequest                 = ($apiRequest instanceof \JsonSerializable) ? $apiRequest->jsonSerialize() : $apiRequest;
        $data   = [
            'query'     => $apiRequest,
        ];

        try
        {
            $response                   = $this->guzzle->request($method, $path, $data);
            return json_decode($response->getBody()->getContents());
        }
        catch (ClientException $ex)
        {
            $result                 = json_decode($ex->getResponse()->getBody()->getContents(), true);

            if (isset($result['error']))
            {
                $error              = new Error($result['error']);
                throw new StripeException($error, $ex->getResponse()->getStatusCode());
            }
            else
            {
                throw $ex;
            }
        }
    }

}
