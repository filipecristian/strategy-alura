<?php


class ICMS implements Imposto
{
    public function calcula(Orcamento $orcamento): float
    {
        return (($orcamento->getValor() * 0.05) + 50);
    }
}