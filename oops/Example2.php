<?php
class Car
{
    var $name;
    function __construct($a)
    {
        $this->name=$a;
    }
    function intro()
    {
        echo "Choose German quality! I'm an $this->name!";
    }
}

$obj=new Car("Volvo");
$obj->intro();

?>