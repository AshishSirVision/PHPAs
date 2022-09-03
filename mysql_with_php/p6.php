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

$sql="desc contact";

$result=$conn->query($sql);
if($result->num_rows>0)
{
    echo "<table border=1 cellspacing='0'>";
    echo "<tr>";
    echo "<th>Field</th>";
    echo "<th>Type</th>";
    echo "<th>Null</th>";
    echo "<th>Key</th>";
    echo "<th>Default</th>";
    echo "<th>Extra</th>";
    
    echo "</tr>";
    while($row=$result->fetch_assoc())
    {
        echo "<tr>";
         echo "<td>".$row["Field"]."</td>";
         echo "<td>".$row["Type"]."</td>";
         echo "<td>".$row["Null"]."</td>";
         echo "<td>".$row["Key"]."</td>";
         echo "<td>".$row["Default"]."</td>";
         echo "<td>".$row["Extra"]."</td>";
         
         echo "</tr>";
    }
  
    echo "</table>";
}
else{
    echo "0 results founds";
}

  $conn->close();
?>