<?php


class Orcamento
{
    private float $valor;
    private array $itens;

    public function __construct(float $novoValor)
    {
        $this->valor = $novoValor;
        $this->itens = array();
    }

    public function addItem(Item $novoItem)
    {
        $this->itens[] = $novoItem;
    }

    public function getItens() : array
    {
        return $this->itens;
    }

    /**
     * @return float
     */
    public function getValor()
    {
        return $this->valor;
    }
}