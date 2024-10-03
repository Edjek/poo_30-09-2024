<?php

// 
class BookRepository
{

    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;

        // La composition est une relation entre deux classes qui est de type "a un" et qui est forte
        // On ne peut pas avoir une instance de BookRepository sans avoir une instance de PDO
        // $this->pdo = new PDO('mysql:host=localhost;dbname=library', 'root', '');
    }

    public function getBooks(): array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM book');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getBookById(int $id): ?array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM book WHERE id=:id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }
}
