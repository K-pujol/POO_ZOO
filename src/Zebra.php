<?php

namespace App;

use App\Animal;

class Zebra extends Animal
{
    protected function getNoise(): string
    {
        return 'hiiiiii. ';
    }
}
