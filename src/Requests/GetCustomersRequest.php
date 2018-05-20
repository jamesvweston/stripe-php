<?php

namespace jamesvweston\Stripe\Requests;


class GetCustomersRequest extends BaseGetRequest implements \JsonSerializable
{

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object                             = parent::jsonSerialize();
        $object['email']                    = $this->email;

        return $object;
    }

    /**
     * @return null|string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param null|string $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

}
