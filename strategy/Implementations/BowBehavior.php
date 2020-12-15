<?php


namespace Strategy\Implementations;


use Strategy\Interfaces\WeaponBehavior;

class BowBehavior implements WeaponBehavior
{
    public function useWeapon(): string
    {
        return "Shoots bow";
    }
}
