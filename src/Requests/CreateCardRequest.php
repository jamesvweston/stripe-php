<?php

namespace jamesvweston\Stripe\Requests;


/**
 * Class CreateCardRequest
 * @see https://stripe.com/docs/api#create_card
 * @package jamesvweston\Stripe\Requests
 */
class CreateCardRequest implements \JsonSerializable
{

    /**
     * The type of payment source
     * @var string
     */
    protected $object = 'card';

    /**
     * Two digit number representing the card's expiration month
     * @var int
     */
    protected $exp_month;

    /**
     * Two or four digit number representing the card's expiration year
     * @var int
     */
    protected $exp_year;

    /**
     * The card number, as a string without any separators
     * @var string
     */
    protected $number;

    /**
     * @var string|null
     */
    protected $address_city;

    /**
     * @var string|null
     */
    protected $address_country;

    /**
     * @var string|null
     */
    protected $address_line1;

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
     * MANAGED ACCOUNTS ONLY
     * Required when adding a card to an account (not applicable to a customers or recipients).
     * The card (which must be a debit card) can be used as a transfer destination for funds in this currency.
     * Currently, the only supported currency for debit card transfers is usd
     * @var string|null
     */
    protected $currency;

    /**
     * Card security code.
     * Required unless your account is registered in Australia, Canada, or the United States.
     * Highly recommended to always include this value.
     * @var string|null
     */
    protected $cvc;

    /**
     * MANAGED ACCOUNTS ONLY
     * Only applicable on accounts (not customers or recipients).
     * If you set this to true (or if this is the first external account being added in this currency) this card will become the default external account for its currency
     * @var bool|null
     */
    protected $default_for_currency;

    /**
     * A set of key/value pairs that you can attach to a card object.
     * It can be useful for storing additional information about the card in a structured format.
     * @var array
     */
    protected $metadata;

    /**
     * Cardholder's full name
     * @var string|null
     */
    protected $name;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['object']                   = $this->object;
        $object['exp_month']                = $this->exp_month;
        $object['exp_year']                 = $this->exp_year;
        $object['number']                   = $this->number;
        $object['address_city']             = $this->address_city;
        $object['address_country']          = $this->address_country;
        $object['address_line1']            = $this->address_line1;
        $object['address_line2']            = $this->address_line2;
        $object['address_state']            = $this->address_state;
        $object['address_zip']              = $this->address_zip;
        $object['currency']                 = $this->currency;
        $object['cvc']                      = $this->cvc;
        $object['default_for_currency']     = $this->default_for_currency;
        $object['metadata']                 = $this->metadata;
        $object['name']                     = $this->name;

        return $object;
    }

    /**
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param string $object
     */
    public function setObject($object)
    {
        $this->object = $object;
    }

    /**
     * @return int
     */
    public function getExpMonth()
    {
        return $this->exp_month;
    }

    /**
     * @param int $exp_month
     */
    public function setExpMonth($exp_month)
    {
        $this->exp_month = $exp_month;
    }

    /**
     * @return int
     */
    public function getExpYear()
    {
        return $this->exp_year;
    }

    /**
     * @param int $exp_year
     */
    public function setExpYear($exp_year)
    {
        $this->exp_year = $exp_year;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return null|string
     */
    public function getAddressCity()
    {
        return $this->address_city;
    }

    /**
     * @param null|string $address_city
     */
    public function setAddressCity($address_city)
    {
        $this->address_city = $address_city;
    }

    /**
     * @return null|string
     */
    public function getAddressCountry()
    {
        return $this->address_country;
    }

    /**
     * @param null|string $address_country
     */
    public function setAddressCountry($address_country)
    {
        $this->address_country = $address_country;
    }

    /**
     * @return null|string
     */
    public function getAddressLine1()
    {
        return $this->address_line1;
    }

    /**
     * @param null|string $address_line1
     */
    public function setAddressLine1($address_line1)
    {
        $this->address_line1 = $address_line1;
    }

    /**
     * @return null|string
     */
    public function getAddressLine2()
    {
        return $this->address_line2;
    }

    /**
     * @param null|string $address_line2
     */
    public function setAddressLine2($address_line2)
    {
        $this->address_line2 = $address_line2;
    }

    /**
     * @return null|string
     */
    public function getAddressState()
    {
        return $this->address_state;
    }

    /**
     * @param null|string $address_state
     */
    public function setAddressState($address_state)
    {
        $this->address_state = $address_state;
    }

    /**
     * @return null|string
     */
    public function getAddressZip()
    {
        return $this->address_zip;
    }

    /**
     * @param null|string $address_zip
     */
    public function setAddressZip($address_zip)
    {
        $this->address_zip = $address_zip;
    }

    /**
     * @return null|string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param null|string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return null|string
     */
    public function getCvc()
    {
        return $this->cvc;
    }

    /**
     * @param null|string $cvc
     */
    public function setCvc($cvc)
    {
        $this->cvc = $cvc;
    }

    /**
     * @return bool|null
     */
    public function getDefaultForCurrency()
    {
        return $this->default_for_currency;
    }

    /**
     * @param bool|null $default_for_currency
     */
    public function setDefaultForCurrency($default_for_currency)
    {
        $this->default_for_currency = $default_for_currency;
    }

    /**
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param array $metadata
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}