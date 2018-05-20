<?php

namespace jamesvweston\Stripe\Responses;


/**
 * Class Card
 * @see https://stripe.com/docs/api#card_object
 * @package jamesvweston\Stripe\Responses
 */
class Card extends BaseObject
{

    /**
     * @var string|null
     */
    protected $address_city;

    /**
     * Billing address country, if provided when creating card
     * @var string|null
     */
    protected $address_country;

    /**
     * @var string|null
     */
    protected $address_line1;

    /**
     * If address_line1 was provided, results of the check.
     * One of: pass, fail, unavailable, unchecked
     * @var string|null
     */
    protected $address_line1_check;

    /**
     * @var string|null
     */
    protected $address_line2;

    /**
     * @var string|null
     */
    protected $address_state;

    /**
     * @var string|null
     */
    protected $address_zip;

    /**
     * If address_zip was provided, results of the check
     * One of: pass, fail, unavailable, unchecked
     * @var string|null
     */
    protected $address_zip_check;

    /**
     * Card brand
     * One of: Visa, American Express, MasterCard, Discover, JCB, Diners Club, Unknown
     * @var string
     */
    protected $brand;

    /**
     * Two-letter ISO code representing the country of the card
     * You could use this attribute to get a sense of the international breakdown of cards you’ve collected
     * @var string
     */
    protected $country;

    /**
     * MANAGED ACCOUNTS ONLY
     * Only applicable on accounts (not customers or recipients).
     * The card can be used as a transfer destination for funds in this currency
     * @var string|null
     */
    protected $currency;

    /**
     * The customer that this card belongs to.
     * This attribute will not be in the card object if the card belongs to an account or recipient instead
     * @var string|null
     */
    protected $customer;

    /**
     * If a CVC was provided, results of the check
     * One of: pass, fail, unavailable, unchecked
     * @var string|null
     */
    protected $cvc_check;

    /**
     * MANAGED ACCOUNTS ONLY
     * Only applicable on accounts (not customers or recipients).
     * This indicates whether or not this card is the default external account for its currency.
     * @var bool|null
     */
    protected $default_for_currency;

    /**
     * (For tokenized numbers only.) The last four digits of the device account number
     * @var string|null
     */
    protected $dynamic_last4;

    /**
     * @var int
     */
    protected $exp_month;

    /**
     * @var int
     */
    protected $exp_year;

    /**
     * Uniquely identifies this particular card number.
     * You can use this attribute to check whether two customers who’ve signed up with you are using the same card number, for example
     * @var string|null
     */
    protected $fingerprint;

    /**
     * Card funding type.
     * Can be credit, debit, prepaid, or unknown
     * @var string
     */
    protected $funding;

    /**
     * @var string
     */
    protected $last4;

    /**
     * Card holder name
     * @var string|null
     */
    protected $name;

    /**
     * The recipient that this card belongs to.
     * This attribute will not be in the card object if the card belongs to a customer or account instead.
     * @var string|null
     */
    protected $recipient;

    /**
     * If the card number is tokenized, this is the method that was used.
     * Can be apple_pay or android_pay
     * @var string|null
     */
    protected $tokenization_method;

    /**
     * @return null|string
     */
    public function getAddressCity(): ?string
    {
        return $this->address_city;
    }

    /**
     * @param null|string $address_city
     */
    public function setAddressCity(?string $address_city): void
    {
        $this->address_city = $address_city;
    }

    /**
     * @return null|string
     */
    public function getAddressCountry(): ?string
    {
        return $this->address_country;
    }

    /**
     * @param null|string $address_country
     */
    public function setAddressCountry(?string $address_country): void
    {
        $this->address_country = $address_country;
    }

    /**
     * @return null|string
     */
    public function getAddressLine1(): ?string
    {
        return $this->address_line1;
    }

    /**
     * @param null|string $address_line1
     */
    public function setAddressLine1(?string $address_line1): void
    {
        $this->address_line1 = $address_line1;
    }

    /**
     * @return null|string
     */
    public function getAddressLine1Check(): ?string
    {
        return $this->address_line1_check;
    }

