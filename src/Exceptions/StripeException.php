<?php

namespace jamesvweston\Stripe\Exceptions;


use jamesvweston\Stripe\Responses\Error;

class StripeException extends \Exception implements \JsonSerializable
{

    /**
     * @var Error
     */
    protected $error;

    /**
     * @param   Error       $error
     * @param   int         $code
     * @param   \Exception|null $previous
     */
    public function __construct($error, $code, \Exception $previous = null)
    {
        $this->error                    = $error;
        parent::__construct($error->getMessage(), $code, $previous);
    }

    /**
     * @return  array
     */
    public function jsonSerialize()
    {
        $object                         = $this->error->jsonSerialize();
        $object['code']                 = $this->code;

        return $object;
    }
}
