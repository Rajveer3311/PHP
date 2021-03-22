<?php 
$conn=mysqli_connect("localhost","root","","form");
if (!$conn) {
  die("connection_lost");
}
else{
  // echo "connection successful"."<br/>";
}
if(isset($_POST['submit'])) 
{
      if (($_POST['name']=="")||($_POST['pass']=="") )
      {
        echo" <p style='color:red;'>"."fill your form"."</p>";
      }
      else{
      $name=$_POST['name'];
      $pass=$_POST['pass'];
      $sql="select * from Login_form WHERE name='$name'&& password='$pass'";
      $result=mysqli_query($conn,$sql);
     
      if(mysqli_num_rows($result))
      {
      echo " <script>alert('You are login')</script>";
      }
      else
      {
      echo " <script>alert('Sorry you are not login')</script>";
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
    <title>Login Page!</title>
    <style type="text/css">
      .border1{
            box-shadow: 0 20px 20px 20px rgba(51,111,110,.5); 
            padding: 20px 10px 10px 10px;
            border-radius:3%;
            position: relative;
            top: 100px;
      }
    </style>
  </head>
  <body >
    <div class="container">
     <div class="row">
   <div class="col-sm-6 offset-sm-3">
   
 
   <form method="POST"action=""class="  border mt-4 border1"style="">
   <center class="display-4 card-header ">Login Form</center>
   <ul class=" nav nav-tabs">
   <li class="nav-item">
   <a href=""class="nav-link active">login</a>
   </li>
      <li class="nav-item">
   <a href="create_login.php"class="nav-link">create</a>
   </li>
   </ul>
    <div class="form-group ">
      <label for="name">Name:</label>
   <input type="text "class="form-control  border-info border"name="name"placeholder="username">
 </div>
  
    <div class="form-group">
      <label for="pass">Password:</label>
   <input type="password"class="form-control  border-info border " name="pass"placeholder="password"><br>
     <button class=" btn btn-info rounded" name="submit">submit</button>
     <a href="Forget_password.php"class="btn btn-info rounded ml-5"name="forget">Forget password</a>
     
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