<?php

require 'ICMS.php';
require  'ISS.php';

class CalculadoraDeImpostos
{

    public function calcula(Orcamento $orcamento, string $tipo)
    {
        if ($tipo == 'ICMS') {
            $icms = new ICMS();
            return $icms->calcula($orcamento);
        } else if ($tipo == 'ISS') {
            $iss = new ISS();
            return $iss->calcula($orcamento);
        }
    }
}