<?php

namespace jamesvweston\Stripe\Requests;


/**
 * Class CreateBankAccountRequest
 * @see https://stripe.com/docs/api#customer_create_bank_account
 * @package jamesvweston\Stripe\Requests
 */
class CreateBankAccountRequest implements \JsonSerializable
{

    /**
     * @var string
     */
    protected $object           = 'bank_account';

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $currency;

    /**
     * The name of the person or business that owns the bank account.
     * This field is required when attaching the bank account to a Customer object.
     * @var string|null
     */
    protected $account_holder_name;

    /**
     * The type of entity that holds the account. This can be either individual or company
     * This field is required when attaching the bank account to a Customer object.
     * @var string|null
     */
    protected $account_holder_type;

    /**
     * @var string|null
     */
    protected $routing_number;

    /**
     * @var string
     */
    protected $account_number;

    /**
     * @var array|null
     */
    protected $metadata;


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['object']                   = $this->object;
        $object['country']                  = $this->country;
        $object['currency']                 = $this->currency;
        $object['account_holder_name']      = $this->account_holder_name;
        $object['account_holder_type']      = $this->account_holder_type;
        $object['routing_number']           = $this->routing_number;
        $object['account_number']           = $this->account_number;
        $object['metadata']                 = $this->metadata;

        return $object;
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
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
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
     * @return null|string
     */
    public function getAccountHolderName(): ?string
    {
        return $this->account_holder_name;
    }

    /**
     * @param null|string $account_holder_name
     */
    public function setAccountHolderName(?string $account_holder_name): void
    {
        $this->account_holder_name = $account_holder_name;
    }

    /**
     * @return null|string
     */
    public function getAccountHolderType(): ?string
    {
        return $this->account_holder_type;
    }

    /**
     * @param null|string $account_holder_type
     */
    public function setAccountHolderType(?string $account_holder_type): void
    {
        $this->account_holder_type = $account_holder_type;
    }

    /**
     * @return null|string
     */
    public function getRoutingNumber(): ?string
    {
        return $this->routing_number;
    }

    /**
     * @param null|string $routing_number
     */
    public function setRoutingNumber(?string $routing_number): void
    {
        $this->routing_number = $routing_number;
    }

    /**
     * @return string
     */
    public function getAccountNumber(): string
    {
        return $this->account_number;
    }

    /**
     * @param string $account_number
     */
    public function setAccountNumber(string $account_number): void
    {
        $this->account_number = $account_number;
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

}
