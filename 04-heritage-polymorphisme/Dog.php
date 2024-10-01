<?php

include_once './Animal.php';

class Dog extends Animal
{
    private string $pedigree;

    public function __construct(string $name, int $age, string $pedigree)
    {
        parent::__construct($name,$age);
        $this->pedigree = $pedigree;
    }

    public function getPedigree(): string
    {
        return $this->pedigree;
    }

    public function setPedigree(string $pedigree): self
    {
        $this->pedigree = $pedigree;

        return $this;
    }

    public function description(): string
    {
        return  parent::description() . " et mon pedigree est : $this->pedigree";
    }
}
