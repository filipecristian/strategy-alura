<?php


interface Desconto
{
    public function desconto(Orcamento $orcamento) : float;
    public function setProximoDesconto(Desconto $proximoDesconto);
}