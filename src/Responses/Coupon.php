<?php

namespace jamesvweston\Stripe\Responses;


/**
 * Class Coupon
 * @see https://stripe.com/docs/api#coupon_object
 * @package jamesvweston\Stripe\Responses
 */
class Coupon extends BaseObject
{

    /**
     * Amount (in the currency specified) that will be taken off the subtotal of any invoices for this customer.
     * @var int
     */
    protected $amount_off;

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * @var int
     */
    protected $created;

    /**
     * If amount_off has been set, the three-letter ISO code for the currency of the amount to take off.
     * @var string|null
     */
    protected $currency;

    /**
     * One of forever, once, and repeating.
     * Describes how long a customer who applies this coupon will get the discount.
     * @var string
     */
    protected $duration;

    /**
     * If duration is repeating, the number of months the coupon applies. Null if coupon duration is forever or once.
     * @var int|null
     */
    protected $duration_in_months;

    /**
     * @var bool
     */
    protected $livemode;

    /**
     * Maximum number of times this coupon can be redeemed, in total, before it is no longer valid.
     * @var int
     */
    protected $max_redemptions;

    /**
     * Percent that will be taken off the subtotal of any invoices for this customer for the duration
     * of the coupon. For example, a coupon with percent_off of 50 will make a $100 invoice $50 instead.
     * @var int
     */
    protected $percent_off;

    /**
     * Date after which the coupon can no longer be redeemed.
     * @var int
     */
    protected $redeem_by;

    /**
     * Number of times this coupon has been applied to a customer.
     * @var int
     */
    protected $times_redeemed;

    /**
     * Taking account of the above properties, whether this coupon can still be applied to a customer.
     * @var bool
     */
    protected $valid;

    /**
     * @return int
     */
    public function getAmountOff(): int
    {
        return $this->amount_off;
    }

    /**
     * @param int $amount_off
     */
    public function setAmountOff(int $amount_off): void
    {
        $this->amount_off = $amount_off;
    }

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
     * @return null|string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param null|string $currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getDuration(): string
    {
        return $this->duration;
    }

    /**
     * @param string $duration
     */
    public function setDuration(string $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * @return int|null
     */
    public function getDurationInMonths(): ?int
    {
        return $this->duration_in_months;
    }

    /**
     * @param int|null $duration_in_months
     */
    public function setDurationInMonths(?int $duration_in_months): void
    {
        $this->duration_in_months = $duration_in_months;
    }

    /**
     * @return bool
     */
    public function isLivemode(): bool
    {
        return $this->livemode;
    }

    /**
     * @param bool $livemode
     */
    public function setLivemode(bool $livemode): void
    {
        $this->livemode = $livemode;
    }

    /**
     * @return int
     */
    public function getMaxRedemptions(): int
    {
        return $this->max_redemptions;
    }

    /**
     * @param int $max_redemptions
     */
    public function setMaxRedemptions(int $max_redemptions): void
    {
        $this->max_redemptions = $max_redemptions;
    }

    /**
     * @return int
     */
    public function getPercentOff(): int
    {
        return $this->percent_off;
    }

    /**
     * @param int $percent_off
     */
    public function setPercentOff(int $percent_off): void
    {
        $this->percent_off = $percent_off;
    }

    /**
     * @return int
     */
    public function getRedeemBy(): int
    {
        return $this->redeem_by;
    }

    /**
     * @param int $redeem_by
     */
    public function setRedeemBy(int $redeem_by): void
    {
        $this->redeem_by = $redeem_by;
    }

    /**
     * @return int
     */
    public function getTimesRedeemed(): int
    {
        return $this->times_redeemed;
    }

    /**
     * @param int $times_redeemed
     */
    public function setTimesRedeemed(int $times_redeemed): void
    {
        $this->times_redeemed = $times_redeemed;
    }

    /**
     * @return bool
     */
    public function isValid(): bool
    {
        return $this->valid;
    }

    /**
     * @param bool $valid
     */
    public function setValid(bool $valid): void
    {
        $this->valid = $valid;
    }

}
