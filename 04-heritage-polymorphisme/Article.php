<?php

// Une class abstraite est une classe qui ne peut pas être instanciée.
// Une classe abstraite est une classe qui peut contenir des méthodes abstraites (qui ne contiennet qu'une signature). Ces méthodes abstraites doivent être implémentées dans les classes enfants.
abstract class Article
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var float
     */
    private float $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function displayProduct(): string
    {
        return "Le produit est : $this->name et il coûte $this->price euros";
    }

    /**
     * @return  string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param  string  $name
     *
     * @return  self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return  float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param  float  $price
     *
     * @return  self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    // Exemple de méthode abstraite
    // abstract public function displayDateDeCreation(): string;

}
