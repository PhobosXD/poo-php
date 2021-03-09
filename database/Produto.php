<?php

declare(strict_types=1);

class Produto
{
    private $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO(
                'mysql:host=localhost;dbname=teste-php',
                'root',
                '!12345Asd'
            );
        } catch (Exception $exception) {
            echo $exception->getMessage();
            die();
        }
    }

    public function list() : void
    {
        $sql = 'select * from produtos';
        
        foreach ($this->connection->query($sql) as $key => $value) {
            echo 'ID: '.$value['id'].'<br>Nome: '.$value['nome'].'<hr>';
        }
    }

    public function insert() : int
    {
        $sql = 'insert into produtos(nome) value(?)';
        $prepare = $this->connection->prepare($sql);

        $prepare->bindParam(1, $_GET['nome']);
        $prepare->execute();

        return $prepare->rowCount();
    }

    public function update() : int
    {
        $sql = 'update produtos set nome = ? where id = ?';
        $prepare = $this->connection->prepare($sql);

        $prepare->bindParam(1, $_GET['nome']);
        $prepare->bindParam(2, $_GET['id']);
        $prepare->execute();

        return $prepare->rowCount();
    }

    public function delete() : int
    {
        $sql = 'delete from produtos where id = ?';
        $prepare = $this->connection->prepare($sql);

        $prepare->bindParam(1, $_GET['id']);
        $prepare->execute();

        return $prepare->rowCount();
    }
}