<?php

namespace Tests;


use jamesvweston\Stripe\Requests\CreatePlanRequest;
use jamesvweston\Stripe\Requests\CreateProductRequest;
use PHPUnit\Framework\TestCase;
use Tests\Factories\InstanceFactory;

class PlanTests extends TestCase
{

    public function testGet ()
    {
        $api = InstanceFactory::getFromEnv();
        var_dump($api->plans->get());
    }

    public function testCreate ()
    {
        $api = InstanceFactory::getFromEnv();

        $request = new CreatePlanRequest();
        $request->setCurrency('USD');
        $request->setAmount(1000);
        $request->setInterval('month');

        $productRequest = new CreateProductRequest();
        $productRequest->setName('test');
        $request->setProduct($productRequest);
        $api->plans->create($request);
    }

}