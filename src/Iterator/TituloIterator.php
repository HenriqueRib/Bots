<?php

namespace Forseti\Bot\SpaceJam\Iterator;

class TituloIterator extends AbstractIterator
{
    public function current()
    {
        $node = $this->iterator->current();
        $obj = new \stdClass();

//        var_dump($node);

        $obj->descricao = $node->getElementsByTagName('td')->item(4)->textContent;

        $obj->link = $node->getElementsByTagName('td')->item(2)->textContent;//

        return $obj;
    }
}