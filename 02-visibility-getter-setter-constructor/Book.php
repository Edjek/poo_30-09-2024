<?php

class Book
{
    private string $title;

    private string $author;

    private int $nbPage;

    private int $year;

    public function __construct($title, $author, $page, $year)
    {
        $this->title = $title;
        $this->author = $author;
        $this->nbPage = $page;
        $this->year = $year;
    }

    public function getTitle(): string
    {
        return $this->title;
    }


    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor($author): self
    {
        $this->author = $author;

        return $this;
    }


    public function getNbPage(): int
    {
        return $this->nbPage;
    }


    public function setNbPage($nbPage): self
    {
        $this->nbPage = $nbPage;

        return $this;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear($year): self
    {
        $this->year = $year;

        return $this;
    }
}
