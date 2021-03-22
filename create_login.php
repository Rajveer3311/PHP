<?php 
$conn=mysqli_connect("localhost","root","","form");
if (!$conn) {
  die("connection_lost");
}
else{
  // echo "connection successful"."<br/>";
}
if (isset($_POST['create']))

{
    if (($_POST['create_name']=="")||($_POST['create_pass']=="")||($_POST['confirm_pass']=="") )
      {
        echo" <p style='color:red;'>"."fill your form"."</p>";
      }
    else{
      if ($_POST['create_pass']==$_POST['confirm_pass']) {
        $name=$_POST['create_name'];
        $pass=$_POST['create_pass'];  
       $sql= "INSERT INTO login_form(name,password) VALUES('$name','$pass')" ;  
       $result=mysqli_query($conn,$sql);
       if($result){
         echo " <script>alert('you are successfully login')</script>";
       }
       else{
          echo " <script>alert('you are not login')</script>";
     }
      }
      else{
         echo " <script>alert('Sorry password not matched')</script>";
      }
    }
   
}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"  href="css/bootstrap.min.css">
    <title>Register Here!</title>
    <style type="text/css">
       .border1{ 
            box-shadow: 0 20px 20px 20px rgba(51,111,110,.5); 
            padding: 20px 10px 10px 10px;
            border-radius:20px;
            position: relative;
            top: 100px;
          }
    </style>
  </head>
  <body>
  

<div class="container">
     <div class="row">
     <div class="col-sm-6 offset-3">
     <form action=""method="POST"class="border  mt-4 border1">
      <div class="form-group">
        <center class="display-4 card-header">Register Form</center>
      <ul class=" nav nav-tabs">
        <li class="nav-item">
          <a href="#"class="nav-link active">create</a>
        
        </li>
        <li class="nav-item">
              <a href="login_page.php"class="nav-link">login</a>
        </li>
      </ul>
        Name:<input type="text"class="form-control border border-info" name="create_name"placeholder="username"><br>
        Password:<input type="password"class="form-control border border-info" name="create_pass"placeholder="password"><br>
        Confirm password:<input type="password"class="form-control border border-info" name="confirm_pass"placeholder="confirm password"><br>
      <button type="submit"class="rounded btn btn-info"name='create'>submit</button>
      </div>
     </form> 
</div>
</div>
</div>    
    



  	
  	 <script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
  </body>
</html>