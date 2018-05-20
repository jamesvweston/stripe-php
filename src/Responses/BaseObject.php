<?php

namespace jamesvweston\Stripe\Responses;


class BaseObject
{

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $object;

    /**
     * @var array
     */
    protected $metadata;

    /**
     * @var bool
     */
    protected $livemode;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * @param string $object
     */
    public function setObject(string $object): void
    {
        $this->object = $object;
    }

    /**
     * @return array
     */
    public function getMetadata(): array
    {
        return $this->metadata;
    }

    /**
     * @param array $metadata
     */
    public function setMetadata(array $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * @return bool
     */
    public function isLivemode(): bool
    {
        return $this->livemode;
    }

    /**
     * @param bool $livemode
     */
    public function setLivemode(bool $livemode): void
    {
        $this->livemode = $livemode;
    }

}
