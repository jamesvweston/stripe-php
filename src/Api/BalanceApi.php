<?php

namespace jamesvweston\Stripe\Api;


use jamesvweston\Stripe\Exceptions\StripeException;
use jamesvweston\Stripe\Responses\BalanceTransaction;

class BalanceApi extends BaseApi
{

    /**
     * @param   string  $id
     * @return  BalanceTransaction
     * @throws  StripeException
     */
    public function getBalanceTransaction ($id)
    {
        $data                           = $this->api->makeHttpRequest('get', 'balance/history/' . $id);
        return $this->json_mapper->map($data, new BalanceTransaction());
    }

}
