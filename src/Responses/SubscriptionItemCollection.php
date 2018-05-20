<?php

namespace jamesvweston\Stripe\Responses;


class SubscriptionItemCollection extends BaseCollection
{

    /**
     * @return SubscriptionItem[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param SubscriptionItem[]
     */
    public function setData($data)
    {
        $this->data             = $data;
    }

}
