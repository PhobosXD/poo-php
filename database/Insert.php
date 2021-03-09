<?php

declare(strict_types=1);

$pdo = require 'Connect.php';
$sql = 'insert into produtos(nome) values(?)';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['nome']);
$prepare->execute();

echo $prepare->rowCount();