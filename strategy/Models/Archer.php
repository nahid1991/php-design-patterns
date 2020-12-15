<?php


namespace Strategy\Models;


use Strategy\Implementations\BowBehavior;
use Strategy\Troop;

class Archer
{
    private Troop $troop;

    public function attack(): string {
        $weaponBehavior = new BowBehavior();
        $this->troop = new Troop($weaponBehavior);
        return $this->troop->attack();
    }
}