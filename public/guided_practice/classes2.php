<?php

//Classes
class Pastry 
{
	
	
	public $ingredients = ['flour','sugar','eggs'];



	public function __construct($typeOfPastry)
	{

		$this->typeOfPastry = $typeOfPastry;
		$this->bake();


	}



	public function bake()
	{

		//accesss the oven API


	}

	public function serve() 
	{

		//put on a plate API and serve

	}



}

//child class of Pastry class
class Doughnut extends Pastry
{
	public $typeOfPastry = 'doughnut';

	public function __construct($flavor)
	{
		$this->flavor = $flavor;
		$this->bake();


	}

	public function glaze($glazeFlavor) 
	{



	}

}

class Cookie extends Pastry
{




}


?>