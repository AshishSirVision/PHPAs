<?php
abstract class Car
{
    var $name;
    function __construct($a)
    {
        $this->name=$a;
    }
    abstract public function intro():string;
}
/*In function overriding, both parent and child classes should have same
 function name with and number of arguments.
  It is used to replace parent method in child class. 
  The purpose of overriding is to change the behavior of parent class method. 
The two methods with the same name and same parameter is called overriding.
*/
class Volvo extends Car
{
    public function intro():string
    {
        return  "Hey Choose German quality! I'm an $this->name!";
    }
}

$obj=new Volvo("Volvo");
echo $obj->intro();

?>