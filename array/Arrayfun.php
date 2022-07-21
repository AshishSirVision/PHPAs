<?php
$friends=array("Ajit"=>111,"anuj"=>112,"karan"=>1112,"prachi"=>3232,"pinky"=>2323);

 print_r($friends);
 echo "<hr style='color:blue;border:1px solid tomato'/>";
 print_r(array_change_key_case($friends,CASE_UPPER));
 echo "<hr style='color:blue;border:1px solid tomato'/>";
 print_r(array_change_key_case($friends,CASE_LOWER));
 echo "<hr style='color:blue;border:1px solid tomato'/>";
echo $friends["Ajit"];
$friends=array_change_key_case($friends,CASE_LOWER);
echo "<hr style='color:blue;border:1px solid tomato'/>";
echo $friends["ajit"];
?>