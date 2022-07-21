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
echo $person["contact"]["linkedin"]."<br/>";


?>