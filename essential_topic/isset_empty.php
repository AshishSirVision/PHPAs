<!DOCTYPE html>
<html>
<body>

<?php
$a = "";
echo isset($b);
echo "<hr>";
echo empty($b);
// True because $a is empty
if (empty($a)) {
  echo "Variable 'a' is empty.<br>".empty($a);
}

// True because $a is set
if (isset($a)) {
  echo "Variable 'a' is set.";
}
?>

</body>
</html>
