<?php

class StartrekWarrior extends Warrior
{
    public int $mentalPower;

    /**
     * @return int
     */
    public function getPower(): int
    {
        return $this->mentalPower;
    }

    public function __construct(string $name){
        parent::__construct($name);
        $this->mentalPower = 8;
    }

}