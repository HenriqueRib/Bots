<?php

use Forseti\Bot\SpaceJam\PageObject\TituloPageObject;
use Forseti\Bot\SpaceJam\Parser\TituloParser;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

require __DIR__ . '/../vendor/autoload.php';

//Retornar a [página do filme Space Jam]
$tituloPageObject = new TituloPageObject();
var_dump($tituloPageObject->getHtml());
//var_dump($tituloPageObject->getHtmlSiteMapa()); // Html SiteMapa

//Extrair a URL do ["Site Map"]
$tituloParser = new TituloParser($tituloPageObject->getHtml());

$tituloParser = $tituloPageObject->getParser2();

echo 'Url da página SiteMapa ' . $tituloParser->getUrlSiteMapa() . PHP_EOL ;
//echo 'Titulo da página ' . $tituloPageObject->getTitulo() . PHP_EOL ; // Titulo da página principal


// Html página SiteMapa
//$tituloPageObject = new TituloPageObject();
//var_dump($tituloPageObject->getHtmlSiteMapa());


//Retonar a tabela do ["Site Map"]
//$tituloPageObject = new TituloPageObject();
$objeto = $tituloPageObject->getParser()->getIterator()->current();

var_dump($objeto->descricao);
var_dump($objeto->link); 