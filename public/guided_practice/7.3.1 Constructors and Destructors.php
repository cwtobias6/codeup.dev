<?php


class Person
{
    public $firstName;
    public $lastName;

    //needs two underscores __
    public function __construct($first,$last)
    {
        $this->firstName = $first;
        $this->lastName = $last;
    }
}

//runs automatically
$pinnochio = new Person("Pinnochio","Calvini");





?>