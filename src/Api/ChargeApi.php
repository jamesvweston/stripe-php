<?php

namespace jamesvweston\Stripe\Api;


use jamesvweston\Stripe\Exceptions\StripeException;
use jamesvweston\Stripe\Requests\CreateChargeRequest;
use jamesvweston\Stripe\Requests\GetChargesRequest;
use jamesvweston\Stripe\Responses\Charge;
use jamesvweston\Stripe\Responses\ChargeCollection;

class ChargeApi extends BaseApi
{

    /**
     * @param   GetChargesRequest $request
     * @return  ChargeCollection
     * @throws  StripeException
     */
    public function get (GetChargesRequest $request)
    {
        $data                           = $this->api->makeHttpRequest('get', 'charges', $request);
        return $this->json_mapper->map($data, new ChargeCollection());
    }

    /**
     * @param   string  $id
     * @return  Charge
     * @throws  StripeException
     */
    public function show ($id)
    {
        $data                           = $this->api->makeHttpRequest('get', 'charges/' . $id);
        return $this->json_mapper->map($data, new Charge());
    }

    /**
     * @param   CreateChargeRequest $request
     * @return  Charge
     * @throws  StripeException
     */
    public function create (CreateChargeRequest $request)
    {
        $data                           = $this->api->makeHttpRequest('post', 'charges', $request);
        return $this->json_mapper->map($data, new Charge());
    }

}
