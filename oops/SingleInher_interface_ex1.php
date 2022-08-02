<?php
interface Animal
{
    function eat();
}

interface Dog extends Animal
{
    function bark();
}
abstract class Provider implements Dog
{
  
}
class ProviderA extends Provider
{
    function eat()
    {
        echo "eating..........<hr/>";
    }
    function bark()
    {
        echo "barking..........<hr/>";
    }
}
$obj=new ProviderA();
$obj->bark();
$obj->eat();

?>
