<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
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
      $method = $_SERVER['REQUEST_METHOD'];
      if($method=="POST"){
      $s_id=$_POST['subject'];
      $p_id=$_POST['web'];
      $t_q=$_POST['quantity'];
      $t_p=$_POST['price'];
      $t_price=$t_q*$t_p;
      $s = "INSERT  INTO session(s_nm,p_id,t_q,t_price) VALUES('harsh',$p_id,$t_q,$t_price)";
      if ($conn->query($s) === TRUE) {
        echo "<div style='color:red;font-weight:bold;font-size:55px;text-align:center'>Cart Added Successfully</div><br>";
        header("Location: ../product/cartt.php");

      }
      else{
          echo "somthing went wrong";
      }
      
      }
      else{
        echo "";
      }


      //$t_price=$t_q*$p_id;
    
      ?>
    
  

    
<div class="container">


    <div class="box-container">

        <h1 class="heading"> <span style="color:red">Cart List</h1>
        <?php include "cartdata.php";


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
       echo '<div class="box">
            <div class="image-container">
               
                <div class="big-image">
                    <img src='.$row['img'].'  class="big-img-1" alt="">
                </div>
            </div>
            <div class="content">
                <h3>'.$row['p_nm'].'</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>'.$row['p_desc'].'</p>
                <div class="price"> Product price <p>'.$row['p_price'].' rs.</p> </div>
                <div class="price"> Quantity <p>'.$row['t_q'].'</p> </div>
                <div class="price"> Total Price <p>'.$row['t_price'].' rs.</p> </div>
                <label style="font-weight:bold">'.$row['reg_date'].'</label>
                <form method="GET" >
                <input type="hidden" name="product" value='.$row['p_id'].'>

<input type="submit" value="remove" style="padding:10px;font-size:15px;font-weight:bold;cursor:pointer;">
                </form>
                </div>
        </div>
       
   

      
        ';
    }
    }
    else{
        echo "<center>NO CART</center>";
    }
        ?>
<?php
include "delete.php";

?>
</div>


<script>

let toggler = document.querySelector('#toggler');

toggler.onclick = () =>{

    if(toggler.classList.contains('fa-sun')){
        toggler.classList.replace('fa-sun', 'fa-moon');
        document.body.classList.add('active');
    }else{
        toggler.classList.replace('fa-moon', 'fa-sun');
        document.body.classList.remove('active');
    }

}

document.querySelectorAll('.small-img-1').forEach(image =>{
    image.addEventListener('click', () =>{
        var src = image.getAttribute('src');
        document.querySelector('.big-img-1').src = src;
    });
});

document.querySelectorAll('.small-img-2').forEach(image =>{
    image.addEventListener('click', () =>{
        var src = image.getAttribute('src');
        document.querySelector('.big-img-2').src = src;
    });
});

document.querySelectorAll('.small-img-3').forEach(image =>{
    image.addEventListener('click', () =>{
        var src = image.getAttribute('src');
        document.querySelector('.big-img-3').src = src;
    });
});

document.querySelectorAll('.small-img-4').forEach(image =>{
    image.addEventListener('click', () =>{
        var src = image.getAttribute('src');
        document.querySelector('.big-img-4').src = src;
    });
});

</script>

</body>
</html>