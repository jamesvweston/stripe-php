<?php

namespace jamesvweston\Stripe\Requests;


class GetSubscriptionsRequest extends BaseGetRequest implements \JsonSerializable
{

    /**
     * One of: active, past_due, unpaid, canceled, trialing, or all
     * @var string|null
     */
    protected $status;


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object                             = parent::jsonSerialize();
        $object['status']                   = $this->status;

        return $object;
    }

    /**
     * @return null|string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param null|string $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

}