    /**
     * @param null|string $address_line1_check
     */
    public function setAddressLine1Check(?string $address_line1_check): void
    {
        $this->address_line1_check = $address_line1_check;
    }

    /**
     * @return null|string
     */
    public function getAddressLine2(): ?string
    {
        return $this->address_line2;
    }

    /**
     * @param null|string $address_line2
     */
    public function setAddressLine2(?string $address_line2): void
    {
        $this->address_line2 = $address_line2;
    }

    /**
     * @return null|string
     */
    public function getAddressState(): ?string
    {
        return $this->address_state;
    }

    /**
     * @param null|string $address_state
     */
    public function setAddressState(?string $address_state): void
    {
        $this->address_state = $address_state;
    }

    /**
     * @return null|string
     */
    public function getAddressZip(): ?string
    {
        return $this->address_zip;
    }

    /**
     * @param null|string $address_zip
     */
    public function setAddressZip(?string $address_zip): void
    {
        $this->address_zip = $address_zip;
    }

    /**
     * @return null|string
     */
    public function getAddressZipCheck(): ?string
    {
        return $this->address_zip_check;
    }

    /**
     * @param null|string $address_zip_check
     */
    public function setAddressZipCheck(?string $address_zip_check): void
    {
        $this->address_zip_check = $address_zip_check;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
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
    public function getCustomer(): ?string
    {
        return $this->customer;
    }

    /**
     * @param null|string $customer
     */
    public function setCustomer(?string $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @return null|string
     */
    public function getCvcCheck(): ?string
    {
        return $this->cvc_check;
    }

    /**
     * @param null|string $cvc_check
     */
    public function setCvcCheck(?string $cvc_check): void
    {
        $this->cvc_check = $cvc_check;
    }

    /**
     * @return bool|null
     */
    public function getDefaultForCurrency(): ?bool
    {
        return $this->default_for_currency;
    }

    /**
     * @param bool|null $default_for_currency
     */
    public function setDefaultForCurrency(?bool $default_for_currency): void
    {
        $this->default_for_currency = $default_for_currency;
    }

    /**
     * @return null|string
     */
    public function getDynamicLast4(): ?string
    {
        return $this->dynamic_last4;
    }

    /**
     * @param null|string $dynamic_last4
     */
    public function setDynamicLast4(?string $dynamic_last4): void
    {
        $this->dynamic_last4 = $dynamic_last4;
    }

    /**
     * @return int
     */
    public function getExpMonth(): int
    {
        return $this->exp_month;
    }

    /**
     * @param int $exp_month
     */
    public function setExpMonth(int $exp_month): void
    {
        $this->exp_month = $exp_month;
    }

    /**
     * @return int
     */
    public function getExpYear(): int
    {
        return $this->exp_year;
    }

    /**
     * @param int $exp_year
     */
    public function setExpYear(int $exp_year): void
    {
        $this->exp_year = $exp_year;
    }

    /**
     * @return null|string
     */
    public function getFingerprint(): ?string
    {
        return $this->fingerprint;
    }

    /**
     * @param null|string $fingerprint
     */
    public function setFingerprint(?string $fingerprint): void
    {
        $this->fingerprint = $fingerprint;
    }

    /**
     * @return string
     */
    public function getFunding(): string
    {
        return $this->funding;
    }

    /**
     * @param string $funding
     */
    public function setFunding(string $funding): void
    {
        $this->funding = $funding;
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
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return null|string
     */
    public function getRecipient(): ?string
    {
        return $this->recipient;
    }

    /**
     * @param null|string $recipient
     */
    public function setRecipient(?string $recipient): void
    {
        $this->recipient = $recipient;
    }

    /**
     * @return null|string
     */
    public function getTokenizationMethod(): ?string
    {
        return $this->tokenization_method;
    }

    /**
     * @param null|string $tokenization_method
     */
    public function setTokenizationMethod(?string $tokenization_method): void
    {
        $this->tokenization_method = $tokenization_method;
    }

}
