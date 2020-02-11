<?php


class SemDesconto implements Desconto
{
    public function desconto(Orcamento $orcamento) : float
    {
        return 0;
    }

    public function setProximoDesconto(Desconto $proximoDesconto)
    {
        // nao faz nada
    }
}