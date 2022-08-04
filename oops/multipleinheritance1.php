<?php

interface A
{
    // Interface function A::display() cannot contain body{statements}
    public function display();//declartion
}
interface B
{
    public function show();//declartion
}
interface C extends A,B
{

}
abstract class Dummy implements C//Uncaught Error: Cannot instantiate abstract class Dummy
{
 //Class Dummy contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (A::display)
 abstract public function show();
}
class Provider extends Dummy
{
     public function show()
    {
       echo "Hello dear";
    }
    public function display()
    {
       echo "Hello world";
    }
    
}

//$obj=new C();// Cannot instantiate(possible object creation) interface C
$obj=new Provider();
$obj->display();

$obj->show();


?>