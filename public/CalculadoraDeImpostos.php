<?php


class CalculadoraDeImpostos
{

    public function calcula(Orcamento $orcamento, string $tipo)
    {
        if ($tipo == 'ICMS') {
            return $orcamento->getValor() * 0.05;
        } else if ($tipo == 'ISS') {
            return $orcamento->getValor() * 0.1;
        }
    }
}