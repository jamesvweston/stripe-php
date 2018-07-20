<?php

namespace jamesvweston\Stripe\Api;


use jamesvweston\Stripe\Exceptions\StripeException;
use jamesvweston\Stripe\Requests\CreatePlanRequest;
use jamesvweston\Stripe\Requests\UpdatePlanRequest;
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

    /**
     * @param CreatePlanRequest|array $request
     * @return Plan
     * @throws StripeException
     */
    public function create ($request)
    {
        $data                           = $this->api->makeHttpRequest('post', 'plans', $request);
        return $this->json_mapper->map($data, new Plan());
    }

    /**
     * @param UpdatePlanRequest|array $request
     * @param string    $id
     * @return Plan
     * @throws StripeException
     */
    public function update ($request, $id)
    {
        $data                           = $this->api->makeHttpRequest('post', 'plans/' . $id, $request);
        return $this->json_mapper->map($data, new Plan());
    }

    /**
     * @param   string  $id
     * @return  null
     * @throws  StripeException
     */
    public function delete ($id)
    {
        $this->api->makeHttpRequest('delete', 'plans/' . $id);
        return null;
    }

}
