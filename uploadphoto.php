

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
      body{
        background-color: black;
      }
      .head{
          text-align: center;
          color: rgb(253, 250, 250);
          font-size: 30px;
          font-weight: bold;      }
      .first{
          margin-top: 20px;
          margin-left: 20px;
          margin-right: 20px;
          height: 600px;
          border: 3px solid rgb(117, 117, 117);

          border-radius: 5px;
      }
  
      
     
      .t{
        color: rgb(253, 250, 250);
          font-weight: bold;

          margin-top: 50px;
      } .i{
        color: rgb(253, 250, 250);
          font-weight: bold;

          margin-top: 10px;
      }
      .m{
        color: rgb(253, 250, 250);
          font-weight: bold;

          margin-top: 5px;
      }
      .space{
          margin-left: 20px;
          margin-right: 20px;

      }
      .form-control{
          color: rgb(45, 231, 231);
      }
      input:hover{
          border-color: red;
      }
      textarea:hover
      {
        border-color: red;

      }
      @media(max-width:500px){
       .first{
        margin-left: 4px;
        margin-right: 2px;

       } 
      }
  </style>
</head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <section class="first">
     <div class="head">Upload Product</div>
    <div class="space">
    <div class="title">
        <form  method="POST" action="upload.php"  enctype="multipart/form-data">
            <div class="form-group">
                <div class="t">Product Name</div>  
                <input type="text" name="p_nm" style="background-color: rgba(46, 45, 45, 0.404); color: rgb(218, 238, 238);;" name="notification_title" id="notification_title" class="form-control" value="" placeholder="" required>
              </div>
              <div class="form-group">
                <div class="t">Product Price</div>  
                <input type="text" name="p_price" style="background-color: rgba(46, 45, 45, 0.404); color: rgb(218, 238, 238);;" name="notification_title" id="notification_title" class="form-control" value="" placeholder="" required>
              </div>
              <br>
              <br>
              <div class="form-group">
                <div class="m">Product Description</div>  
                <textarea  name="p_desc" style="background-color:rgba(46, 45, 45, 0.404); color: rgb(218, 238, 238)  ;" id="notification_msg" 
                 class="form-control" required></textarea>
                <!-- <script>
                        CKEDITOR.replace( 'notification_msg' );
                </script> -->
              </div>
              <br>
              <div class="m"> Select image to upload:  
    </div>            

  <input type="file" style='color:white' name="fileToUpload" id="fileToUpload">
              <div class="form-group">
                <!--<div class="i">Images *</div>  

                <input type="file" style="color:white;" name="big_picture" value="" id="fileupload" accept="image/*">
                <div class="fileupload_img"><img type="image" src="assets/images/add-image.png" alt="category image" /></div> -->               </div>
              <div class="form-group text-right m-b-0">
               <center><button class="btn btn-danger waves-effect waves-light" style="padding: 10px 20px 10px 20px;font-size: 20px;" type="submit" name="submit" > Send</button></center> 
                <!-- <a href="user-list.php" class="btn btn-default waves-effect waves-light m-l-5"> Cancel</a> -->
            </div>

    </form>
    </div>
</div>
    </section>
</body>

</html>