<?php

namespace App;

use App\Animal;

class Elephant extends Animal
{
    protected function getNoise(): string
    {
        return 'tooooooout. ';
    }
}
