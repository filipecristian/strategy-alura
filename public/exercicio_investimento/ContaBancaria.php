<?php


class ContaBancaria
{
    private float $saldo;

    public function __construct($saldo)
    {
        $this->saldo = $saldo;
    }

    /**
     * @return float
     */
    public function getSaldo(): float
    {
        return $this->saldo;
    }

    /**
     * @param float $saldo
     */
    public function setSaldo(float $saldo): void
    {
        $this->saldo += $saldo;
    }
}