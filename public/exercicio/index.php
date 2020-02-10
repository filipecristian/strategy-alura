<?php

/**
 * 04 - Implementando um Strategy
 * https://cursos.alura.com.br/course/design-pattern-php/task/7377
 */

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


