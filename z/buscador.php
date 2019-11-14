<?php

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

require __DIR__ . '/../vendor/autoload.php';

$client = new Client();
$resposta = $client->request('GET','https://www.spacejam.com/archive/spacejam/movie/jam.htm');

$html = $resposta->getBody()->getContents();

//var_dump($html);

$crawler = new Crawler();
$crawler->addHtmlContent($html);

$titulo = $crawler->filter('title');
$url = $crawler->filterXPath('//html/body/center/table[2]/tr[5]/td[3]/a')->attr('href');

echo $titulo->text() . PHP_EOL ;
echo $url . PHP_EOL;