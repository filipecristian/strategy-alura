<?php

require 'Imposto.php';
require 'ISS.php';
require 'ICMS.php';
require 'CalculadoraDeImpostos.php';
require 'Orcamento.php';

$reforma = new Orcamento(1000);

$calculadoraDeImpostos = new CalculadoraDeImpostos();

echo $calculadoraDeImpostos->calcula($reforma, new ICMS);

echo '<br>';

echo $calculadoraDeImpostos->calcula($reforma, new ISS);


