<?php 
// echo 'User IP Address - '.$_SERVER['REMOTE_ADDR']; 


function getIpAddress()
{
    if(!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        $ip = $_SERVER['HTTP_CLIENT_IP']; 
    }
    else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
    }
    else{
        $ip = $_SERVER['REMOTE_ADDR']; 
    }

    return $ip;
}


$a=getIpAddress();
echo 'User Real IP Address - '.$a; 
 ?> 