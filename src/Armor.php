<?php

declare(strict_types=1);

namespace App;

class Armor
{
    protected string $name;

    protected int $protection;

    public function getName(): string
    {
        return $this->name;
    }

    public function getProtection(): int
    {
        return $this->protection;
    }

    public function __construct($name, $protection)
    {
        $this->name = $name;
        $this->protection = $protection;
    }
}
