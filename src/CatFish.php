<?php

namespace App;

use App\Animal;

class CatFish extends Animal
{
    protected function getNoise(): string
    {
        return 'bloubloublou. ';
    }
}
