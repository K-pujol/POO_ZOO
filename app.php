<?php
require __DIR__ . '/vendor/autoload.php';

use App\Fish;
use App\BubbleFish;
use App\CatFish;
use App\ClownFish;
use App\Elephant;
use App\Zebra;
use App\Parrot;
use App\Dove;


$animals = [];

// 5 poissons
for ($i = 1; $i <= 5; $i++) {
    $animals[] = new Fish('Poisson ' . $i);
}

// 3 poissons bulle
for ($i = 1; $i <= 3; $i++) {
    $animals[] = new BubbleFish('Poisson bulle ' . $i);
}

// 2 poissons chat
for ($i = 1; $i <= 2; $i++) {
    $animals[] = new CatFish('Poisson chat ' . $i);
}

// 1 poisson clown
$animals[] = new ClownFish('Poisson clown');

// 2 éléphants
for ($i = 1; $i <= 2; $i++) {
    $animals[] = new Elephant('Éléphant ' . $i);
}

// 1 zèbre
$animals[] = new Zebra('Zèbre');

// 10 perroquets
for ($i = 1; $i <= 10; $i++) {
    $animals[] = new Parrot('Perroquet ' . $i);
}

// 2 colombes
for ($i = 1; $i <= 2; $i++) {
    $animals[] = new Dove('Colombe ' . $i);
}



foreach ($animals as $animal) {
    echo $animal->noise();
}
