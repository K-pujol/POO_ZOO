<?php

namespace App;

use App\Animal;

class Whale extends Animal
{
    protected function getNoise(): string
    {
        return 'whouuuuuuu. ';
    }
}
