<?php
//class definition
class Student
{
    var $id=111;
    var $name="tom";
    var $age=11;
    var $address="virar";  
}
?>
<?php
//create object
$obj1=new Student();
$obj2=new Student();
//using object access the class data
echo $obj1->id."<br/>";
echo $obj1->name."<br/>";
echo "<hr/>";
echo $obj1->id."<br/>";
echo $obj1->name."<br/>";
?>