<?php

require dirname(__FILE__) . '/../public/exercicio_investimento/Investimento.php';
require dirname(__FILE__) . '/../public/exercicio_investimento/Conservador.php';
require dirname(__FILE__) . '/../public/exercicio_investimento/Moderado.php';
require dirname(__FILE__) . '/../public/exercicio_investimento/Arrojado.php';
require dirname(__FILE__) . '/../public/exercicio_investimento/ContaBancaria.php';
require dirname(__FILE__) . '/../public/exercicio_investimento/RealizadorDeInvestimentos.php';

use PHPUnit\Framework\TestCase;

class InvestimentoTest extends TestCase
{
    public function testInvestidorConservador()
    {
        $contaBancoOrigial = new ContaBancaria(1000);
        $realizardorDeInvestimentos = new RealizadorDeInvestimentos();
        $rendimento = $realizardorDeInvestimentos->investir($contaBancoOrigial, new Conservador());

        $this->assertEquals(80, $rendimento);
        $this->assertEquals(1060, $contaBancoOrigial->getSaldo());
    }

    public function testInvestidorModerado()
    {
        $contaItau = new ContaBancaria(1000);
        $realizadorDeInvestimentos = new RealizadorDeInvestimentos();
        $rendimento = $realizadorDeInvestimentos->investir($contaItau, new Moderado());

        $this->assertTrue($rendimento == 25 || $rendimento == 7);
        $this->assertTrue($contaItau->getSaldo() == 1018.75 || $contaItau->getSaldo() == 1005.25);
    }

    public function testInvestidorArrojado()
    {
        $contaItau = new ContaBancaria(1000);
        $realizadorDeInvestimentos = new RealizadorDeInvestimentos();
        $rendimento = $realizadorDeInvestimentos->investir($contaItau, new Arrojado());

        $this->assertTrue(in_array($rendimento, [30, 50, 60]));
        $this->assertTrue(in_array($contaItau->getSaldo(), [1022.5, 1037.5, 1045]));
    }
}