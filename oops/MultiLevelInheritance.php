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
class BabyDog extends Dog
{
    function weep()
    {
        echo "weep..........<hr/>";
    }
}


$obj=new BabyDog();
$obj->bark();
$obj->eat();
$obj->weep();



?>
