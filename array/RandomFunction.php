<?php
function rand_float($st_num=0,$end_num=1,$mul=1000000)
{
if ($st_num>$end_num) return false;
return rand($st_num*$mul,$end_num*$mul)/$mul;
}
echo rand_float( )."\n";
echo rand_float(0.6)."\n";
echo rand_float(0.5,0.6)."\n";
echo rand_float(0,20)."\n";
echo rand_float(0,3,2)."\n"; 
echo rand_float(0,2,20)."\n";
?>
