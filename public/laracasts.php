<?php


class Task {

	public $description;

	public function __construct()
	{

		$this->description = "Make food!!"


	}
}


$task = new Task();
var_dump($task->description);