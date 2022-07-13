<html>
    <head>
         <title>Learn php offline</title>
    </head>
    <body>
	<?php

	$name=$_POST["fullname"];
	$address=$_POST["address"];
	print($name."<br/>");
	print($address."<br/>");

	print("<h1>".$name."</h1>");
	print($address."<br/>");
	
	print("<h1>$name</h1>");
	print("Your address :".$address."<br/>");	
                ?>
    </body>
</html>
