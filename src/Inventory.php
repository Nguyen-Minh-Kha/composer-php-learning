<?php

declare(strict_types=1);

namespace App;

class Inventory
{
    protected int $potions;

    protected Weapon $weapon;

    protected Armor $armor;

    // getters and setters

    public function getPotions(): int
    {
        return $this->potions;
    }

    public function getWeapon(): Weapon
    {
        return $this->weapon;
    }

    public function getArmor(): Armor
    {
        return $this->armor;
    }

    public function setPotions(int $potions)
    {
        $this->potions = $potions;
    }

    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;
    }

    public function setArmor(Armor $armor)
    {
        $this->armor = $armor;
    }

    public function __construct(Character $subject, int $potions = 0)
    {
        $this->setWeapon($subject->getWeapon());
        $this->setArmor($subject->getArmor());
        $this->setPotions($potions);
    }

    public function __toString()
    {
        return "
        <li> Inventory </li>
        <ul>
            <li> Weapon: {$this->getWeapon()->getName()} / Damage : {$this->getWeapon()->getDamage()} </li>
            <li> Armor: {$this->getArmor()->getName()} / Protection : {$this->getArmor()->getProtection()} </li>
            <li> Potions: {$this->getPotions()} </li>
        </ul>
        ";
    }
}
