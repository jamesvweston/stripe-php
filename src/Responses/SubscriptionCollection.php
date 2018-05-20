<?php

namespace jamesvweston\Stripe\Responses;


class SubscriptionCollection extends BaseCollection
{

    /**
     * @return Subscription[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param Subscription[]
     */
    public function setData($data)
    {
        $this->data             = $data;
    }

}
