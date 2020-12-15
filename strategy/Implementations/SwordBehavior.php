<?php


namespace Strategy\Implementations;


use Strategy\Interfaces\WeaponBehavior;

class SwordBehavior implements WeaponBehavior
{
    public function useWeapon(): string{
        return "Swings sword";
    }
}
