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

$sql1 = "DROP TABLE IF EXISTS employee";  
$sql2 = "CREATE TABLE employee (id int  NOT NULL, first_name varchar(255)  NOT NULL, last_name varchar(255)  NOT NULL, userid varchar(255)  NOT NULL, userpass varchar(255)  NOT NULL)";  
$sql3 = 'INSERT INTO employee (id, first_name, last_name, userid, userpass) VALUES (1, "Agent", "Smith", "coolagent","imfree")';
$sql4 = 'INSERT INTO employee (id, first_name, last_name, userid, userpass) VALUES (2, "Anakin", "Skywalker", "thechosenone","ihateyou")';
if(!mysqli_query($conn, $sql1)||!mysqli_query($conn, $sql2)||!mysqli_query($conn, $sql3)||!mysqli_query($conn, $sql4)){  
    echo "Error";  
} 
