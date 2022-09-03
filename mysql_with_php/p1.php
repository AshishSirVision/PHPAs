<?php
// class Student{
//     var $id;
//     function __construct($a,$b)
//     {
 
//     }
// }
// class mysqli{
//     var $connect_error;
//     function __construct($sn,$un,$p)
//     {
 
//     }
//     function __construct($sn,$un,$p,$db)
//     {
 
//     }
    
// }


$conn=new mysqli("localhost","root","");
// $obj=new mysqli("localhost","root","","db1");

if($conn->connect_error)
{
    die("Connection failed".$conn->connect_error);
}

    echo "Connection established";

// $s1=new Student(111,"tom");

?>