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

$sql = "SELECT * FROM product";

$result = $conn->query($sql);

//$sqli = "SELECT img from product where id=7";
//$result = mysqli_query($conn,$sqli);
//$row = mysqli_fetch_array($result);
//
//$image = $row['img'];
//$image_src = "upload/".$image;
$conn->close();
?>

</body>
</html>