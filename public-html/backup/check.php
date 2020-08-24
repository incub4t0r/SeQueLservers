<?php
ini_set('display_errors', 1);

$servername = "db";
$username = "root";
$password = "root";
$dbname = "myDb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  echo "Connected successfully";
}
$sql = "SELECT * FROM employee"; 
if ($result = $conn->query($sql)){;
    echo "Perfomed query\n";
    echo "<table><tr><th>ID</th><th>FirstName</th><th>LastName</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["id"]."</td><td>".$row["first_name"]."</td><td>" .$row["last_name"]."</td></tr>";
    }
    echo "</table>";
    $result->close();
}
else{
    printf("Query failed: %s\n", $conn->error);
}
$conn->close(); 
?> 
