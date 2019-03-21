<?php

namespace jamesvweston\Stripe;


use jamesvweston\Stripe\Api\BalanceApi;
use jamesvweston\Stripe\Api\ChargeApi;
use jamesvweston\Stripe\Api\CustomerApi;
use jamesvweston\Stripe\Api\InvoiceApi;
use jamesvweston\Stripe\Api\PlanApi;
use jamesvweston\Stripe\Api\SubscriptionApi;
use jamesvweston\Stripe\Http\StripeApi;

class StripeClient
{

    /**
     * @var StripeConfiguration
     */
    protected $stripe_configuration;

    /**
     * @var StripeApi
     */
    public $api;

    /**
     * @var BalanceApi
     */
    public $balances;

    /**
     * @var ChargeApi
     */
    public $charges;

    /**
     * @var CustomerApi
     */
    public $customers;

    /**
     * @var InvoiceApi
     */
    public $invoices;

    /**
     * @var PlanApi
     */
    public $plans;

    /**
     * @var SubscriptionApi
     */
    public $subscriptions;


    public function __construct(StripeConfiguration &$stripe_configuration)
    {
        $this->stripe_configuration     = $stripe_configuration;
        $this->api                      = new StripeApi($this->stripe_configuration);
        $this->balances                 = new BalanceApi($this->api);
        $this->charges                  = new ChargeApi($this->api);
        $this->customers                = new CustomerApi($this->api);
        $this->invoices                 = new InvoiceApi($this->api);
        $this->plans                    = new PlanApi($this->api);
        $this->subscriptions            = new SubscriptionApi($this->api);
    }

}
