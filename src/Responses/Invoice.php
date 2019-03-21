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
     * @var Charge|null
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
     * @var Discount|null
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
     * @var string|null
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
     * @var string|null
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
     * @var int|null
     */
    protected $tax;

    /**
     * @var int
     */
    protected $total;

    /**
     * @return int
     */
    public function getAmountDue(): int
    {
        return $this->amount_due;
    }

    /**
     * @param int $amount_due
     */
    public function setAmountDue(int $amount_due): void
    {
        $this->amount_due = $amount_due;
    }

    /**
     * @return int
     */
    public function getAmountPaid(): int
    {
        return $this->amount_paid;
    }

    /**
     * @param int $amount_paid
     */
    public function setAmountPaid(int $amount_paid): void
    {
        $this->amount_paid = $amount_paid;
    }

    /**
     * @return int
     */
    public function getAmountRemaining(): int
    {
        return $this->amount_remaining;
    }

    /**
     * @param int $amount_remaining
     */
    public function setAmountRemaining(int $amount_remaining): void
    {
        $this->amount_remaining = $amount_remaining;
    }

    /**
     * @return int|null
     */
    public function getApplicationFeeAmount(): ?int
    {
        return $this->application_fee_amount;
    }

    /**
     * @param int|null $application_fee_amount
     */
    public function setApplicationFeeAmount(?int $application_fee_amount): void
    {
        $this->application_fee_amount = $application_fee_amount;
    }

    /**
     * @return int
     */
    public function getAttemptCount(): int
    {
        return $this->attempt_count;
    }

    /**
     * @param int $attempt_count
     */
    public function setAttemptCount(int $attempt_count): void
    {
        $this->attempt_count = $attempt_count;
    }

    /**
     * @return bool
     */
    public function isAttempted(): bool
    {
        return $this->attempted;
    }

    /**
     * @param bool $attempted
     */
    public function setAttempted(bool $attempted): void
    {
        $this->attempted = $attempted;
    }

    /**
     * @return bool
     */
    public function isAutoAdvance(): bool
    {
        return $this->auto_advance;
    }

    /**
     * @param bool $auto_advance
     */
    public function setAutoAdvance(bool $auto_advance): void
    {
        $this->auto_advance = $auto_advance;
    }

    /**
     * @return string
     */
    public function getBilling(): string
    {
        return $this->billing;
    }

    /**
     * @param string $billing
     */
    public function setBilling(string $billing): void
    {
        $this->billing = $billing;
    }

    /**
     * @return string
     */
    public function getBillingReason(): string
    {
        return $this->billing_reason;
    }

    /**
     * @param string $billing_reason
     */
    public function setBillingReason(string $billing_reason): void
    {
        $this->billing_reason = $billing_reason;
    }

    /**
     * @return Charge|null
     */
    public function getCharge(): ?Charge
    {
        return $this->charge;
    }

    /**
     * @param Charge|null $charge
     */
    public function setCharge(?Charge $charge): void
    {
        $this->charge = $charge;
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
     * @return array|null
     */
    public function getCustomFields(): ?array
    {
        return $this->custom_fields;
    }

    /**
     * @param array|null $custom_fields
     */
    public function setCustomFields(?array $custom_fields): void
    {
        $this->custom_fields = $custom_fields;
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
     * @return string|null
     */
    public function getDefaultSource(): ?string
    {
        return $this->default_source;
    }

    /**
     * @param string|null $default_source
     */
    public function setDefaultSource(?string $default_source): void
    {
        $this->default_source = $default_source;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return Discount|null
     */
    public function getDiscount(): ?Discount
    {
        return $this->discount;
    }

    /**
     * @param Discount|null $discount
     */
    public function setDiscount(?Discount $discount): void
    {
        $this->discount = $discount;
    }

    /**
     * @return int|null
     */
    public function getDueDate(): ?int
    {
        return $this->due_date;
    }

    /**
     * @param int|null $due_date
     */
    public function setDueDate(?int $due_date): void
    {
        $this->due_date = $due_date;
    }

    /**
     * @return int
     */
    public function getEndingBalance(): int
    {
        return $this->ending_balance;
    }

    /**
     * @param int $ending_balance
     */
    public function setEndingBalance(int $ending_balance): void
    {
        $this->ending_balance = $ending_balance;
    }

    /**
     * @return string|null
     */
    public function getFooter(): ?string
    {
        return $this->footer;
    }

    /**
     * @param string|null $footer
     */
    public function setFooter(?string $footer): void
    {
        $this->footer = $footer;
    }

    /**
     * @return string|null
     */
    public function getHostedInvoiceUrl(): ?string
    {
        return $this->hosted_invoice_url;
    }

    /**
     * @param string|null $hosted_invoice_url
     */
    public function setHostedInvoiceUrl(?string $hosted_invoice_url): void
    {
        $this->hosted_invoice_url = $hosted_invoice_url;
    }

    /**
     * @return string|null
     */
    public function getInvoicePdf(): ?string
    {
        return $this->invoice_pdf;
    }

    /**
     * @param string|null $invoice_pdf
     */
    public function setInvoicePdf(?string $invoice_pdf): void
    {
        $this->invoice_pdf = $invoice_pdf;
    }

    /**
     * @return InvoiceItemCollection
     */
    public function getLines(): InvoiceItemCollection
    {
        return $this->lines;
    }

    /**
     * @param InvoiceItemCollection $lines
     */
    public function setLines(InvoiceItemCollection $lines): void
    {
        $this->lines = $lines;
    }

    /**
     * @return int|null
     */
    public function getNextPaymentAttempt(): ?int
    {
        return $this->next_payment_attempt;
    }

    /**
     * @param int|null $next_payment_attempt
     */
    public function setNextPaymentAttempt(?int $next_payment_attempt): void
    {
        $this->next_payment_attempt = $next_payment_attempt;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    /**
     * @return bool
     */
    public function isPaid(): bool
    {
        return $this->paid;
    }

    /**
     * @param bool $paid
     */
    public function setPaid(bool $paid): void
    {
        $this->paid = $paid;
    }

    /**
     * @return int
     */
    public function getPeriodEnd(): int
    {
        return $this->period_end;
    }

    /**
     * @param int $period_end
     */
    public function setPeriodEnd(int $period_end): void
    {
        $this->period_end = $period_end;
    }

    /**
     * @return int
     */
    public function getPeriodStart(): int
    {
        return $this->period_start;
    }

    /**
     * @param int $period_start
     */
    public function setPeriodStart(int $period_start): void
    {
        $this->period_start = $period_start;
    }

    /**
     * @return string|null
     */
    public function getReceiptNumber(): ?string
    {
        return $this->receipt_number;
    }

    /**
     * @param string|null $receipt_number
     */
    public function setReceiptNumber(?string $receipt_number): void
    {
        $this->receipt_number = $receipt_number;
    }

    /**
     * @return int
     */
    public function getStartingBalance(): int
    {
        return $this->starting_balance;
    }

    /**
     * @param int $starting_balance
     */
    public function setStartingBalance(int $starting_balance): void
    {
        $this->starting_balance = $starting_balance;
    }

    /**
     * @return string|null
     */
    public function getStatementDescriptor(): ?string
    {
        return $this->statement_descriptor;
    }

    /**
     * @param string|null $statement_descriptor
     */
    public function setStatementDescriptor(?string $statement_descriptor): void
    {
        $this->statement_descriptor = $statement_descriptor;
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

    /**
     * @return string|null
     */
    public function getSubscription(): ?string
    {
        return $this->subscription;
    }

    /**
     * @param string|null $subscription
     */
    public function setSubscription(?string $subscription): void
    {
        $this->subscription = $subscription;
    }

    /**
     * @return int
     */
    public function getSubtotal(): int
    {
        return $this->subtotal;
    }

    /**
     * @param int $subtotal
     */
    public function setSubtotal(int $subtotal): void
    {
        $this->subtotal = $subtotal;
    }

    /**
     * @return int|null
     */
    public function getTax(): ?int
    {
        return $this->tax;
    }

    /**
     * @param int|null $tax
     */
    public function setTax(?int $tax): void
    {
        $this->tax = $tax;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @param int $total
     */
    public function setTotal(int $total): void
    {
        $this->total = $total;
    }


}