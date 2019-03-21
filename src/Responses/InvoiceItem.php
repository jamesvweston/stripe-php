<?php

namespace jamesvweston\Stripe\Responses;

/**
 * Class InvoiceItem
 * @package jamesvweston\Stripe\Responses
 * @see https://stripe.com/docs/api/invoices/object#invoice_object-lines
 */
class InvoiceItem extends BaseObject
{

    /**
     * @var int
     */
    protected $amount;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var bool
     */
    protected $discountable;

    /**
     * @var Period
     */
    protected $period;

    /**
     * @var Plan
     */
    protected $plan;

    /**
     * @var bool
     */
    protected $proration;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * @var string
     */
    protected $subscription;

    /**
     * @var string
     */
    protected $subscription_item;

    /**
     * @var string
     */
    protected $type;

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return bool
     */
    public function isDiscountable(): bool
    {
        return $this->discountable;
    }

    /**
     * @param bool $discountable
     */
    public function setDiscountable(bool $discountable): void
    {
        $this->discountable = $discountable;
    }

    /**
     * @return Period
     */
    public function getPeriod(): Period
    {
        return $this->period;
    }

    /**
     * @param Period $period
     */
    public function setPeriod(Period $period): void
    {
        $this->period = $period;
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
     * @return bool
     */
    public function isProration(): bool
    {
        return $this->proration;
    }

    /**
     * @param bool $proration
     */
    public function setProration(bool $proration): void
    {
        $this->proration = $proration;
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

    /**
     * @return string
     */
    public function getSubscriptionItem(): string
    {
        return $this->subscription_item;
    }

    /**
     * @param string $subscription_item
     */
    public function setSubscriptionItem(string $subscription_item): void
    {
        $this->subscription_item = $subscription_item;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

}