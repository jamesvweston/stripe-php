<?php

namespace jamesvweston\Stripe\Api;


use jamesvweston\Stripe\Exceptions\StripeException;
use jamesvweston\Stripe\Requests\GetInvoicesRequest;
use jamesvweston\Stripe\Responses\BalanceTransaction;
use jamesvweston\Stripe\Responses\Invoice;
use jamesvweston\Stripe\Responses\InvoiceCollection;

class InvoiceApi extends BaseApi
{

    /**
     * @param   GetInvoicesRequest|array $request
     * @return  InvoiceCollection
     * @throws  StripeException
     */
    public function get ($request = [])
    {
        $request                 = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $request['expand[]']     = 'data.charge';
        $data                           = $this->api->makeHttpRequest('get', 'invoices', $request);
        return $this->json_mapper->map($data, new InvoiceCollection());
    }

    /**
     * @param   array $request
     * @return  Invoice
     * @throws StripeException
     * @throws \JsonMapper_Exception
     */
    public function upcoming ($request = [])
    {
        $request                 = ($request instanceof \JsonSerializable) ? $request->jsonSerialize() : $request;
        $data                           = $this->api->makeHttpRequest('get', 'invoices/upcoming', $request);
        return $this->json_mapper->map($data, new Invoice());
    }

}
