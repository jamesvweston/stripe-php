<?php

namespace jamesvweston\Stripe\Requests;

/**
 * @package jamesvweston\Stripe\Requests
 * @see https://stripe.com/docs/api/invoices/list
 */
class GetInvoicesRequest extends BaseGetRequest implements \JsonSerializable
{

    /**
     * @var string|null
     */
    protected $customer;

    /**
     * @var string|null
     */
    protected $subscription;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object                             = parent::jsonSerialize();
        $object['customer']                 = $this->customer;
        $object['subscription']             = $this->subscription;

        return $object;
    }

    /**
     * @return string|null
     */
    public function getCustomer(): ?string
    {
        return $this->customer;
    }

    /**
     * @param string|null $customer
     */
    public function setCustomer(?string $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @return string|null
     */
    public function getSubscription(): ?string
    {
        return $this->subscription;
    }

    /**
     * @param string|null $subscription
     */
    public function setSubscription(?string $subscription): void
    {
        $this->subscription = $subscription;
    }

}