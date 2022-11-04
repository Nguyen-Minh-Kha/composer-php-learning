<?php

declare(strict_types=1);

namespace App;

class Character
{
    protected string $name;

    protected int $life = 100;

    protected int $maxlife = 100;

    protected Armor $armor;

    protected Weapon $weapon;

    protected int $naturalHeal = 2;

    protected Inventory $inventory;

    public function __construct(string $name, Weapon $weapon, Armor $armor)
    {
        $this->name = $name;
        $this->addArmor($armor);
        $this->addWeapon($weapon);
    }

    // getters

    public function getName(): string
    {
        return $this->name;
    }

    public function getLife(): int
    {
        return $this->life;
    }

    public function getMaxLife(): int
    {
        return $this->maxlife;
    }

    public function getWeapon(): Weapon
    {
        return $this->weapon;
    }

    public function getArmor(): Armor
    {
        return $this->armor;
    }

    public function isDead(): bool
    {
        return $this->life == 0;
    }

    public function getNaturalHeal(): int
    {
        return $this->naturalHeal;
    }

    public function getInventory(): Inventory
    {
        return $this->inventory;
    }

    // setters

    public function setLife(int $life): void
    {
        $this->life = $life;
    }

    public function setInventory(Inventory $inventory): void
    {
        $this->inventory = $inventory;
    }

    // add weapon and armor

    public function addWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;
    }

    public function addArmor(Armor $armor)
    {
        $this->armor = $armor;
    }

    // doAction

    public function doAction(Action $action, Character $target = null)
    {
        $action->execute($this, $target);
    }


    public function __toString(): string
    {
        return "
            <h3> $this->name </h3>
            <ul>
                <li> HP  :  $this->life / $this->maxlife </li>
                {$this->inventory}
            </ul>
        ";
    }
}
