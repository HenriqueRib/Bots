<?php

namespace Forseti\Bot\SpaceJam\Parser;

class TituloParser extends AbstractParser
{
    public function getTitulo()
    {
        $tituloPaser = $this->crawler->filter('title')->text();
        return $tituloPaser;
    }

    public function getUrlSiteMapa()
    {
        $tituloParser = $this->crawler->filterXPath('//html/body/center/table[2]/tr[5]/td[3]/a')->attr('href');
        return $tituloParser;
    }

    public function getIterator()
    {
        $tituloPaser = $this->crawler->filterXPath('//body/center/table');
        return $tituloPaser;
    }
}