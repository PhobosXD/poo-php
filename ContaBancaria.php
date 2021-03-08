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

    public function get_saldo() : float
    {
        return $this->saldo;
    }
}

$conta = new ContaBancaria('Nu Bank', 'Cazuza', '1234', '12345678-9', 300.0);

echo $conta->get_saldo();