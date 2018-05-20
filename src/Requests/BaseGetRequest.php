<?php

namespace jamesvweston\Stripe\Requests;


abstract class BaseGetRequest implements \JsonSerializable
{

    /**
     * A cursor for use in pagination. ending_before is an object ID that defines your place in the list
     * @var string|null
     */
    protected $ending_before;

    /**
     * A cursor for use in pagination. starting_after is an object ID that defines your place in the list.
     * @var string|null
     */
    protected $starting_after;

    /**
     * A limit on the number of objects to be returned. Limit can range between 1 and 100, and the default is 10.
     * @var int|null
     */
    protected $limit;


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['ending_before']            = $this->ending_before;
        $object['starting_after']           = $this->starting_after;
        $object['limit']                    = $this->limit;

        return $object;
    }

    /**
     * @return null|string
     */
    public function getEndingBefore(): ?string
    {
        return $this->ending_before;
    }

    /**
     * @param null|string $ending_before
     */
    public function setEndingBefore(?string $ending_before): void
    {
        $this->ending_before = $ending_before;
    }

    /**
     * @return null|string
     */
    public function getStartingAfter(): ?string
    {
        return $this->starting_after;
    }

    /**
     * @param null|string $starting_after
     */
    public function setStartingAfter(?string $starting_after): void
    {
        $this->starting_after = $starting_after;
    }

    /**
     * @return int|null
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * @param int|null $limit
     */
    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

}
