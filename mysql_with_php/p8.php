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

$sql="select eid,name,ename from 
employee e left join depart d
on e.deptid=d.deptid;";

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
         echo "<td>".$row["deptid"]."</td>";
         echo "<td>".$row["name"]."</td>";
         echo "<td>".$row["noemp"]."</td>";
         echo "<td>".$row["eid"]."</td>";
         echo "<td>".$row["ename"]."</td>";
        
         echo "</tr>";
    }
  
    echo "</table>";
}
else{
    echo "0 results founds";
}

  $conn->close();
?>