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
// sql to create table
/*$sql = "CREATE TABLE product (
p_id INT AUTO_INCREMENT PRIMARY KEY,
p_nm VARCHAR(30) NOT NULL,
p_desc VARCHAR(200) NOT NULL,
p_price INT(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}*/
$s_id=$_GET['subject'];
$p_id=$_GET['web'];
//$t_q=$_POST['y'];
$t_price=$_GET['q'];
//$total=$t_q*$t_price;

//echo $t_q;
$method = $_SERVER['REQUEST_METHOD'];

$sql="SELECT product.p_id,product.p_nm,session.s_nm FROM session INNER JOIN product ON product.p_id=session.p_id";
//$sql = "INSERT  INTO session(s_nm,p_id) VALUES('harsh',$d,$t_price)";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
      //echo $row['p_nm']."<br>";
    }
}
//if ($conn->query($sql) === TRUE) {
//  echo "cart added";
//}
else{
  echo "";
}
$s = "INSERT  INTO session(s_nm,p_id) VALUES('harsh',$p_id)";
if ($conn->query($s) === TRUE) {
  echo "<div style='color:red;font-weight:bold;font-size:55px;text-align:center'>Cart Added Successfully</div><br>
  <a href='cartlist.php'>Click Here To Watch Your Added Cart</a>";
}
else{
    echo "somthing went wrong";
}


$conn->close();
?>