<?php

namespace App;

use App\Animal;

class ClownFish extends Animal
{
    protected function getNoise(): string
    {
        return 'bloubloublou. ';
    }
}
