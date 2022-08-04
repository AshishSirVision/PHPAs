<?php
interface A
{
    // Interface function A::display() cannot contain body{statements}
   public function display();//declartion
}
interface B
{

}
interface C extends A,B
{

}
class Provider implements C
{
    public function display()
    {
       echo "Hello world";
    }
}

//$obj=new C();// Cannot instantiate(possible object creation) interface C
$obj=new Provider();
$obj->display();


?>