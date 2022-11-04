<?php

declare(strict_types=1);

namespace App;

class HealAction extends Action
{

    protected int $healingPower;

    public function setHealingPower($healingPower)
    {
        $this->healingPower = $healingPower;
    }


    protected function heal(Character $subject, int $amount): void
    {
        $healing = $subject->getLife() + $amount;

        if ($healing >= $subject->getMaxLife()) {
            $subject->setLife($subject->getMaxLife());
        } else {
            $subject->setLife($healing);
        }
    }

    public function execute(Character $subject, Character $target = null): void
    {
        $this->setHealingPower($subject->getNaturalHeal());

        $this->heal($subject, $this->healingPower);
    }
}
