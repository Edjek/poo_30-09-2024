<?php

class Warrior extends Player
{
    private int $arrow;

    public function __construct($name, $nbArrow)
    {
        parent::__construct($name);
        $this->arrow = $nbArrow;
    }

    public function getArrow(): int
    {
        return $this->arrow;
    }

    public function setArrow(int $arrow): self
    {
        $this->arrow = $arrow;

        return $this;
    }

    public function hit()
    {
        $this->life = $this->life - 15;
        // $this->setLife($this->getLife() - 15);
    }
}
