<?php

declare(strict_types=1);

class ContaBancaria
{
    private string $banco;
    private string $titular;
    private string $agencia;
    private string $conta;
    private float $saldo;

    public function __construct(
        string $banco,
        string $titular,
        string $agencia,
        string $conta,
        float $saldo
    ) {
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

    public function deposito(float $valor) : void
    {
        $this->saldo += $valor;
    }

    public function saque(float $valor) : void
    {
        $this->saldo -= $valor;
    }
}