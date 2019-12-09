<?php

namespace App\Controller;

use GuzzleHttp;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function __invoke(Request $request, GuzzleHttp\ClientInterface $guzzleClient)
    {
        $response = $guzzleClient->request('GET', '/M6Web/GuzzleHttpBundle/master/composer.json');

        return new Response($response->getBody()->getContents());
    }
}
