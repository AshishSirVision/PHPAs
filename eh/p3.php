<!DOCTYPE html>
<html>
<body>

<?php
echo "start"."<hr>";



function divide($dividend, $divisor) {
  
  try{
        if($divisor == 0) {
          throw new Exception("Division by zero",454);//redirect into catch block
          
        }
     return $dividend / $divisor;
  }
  catch(Exception $ex)
  {
    echo $ex->getCode().", ";
    echo $ex->getMessage().", "; 
    echo $ex->getFile().", ";
  }


}

$a=$_POST["num1"];
$b=$_POST["num2"];

echo divide($a,$b)."<hr>";


echo "stop";


?>

</body>
</html>
