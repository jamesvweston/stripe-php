<?php

namespace jamesvweston\Stripe\Responses;


class CustomerCollection extends BaseCollection
{

    /**
     * @return Customer[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param Customer[]
     */
    public function setData($data)
    {
        $this->data             = $data;
    }

}
