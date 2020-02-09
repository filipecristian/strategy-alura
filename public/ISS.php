<?php


class ISS
{
    public function calcula(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.1;
    }
}