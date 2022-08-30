<?php
$array=array('zero'=>0,'one'=>1,'two'=>2,'three'=>3,'four'=>4,'five'=>5);


 
$day= $_POST['a'];
switch($day)
{
    case 1:
        foreach($array as $key=>$value)
         {
            echo "key : $key  val : $value.<br>";
         }
    break;
    case 2:
        echo sizeof($array);
    break;
    case 3:
        $len=sizeof($array);               
        array_splice($array,0 ,1);
        print_r( $array);
    break;
    case 4:
        shuffle($array);
        print_r($array);
    break;

       
}

?>