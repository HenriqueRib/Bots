<?php

use Forseti\Bot\SpaceJam\PageObject\TituloPageObject;
use Forseti\Bot\SpaceJam\Parser\TituloParser;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

require __DIR__ . '/../vendor/autoload.php';


$tituloPageObject = new TituloPageObject();

//var_dump($tituloPageObject->getHtml());
//var_dump($tituloPageObject->getHtmlSiteMapa());
//var_dump($tituloPageObject->getHtmlSiteMapa());

$tituloPageObject = new TituloParser($tituloPageObject->getHtml());
//$tituloPageObject = new TituloParser($tituloPageObject->getHtmlSiteMapa());

//echo $tituloPageObject->getTitulo() . PHP_EOL ;
echo 'Url da página SiteMapa ' . $tituloPageObject->getUrlSiteMapa() . PHP_EOL ;

$tituloPageObject = new TituloPageObject();
var_dump($tituloPageObject->getHtmlSiteMapa());
