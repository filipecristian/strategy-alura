<?php


class ISS implements Imposto
{
    public function calcula(Orcamento $orcamento): float
    {
        return $orcamento->getValor() * 0.06;
    }
}