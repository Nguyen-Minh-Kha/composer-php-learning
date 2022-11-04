<?php

declare(strict_types=1);

namespace App;

class Charcter
{
    protected string $name;

    protected int $life = 100;

    protected int $maxlife = 100;

    protected int $atk = 40;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __toString(): string
    {
        return "
            <h3> $this->name </h3>
            <ul>
                <li> HP  :  $this->life / $this->maxlife </li>
                <li> ATK :  $this->atk </li>
            </ul>
        ";
    }
}
