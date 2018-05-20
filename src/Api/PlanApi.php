<?php

namespace jamesvweston\Stripe\Api;


use jamesvweston\Stripe\Exceptions\StripeException;
use jamesvweston\Stripe\Responses\Plan;
use jamesvweston\Stripe\Responses\PlanCollection;

class PlanApi extends BaseApi
{

    /**
     * @param   array|\JsonSerializable $request
     * @return  PlanCollection
     * @throws  StripeException
     */
    public function get ($request = [])
    {
        $data                           = $this->api->makeHttpRequest('get', 'plans', null, $request);
        return $this->json_mapper->map($data, new PlanCollection());
    }

    /**
     * @param   string  $id
     * @return  Plan
     * @throws  StripeException
     */
    public function show ($id)
    {
        $data                           = $this->api->makeHttpRequest('get', 'plans/' . $id);
        return $this->json_mapper->map($data, new Plan());
    }

}
