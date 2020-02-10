<?php


class Moderado implements Investimento
{
    public function calcula(ContaBancaria $contaBancaria): float
    {
        if (mt_rand(1, 2) === 1) {
            return $contaBancaria->getSaldo() * 0.025;
        }
        return $contaBancaria->getSaldo() * 0.007;
    }
}