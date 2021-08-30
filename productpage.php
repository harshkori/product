<?php 

    session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <script src="https://code.jquery.com/jquery-2.2.4.js" charset="utf-8"></script>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
  background-color:wheat;

}
#error{
  color: red;
  font-size: 25px;
  font-family: cursive;
  text-align: center;
  margin-top: 50px;
  font-weight: bold;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 40px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 40px;
  background-color:white;
  border: 3px solid gray;
height:420px;
border-radius:5px;

}

.column img {
  height:250px;
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
  margin: 2px;
}
h2{
	text-align: center;
  font-family: cursive;
  font-size: 50px;
  color: red;
}
.title{
  font-size: 50px;
  color: red;
  top:15px;
  position: relative;

}
#m{

}
#myInput {
  background-image: url('searchicon.png');
  width: 50%;
    background-position: 10px 10px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  position: relative;
  top:-10px;
  border:2px solid red;
  border-radius:5px;
}

button{
  top:-10px;

	padding: 11px;
	background-color: red;
	color: white;
	font-size: 15px;
	font-weight: bold;
	border-radius: 5px;
	outline: none;
	cursor: pointer;
  position: relative;
}
label{
  color: black;
  font-weight: bold;
  font-family: cursive;
  top: 100px;
  font-size:20px;
    border: 2px solo red;

}

span{
  color:red;
  cursor: pointer;
  font-size:20px;

}
a{
  text-decoration:none;
}
.gif{
  float:right;
  height:200px;
  width:200px;
  top:0px;
margin-left:-50px;
  position: absolute;

}


.carticon{
  color:red;
  font-weight:bold;
  font-size:20px;
  position:absolute;
  font-size:40px;
  padding:20px;
}
/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 1200px) {
  .column {
    -ms-flex: 50%;
    flex: 20%;

    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
  .carticon{
    font-size:20px;
  }
  .gif
  {
    height:180px;
    width:180px;
  }
  .title{
    font-size:40px;
  }
}
@media screen and (max-width: 400px) {
  .carticon{
    font-size:10px;
  }
  .gif
  {
    height:140px;
    width:140px;
    top:25px;
  }
}
div.cartb{
  position:relative;                 
margin-top:10px;                         
}
.column:hover{
  transform: scale(1.05);
  box-shadow: 1px 3px 20px 15px  rgb(31, 30, 30);

}
#m{
  background-color:wheat;

}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>

<!-- Header -->

<div style="background-color:wheat;font-family:cursive;box-shadow:0px 0px 10px red;margin:6px">
<a href="cartt.php" class="carticon"><i class="fa fa-shopping-cart"></i> Cart</a>

<h2 ><label class="title">Shopzone</label><img src="images/ee.gif" class="gif">

    </h2>
    <center><input type="text" id="myInput" placeholder="Search for names.." onkeyup="myfunction()" title="Type in a name">

<button onclick="myFunction()">Search</button></center>
</div>
    <section id="m">
    
  
    
      <p id="kj"></p>
    <br><div class="row" id="myTable" >
       <br>
       <?php  include "allprodut.php";
              
      
          $_SESSION["id"] = "1";
          $k=$_SESSION["id"];
          //echo "Session variables are set.".$_SESSION['id'];
         
            if ($result->num_rows > 0) {
          
          // output data of each row
              while($row = $result->fetch_assoc()) {
              $j=$row['p_id'];
              $q=$row["p_price"];
    
          echo   "<a href='test.php?session=$k&roll=$j&price=$q'><div class='column' >
            
          <img style='width:100%' src=".$row['img']." ></img><br>
            
          </br><label><span>Product name::</span>". $row["p_nm"]."</label><br>
           
          <label><span>Description::</span>". $row["p_desc"]."</label><br>
           
          <label><span>Price::</span>". $row["p_price"]."</label><br>
            
          <div class='cartb'>
            
          <p id='g'>
            <a href='cartlist.php?subject=$k&web=$j&q=$q'>
    
            
            </a>
            
            <span>
   
          


        </span></p>
    </div>
    
    
    
           
    </div></a>";
    
  }
} 
else {
    echo "0 results";
}
 ?>
    
</div>
      <p id="error"></p>
    </section>
    
    
    <!--<script>
    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("div");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("label")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
            document.getElementById("error").innerHTML="No result found"
          }
        }       
      }
    }
    </script>-->
    <script>
    function myfunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("div");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("label")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        document.getElementById("error").innerHTML="";
    
          } else {
            tr[i].style.display = "none";
                    document.getElementById("error").innerHTML="No result found"
    
          }
        }       
      }
    }
    </script>
     <script type="text/javascript">
  
      $('.minus-btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('span').find('input');
        var value = parseInt($input.val());

        if (value > 1) {
          value = value - 1;
        } else {
          value = 0;
        }

        $input.val(value);

      });

      $('.plus-btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('span').find('input');
        var value = parseInt($input.val());

        if (value < 100) {
          value = value + 1;
        } else {
          value =100;
        }

        $input.val(value);
      });

      $('.like-btn').on('click', function() {
        $(this).toggleClass('is-active');
      });
    </script>
  

    <script>
      function k(){
      var y=document.getElementById("l").value;
      //document.getElementById("demo").innerHTML=y;
     y--
        document.getElementById('jk').value=y;
      
    }
    </script>
    <script>
      $( "#jk" ).change(function() {
  alert( "Handler for .change() called." );
});
      </script>
    <script type="text/javascript">
      function f(){
        var x=document.getElementById('l').value;
        x++;
          
        document.getElementById('jk').value=x;
    
      }
    
     </script>
             <script>
            </script>
    
    <!--<form method="post" id="form" action="d.php">
    <input id="jk" type="text" value="0" name="y"></input>
    <input type="hidden" name="p">
    </form>-->
    </script>
    
            
            
    </body>
    </html>
    
