<?php

class ContaBancaria
{
    private $banco;
    private $titular;
    private $agencia;
    private $conta;
    private $saldo;

    public function __construct($banco, $titular, $agencia, $conta, $saldo)
    {
        $this->banco = $banco;
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    }

    public function getSaldo() : float
    {
        return $this->saldo;
    }

    public function deposito($valor) : void
    {
        $this->saldo += $valor;
    }

    public function saque($valor) : void
    {
        $this->saldo -= $valor;
    }
}