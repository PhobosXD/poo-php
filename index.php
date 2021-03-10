<?php

include 'database/Produto.php';

$produto = new Produto();

switch ($_GET['operation']) {
    case 'list':
        echo '<h1>Produtos:</h1>';

        foreach ($produto->list() as $value) {
            echo 'ID: '.$value['id'].'<br>Nome: '.$value['nome'].'<hr>';
        }
    break;

    case 'insert':
        echo $produto->insert('Produto01');
    break;

    case 'update':
        echo $produto->update('Produto02', 2);
    break;

    case 'delete':
        echo $produto->delete(1);
    break;
}