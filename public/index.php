<?php

require 'Orcamento.php';
require 'CalculadoraDeImpostos.php';

$reforma = new Orcamento(500);

$calculadoraDeImpostos = new CalculadoraDeImpostos();

echo $calculadoraDeImpostos->calcula($reforma, 'ICMS');

echo "<br>";

echo $calculadoraDeImpostos->calcula($reforma, 'ISS');