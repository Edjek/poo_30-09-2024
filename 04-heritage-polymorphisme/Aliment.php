<?php

include_once './Article.php';

class Aliment extends Article
{
    private string $datePeremption;

    public function __construct(string $name, float $price, string $datePeremption)
    {
        parent::__construct($name, $price);
        $this->datePeremption = $datePeremption;
    }

    public function displayProduct(): string
    {
        return parent::displayProduct(). " et la date de peremption est le $this->datePeremption";
    }
}
