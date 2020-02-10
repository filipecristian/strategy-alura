<?php


class Orcamento
{
    private float $valor;

    public function __construct(float $novoValor)
    {
        $this->valor = $novoValor;
    }

    public function getValor()
    {
        return $this->valor;
    }
}