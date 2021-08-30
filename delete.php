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
if (isset($_GET['product']))
{
$p_id=$_GET['product'];

$sql="DELETE FROM session where p_id='$p_id'";
if ($conn->query($sql) === TRUE) {
    header("Location: ../product/cartt.php");
    } else {
      echo "Error creating table: " . $conn->error;
    }
}
else{
    echo "";
}
$conn->close();

?>