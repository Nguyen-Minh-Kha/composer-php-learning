<?php

declare(strict_types=1);

namespace App;

class Weapon
{
    protected string $name;

    protected int $damage;

    public function getName(): string
    {
        return $this->name;
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    public function __construct($name, $damage)
    {
        $this->name = $name;
        $this->damage = $damage;
    }
}
