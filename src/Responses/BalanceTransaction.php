<?php

namespace jamesvweston\Stripe\Responses;


class BalanceTransaction extends BaseObject
{

    /**
     * @var int
     */
    protected $amount;

    /**
     * @var int
     */
    protected $available_on;

    /**
     * @var int
     */
    protected $created;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $exchange_rate;

    /**
     * @var int
     */
    protected $fee;

    /**
     * @var FeeDetail[]
     */
    protected $fee_details;

    /**
     * @var int
     */
    protected $net;

    /**
     * @var string
     */
    protected $source;

    /**
     * If the transaction’s net funds are available in the Stripe balance yet. Either available or pending
     * @var string
     */
    protected $status;

    /**
     * Transaction type: adjustment, application_fee, application_fee_refund, charge, payment, payment_failure_refund,
     * payment_refund, refund, transfer, transfer_refund, payout, payout_cancel, payout_failure, validation, or stripe_fee
     * @var string
     */
    protected $type;

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
    public function getAvailableOn(): int
    {
        return $this->available_on;
    }

    /**
     * @param int $available_on
     */
    public function setAvailableOn(int $available_on): void
    {
        $this->available_on = $available_on;
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
    public function getExchangeRate(): ?string
    {
        return $this->exchange_rate;
    }

    /**
     * @param null|string $exchange_rate
     */
    public function setExchangeRate(?string $exchange_rate): void
    {
        $this->exchange_rate = $exchange_rate;
    }

    /**
     * @return int
     */
    public function getFee(): int
    {
        return $this->fee;
    }

    /**
     * @param int $fee
     */
    public function setFee(int $fee): void
    {
        $this->fee = $fee;
    }

    /**
     * @return FeeDetail[]
     */
    public function getFeeDetails(): array
    {
        return $this->fee_details;
    }

    /**
     * @param FeeDetail[] $fee_details
     */
    public function setFeeDetails(array $fee_details): void
    {
        $this->fee_details = $fee_details;
    }

    /**
     * @return int
     */
    public function getNet(): int
    {
        return $this->net;
    }

    /**
     * @param int $net
     */
    public function setNet(int $net): void
    {
        $this->net = $net;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource(string $source): void
    {
        $this->source = $source;
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
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

}
