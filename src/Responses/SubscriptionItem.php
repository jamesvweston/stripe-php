<?php

namespace jamesvweston\Stripe\Responses;


class SubscriptionItem extends BaseObject
{

    /**
     * @var int
     */
    protected $created;

    /**
     * @var Plan
     */
    protected $plan;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * @var string
     */
    protected $subscription;

    /**
     * @return int
     */
    public function getCreated(): int
    {
        return $this->created;
    }

    /**
     * @param int $created
     */
    public function setCreated(int $created): void
    {
        $this->created = $created;
    }

    /**
     * @return Plan
     */
    public function getPlan(): Plan
    {
        return $this->plan;
    }

    /**
     * @param Plan $plan
     */
    public function setPlan(Plan $plan): void
    {
        $this->plan = $plan;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
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
