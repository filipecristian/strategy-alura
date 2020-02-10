<?php


class Arrojado implements Investimento
{

    public function calcula(ContaBancaria $contaBancaria): float
    {
        if (mt_rand(1,100) <= 20) {
            return $contaBancaria->getSaldo() * 0.05;
        } else if (mt_rand(1,100) <= 30) {
            return $contaBancaria->getSaldo() * 0.03;
        }
        return $contaBancaria->getSaldo() * 0.06;
    }
}