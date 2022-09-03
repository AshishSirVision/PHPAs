<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql="show databases";

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
         echo "<td>".$row["Database"]."</td>";
         echo "</tr>";
    }
  
    echo "</table>";
}
else{
    echo "0 results founds";
}

  $conn->close();
?>