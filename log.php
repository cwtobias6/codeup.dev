<?php

class Log
{

	public $filename;
	public $handle;


	public function __construct($prefix = 'log') {
		$newDay = date("Y-m-d");
		$this->filename = $prefix . "-" . $newDay . ".log";
		$this->handle = fopen($this->filename, 'a');
	}

	
	public function logMessage($logLevel, $message)
	{
		$newLog = date('Y-m-d H:i:s');
		
		fwrite($this->handle, PHP_EOL . $newLog . " " . $logLevel . " " . $message);

	}

	public function info($message){
		$this->logMessage("INFO", $message);
	}

	public function error($message){
		$this->logMessage("ERROR", $message);
	}

	public function __destruct(){
		fclose($this->handle);
	}

}





?>