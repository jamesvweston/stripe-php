<?php

namespace jamesvweston\Stripe\Responses;


class Charge extends BaseObject
{

    /**
     * A positive integer in the smallest currency unit (e.g., 100 cents to charge $1.00 or 100 to charge)
     * @var int
     */
    protected $amount;

    /**
     * Amount in cents refunded (can be less than the amount attribute on the charge if a partial refund was issued).
     * @var int
     */
    protected $amount_refunded;

    /**
     * ID of the Connect application that created the charge.
     * @var string|null
     */
    protected $application;

    /**
     * The application fee (if any) for the charge.
     * @var string|null
     */
    protected $application_fee;

    /**
     * ID of the balance transaction that describes the impact of this charge on your account balance (not including refunds or disputes).
     * @var string|null
     */
    protected $balance_transaction;

    /**
     * If the charge was created without capturing, this Boolean represents whether it is still uncaptured or has since been captured.
     * @var bool
     */
    protected $captured;

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * @var int
     */
    protected $created;

    /**
     * @var string
     */
    protected $currency;

    /**
     * ID of the customer this charge is for if one exists.
     * @var string|null
     */
    protected $customer;

    /**
     * An arbitrary string attached to the object. Often useful for displaying to users.
     * @var string|null
     */
    protected $description;

    /**
     * Details about the dispute if the charge has been disputed.
     * @var string|null
     */
    protected $dispute;

    /**
     * Error code explaining reason for charge failure if available
     * @var string|null
     */
    protected $failure_code;

    /**
     * Message to user further explaining reason for charge failure if available.
     * @var string|null
     */
    protected $failure_message;

    /**
     * Hash with information on fraud assessments for the charge
     * @var array|null
     */
    protected $fraud_details;

    /**
     * ID of the invoice this charge is for if one exists.
     * @var string|null
     */
    protected $invoice;

    /**
     * ID of the order this charge is for if one exists.
     * @var string|null
     */
    protected $order;

    /**
     * Details about whether the payment was accepted, and why.
     * @var array
     */
    protected $outcome;

    /**
     * true if the charge succeeded, or was successfully authorized for later capture.
     * @var bool
     */
    protected $paid;

    /**
     * Whether the charge has been fully refunded. If the charge is only partially refunded, this attribute will still be false.
     * @var bool
     */
    protected $refunded;

    /**
     * @var array
     */
    protected $refunds;

    /**
     * ID of the review associated with this charge if one exists.
     * @var string|null
     */
    protected $review;

    /**
     * For most Stripe users, the source of every charge is a credit or debit card. This hash is then the card object describing that card.
     * @var Card
     */
    protected $source;

    /**
     * Extra information about a charge. This will appear on your customer’s credit card statement. It must contain at least one letter.
     * @var string|null
     */
    protected $statement_descriptor;

    /**
     * The status of the payment is either succeeded, pending, or failed.
     * @var string
     */
    protected $status;

    /**
     * ID of the transfer to the destination account (only applicable if the charge was created using the destination parameter).
     * @var string|null
     */
    protected $transfer;

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getAmountRefunded(): int
    {
        return $this->amount_refunded;
    }

    /**
     * @param int $amount_refunded
     */
    public function setAmountRefunded(int $amount_refunded): void
    {
        $this->amount_refunded = $amount_refunded;
    }

    /**
     * @return null|string
     */
    public function getApplication(): ?string
    {
        return $this->application;
    }

    /**
     * @param null|string $application
     */
    public function setApplication(?string $application): void
    {
        $this->application = $application;
    }

    /**
     * @return null|string
     */
    public function getApplicationFee(): ?string
    {
        return $this->application_fee;
    }

    /**
     * @param null|string $application_fee
     */
    public function setApplicationFee(?string $application_fee): void
    {
        $this->application_fee = $application_fee;
    }

    /**
     * @return null|string
     */
    public function getBalanceTransaction(): ?string
    {
        return $this->balance_transaction;
    }

    /**
     * @param null|string $balance_transaction
     */
    public function setBalanceTransaction(?string $balance_transaction): void
    {
        $this->balance_transaction = $balance_transaction;
    }

    /**
     * @return bool
     */
    public function isCaptured(): bool
    {
        return $this->captured;
    }

    /**
     * @param bool $captured
     */
    public function setCaptured(bool $captured): void
    {
        $this->captured = $captured;
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
    public function getDispute(): ?string
    {
        return $this->dispute;
    }

    /**
     * @param null|string $dispute
     */
    public function setDispute(?string $dispute): void
    {
        $this->dispute = $dispute;
    }

    /**
     * @return null|string
     */
    public function getFailureCode(): ?string
    {
        return $this->failure_code;
    }

    /**
     * @param null|string $failure_code
     */
    public function setFailureCode(?string $failure_code): void
    {
        $this->failure_code = $failure_code;
    }

    /**
     * @return null|string
     */
    public function getFailureMessage(): ?string
    {
        return $this->failure_message;
    }

    /**
     * @param null|string $failure_message
     */
    public function setFailureMessage(?string $failure_message): void
    {
        $this->failure_message = $failure_message;
    }

    /**
     * @return array|null
     */
    public function getFraudDetails(): ?array
    {
        return $this->fraud_details;
    }

    /**
     * @param array|null $fraud_details
     */
    public function setFraudDetails(?array $fraud_details): void
    {
        $this->fraud_details = $fraud_details;
    }

    /**
     * @return null|string
     */
    public function getInvoice(): ?string
    {
        return $this->invoice;
    }

    /**
     * @param null|string $invoice
     */
    public function setInvoice(?string $invoice): void
    {
        $this->invoice = $invoice;
    }

    /**
     * @return null|string
     */
    public function getOrder(): ?string
    {
        return $this->order;
    }

    /**
     * @param null|string $order
     */
    public function setOrder(?string $order): void
    {
        $this->order = $order;
    }

    /**
     * @return array
     */
    public function getOutcome(): array
    {
        return $this->outcome;
    }

    /**
     * @param array $outcome
     */
    public function setOutcome(array $outcome): void
    {
        $this->outcome = $outcome;
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
     * @return bool
     */
    public function isRefunded(): bool
    {
        return $this->refunded;
    }

    /**
     * @param bool $refunded
     */
    public function setRefunded(bool $refunded): void
    {
        $this->refunded = $refunded;
    }

    /**
     * @return array
     */
    public function getRefunds(): array
    {
        return $this->refunds;
    }

    /**
     * @param array $refunds
     */
    public function setRefunds(array $refunds): void
    {
        $this->refunds = $refunds;
    }

    /**
     * @return null|string
     */
    public function getReview(): ?string
    {
        return $this->review;
    }

    /**
     * @param null|string $review
     */
    public function setReview(?string $review): void
    {
        $this->review = $review;
    }

    /**
     * @return Card
     */
    public function getSource(): Card
    {
        return $this->source;
    }

    /**
     * @param Card $source
     */
    public function setSource(Card $source): void
    {
        $this->source = $source;
    }

    /**
     * @return null|string
     */
    public function getStatementDescriptor(): ?string
    {
        return $this->statement_descriptor;
    }

    /**
     * @param null|string $statement_descriptor
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
     * @return null|string
     */
    public function getTransfer(): ?string
    {
        return $this->transfer;
    }

    /**
     * @param null|string $transfer
     */
    public function setTransfer(?string $transfer): void
    {
        $this->transfer = $transfer;
    }

}
