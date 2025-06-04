<?php

namespace App;

use App\Animal;

class Fish extends Animal
{
    protected function getNoise(): string
    {
        return 'bloubloublou. ';
    }
}
