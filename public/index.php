<?php

require 'Orcamento.php';
require 'CalculadoraDeImpostos.php';

$reforma = new Orcamento(500);

$calculadoraDeImpostos = new CalculadoraDeImpostos();

echo $calculadoraDeImpostos->calculaICMS($reforma);

echo "<br>";

echo $calculadoraDeImpostos->calculaISS($reforma);