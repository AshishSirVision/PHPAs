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

$sql="insert into contact values('tom','jerry',98563456,'tj@gmail.com','dahisar')";

if ($conn->query($sql) === TRUE) {
    echo "inserted data successfully";
  } else {
    echo "Error occurs while inserting: " . $conn->error;
  }
  $conn->close();
?>