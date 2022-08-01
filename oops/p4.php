<?php
//class definition
class Student
{
    private  $id;
    private $name;
    private $age;
    private $address;  
   function __construct($id,$b,$c,$d)
    {
        $this->id=$id;
        $this->name=$b;
        $this->age=$c;
        $this->address=$d;
    }
    function display()
    {
        echo "<hr/>";
        echo $this->id."<br/>";
        echo $this->name."<br/>";
        echo $this->age."<br/>";
        echo $this->address."<br/>";  
        echo "<hr/>";
    }
}
?>
<?php
//create object
$obj1=new Student(111,"bhavik",15,"virar");
$obj2=new Student(112,"rishabh",12,"nsp");
$obj3=new Student(113,"anurag",22,"vasai");

$obj1->display();
$obj2->display();
$obj3->display();

?>