<?php

declare(strict_types=1);

namespace App;

class AttackAction extends Action
{
    protected function hit(Character $subject, Character $target)
    {
        $damageOnArmor = $subject->getWeapon()->getDamage() - $target->getArmor()->getProtection();

        $damageOnLife = $target->getLife() - $damageOnArmor;

        if ($damageOnLife == 0) {
            $target->setLife(0);
        } else {
            $target->setLife($damageOnLife);
        }
    }

    public function execute(Character $subject, Character $target = null): void
    {
        $this->hit($subject, $target);
    }
}
