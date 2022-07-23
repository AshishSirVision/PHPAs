<?php
function myfunction($x)
{
   return $x%2;
}



$a=array(113,214,31,41,51);
print_r(array_map("myfunction",$a))
?>