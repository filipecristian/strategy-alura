<?php


class Desconto500Reais implements Desconto
{
    private Desconto $proximoDesconto;

    public function desconto(Orcamento $orcamento) : float
    {
        if ($orcamento->getValor() > 500) {
            return $orcamento->getValor() * 0.05;
        }
        return $this->proximoDesconto->desconto($orcamento);
    }

    /**
     * @param mixed $proximoDesconto
     */
    public function setProximoDesconto(Desconto $proximoDesconto): void
    {
        $this->proximoDesconto = $proximoDesconto;
    }
}