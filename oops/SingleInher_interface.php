<?php
interface Animal
{
    function eat();
}

interface Dog extends Animal
{
    function bark();
}
class Provider implements Dog
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
$obj=new Provider();
$obj->bark();
$obj->eat();

?>
