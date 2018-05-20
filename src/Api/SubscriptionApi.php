<?php

namespace jamesvweston\Stripe\Api;


use jamesvweston\Stripe\Exceptions\StripeException;
use jamesvweston\Stripe\Requests\CreateSubscriptionRequest;
use jamesvweston\Stripe\Requests\GetSubscriptionItemsRequest;
use jamesvweston\Stripe\Requests\GetSubscriptionsRequest;
use jamesvweston\Stripe\Requests\UpdateSubscriptionItemRequest;
use jamesvweston\Stripe\Responses\Subscription;
use jamesvweston\Stripe\Responses\SubscriptionCollection;
use jamesvweston\Stripe\Responses\SubscriptionItem;
use jamesvweston\Stripe\Responses\SubscriptionItemCollection;

class SubscriptionApi extends BaseApi
{

    /**
     * @param   GetSubscriptionsRequest|array  $request
     * @return  SubscriptionCollection
     * @throws  StripeException
     */
    public function get ($request)
    {
        $data                           = $this->api->makeHttpRequest('get', 'subscriptions', $request);
        return $this->json_mapper->map($data, new SubscriptionCollection());
    }

    /**
     * @param   string                      $subscription_id
     * @return  Subscription
     * @throws  StripeException
     */
    public function show ($subscription_id)
    {
        $data                           = $this->api->makeHttpRequest('get', 'subscriptions/' . $subscription_id);
        return $this->json_mapper->map($data, new Subscription());
    }

    /**
     * @param   CreateSubscriptionRequest $request
     * @return  Subscription
     * @throws  StripeException
     */
    public function store (CreateSubscriptionRequest $request)
    {
        $data                           = $this->api->makeHttpRequest('post', 'subscriptions', $request);
        return $this->json_mapper->map($data, new Subscription());
    }

    /**
     * @param   string                      $subscription_id
     * @param   CreateSubscriptionRequest $request
     * @return  Subscription
     * @throws  StripeException
     */
    public function update ($subscription_id, CreateSubscriptionRequest $request)
    {
        if (isset($request['customer']))
            unset($request['customer']);

        $data                           = $this->api->makeHttpRequest('post', 'subscriptions/' . $subscription_id, $request);
        return $this->json_mapper->map($data, new Subscription());
    }

    /**
     * @param   string                      $subscription_id
     * @return  null
     * @throws  StripeException
     */
    public function delete ($subscription_id)
    {
        $this->api->makeHttpRequest('delete', 'subscriptions/' . $subscription_id);
        return null;
    }

    /**
     * @param   GetSubscriptionItemsRequest $request
     * @return  SubscriptionItemCollection
     * @throws  StripeException
     */
    public function getItems (GetSubscriptionItemsRequest $request)
    {
        $data                           = $this->api->makeHttpRequest('get', 'subscription_items', $request);
        return $this->json_mapper->map($data, new SubscriptionItemCollection());
    }

    /**
     * @param   UpdateSubscriptionItemRequest $request
     * @return  SubscriptionItem
     * @throws  StripeException
     */
    public function updateItem (UpdateSubscriptionItemRequest $request)
    {
        $item                           = $request['item'];
        unset($request['item']);
        $data                           = $this->api->makeHttpRequest('post', 'subscription_items/' . $item, $request);
        return $this->json_mapper->map($data, new SubscriptionItem());
    }

}
