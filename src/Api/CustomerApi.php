<?php

namespace jamesvweston\Stripe\Api;


use jamesvweston\Stripe\Exceptions\StripeException;
use jamesvweston\Stripe\Requests\CreateCardRequest;
use jamesvweston\Stripe\Requests\CreateCustomerRequest;
use jamesvweston\Stripe\Requests\GetCustomersRequest;
use jamesvweston\Stripe\Responses\Card;
use jamesvweston\Stripe\Responses\CardCollection;
use jamesvweston\Stripe\Responses\Customer;
use jamesvweston\Stripe\Responses\CustomerCollection;

class CustomerApi extends BaseApi
{

    /**
     * @param   GetCustomersRequest|array $request
     * @return  CustomerCollection
     * @throws  StripeException
     */
    public function get ($request = [])
    {
        $data                           = $this->api->makeHttpRequest('get', 'customers', $request);
        return $this->json_mapper->map($data, new CustomerCollection());
    }

    /**
     * @param   string  $id
     * @return  Customer
     * @throws  StripeException
     */
    public function show ($id)
    {
        $data                           = $this->api->makeHttpRequest('get', 'customers/' . $id);
        return $this->json_mapper->map($data, new Customer());
    }

    /**
     * @param   string  $id
     * @param   array   $request
     * @return  Customer
     * @throws  StripeException
     */
    public function update ($id, $request)
    {
        $data                           = $this->api->makeHttpRequest('post', 'customers/' . $id, $request);
        return $this->json_mapper->map($data, new Customer());
    }

    /**
     * @param   CreateCustomerRequest $request
     * @return  Customer
     * @throws  StripeException
     */
    public function create (CreateCustomerRequest $request)
    {
        $data                           = $this->api->makeHttpRequest('post', 'customers', $request);
        return $this->json_mapper->map($data, new Customer());
    }

    /**
     * @param   string  $id
     * @return  null
     * @throws  StripeException
     */
    public function delete ($id)
    {
        $this->api->makeHttpRequest('delete', 'customers/' . $id);
        return null;
    }


    public function getCards ($customer_id)
    {
        $data                           = $this->api->makeHttpRequest('post', 'customers/' . $customer_id . '/sources');
        return $this->json_mapper->map($data, new CardCollection());
    }

    /**
     * @param   string  $customer_id
     * @param   CreateCardRequest $request
     * @return  Card
     * @throws  StripeException
     */
    public function createCard ($customer_id, CreateCardRequest $request)
    {
        $data                           = $this->api->makeHttpRequest('post', 'customers/' . $customer_id . '/sources', ['source' => $request->jsonSerialize()]);
        return $this->json_mapper->map($data, new Card());
    }

    /**
     * @param   string  $customer_id
     * @param   string  $card_id
     * @param   CreateCardRequest|array $request
     * @return  Card
     * @throws  StripeException
     */
    public function updateCard ($customer_id, $card_id, $request)
    {
        if ($request instanceof CreateCardRequest)
        {
            $request                    = $request->jsonSerialize();
            if (isset($request['object']))
                unset($request['object']);
            if (isset($request['number']))
                unset($request['number']);
            if (isset($request['cvc']))
                unset($request['cvc']);
        }

        $data                           = $this->api->makeHttpRequest('post', 'customers/' . $customer_id . '/sources/' . $card_id, $request);
        return $this->json_mapper->map($data, new Card());
    }

    /**
     * @param   string  $customer_id
     * @param   string  $card_id
     * @return  null
     * @throws  StripeException
     */
    public function deleteCard ($customer_id, $card_id)
    {
        $this->api->makeHttpRequest('delete', 'customers/' . $customer_id . '/sources/' . $card_id);
        return null;
    }

}
