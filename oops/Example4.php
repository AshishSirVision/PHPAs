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
class Volvo extends Car
{

}

$obj=new Volvo("Volvo");
echo $obj->intro();

?>