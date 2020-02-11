<?php

require 'Orcamento.php';
require 'CalculadoraDeImpostos.php';
require 'Imposto.php';
require 'ICMS.php';
require 'ISS.php';
require 'KCV.php';
require 'Item.php';
require 'Desconto.php';
require 'Descontos5Itens.php';
require 'Desconto500Reais.php';
require 'Desconto300Reais.php';
require 'SemDesconto.php';
require 'CalculadoraDeDescontos.php';

$reforma = new Orcamento(301);

$calculadoraDeImpostos = new CalculadoraDeImpostos();

echo $calculadoraDeImpostos->calcula($reforma, new ICMS());

echo "<br>";

echo $calculadoraDeImpostos->calcula($reforma, new ISS());

echo "<br>";

echo $calculadoraDeImpostos->calcula($reforma, new KCV());

echo "<br>";

// Descontos

echo "Testes de descontos";

echo "<br>";

echo "Desconto:";

$calculadoraDeDescontos = new CalculadoraDeDescontos();
$reforma->addItem(new Item("Tijolo", 250.00));
$reforma->addItem(new Item("Cimento 1kg", 250.00));
$reforma->addItem(new Item("Cimento 1kg", 250.00));
$reforma->addItem(new Item("Cimento 1kg", 250.00));

echo $calculadoraDeDescontos->desconto($reforma);
