<?php

namespace jamesvweston\Stripe\Responses;


/**
 * Class BankAccount
 * @see https://stripe.com/docs/api#customer_bank_account_object
 * @package jamesvweston\Stripe\Responses
 */
class BankAccount extends BaseObject
{

    /**
     * @var string
     */
    protected $account;

    /**
     * @var string
     */
    protected $account_holder_name;

    /**
     * individual or company
     * @var string
     */
    protected $account_holder_type;

    /**
     * @var string
     */
    protected $bank_name;

    /**
     * Two-letter ISO code representing the country the bank account is located in.
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $customer;

    /**
     * Whether this external account is the default account for its currency.
     * @var bool
     */
    protected $default_for_currency;

    /**
     * Uniquely identifies this particular bank account.
     * You can use this attribute to check whether two bank accounts are the same.
     * @var string
     */
    protected $fingerprint;

    /**
     * @var string
     */
    protected $last4;

    /**
     * @var string
     */
    protected $routing_number;

    /**
     * Possible values are new, validated, verified, verification_failed, or errored
     * A bank account that hasn’t had any activity or validation performed is new
     * If Stripe can determine that the bank account exists, its status will be validated
     * If the verification failed for any reason, such as microdeposit failure, the status will be verification_failed
     * If a transfer sent to this bank account fails, we’ll set the status to errored and will not continue to send transfers until the bank details are updated.
     * @var string
     */
    protected $status;

    /**
     * @return string
     */
    public function getAccount(): string
    {
        return $this->account;
    }

    /**
     * @param string $account
     */
    public function setAccount(string $account): void
    {
        $this->account = $account;
    }

    /**
     * @return string
     */
    public function getAccountHolderName(): string
    {
        return $this->account_holder_name;
    }

    /**
     * @param string $account_holder_name
     */
    public function setAccountHolderName(string $account_holder_name): void
    {
        $this->account_holder_name = $account_holder_name;
    }

    /**
     * @return string
     */
    public function getAccountHolderType(): string
    {
        return $this->account_holder_type;
    }

    /**
     * @param string $account_holder_type
     */
    public function setAccountHolderType(string $account_holder_type): void
    {
        $this->account_holder_type = $account_holder_type;
    }

    /**
     * @return string
     */
    public function getBankName(): string
    {
        return $this->bank_name;
    }

    /**
     * @param string $bank_name
     */
    public function setBankName(string $bank_name): void
    {
        $this->bank_name = $bank_name;
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
     * @return bool
     */
    public function isDefaultForCurrency(): bool
    {
        return $this->default_for_currency;
    }

    /**
     * @param bool $default_for_currency
     */
    public function setDefaultForCurrency(bool $default_for_currency): void
    {
        $this->default_for_currency = $default_for_currency;
    }

    /**
     * @return string
     */
    public function getFingerprint(): string
    {
        return $this->fingerprint;
    }

    /**
     * @param string $fingerprint
     */
    public function setFingerprint(string $fingerprint): void
    {
        $this->fingerprint = $fingerprint;
    }

    /**
     * @return string
     */
    public function getLast4(): string
    {
        return $this->last4;
    }

    /**
     * @param string $last4
     */
    public function setLast4(string $last4): void
    {
        $this->last4 = $last4;
    }

    /**
     * @return string
     */
    public function getRoutingNumber(): string
    {
        return $this->routing_number;
    }

    /**
     * @param string $routing_number
     */
    public function setRoutingNumber(string $routing_number): void
    {
        $this->routing_number = $routing_number;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

}
