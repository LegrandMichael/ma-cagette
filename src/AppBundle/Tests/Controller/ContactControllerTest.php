<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContactControllerTest extends WebTestCase
{
    public function testContactafficher()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'Contact');
    }

}
