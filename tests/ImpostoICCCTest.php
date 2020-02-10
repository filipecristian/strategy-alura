<?php

use PHPUnit\Framework\TestCase;

require dirname(__FILE__) . '/../public/exercicio/Imposto.php';
require dirname(__FILE__) . '/../public/exercicio/CalculadoraDeImpostos.php';
require dirname(__FILE__) . '/../public/exercicio/ICCC.php';
require dirname(__FILE__) . '/../public/exercicio/Orcamento.php';

class ImpostoICCCTest extends TestCase
{
    public function testOrcamentoDeMilReais()
    {
        $orcamento = new Orcamento(900);
        $calculadoraDeImpostos = new CalculadoraDeImpostos();
        $this->assertEquals(45, $calculadoraDeImpostos->calcula($orcamento, new ICCC()));
    }

    public function testOrcamentoDeDoisMilReais()
    {
        $orcamento = new Orcamento(2000);
        $calculadoraDeImpostos = new CalculadoraDeImpostos();
        $this->assertEquals(140, $calculadoraDeImpostos->calcula($orcamento, new ICCC()));
    }

    public function testOrcamentoDeTresMilEQuientosReais()
    {
        $orcamento = new Orcamento(3500);
        $calculadoraDeImpostos = new CalculadoraDeImpostos();
        $this->assertEquals(310, $calculadoraDeImpostos->calcula($orcamento, new ICCC()));
    }
}