<?php
$person=array("name"=>"Arun yadav","Skills"=>array("C","C++","Java"),
"contact"=>array("email"=>"ar@gmail.com","linkedin"=>"ar.linked","mbno"=>"983764646"));
echo $person["name"]."<br/>";
// echo $person["Skills"]."<br/>";//Array to string conversion
echo $person["Skills"][0]."<br/>";
echo $person["Skills"][1]."<br/>";
echo $person["Skills"][2]."<br/>";

echo $person["contact"]["email"]."<br/>";
echo $person["contact"]["mbno"]."<br/>";
echo $person["contact"]["linkedin"]."<br/><br/><br/>";

$matrix1=array(
    array(1,2,3,4),
    array(33,4,4,55,35),
    array(3,2,43,4,5,45)
);
//jagged araray
print_r($matrix1);
echo"<br/>";
for ($i=0; $i < count($matrix1) ; $i++) { 
   for ($j=0; $j < count($matrix1[$i]) ; $j++) { 
    echo $matrix1[$i][$j]." ";
   }
   echo "<br/>";
}


?>