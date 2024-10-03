<?php

class BookRepository
{

    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
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
