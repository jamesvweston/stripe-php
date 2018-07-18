<?php

namespace Tests\Factories;


use Dotenv\Dotenv;
use jamesvweston\Stripe\StripeClient;
use jamesvweston\Stripe\StripeConfiguration;

class InstanceFactory
{

    /**
     * @return StripeClient
     */
    public static function getFromEnv ()
    {
        $dotEnv                         = new Dotenv('./');
        $dotEnv->load();

        $config = new StripeConfiguration(getenv('STRIPE_KEY'), getenv('STRIPE_SECRET'));
        return new StripeClient($config);
    }

}