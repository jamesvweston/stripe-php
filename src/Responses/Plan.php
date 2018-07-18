<?php

namespace jamesvweston\Stripe\Responses;


/**
 * Class Plan
 * @see https://stripe.com/docs/api#plan_object
 * @package jamesvweston\Stripe\Responses
 */
class Plan
{

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $object;

    /**
     * @var bool
     */
    protected $active;

    /**
     * The amount in cents to be charged on the interval specified.
     * @var int
     */
    protected $amount;

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * @var int
     */
    protected $created;

    /**
     * Three-letter ISO currency code, in lowercase. Must be a supported currency.
     * @var string
     */
    protected $currency;

    /**
     * One of day, week, month or year. The frequency with which a subscription should be billed.
     * @var string
     */
    protected $interval;

    /**
     * The number of intervals (specified in the interval property) between each subscription billing.
     * For example, interval=month and interval_count=3 bills every 3 months.
     * @var int
     */
    protected $interval_count;

    /**
     * @var bool
     */
    protected $livemode;

    /**
     * Set of key/value pairs that you can attach to an object. It can be useful for storing additional information about the object in a structured format.
     * @var array
     */
    protected $metadata;

    /**
     * A brief description of the plan, hidden from customers.
     * @var string|null
     */
    protected $nickname;

    /**
     * The product whose pricing this plan determines.
     * @var string
     */
    protected $product;

    /**
     * @var string
     */
    protected $billing_scheme;

    /**
     * @var string
     */
    protected $usage_type;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * @param string $object
     */
    public function setObject(string $object): void
    {
        $this->object = $object;
    }

    /**
     * @return bool
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active): void
    {
        $this->active = $active;
    }

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
    public function getInterval(): string
    {
        return $this->interval;
    }

    /**
     * @param string $interval
     */
    public function setInterval(string $interval): void
    {
        $this->interval = $interval;
    }

    /**
     * @return int
     */
    public function getIntervalCount(): int
    {
        return $this->interval_count;
    }

    /**
     * @param int $interval_count
     */
    public function setIntervalCount(int $interval_count): void
    {
        $this->interval_count = $interval_count;
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
     * @return array
     */
    public function getMetadata(): array
    {
        return $this->metadata;
    }

    /**
     * @param array $metadata
     */
    public function setMetadata(array $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * @return null|string
     */
    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    /**
     * @param null|string $nickname
     */
    public function setNickname(?string $nickname): void
    {
        $this->nickname = $nickname;
    }

    /**
     * @return string
     */
    public function getProduct(): string
    {
        return $this->product;
    }

    /**
     * @param string $product
     */
    public function setProduct(string $product): void
    {
        $this->product = $product;
    }

    /**
     * @return string
     */
    public function getBillingScheme(): string
    {
        return $this->billing_scheme;
    }

    /**
     * @param string $billing_scheme
     */
    public function setBillingScheme(string $billing_scheme): void
    {
        $this->billing_scheme = $billing_scheme;
    }

    /**
     * @return string
     */
    public function getUsageType(): string
    {
        return $this->usage_type;
    }

    /**
     * @param string $usage_type
     */
    public function setUsageType(string $usage_type): void
    {
        $this->usage_type = $usage_type;
    }

}
