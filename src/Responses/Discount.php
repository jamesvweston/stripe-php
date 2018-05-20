<?php

namespace jamesvweston\Stripe\Responses;


/**
 * Class Discount
 * @see https://stripe.com/docs/api#discount_object
 * @package jamesvweston\Stripe\Responses
 */
class Discount extends BaseObject
{

    /**
     * @var Coupon
     */
    protected $coupon;

    /**
     * @var string
     */
    protected $customer;

    /**
     * If the coupon has a duration of repeating, the date that this discount will end.
     * If the coupon has a duration of once or forever, this attribute will be null.
     * @var int
     */
    protected $end;

    /**
     * If the coupon has a duration of repeating, the date that this discount will end. If the coupon has a duration of once or forever, this attribute will be null.
     * @var int
     */
    protected $start;

    /**
     * The subscription that this coupon is applied to, if it is applied to a particular subscription.
     * @var string
     */
    protected $subscription;

    /**
     * @return Coupon
     */
    public function getCoupon(): Coupon
    {
        return $this->coupon;
    }

    /**
     * @param Coupon $coupon
     */
    public function setCoupon(Coupon $coupon): void
    {
        $this->coupon = $coupon;
    }

    /**
     * @return string
     */
    public function getCustomer(): string
    {
        return $this->customer;
    }

    /**
     * @param string $customer
     */
    public function setCustomer(string $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @return int
     */
    public function getEnd(): int
    {
        return $this->end;
    }

    /**
     * @param int $end
     */
    public function setEnd(int $end): void
    {
        $this->end = $end;
    }

    /**
     * @return int
     */
    public function getStart(): int
    {
        return $this->start;
    }

    /**
     * @param int $start
     */
    public function setStart(int $start): void
    {
        $this->start = $start;
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
