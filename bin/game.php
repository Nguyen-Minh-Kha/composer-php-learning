<?php

use App\Character;
use App\Weapon;
use App\Armor;
use App\AttackAction;
use App\HealAction;

require __DIR__ . '/../vendor/autoload.php';

echo 'my gaem !';

// Arthur King of the Britons
$arthur = new Character("Arthur", new Weapon("Excalibur", 15), new Armor("Holy Armor", 25));

// Tim the Enchanter
$tim = new Character("Tim", new Weapon("Explosion", 50), new Armor("Mage robe", 5));

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
