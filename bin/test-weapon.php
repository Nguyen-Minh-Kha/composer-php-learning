<?php

use App\Weapon;

require __DIR__ . '/../vendor/autoload.php';

echo "my weapon";

$sword = new Weapon("sword", 25);

echo $sword->getName();
echo $sword->getDamage();
