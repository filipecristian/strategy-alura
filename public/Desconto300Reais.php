<?php


class Desconto300Reais implements Desconto
{
    private Desconto $proximoDesconto;

    public function desconto(Orcamento $orcamento) : float
    {
        if ($orcamento->getValor() > 300) {
            return $orcamento->getValor() * 0.01;
        }
        return $this->proximoDesconto->desconto($orcamento);
    }

    public function setProximoDesconto(Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }
}