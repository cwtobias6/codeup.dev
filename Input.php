<?php

class Input
{


    public static function getString($key) 
    {
        $value = static::get($key);

            if(!isset($value)) {
                throw new Exception('$key must be set!');

            }
            if(!is_string($value)){
                throw new DomainException("{$value} is not a string");

                if((!is_string($value)) && is_numeric($min) && is_numeric($max)) {
                    throw new invalidArgumentException("{$value} must be a string!");
                }
            }   

            return $value = trim($value);
    }

    public static function getNumber($key)
    {
        $value = str_replace(',','',static::get($key));

            if(!isset($value)) {
                throw new Exception("{$value} must be set!");
            }
            if(!is_numeric($value)) {
                throw new DomainException("{$value} must be a number");
            }

            return $value = trim($value);
    }
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        if(isset($_REQUEST[$key])) {
            return true;
        } else {
            throw new OutOfRangeException("{$key} was not found");
        }
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        if(isset($_REQUEST[$key])) {
            return htmlspecialchars(strip_tags($_REQUEST[$key]));
        } else {
            return NULL;
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
