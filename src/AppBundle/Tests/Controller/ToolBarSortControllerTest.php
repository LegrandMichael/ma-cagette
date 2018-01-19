<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ToolBarSortControllerTest extends WebTestCase
{
    public function testSort()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Sort');
    }

}
