<?php

namespace jamesvweston\Stripe;


class StripeConfiguration
{

    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $secret;

    /**
     * @var     string
     */
    protected $base_url                 = 'https://api.stripe.com/';

    /**
     * @var     string
     */
    protected $version                  = '2018-02-28';


    /**
     * StripeConfiguration constructor.
     * @param string        $key
     * @param string        $secret
     */
    public function __construct($key, $secret)
    {
        $this->key                      = $key;
        $this->secret                   = $secret;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     */
    public function setKey(string $key): void
    {
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getSecret(): string
    {
        return $this->secret;
    }

    /**
     * @param string $secret
     */
    public function setSecret(string $secret): void
    {
        $this->secret = $secret;
    }

    /**
     * @return string
     */
    public function getBaseUrl(): string
    {
        return $this->base_url;
    }

    /**
     * @param string $base_url
     */
    public function setBaseUrl(string $base_url): void
    {
        $this->base_url = $base_url;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion(string $version): void
    {
        $this->version = $version;
    }

}
