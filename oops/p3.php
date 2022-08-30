<?php
//class definition
class Student
{
    //instance variable
    private  $id;
    private $name;
    private $age;
    private $address;  
   function set($id,$b,$c,$d)
    {
        //this keyword refer instance variable,method,constructor
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
$obj1=new Student();
$obj2=new Student();
$obj3=new Student();
//using object assign instance variable
//using object access the class data
$obj1->set(111,"bhavik",15,"virar");
$obj2->set(112,"rishabh",12,"nsp");
$obj1->display();
$obj2->display();

?>