<?php

declare(strict_types=1);

$pdo = null;

try {
    $pdo = new PDO('mysql:host=localhost;dbname=teste-php', 'root', '!12345Asd');
} catch (Exception $exception) {
    echo $exception->getMessage();
    die();
}

return $pdo;