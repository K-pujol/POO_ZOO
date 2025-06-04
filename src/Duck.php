<?php

namespace App;

use App\Animal;

class Duck extends Animal
{
    protected function getNoise(): string
    {
        return 'coin coin. ';
    }
}
