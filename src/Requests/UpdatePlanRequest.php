<?php

namespace jamesvweston\Stripe\Requests;


/**
 * Class UpdatePlanRequest
 * @see https://stripe.com/docs/api#update_plan
 * @package jamesvweston\Stripe\Requests
 */
class UpdatePlanRequest implements \JsonSerializable
{

    /**
     * Whether the plan is currently available for new subscriptions.
     * @var bool|null
     */
    protected $active;

    /**
     * @var array|null
     */
    protected $metadata;

    /**
     * @var string|null
     */
    protected $nickname;

    /**
     * @var string|null
     */
    protected $product;

    /**
     * @var int|null
     */
    protected $trial_period_days;


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['active']                   = $this->active;
        $object['metadata']                 = $this->metadata;
        $object['nickname']                 = $this->nickname;
        $object['product']                  = $this->product;
        $object['trial_period_days']        = $this->trial_period_days;

        return $object;
    }

    /**
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * @param bool|null $active
     */
    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    /**
     * @return array|null
     */
    public function getMetadata(): ?array
    {
        return $this->metadata;
    }

    /**
     * @param array|null $metadata
     */
    public function setMetadata(?array $metadata): void
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
     * @return null|string
     */
    public function getProduct(): ?string
    {
        return $this->product;
    }

    /**
     * @param null|string $product
     */
    public function setProduct(?string $product): void
    {
        $this->product = $product;
    }

    /**
     * @return int|null
     */
    public function getTrialPeriodDays(): ?int
    {
        return $this->trial_period_days;
    }

    /**
     * @param int|null $trial_period_days
     */
    public function setTrialPeriodDays(?int $trial_period_days): void
    {
        $this->trial_period_days = $trial_period_days;
    }

}