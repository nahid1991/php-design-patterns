<?php

namespace Strategy\Models;

use Strategy\Troop;
use Strategy\Implementations\SwordBehavior;

class Barbarian
{
    private Troop $troop;

    public function attack(): string {
        $weaponBehavior = new SwordBehavior();
        $this->troop = new Troop($weaponBehavior);
        return $this->troop->attack();
    }
}