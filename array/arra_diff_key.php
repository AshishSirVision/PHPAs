<?php
$friends1=array("Ajit"=>111,"anuj"=>112,"karan"=>1112,"prachi"=>3232,"pinky"=>2323);
$friends2=array("Ajit1"=>111,"anuj"=>112,"karan"=>1112,"prachi"=>3232,"pinky"=>2323);
print_r($friends1);
echo "<br/>";
print_r(array_diff_key($friends1,$friends2));

?>