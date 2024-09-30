<?php


class Car
{
    private string $model;

    private string $color;

    private int $yearRelease;

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function displayInformation(): string
    {
        return "Ce véhicule est une $this->model de $this->yearRelease ans et sa couleur est $this->color";
    }
}
