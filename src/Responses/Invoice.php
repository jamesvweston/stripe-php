<?php

namespace jamesvweston\Stripe\Responses;

/**
 * Class Invoice
 * @package jamesvweston\Stripe\Responses
 * @see https://stripe.com/docs/api/invoices/object
 */
class Invoice extends BaseObject
{

    /**
     * @var int
     */
    protected $amount_due;

    /**
     * @var int
     */
    protected $amount_paid;

    /**
     * @var int
     */
    protected $amount_remaining;

    /**
     * @var int|null
     */
    protected $application_fee_amount;

    /**
     * @var int
     */
    protected $attempt_count;

    /**
     * @var bool
     */
    protected $attempted;

    /**
     * @var bool
     */
    protected $auto_advance;

    /**
     * @var string
     */
    protected $billing;

    /**
     * @var string
     */
    protected $billing_reason;

    /**
     * @var string
     */
    protected $charge;

    /**
     * @var int
     */
    protected $created;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var array|null
     */
    protected $custom_fields;

    /**
     * @var string
     */
    protected $customer;

    /**
     * @var string|null
     */
    protected $default_source;

    /**
     * @var string|null
     */
    protected $description;


    protected $discount;

    /**
     * @var int|null
     */
    protected $due_date;

    /**
     * @var int
     */
    protected $ending_balance;

    /**
     * @var string|null
     */
    protected $footer;

    /**
     * @var string
     */
    protected $hosted_invoice_url;

    /**
     * @var string|null
     */
    protected $invoice_pdf;

    /**
     * @return int
     */
    public function getAmountDue(): int
    {
        return $this->amount_due;
    }

    /**
     * @return int
     */
    public function getAmountPaid(): int
    {
        return $this->amount_paid;
    }

    /**
     * @return int
     */
    public function getAmountRemaining(): int
    {
        return $this->amount_remaining;
    }

    /**
     * @return int|null
     */
    public function getApplicationFeeAmount(): ?int
    {
        return $this->application_fee_amount;
    }

    /**
     * @return int
     */
    public function getAttemptCount(): int
    {
        return $this->attempt_count;
    }

    /**
     * @return bool
     */
    public function isAttempted(): bool
    {
        return $this->attempted;
    }

    /**
     * @return bool
     */
    public function isAutoAdvance(): bool
    {
        return $this->auto_advance;
    }

    /**
     * @return string
     */
    public function getBilling(): string
    {
        return $this->billing;
    }

    /**
     * @return string
     */
    public function getBillingReason(): string
    {
        return $this->billing_reason;
    }

    /**
     * @return string
     */
    public function getCharge(): string
    {
        return $this->charge;
    }

    /**
     * @return int
     */
    public function getCreated(): int
    {
        return $this->created;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return array|null
     */
    public function getCustomFields(): ?array
    {
        return $this->custom_fields;
    }

    /**
     * @return string
     */
    public function getCustomer(): string
    {
        return $this->customer;
    }

    /**
     * @return string|null
     */
    public function getDefaultSource(): ?string
    {
        return $this->default_source;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @return int|null
     */
    public function getDueDate(): ?int
    {
        return $this->due_date;
    }

    /**
     * @return int
     */
    public function getEndingBalance(): int
    {
        return $this->ending_balance;
    }

    /**
     * @return string|null
     */
    public function getFooter(): ?string
    {
        return $this->footer;
    }

    /**
     * @return string
     */
    public function getHostedInvoiceUrl(): string
    {
        return $this->hosted_invoice_url;
    }

    /**
     * @return string|null
     */
    public function getInvoicePdf(): ?string
    {
        return $this->invoice_pdf;
    }

}