<?php


class Item
{
    private string $nome;
    private float $valor;

    public function __construct($novoNome, $novoValor)
    {
        $this->nome = $novoNome;
        $this->valor = $novoValor;
    }

    /**
     * @return mixed
     */
    public function getNome() : string
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getValor() : float
    {
        return $this->valor;
    }
}