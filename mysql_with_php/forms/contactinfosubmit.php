<?php
$servername = "localhost";
$username = "root";
$password = "";
$fn=$_POST["firstname"];
$ln=$_POST["lastname"];
$pn=$_POST["phonenumber"];
$em=$_POST["email"];
$ad=$_POST["address"];



// Create connection
$conn = new mysqli($servername, $username, $password,"db1");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql="insert into contact values('$fn','$ln',$pn,'$em','$ad')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "inserted data successfully".$last_id;
  } else {
    echo "Error occurs while inserting: " . $conn->error;
  }


  $sql="select * from contact where firstname='$fn'";

$result=$conn->query($sql);
if($result->num_rows>0)
{
    echo "<table border=1 cellspacing='0'>";
    echo "<tr>";
    echo "<th>firstname</th>";
    echo "<th>lastname</th>";
    echo "<th>phonenumber</th>";
    echo "<th>email</th>";
    echo "<th>address</th>";
    
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