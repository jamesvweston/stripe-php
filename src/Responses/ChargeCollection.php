<?php

namespace jamesvweston\Stripe\Responses;


class ChargeCollection extends BaseCollection
{

    /**
     * @return Charge[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param Charge[]
     */
    public function setData($data)
    {
        $this->data             = $data;
    }

}
