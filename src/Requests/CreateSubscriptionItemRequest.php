<?php

namespace jamesvweston\Stripe\Requests;


/**
 * Class CreateSubscriptionItemRequest
 * @package jamesvweston\Stripe\Requests
 * @see https://stripe.com/docs/api#create_subscription-items
 */
class CreateSubscriptionItemRequest implements \JsonSerializable
{

    /**
     * Plan ID for this item.
     * @var string
     */
    protected $plan;

    /**
     * Quantity for this item.
     * @var int|null
     */
    protected $quantity;


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['plan']                     = $this->plan;
        $object['quantity']                 = $this->quantity;

        return $object;
    }

    /**
     * @return string
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * @param string $plan
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;
    }

    /**
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int|null $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

}