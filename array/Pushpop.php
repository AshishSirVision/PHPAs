<?php

$friends=array("Ruby","anuj","karan","prachi","pinky");
array_push($friends,"shyam","umesh");
array_pop($friends);
array_pop($friends);
array_pop($friends);
array_pop($friends);
array_push($friends,"shyam");
array_push($friends,$friends);

print_r($friends);
?>