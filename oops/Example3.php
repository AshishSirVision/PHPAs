<?php
class Car
{
    var $name;
    function __construct($a)
    {
        $this->name=$a;
    }
    function intro():string
    {
        return  "Choose German quality! I'm an $this->name!";
    }
}

$obj=new Car("Volvo");
echo $obj->intro();

?>