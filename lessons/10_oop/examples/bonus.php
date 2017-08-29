<?php

class UserBonus
{
    private $amount = 0;
    private $bonusMultiplier = 0.5;

    public function setAmount($value)
    {
        $this->amount = $value + $value * $this->bonusMultiplier;
    }

    public function info()
    {
        echo 'User amount is ' . $this->amount;
    }

    public function __set($propety, $value)
    {
        $methodName = "set" . ucfirst($propety);
        if (method_exists($this, $methodName)) {
            $this->$methodName($value);
        }
    }
}

$userBonus = new UserBonus;
$userBonus->amount = 50;
$userBonus->info();


