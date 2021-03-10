<?php

declare(strict_types=1);

$pdo = require 'Connect.php';
$sql = 'update produtos set nome = ? where id = ?';
$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['nome']);
$prepare->bindParam(2, $_GET['id']);

$prepare->execute();

echo $prepare->rowCount();