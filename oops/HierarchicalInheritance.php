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
class Cat extends Animal
{
    function meow()
    {
        echo "meow..........<hr/>";
    }
}


$obj=new Dog();
$obj->bark();
$obj->eat();

$obj2=new Cat();
$obj2->meow();
$obj2->eat();
?>
