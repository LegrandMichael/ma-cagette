<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CatalogueControllerTest extends WebTestCase
{
    public function testCatalogueafficher()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'Catalogue');
    }

}
