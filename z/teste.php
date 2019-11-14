<?php

use Forseti\Bot\Banpara\Enums\Modalidade;
use Forseti\Bot\Banpara\Enums\Situacao\CompraDireta;
use Forseti\Bot\Banpara\PageObject\DetalhePageObject;
use Forseti\Bot\Banpara\PageObject\DownloadPageObject;
use Forseti\Bot\Banpara\PageObject\ItensPageObject;
use Forseti\Bot\Banpara\PageObject\LotesPageObject;
use Forseti\Bot\Banpara\PageObject\PesquisaPageObject;

require __DIR__ . '/../vendor/autoload.php';

$pesquisaPageObject = new PesquisaPageObject();
$pesquisaPageObject
    ->setModalidade(Modalidade::TODAS_AS_MODALIDADES)
    ->setProcesso('41/2019')
    ->setSituacao(CompraDireta::TODAS);


//2019/541796
$iterator = $pesquisaPageObject->getParser()->getIterator()->current();

echo "Numero do Processo " . $iterator->nm_processo . "\n" ;
echo "Numero da Licitação " . $iterator->id_licitacao_portal . "\n" ;
echo "Numero do Processo " . $iterator->nm_sigla_orgao . "\n" ;
echo "Nome do objeto " . $iterator->nm_objeto . "\n" ;
echo "Modalidade " . $iterator->modalidade . "\n" ;
echo "Situação " . $iterator->situacao . "\n" ;
echo "Anexo portal  " . $iterator->id_anexo_portal . "\n" ;
echo "Id da modalidade  " . $iterator->id_modalidade_portal . "\n" ;
echo "Id da situação" . $iterator->id_situacao_portal . "\n" ;
echo "tmp mural processo " . $iterator->tmpTipoMuralProcesso . "\n" ;
//
//$detalhe = new DetalhePageObject();
//$iterator = $detalhe
//    ->getParser($iterator->id_licitacao_portal,$iterator->id_modalidade_portal,$iterator->id_situacao_portal,$iterator->tmpTipoMuralProcesso)
//    ->getObject();
//
//echo "Nome do portal " . $iterator->portal . "\n" ;
////echo "Data da abertura " . $iterator->dt_abertura_proposta. "\n" ; // arrumar data
//echo "Data final da proposta " . $iterator->dt_fim_proposta . "\n" ;

$item = new ItensPageObject();

$iterator = $item
    ->getParser($iterator->id_licitacao_portal,$iterator->id_modalidade_portal)
    ->getIterator()
    ->current();

echo "Situação " . $iterator->situacao . "\n" ;
echo "Descrição: " . $iterator->descricao . "\n" ;
echo "Quantidade " . $iterator->nm_quantidade . "\n" ;
echo "Valor de referencia " . $iterator->valor_referencia . "\n" ;



$lote = new LotesPageObject();
$iterator = $lote
    ->getParser('41/2019',\Forseti\Bot\Banpara\Enums\Situacao\TodasAsModalidades::TODOS_OS_PROCESSOS, 999)
    ->getIterator()
    ->current();


//$download = new DownloadPageObject();
//$download
//    ->download('',\Forseti\Bot\Banpara\Enums\Url::VALIDAVISITANTE);
//
//



//var_dump($pesquisaPageObject->getHtml());

//do{
//    $iterator = $pesquisaPageObject->getParser()->getIterator();
//    foreach ($iterator as $licitacao) {
//        var_dump($licitacao); exit;
//    }
//}while($iterator->count() !=0); // paginação
