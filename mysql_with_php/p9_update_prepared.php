<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password,"db1");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql="update contact set firstname=?, phonenumber=? where lastname=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sis", $firstname,$pn, $lastname);

$firstname="adarsh";
$lastname="jerry";
 $pn="1232766";
// $email="to@gmail.com";
// $address="virar";
$stmt->execute();

echo "New records created successfully<hr/>";

$firstname="gaurav";
$lastname="singh";
 $pn="1232346";
// $email="to@gmail.com";
// $address="virar";
$stmt->execute();

echo "New records created successfully";


$stmt->close();
  $conn->close();
?>