<?php


class Conservador implements Investimento
{

    public function calcula(ContaBancaria $contaBancaria): float
    {
        return $contaBancaria->getSaldo() * 0.08;
    }
}