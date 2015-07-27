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
        $this->sayHello();

    }
    public function sayHello() {
    	return "Hi, " . $this->firstName . " !";
    }
}

//runs automatically
$pinnochio = new Person("Pinnochio","Calvini");
echo $pinnochio->firstName . " " . $pinnochio->lastName . PHP_EOL;
echo $pinnochio->sayHello();





?>