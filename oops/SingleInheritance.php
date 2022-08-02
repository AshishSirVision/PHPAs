<?php
class Animal
{
    function eat()
    {
        echo "eating..........<hr/>";
    }
}

class Dog extends Animal
{
    function bark()
    {
        echo "barking..........<hr/>";
    }
}

$obj=new Dog();
$obj->bark();
$obj->eat();

?>
