<?php
//class definition
class Student
{
    var $id;
    var $name;
    var $age;
    var $address;  
}
?>
<?php
//create object
$obj1=new Student();
$obj2=new Student();
$obj3=new Student();
//using object assign instance variable
$obj1->id=112;
$obj1->name="ashishsir";
$obj1->age=25;
$obj1->address="virar";

$obj2->id=113;
$obj2->name="tom";
$obj2->age=22;
$obj2->address="malad";
//using object access the class data

$obj3=$obj1;
echo "<hr/>";
echo $obj1->id."<br/>";
echo $obj1->name."<br/>";
echo $obj1->age."<br/>";
echo $obj1->address."<br/>";  
echo "<hr/>";
echo $obj2->id."<br/>";
echo $obj2->name."<br/>";
echo $obj2->age."<br/>";
echo $obj2->address."<br/>";
echo "<hr/>";
echo $obj3->id."<br/>";
echo $obj3->name."<br/>";
echo $obj3->address."<br/>";

?>