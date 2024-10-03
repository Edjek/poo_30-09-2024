<?php

include_once './BookRepository.php';


$a =  new PDO('mysql:host=localhost;dbname=library', 'root', '');
$repository = new BookRepository($a);

$books = $repository->getBooks();

$book = $repository->getBookById(1);

echo $book['title'];
