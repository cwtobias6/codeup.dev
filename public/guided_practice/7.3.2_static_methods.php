<?php

class Person
{
    public $firstName;
    public $lastName;

    public static $population = 7241000000;

    public static function getScientificName()
    {
        return 'Homo sapien';
    }

//when using static properties, replace $this with self
    public static function birth()
    {
        self::$population += 1;
    }

}

$person = Person::$population;

echo $person . PHP_EOL;

echo Person::getScientificName() . PHP_EOL;

//adds 1 to overall population
echo Person::birth() . PHP_EOL;

//output the result
echo Person::$population;


?>