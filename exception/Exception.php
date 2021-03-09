<?php

//throw new Exception('Essa é uma exceção!');

function validarUsuario(array $usuario)
{
    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
        throw new Exception('Campos obrigatórios vazios!');
    }
}

$usuario = ['codigo' => 1, 'nome' => '', 'idade' => 20];

try {
    validarUsuario($usuario);
} catch (Exception $exception) {
    echo $exception->getMessage().PHP_EOL;
} finally {
    echo 'Status da operação:';
}

echo '... executando ...'.PHP_EOL;