<?php

namespace jamesvweston\Stripe\Responses;


class CardCollection extends BaseCollection
{

    /**
     * @return Card[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param Card[]
     */
    public function setData($data)
    {
        $this->data             = $data;
    }

}
