<?php

namespace Forseti\Bot\SpaceJam\Parser;

use Symfony\Component\DomCrawler\Crawler;

class AbstractParser
{
    public $crawler;

    public function __construct($tituloPageObject)
    {
        $this->crawler = new Crawler();
        $this->crawler->addHtmlContent($tituloPageObject);
    }
}