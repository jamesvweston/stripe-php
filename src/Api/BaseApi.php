<?php

namespace jamesvweston\Stripe\Api;


use jamesvweston\Stripe\Http\StripeApi;

class BaseApi
{

    /**
     * @var StripeApi
     */
    protected $api;

    /**
     * @var \JsonMapper
     */
    protected $json_mapper;

    /**
     * @param StripeApi     $stripe_api
     */
    public function __construct(StripeApi &$stripe_api)
    {
        $this->api                      = $stripe_api;
        $this->json_mapper              = new \JsonMapper();
    }

}
