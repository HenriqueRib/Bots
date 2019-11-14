<?php

namespace Forseti\Bot\SpaceJam\Parser;

use Forseti\Bot\SpaceJam\Iterator\TituloIterator;

class TituloParser extends AbstractParser
{
    public function getTitulo()
    {
        $tituloPaser = $this->crawler->filter('title')->text();
        return $tituloPaser;
    }

    public function getUrlSiteMapa()
    {
        return $this->crawler->filterXPath('//html/body/center/table[2]/tr[5]/td[3]/a')->attr('href');

       // return $tituloParser;///html/body/center/table[2]/tbody/tr[5]/td[3]/a
    }

    public function getIterator()
    {
        $tituloPaser = $this->crawler->filterXPath('//body/center/table');
        return new TituloIterator($tituloPaser);
    }

}