<?php

include 'ContaBancaria.php';

$conta = new ContaBancaria('Nu Bank', 'Cazuza', '1234', '12345678-9', 0);

echo $conta->getSaldo();
echo PHP_EOL;

$conta->deposito(300);

echo $conta->getSaldo();
echo PHP_EOL;

$conta->saque(200);

echo $conta->getSaldo();
echo PHP_EOL;