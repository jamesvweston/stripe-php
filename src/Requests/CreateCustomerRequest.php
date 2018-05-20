<?php

namespace jamesvweston\Stripe\Requests;


/**
 * Class CreateCustomerRequest
 * @see https://stripe.com/docs/api#create_customer
 * @package jamesvweston\Stripe\Requests
 */
class CreateCustomerRequest implements \JsonSerializable
{

    /**
     * An integer amount in cents that is the starting account balance for your customer.
     * A negative amount represents a credit that will be used before attempting any charges to the customer’s card.
     * A positive amount will be added to the next invoice.
     * @var     float|null
     */
    protected $account_balance;

    /**
     * The customer’s VAT identification number.
     * If you are using Relay, this field gets passed to tax provider you are using for your orders.
     * This will be unset if you POST an empty value.
     * This can be unset by updating the value to null and then saving.
     * @var     string|null
     */
    protected $business_vat_id;

    /**
     * If you provide a coupon code, the customer will have a discount applied on all recurring charges.
     * Charges you create through the API will not have the discount.
     * @var string|null
     */
    protected $coupon;

    /**
     * @var string|null
     */
    protected $default_source;

    /**
     * An arbitrary string that you can attach to a customer object.
     * It is displayed alongside the customer in the dashboard. This will be unset if you POST an empty value.
     * This can be unset by updating the value to null and then saving.
     * @var     string|null
     */
    protected $description;

    /**
     * Customer’s email address.
     * It’s displayed alongside the customer in your dashboard and can be useful for searching and tracking.
     * This will be unset if you POST an empty value.This can be unset by updating the value to null and then saving.
     * @var     string|null
     */
    protected $email;

    /**
     * A set of key/value pairs that you can attach to a customer object.
     * It can be useful for storing additional information about the customer in a structured format.
     * This will be unset if you POST an empty value.This can be unset by updating the value to null and then saving.
     * @var     array
     */
    protected $metadata;

    /**
     * @var CreateCardRequest|null
     */
    protected $source;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        //  TODO: Implement source

        $object['account_balance']          = $this->account_balance;
        $object['business_vat_id']          = $this->business_vat_id;
        $object['coupon']                   = $this->coupon;
        $object['default_source']           = $this->default_source;
        $object['description']              = $this->description;
        $object['email']                    = $this->email;
        $object['metadata']                 = $this->metadata;
        $object['source']                   = ($this->source instanceof \JsonSerializable) ? $this->source->jsonSerialize() : $this->source;

        return $object;
    }

    /**
     * @return float|null
     */
    public function getAccountBalance()
    {
        return $this->account_balance;
    }

    /**
     * @param float|null $account_balance
     */
    public function setAccountBalance($account_balance)
    {
        $this->account_balance = $account_balance;
    }

    /**
     * @return null|string
     */
    public function getBusinessVatId()
    {
        return $this->business_vat_id;
    }

    /**
     * @param null|string $business_vat_id
     */
    public function setBusinessVatId($business_vat_id)
    {
        $this->business_vat_id = $business_vat_id;
    }

    /**
     * @return null|string
     */
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * @param null|string $coupon
     */
    public function setCoupon($coupon)
    {
        $this->coupon = $coupon;
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
     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param null|string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
     * @return CreateCardRequest|null
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param CreateCardRequest|null $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

}
