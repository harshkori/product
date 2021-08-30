<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//$sql="ALTER TABLE session ADD COLUMN t_q INT";
//$sql="ALTER TABLE product ADD column 
//  img VARCHAR(300) NOT NULL
//  ";
//if ($conn->query($sql) === TRUE) {
//  echo "Table MyGuests created successfully";
//} else {
//  echo "Error creating table: " . $conn->error;
//}
$conn->close();