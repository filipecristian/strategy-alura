<?php


interface Investimento
{
    public function calcula(ContaBancaria $contaBancaria) : float;
}