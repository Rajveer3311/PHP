<?php 
$conn=mysqli_connect("localhost","root","","form");
if (!$conn) {
  die("connection_lost");
}
else{
  // echo "connection successful"."<br/>";
}
if (isset($_POST['forget']))

{
    if (($_POST['name']=="")||($_POST['new_pass']=="")||($_POST['confirm_pass']=="") )
      {
        echo" <p style='color:red;'>"."fill your form"."</p>";
      } 

 else{
      if ($_POST['new_pass'] == $_POST['confirm_pass']) 
      {
        $name=$_POST['name'];
        $new_password=$_POST["new_pass"]; 

   
          $sql="select * from Login_form WHERE name='$name'";
          $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) )
        {
          $sqli="UPDATE login_form SET password='$new_password' WHERE name='$name'";
          $result=mysqli_query($conn,$sqli);
             echo " <script>alert('Update')</script>";

        }
        else
        {
          echo " <script>alert('No Update')</script>";
        }
           
      }
    else
      {
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
    <title>Forget Password</title>
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
        <center class="display-4 card-header">Update Form</center>
      <ul class=" nav nav-tabs">
        <li class="nav-item">
          <a href=""class="nav-link active">update</a>
        
        </li>
       
        <li class="nav-item">
              <a href="login_page.php"class="nav-link">login</a>
        </li>
         <li class="nav-item">
          <a href="create_login.php"class="nav-link">create</a>
        
        </li>
      </ul>
        Name:<input type="text"class="form-control border border-info" name="name"placeholder="username"><br>
        New-Password:<input type="password"class="form-control border border-info" name="new_pass"placeholder="New password"><br>
        Confirm password:<input type="password"class="form-control border border-info" name="confirm_pass"placeholder="confirm password"><br>
      <button type="submit"class="rounded btn btn-info"name='forget'>submit</button>
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