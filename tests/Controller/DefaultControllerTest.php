<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testReturnsTheContentOfM6WebGuzzleHttpClientRequest()
    {
        $client = self::createClient();
        $client->request('GET', '/');

        $this->assertSame(<<<'JSON'
{
  "name": "m6web/guzzle-http-bundle",
  "type" : "symfony-bundle",
  "description": "Symfony2 bundle on top of guzzle 6",
  "keywords": ["bundle", "http", "client", "HTTP client"],
  "license" : "MIT",
  "authors": [
    {
      "name": "M6Web",
      "email" : "opensource@m6web.fr",
      "homepage": "http://tech.m6web.fr/"
    }
  ],
  "require": {
    "php": ">=7.0",
    "ext-curl": "*",
    "guzzlehttp/guzzle": "^6.3.0",
    "symfony/dependency-injection": "~2.3||~3.0||~4.0",
    "symfony/event-dispatcher": "~4.3-stable",
    "symfony/config" : "~2.3||~3.0||~4.0",
    "symfony/yaml" : "~2.3||~3.0||~4.0"
  },
  "require-dev": {
    "atoum/atoum": "^2.8||^3.0",
    "atoum/stubs": "*",
    "m6web/coke": "~1.2||^2.2",
    "m6web/symfony2-coding-standard": "~2.0||^3.3"
  },
  "autoload": {
    "psr-4": {"M6Web\\Bundle\\GuzzleHttpBundle\\": "src/"}
  },
  "config": {
    "bin-dir": "bin/"
  }
}

JSON
, $client->getResponse()->getContent());
    }
}
