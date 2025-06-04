<?php

namespace App;

use App\Animal;

class Parrot extends Animal
{
    protected function getNoise(): string
    {
        return 'coco. ';
    }
}
