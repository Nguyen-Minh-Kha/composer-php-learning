<?php

declare(strict_types=1);

namespace App;

class Action
{
    protected string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function execute(Character $subject, Character $target = null): void
    {
    }
}
