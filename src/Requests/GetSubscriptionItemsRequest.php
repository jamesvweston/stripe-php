<?php

namespace jamesvweston\Stripe\Requests;


class GetSubscriptionItemsRequest implements \JsonSerializable
{

    /**
     * The ID of the subscription whose items will be retrieved.
     * Required
     * @var string
     */
    protected $subscription;


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['subscription']             = $this->subscription;

        return $object;
    }

    /**
     * @return string
     */
    public function getSubscription(): string
    {
        return $this->subscription;
    }

    /**
     * @param string $subscription
     */
    public function setSubscription(string $subscription): void
    {
        $this->subscription = $subscription;
    }

}
