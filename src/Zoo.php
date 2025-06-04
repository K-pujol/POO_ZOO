<?php

namespace App;

use App\Animal;
use App\Enclosure;
use App\Interfaces\CanSwim;
use App\Interfaces\CanFly;
use App\Interfaces\CanWalk;

abstract class Zoo
{

    private static ?Enclosure $aquarium = null;
    private static ?Enclosure $aviary = null;
    private static ?Enclosure $fence = null;


    public static function getAquarium(): Enclosure
    {
        if (self::$aquarium === null) {
            self::$aquarium = new Enclosure("l'aquarium");
        }
        return self::$aquarium;
    }

    public static function getAviary(): Enclosure
    {
        if (self::$aviary === null) {
            self::$aviary = new Enclosure("la volière");
        }
        return self::$aviary;
    }

    public static function getFence(): Enclosure
    {
        if (self::$fence === null) {
            self::$fence = new Enclosure("la cage");
        }
        return self::$fence;
    }


    public static function addAnimal(Animal $animal): void
    {
        if ($animal instanceof Interfaces\CanSwim) {
            self::getAquarium()->addAnimal($animal);
        } elseif ($animal instanceof Interfaces\CanFly) {
            self::getAviary()->addAnimal($animal);
        } elseif ($animal instanceof Interfaces\CanWalk) {
            self::getFence()->addAnimal($animal);
        }
    }

    static function visitTheZoo(): string
    {
        $result = "Visite du zoo :\n";
        $result .= self::getAquarium()->toString();
        $result .= self::getAviary()->toString();
        $result .= self::getFence()->toString();
        return $result;
    }
}
