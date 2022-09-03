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

$sql="select * from contact";

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
    
    echo "</tr>";
    while($row=$result->fetch_assoc())
    {
        echo "<tr>";
         echo "<td>".$row["firstname"]."</td>";
         echo "<td>".$row["lastname"]."</td>";
         echo "<td>".$row["phonenumber"]."</td>";
         echo "<td>".$row["email"]."</td>";
         echo "<td>".$row["address"]."</td>";
        
         echo "</tr>";
    }
  
    echo "</table>";
}
else{
    echo "0 results founds";
}

  $conn->close();
?>