<?php

namespace jamesvweston\Stripe\Responses;


/**
 * Class Customer
 * @see https://stripe.com/docs/api#customer_object
 * @package jamesvweston\Stripe\Responses
 */
class Customer extends BaseObject
{

    /**
     * @var float
     */
    protected $account_balance;

    /**
     * @var string|null
     */
    protected $business_vat_id;

    /**
     * @var int
     */
    protected $created;

    /**
     * @var string|null
     */
    protected $currency;

    /**
     * @var string|null
     */
    protected $default_source;

    /**
     * @var bool
     */
    protected $delinquent;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var CardCollection
     */
    protected $sources;

    /**
     * @return float
     */
    public function getAccountBalance(): float
    {
        return $this->account_balance;
    }

    /**
     * @param float $account_balance
     */
    public function setAccountBalance(float $account_balance): void
    {
        $this->account_balance = $account_balance;
    }

    /**
     * @return null|string
     */
    public function getBusinessVatId(): ?string
    {
        return $this->business_vat_id;
    }

    /**
     * @param null|string $business_vat_id
     */
    public function setBusinessVatId(?string $business_vat_id): void
    {
        $this->business_vat_id = $business_vat_id;
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
     * @return null|string
     */
    public function getDefaultSource(): ?string
    {
        return $this->default_source;
    }

    /**
     * @param null|string $default_source
     */
    public function setDefaultSource(?string $default_source): void
    {
        $this->default_source = $default_source;
    }

    /**
     * @return bool
     */
    public function isDelinquent(): bool
    {
        return $this->delinquent;
    }

    /**
     * @param bool $delinquent
     */
    public function setDelinquent(bool $delinquent): void
    {
        $this->delinquent = $delinquent;
    }

    /**
     * @return null|string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param null|string $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return null|string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param null|string $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return CardCollection
     */
    public function getSources(): CardCollection
    {
        return $this->sources;
    }

    /**
     * @param CardCollection $sources
     */
    public function setSources(CardCollection $sources): void
    {
        $this->sources = $sources;
    }

}
