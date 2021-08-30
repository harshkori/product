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
$sql="SELECT product.p_id,product.p_nm,product.p_desc,product.p_price,product.reg_date,session.s_nm ,session.t_price ,session.t_q,product.img FROM session INNER JOIN product ON product.p_id=session.p_id ORDER  BY session.p_id desc ";
$result = $conn->query($sql);



$conn->close();
//' href='d.php?subject=$k&web=$j
?>