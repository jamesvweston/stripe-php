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

    /**
     * @var int|null
     */
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
     * @var InvoiceItemCollection
     */
    protected $lines;

    /**
     * @var int|null
     */
    protected $next_payment_attempt;

    /**
     * @var string
     */
    protected $number;

    /**
     * @var bool
     */
    protected $paid;

    /**
     * @var int
     */
    protected $period_end;

    /**
     * @var int
     */
    protected $period_start;

    /**
     * @var string
     */
    protected $receipt_number;

    /**
     * @var int
     */
    protected $starting_balance;

    /**
     * @var string|null
     */
    protected $statement_descriptor;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string|null
     */
    protected $subscription;

    /**
     * @var int
     */
    protected $subtotal;

    /**
     * @var int
     */
    protected $tax;

    /**
     * @var int
     */
    protected $total;

}