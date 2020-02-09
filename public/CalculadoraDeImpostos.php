<?php


class CalculadoraDeImpostos
{
    public function calculaICMS(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.05;
    }

    public function calculaISS(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.1;
    }
}