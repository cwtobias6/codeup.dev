<?php

class Automobile 
{
	public $make;
	public $model;
	public $color;

	public function setColor($color)
	{
		return $this->color = $color;
	}

	public function honk($message)
	{
		return "Beep beep" . $message;
	}

	public function accelerate() 
	{
		return $this->increaseFuelAirMixture();
	}

	public function increaseFuelAirMixture() 
	{
		//call to fuel injectors api
	}

	public function brake() 
	{
		return "screeeeeeech!";
	}

}

//procedural code. this is where we make instances of the object
//the 'this' key word will never appear here
//remeber to leave off the dollar sign when accessing a property of the object


$newcar = new Automobile();
$newcar->color = 'salmon';
$newcar->brake();
$newcar->honk("get out the way!");

var_dump($newcar);

$batmobile = new Automobile();
$batmobile = setColor('black');
$batmobile->make = 'Wayne Enterpises';
echo "The batmobile was made by " . $batmobile->make;


?>