<?php

namespace Strategy;

use Strategy\Interfaces\WeaponBehavior;

class Troop
{
    private WeaponBehavior $weaponBehavior;

    public function __construct(WeaponBehavior $weaponBehavior) {
        $this->weaponBehavior = $weaponBehavior;
    }

    public function attack(): string {
        return $this->weaponBehavior->useWeapon();
    }
}