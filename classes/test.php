<?php

class test
{
    private $array = ['test'=>'test variable','abc'=>'abc variable'];
    public function createUser()
    {

    }
    public function updateUser()
    {

    }
    public function __call($name, $array)
    {
        echo "You're try to call function named :$name, with following parameter.";
        print_r($array);
    }
    public static function __callStatic($name, $arguments)
    {
        echo "This is call static function";
        // TODO: Implement __callStatic() method.
    }

    public function __get($name)
    {
        if(array_key_exists($name, $this->array))
        {
            return $this->array[$name];
        }
        else
        {
            return "No exsting variable :$name";
        }

    }
    public function __set($name, $value)
    {
        if(array_key_exists($name, $this->array))
        {
            return $this->array[$name] = $value;
        }
        else
        {
            echo "Invalid data member :$name, cannot set value. ";
        }

    }
//    public function  __construct($data)
//    {
//        echo "Got values : $data in constructor.";
//    }
//    public function __destruct()
//    {
//        echo "Destructor Function";
//    }
}
