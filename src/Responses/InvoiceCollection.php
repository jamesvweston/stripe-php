<?php

namespace jamesvweston\Stripe\Responses;


class InvoiceCollection extends BaseCollection
{

    /**
     * @return Invoice[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param Invoice[]
     */
    public function setData($data)
    {
        $this->data             = $data;
    }

}
