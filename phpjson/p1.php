<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
var_dump($age);
echo json_encode($age);
?>


<?php
$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars);
?>

<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($jsonobj));
?>
<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
  
var_dump(json_decode($jsonobj, true));
?>
