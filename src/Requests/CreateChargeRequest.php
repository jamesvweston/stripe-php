<?php

namespace jamesvweston\Stripe\Requests;


/**
 * Class CreateChargeRequest
 * @package jamesvweston\Stripe\Requests
 * @see https://stripe.com/docs/api#create_charge
 */
class CreateChargeRequest implements \JsonSerializable
{

    /**
     * A positive integer representing how much to charge, in the smallest currency unit (e.g., 100 cents to charge $1.00)
     * @var int
     */
    protected $amount;

    /**
     * 3-letter ISO code for currency.
     * @var string
     */
    protected $currency         = 'USD';

    /**
     * Whether to immediately capture the charge.
     * @var bool
     */
    protected $capture          = 'true';

    /**
     * An arbitrary string which you can attach to a Charge object. It is displayed when in the web interface alongside the charge.
     * @var string|null
     */
    protected $description;

    /**
     * @var array
     */
    protected $metadata;

    /**
     * The ID of an existing customer that will be charged in this request.
     * Either customer or source is required
     * @var string|null
     */
    protected $customer;

    /**
     * A payment source to be charged, such as a credit card.
     * Either customer or source is required
     * @var string|null
     */
    protected $source;

    /**
     * An arbitrary string to be displayed on your customer's credit card statement. This can be up to 22 characters.
     * @var string|null
     */
    protected $statement_descriptor;


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['amount']                   = $this->amount;
        $object['currency']                 = $this->currency;
        $object['capture']                  = $this->capture;
        $object['description']              = $this->description;
        $object['metadata']                 = $this->metadata;
        $object['customer']                 = $this->customer;
        $object['source']                   = $this->source;
        $object['statement_descriptor']     = $this->statement_descriptor;

        return $object;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return bool
     */
    public function isCapture()
    {
        return $this->capture;
    }

    /**
     * @param bool $capture
     */
    public function setCapture($capture)
    {
        $this->capture = $capture;
    }

    /**
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param null|string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param null|string $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return null|string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param null|string $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * @return null|string
     */
    public function getStatementDescriptor()
    {
        return $this->statement_descriptor;
    }

    /**
     * @param null|string $statement_descriptor
     */
    public function setStatementDescriptor($statement_descriptor)
    {
        $this->statement_descriptor = $statement_descriptor;
    }

}