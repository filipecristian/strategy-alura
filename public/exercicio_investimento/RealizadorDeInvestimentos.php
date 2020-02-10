<?php


class RealizadorDeInvestimentos
{
    public function investir(ContaBancaria $contaBancaria, Investimento $investimento) : float
    {
        $rendimento = $investimento->calcula($contaBancaria);
        $contaBancaria->setSaldo($rendimento * 0.75);
        return $rendimento;
    }
}