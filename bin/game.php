<?php

use App\Character;
use App\Weapon;
use App\Armor;
use App\AttackAction;
use App\HealAction;
use App\Inventory;

require __DIR__ . '/../vendor/autoload.php';

echo 'my gaem !';

// Arthur King of the Britons
$arthur = new Character("Arthur", new Weapon("Excalibur", 15), new Armor("Holy Armor", 25));

$inventoryArthur = new Inventory($arthur);

$arthur->setInventory($inventoryArthur);

// Tim the Enchanter
$tim = new Character("Tim", new Weapon("Explosion", 50), new Armor("Mage robe", 5));

$inventoryTim = new Inventory($tim);

$tim->setInventory($inventoryTim);

// characters

echo $arthur;

echo "</br>";

echo $tim;

// arthur hit tim 
echo "arthur hits tim";

$attack = new AttackAction("attack");

$arthur->doAction($attack, $tim);

echo $tim;

// tim naturalHeal himself 

echo "tim heals himself";

$timRegen = new HealAction("timRegen");

$tim->doAction($timRegen);

echo $tim;
