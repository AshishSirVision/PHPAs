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

$sql="show tables";

$result=$conn->query($sql);
if($result->num_rows>0)
{
    echo "<table border=1 cellspacing='0'>";
    echo "<tr>";
    echo "<th>Database</th>";
    echo "</tr>";
    while($row=$result->fetch_assoc())
    {
        echo "<tr>";
         echo "<td>".$row["Tables_in_db1"]."</td>";
         echo "</tr>";
    }
  
    echo "</table>";
}
else{
    echo "0 results founds";
}

  $conn->close();
?>