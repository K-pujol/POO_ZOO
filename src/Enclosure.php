<?php

namespace App;

use App\Animal;

class Enclosure
{
    private string $name;
    private array $animals = [];

    public function __construct(string $name = "enclos")
    {
        $this->name = $name;
    }

    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    public function toString(): string
    {
        $result = "Animaux dans {$this->name} :\n";
        foreach ($this->animals as $animal) {
            $result .= '- ' . $animal->getName() . ': ' . $animal->noise() . "\n";
        }
        return $result . "\n"; // Ajoute une ligne vide après chaque enclos pour lisibilité
    }
}
