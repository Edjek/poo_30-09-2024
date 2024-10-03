<?php

/*
    Composition et aggregation sont deux types de relations entre classes
    Composition est une relation forte entre deux classes
    Aggregation est une relation faible entre deux classes
*/

// Dans le cas de la composition, on ne peut pas avoir une instance de BookRepository sans avoir une instance de PDO
// Dans le cas de l'aggregation, on peut avoir une instance de BookRepository sans avoir une instance de PDO
class BookRepository
{

    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;

        // La composition est une relation entre deux classes qui est de type "a un" et qui est forte
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
