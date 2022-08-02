<?php
class Student
{
    //instance variable
    private  $id;
    private $name;
    private $age;
    private $address; 
  
    public function set_id($id)
    {
        $this->id=$id;
    }
    public function get_id()
    {
        return $this->id;
    }
    public function set_name($name)
    {
        $this->name=$name;
    }
    public function get_name()
    {
        return $this->name;
    }
    public function set_age($age)
    {
        $this->age=$age;
    }
    public function get_age()
    {
        return $this->age;
    }
    

}

?>

<?php
$obj=new Student();
$obj=new Student();


$obj->set_id(111);
$obj->set_name("tom");
$obj->set_age(12);

$obj->set_id(111);
$obj->set_name("tom");
$obj->set_age(12);


echo  $obj->get_id().", ".$obj->get_name().", ".$obj->get_age()."<br/>";
echo  $obj->get_id().", ".$obj->get_name().", ".$obj->get_age()."<br/>";


?>