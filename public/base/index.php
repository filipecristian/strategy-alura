<?php

require 'Orcamento.php';
require 'CalculadoraDeImpostos.php';
require 'Imposto.php';
require 'ICMS.php';
require 'ISS.php';
require 'KCV.php';

$reforma = new Orcamento(500);

$calculadoraDeImpostos = new CalculadoraDeImpostos();

echo $calculadoraDeImpostos->calcula($reforma, new ICMS());

echo "<br>";

echo $calculadoraDeImpostos->calcula($reforma, new ISS());

echo "<br>";

echo $calculadoraDeImpostos->calcula($reforma, new KCV());