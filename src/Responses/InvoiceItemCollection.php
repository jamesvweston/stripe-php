<?php

namespace jamesvweston\Stripe\Responses;


class InvoiceItemCollection extends BaseCollection
{

    /**
     * @return InvoiceItem[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param InvoiceItem[]
     */
    public function setData($data)
    {
        $this->data             = $data;
    }

}
