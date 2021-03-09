<?php

declare(strict_types=1);

$pdo = require 'Connect.php';
$sql = 'select * from produtos';

echo '<h1>Produtos:</h1>';

foreach ($pdo->query($sql) as $key => $value) {
    echo 'ID: '.$value['id'].'<br> Nome: '.$value['nome'].'<br>';
}