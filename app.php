<?php
require __DIR__ . '/vendor/autoload.php';

use App\App;

abstract class Animal
{
    // Attribut privé
    private string $name;

    // Constructeur : initialise l'attribut $name
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    // méthode
    // Accesseur (getter) : retourne la valeur de $name
    public function getName(): string
    {
        return $this->name;
    }

    abstract protected function getNoise(): string;

    public function noise (): string
    {
        return $this->getName() . ' fait ' . $this->getNoise();
    }

}
