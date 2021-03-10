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

    public function list() : array
    {
        $sql = 'select * from produtos';
        $produtos = [];
        
        foreach ($this->connection->query($sql) as $key => $value) {
            array_push($produtos, $value);
        }

        return $produtos;
    }

    public function insert(string $name) : int
    {
        $sql = 'insert into produtos(nome) value(?)';
        $prepare = $this->connection->prepare($sql);

        $prepare->bindParam(1, $name);
        $prepare->execute();

        return $prepare->rowCount();
    }

    public function update(string $name, int $id) : int
    {
        $sql = 'update produtos set nome = ? where id = ?';
        $prepare = $this->connection->prepare($sql);

        $prepare->bindParam(1, $name);
        $prepare->bindParam(2, $id);
        $prepare->execute();

        return $prepare->rowCount();
    }

    public function delete(int $id) : int
    {
        $sql = 'delete from produtos where id = ?';
        $prepare = $this->connection->prepare($sql);

        $prepare->bindParam(1, $id);
        $prepare->execute();

        return $prepare->rowCount();
    }
}