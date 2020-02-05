<?php

class Pet
{
    private $_name;
    private $_color;

    /*function _construct()
    {
        $this->_name = "unknown";
        $this->_color = "?";
    }*/

    function __construct($name="Unknown", $color="?")
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    function eat()
    {
        echo $this->_name . " is eating.<br>";
    }

    function talk()
    {
        echo "Pet is Talking<br>";
    }
}