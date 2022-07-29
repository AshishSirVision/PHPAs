<?php
$fobj1=fopen("demofile.txt","r");
$fobj2=fopen("../demofile2.txt","r");



$contents=fread($fobj1,filesize("demofile.txt"));
echo $contents."<br/>";
$contents=fread($fobj2,filesize("../demofile2.txt"));
echo $contents."<br/>";

$fobj4=fopen("../array/demofile3.txt","r");
$contents=fread($fobj4,filesize("../array/demofile3.txt"));
echo $contents."<br/>";
fclose($fobj4);  

$fobj3=fopen("../array/demofile3.txt","w");
fwrite($fobj3,"Hello ");
fwrite($fobj3," World");
fclose($fobj3); 

$fobj4=fopen("../array/demofile3.txt","r");
$contents=fread($fobj4,filesize("../array/demofile3.txt"));
echo $contents."<br/>";
fclose($fobj4);                 


fclose($fobj1);  
fclose($fobj2);  


?>