<!DOCTYPE html>
<html>
<body>

<?php
echo "start"."<hr>";



function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("division not possible by zero");
  }
  return $dividend / $divisor;
}

echo divide(5, 0)."<hr>";


echo "stop";


?>

</body>
</html>
