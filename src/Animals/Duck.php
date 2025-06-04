<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanFly;

class Duck extends Animal implements CanFly
{
    protected function getNoise(): string
    {
        return 'coin coin. ';
    }
}
