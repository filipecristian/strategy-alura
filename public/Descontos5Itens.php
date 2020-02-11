<?php


class Descontos5Itens
{
    private Desconto $proximoDesconto;

    public function desconto(Orcamento $orcamento)
    {
        if (count($orcamento->getItens()) >= 5) {
            return $orcamento->getValor() * 0.1;
        } else {
            return $this->proximoDesconto->desconto($orcamento);
        }
    }

    /**
     * @param mixed $proximoDesconto
     */
    public function setProximoDesconto($proximoDesconto): void
    {
        $this->proximoDesconto = $proximoDesconto;
    }
}