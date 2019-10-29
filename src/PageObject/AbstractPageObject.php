<?php

namespace Forseti\Bot\SpaceJam\PageObject;

use GuzzleHttp\Client;

abstract class AbstractPageObject
{
    public $client;

    public function __construct()
    {
        $this->client = new Client();
    }

}