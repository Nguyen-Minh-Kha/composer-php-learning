<?php

use App\Armor;

require __DIR__ . '/../vendor/autoload.php';

echo 'my armor';

$chest = new Armor("Chestplate", 25);

echo $chest->getName();
echo $chest->getProtection();
