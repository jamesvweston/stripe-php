<?php

namespace jamesvweston\Stripe\Responses;


class FeeDetail
{

    /**
     * @var int
     */
    protected $amount;

    /**
     * @var string|null
     */
    protected $application;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * Type of the fee, one of: application_fee, stripe_fee or tax
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
