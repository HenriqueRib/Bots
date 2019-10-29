<?php

namespace Forseti\Bot\SpaceJam\PageObject;

class TituloPageObject extends AbstractPageObject
{

    public function getResposta()
    {
         return $this->client->request('GET','https://www.spacejam.com/archive/spacejam/movie/jam.htm');
    }

    public function getHtml()
    {
        $tituloPageObject = $this->getResposta()->getBody()->getContents();
        return $tituloPageObject;
    }

    public function getRespostaSiteMapa()
    {
        return $this->client->request('GET','https://www.spacejam.com/archive/spacejam/movie/cmp/sitemap.html');
    }

    public function getHtmlSiteMapa()
    {
        $tituloPageObject = $this->getRespostaSiteMapa()->getBody()->getContents();
        return $tituloPageObject;
    }
}