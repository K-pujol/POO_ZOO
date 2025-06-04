<?php

namespace App;

use App\Animal;

class Dove extends Animal
{
    protected function getNoise(): string
    {
        return 'Rou Rouuuu. ';
    }
}

