<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CartControllerTest extends WebTestCase
{
    public function testAddcart()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addCart');
    }

    public function testPurchasecart()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/purchaseCart');
    }

    public function testDeleteproductcart()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteProductCart');
    }

}
