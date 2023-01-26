<?php

namespace App\Tests;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;

class BookTest extends ApiTestCase
{
    public function testSomething(): void
    {
        // "client" that is acting as the browser
        $client = static::createClient();

        // Request a specific page
        $crawler = $client->request('GET', '/api/books');

        // Validate a successful response
        $this->assertResponseIsSuccessful();
    }
}
