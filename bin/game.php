<?php

use App\Character;
use App\Weapon;
use App\Armor;
use App\AttackAction;
use App\HealAction;

require __DIR__ . '/../vendor/autoload.php';

echo 'my gaem !';

// Arthur King of the Britons
$arthur = new Character("Arthur");
$excalibur = new Weapon("Excalibur", 15);
$holyArmor = new Armor("Holy Armor", 25);

$arthur->addWeapon($excalibur);
$arthur->addArmor($holyArmor);


// Tim the Enchanter
$tim = new Character("Tim");
$explosion = new Weapon("Explosion", 50);
$robe = new Armor("Mage robe", 5);

$tim->addWeapon($explosion);
$tim->addArmor($robe);

// characters

echo $arthur;

echo "</br>";

echo $tim;

// arthur hit tim 

$attack = new AttackAction("attack");

$arthur->doAction($attack, $tim);

echo $tim;

// tim naturalHeal himself 

$timRegen = new HealAction("timRegen");

$tim->doAction($timRegen);

echo $tim;
