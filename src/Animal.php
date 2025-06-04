<?php

namespace App;

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

    // Méthode abstraite : doit être implémentée par les classes dérivées
    // Retourne le bruit que fait l'animal
    abstract protected function getNoise(): string;

    // Méthode concrète : retourne une chaîne de caractères décrivant le bruit de l'animal
    public function noise(): string
    {
        return $this->getName() . ' fait ' . $this->getNoise();
    }
}
