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

$sql="insert into contact values(?,?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssiss", $firstname, $lastname,$pn, $email,$address);

$firstname="anurag";
$lastname="singh";
$pn="2323456766";
$email="to@gmail.com";
$address="virar";
$stmt->execute();

echo "New records created successfully<hr/>";

$firstname="anurag";
$lastname="singh";
$pn="2323456766";
$email="to@gmail.com";
$address="virar";
$stmt->execute();

echo "New records created successfully";


$stmt->close();
  $conn->close();
?>