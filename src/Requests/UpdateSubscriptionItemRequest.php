<?php

namespace jamesvweston\Stripe\Requests;


class UpdateSubscriptionItemRequest implements \JsonSerializable
{

    /**
     * The identifier of the subscription item to modify.
     * Required
     * @var string
     */
    protected $item;

    /**
     * @var array
     */
    protected $metadata;

    /**
     * @var string
     */
    protected $plan;

    /**
     * @var bool|null
     */
    protected $prorate;

    /**
     * @var int|null
     */
    protected $proration_date;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['item']                     = $this->item;
        $object['metadata']                 = $this->metadata;
        $object['plan']                     = $this->plan;
        $object['prorate']                  = $this->prorate;
        $object['proration_date']           = $this->proration_date;

        return $object;
    }

    /**
     * @return string
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param string $item
     */
    public function setItem($item)
    {
        $this->item = $item;
    }

    /**
     * @return array
     */
    public function getMetadata(): array
    {
        return $this->metadata;
    }

    /**
     * @param array $metadata
     */
    public function setMetadata(array $metadata)
    {
        $this->metadata = $metadata;
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
     * @return bool|null
     */
    public function getProrate()
    {
        return $this->prorate;
    }

    /**
     * @param bool|null $prorate
     */
    public function setProrate($prorate)
    {
        $this->prorate = $prorate;
    }

    /**
     * @return int|null
     */
    public function getProrationDate()
    {
        return $this->proration_date;
    }

    /**
     * @param int|null $proration_date
     */
    public function setProrationDate($proration_date)
    {
        $this->proration_date = $proration_date;
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

    /**
     * @var int|null
     */
    protected $quantity;
}