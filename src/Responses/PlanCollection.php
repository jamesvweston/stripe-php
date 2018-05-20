<?php

namespace jamesvweston\Stripe\Responses;


class PlanCollection extends BaseCollection
{

    /**
     * @return Plan[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param Plan[]
     */
    public function setData($data)
    {
        $this->data             = $data;
    }

}
