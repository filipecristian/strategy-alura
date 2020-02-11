<?php

require_once 'Descontos5Itens.php';
require_once 'Desconto500Reais.php';
require_once 'SemDesconto.php';
require_once 'Desconto300Reais.php';

class CalculadoraDeDescontos
{
    public function desconto(Orcamento $orcamento)
    {
        $desconto5Itens = new Descontos5Itens();
        $desconto500reais = new Desconto500Reais();
        $desconto300reais = new Desconto300Reais();
        $semDesconto = new SemDesconto();

        $desconto5Itens->setProximoDesconto($desconto500reais);
        $desconto500reais->setProximoDesconto($desconto300reais);
        $desconto300reais->setProximoDesconto($semDesconto);

        $valorDoDesconto = $desconto5Itens->desconto($orcamento);

        return $valorDoDesconto;
    }
}