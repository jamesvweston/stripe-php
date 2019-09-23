<?php

namespace jamesvweston\Stripe\Requests;


/**
 * Class CreatePlanRequest
 * @package jamesvweston\Stripe\Requests
 * @see https://stripe.com/docs/api#create_subscription
 */
class CreateSubscriptionRequest implements \JsonSerializable
{

    /**
     * @var string
     */
    protected $customer;

    /**
     * A non-negative decimal between 0 and 100, with at most two decimal places.
     * This represents the percentage of the subscription invoice subtotal that will be transferred to the
     * application owner’s Stripe account. The request must be made with an OAuth key in order to set an application fee percentage.
     * @var float|null
     */
    protected $application_fee_percent;

    /**
     * When charging automatically, Stripe will attempt to pay this subscription at the end of the cycle
     * using the default source attached to the customer. When sending an invoice, Stripe will email your
     * customer an invoice with payment instructions. Defaults to charge_automatically
     * One of: charge_automatically, or send_invoice
     * @var string|null
     */
    protected $billing;

    /**
     * A future timestamp to anchor the subscription’s billing cycle.
     * This is used to determine the date of the first full invoice, and, for plans with month or year
     * intervals, the day of the month for subsequent invoices.
     * @var string|null
     */
    protected $billing_cycle_anchor;

    /**
     * The code of the coupon to apply to this subscription. A coupon applied to a subscription will only
     * affect invoices created for that particular subscription.
     * @var string|null
     */
    protected $coupon;

    /**
     * Number of days a customer has to pay invoices generated by this subscription.
     * Only valid for subscriptions where billing=send_invoice.
     * @var int|null
     */
    protected $days_until_due;

    /**
     * @var CreateSubscriptionItemRequest[]
     */
    protected $items;

    /**
     * @var array|null
     */
    protected $metadata;

    /**
     * Boolean (default true). Use with a billing_cycle_anchor timestamp to determine
     * whether the customer will be invoiced a prorated amount until the anchor date.
     * If false, the anchor period will be free (similar to a trial).
     * @var bool|null
     */
    protected $prorate;

    /**
     * @var string|null
     */
    protected $source;

    /**
     * A non-negative decimal (with at most four decimal places) between 0 and 100. This represents the percentage
     * of the subscription invoice subtotal that will be calculated and added as tax to the final amount each billing period.
     * For example, a plan which charges $10/month with a tax_percent of 20.0 will charge $12 per invoice.
     * @var string|null
     */
    protected $tax_percent;

    /**
     * Unix timestamp representing the end of the trial period the customer will get before being charged for the first time.
     * The special value now can be provided to end the customer’s trial immediately.
     * @var int|null
     */
    protected $trial_end;

    /**
     * Indicates if a plan’s trial_period_days should be applied to the subscription.
     * Setting trial_end per subscription is preferred, and this defaults to false.
     * Setting this flag to true together with trial_end is not allowed.
     * @var bool|string|null
     */
    private $trial_from_plan;

    /**
     * Integer representing the number of trial period days before the customer is charged for the first time.
     * @var int|null
     */
    protected $trial_period_days;


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['customer']                 = $this->customer;
        $object['application_fee_percent']  = $this->application_fee_percent;
        $object['billing']                  = $this->billing;
        $object['billing_cycle_anchor']     = $this->billing_cycle_anchor;
        $object['coupon']                   = $this->coupon;
        $object['days_until_due']           = $this->days_until_due;

        $object['items']                    = [];
        foreach ($this->items AS $item)
            $object['items'][]              = $item->jsonSerialize();

        $object['metadata']                 = $this->metadata;
        $object['prorate']                  = $this->prorate;
        $object['source']                   = $this->source;
        $object['tax_percent']              = $this->tax_percent;
        $object['trial_end']                = $this->trial_end;
        $object['trial_from_plan']          = $this->trial_from_plan;
        $object['trial_period_days']        = $this->trial_period_days;

        return $object;
    }

    /**
     * @return string
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param string $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return float|null
     */
    public function getApplicationFeePercent()
    {
        return $this->application_fee_percent;
    }

    /**
     * @param float|null $application_fee_percent
     */
    public function setApplicationFeePercent($application_fee_percent)
    {
        $this->application_fee_percent = $application_fee_percent;
    }

    /**
     * @return null|string
     */
    public function getBilling()
    {
        return $this->billing;
    }

    /**
     * @param null|string $billing
     */
    public function setBilling($billing)
    {
        $this->billing = $billing;
    }

    /**
     * @return null|string
     */
    public function getBillingCycleAnchor()
    {
        return $this->billing_cycle_anchor;
    }

    /**
     * @param null|string $billing_cycle_anchor
     */
    public function setBillingCycleAnchor($billing_cycle_anchor)
    {
        $this->billing_cycle_anchor = $billing_cycle_anchor;
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
     * @return int|null
     */
    public function getDaysUntilDue()
    {
        return $this->days_until_due;
    }

    /**
     * @param int|null $days_until_due
     */
    public function setDaysUntilDue($days_until_due)
    {
        $this->days_until_due = $days_until_due;
    }

    /**
     * @return CreateSubscriptionItemRequest[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param CreateSubscriptionItemRequest[] $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @return array|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param array|null $metadata
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
    }

    /**
     * @return bool|null
     */
    public function getProrate()
    {
        return $this->prorate;
    }

    /**
     * @param bool|null $prorate
     */
    public function setProrate($prorate)
    {
        $this->prorate = $prorate;
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
    public function getTaxPercent()
    {
        return $this->tax_percent;
    }

    /**
     * @param null|string $tax_percent
     */
    public function setTaxPercent($tax_percent)
    {
        $this->tax_percent = $tax_percent;
    }

    /**
     * @return int|null
     */
    public function getTrialEnd()
    {
        return $this->trial_end;
    }

    /**
     * @param int|null $trial_end
     */
    public function setTrialEnd($trial_end)
    {
        $this->trial_end = $trial_end;
    }

    /**
     * @return int|null
     */
    public function getTrialPeriodDays()
    {
        return $this->trial_period_days;
    }

    /**
     * @param int|null $trial_period_days
     */
    public function setTrialPeriodDays($trial_period_days)
    {
        $this->trial_period_days = $trial_period_days;
    }

    /**
     * @return bool|string|null
     */
    public function getTrialFromPlan()
    {
        return $this->trial_from_plan;
    }

    /**
     * @param bool|string|null $trial_from_plan
     */
    public function setTrialFromPlan($trial_from_plan): void
    {
        $this->trial_from_plan = $trial_from_plan;
    }

}