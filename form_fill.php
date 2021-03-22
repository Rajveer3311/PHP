 <?php 
$conn=mysqli_connect("localhost","root","","form") ;
if(!$conn)
{
	echo "connection failed";
}
// echo "connection sucess <br/>";
if(isset($_POST['submit'])) 
{
      if (($_POST['name']=="")||($_POST['pass']=="") )
      {
      	echo" <p style='color:red;'>"."fill your form"."</p>";
      }
      else {
      	$name=$_POST['name'];
      	$pass=$_POST['pass'];
      	$sql="INSERT INTO Login_form(name,password) VALUE('$name','$pass')";
      	if (mysqli_query($conn,$sql))
      	{
      		echo "data insert";
      	}
      	else
      	{
      	echo " no data insert";
        }
      }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet"  href="css/bootstrap.min.css">

    <title>Login page</title>
  </head>
  <body>
  <div class="row">
   <div class="col-sm-4 ">
  
   <form method="POST"action="">
   	<div class="form-group ">
   	  <label for="name">Name:</label>
   <input type="text "class="form-control"name="name"><br/>

   </div>
   	<div class="form-group ">
   	  <label for="pass">password:</label>
   <input type="password"class="form-control" name="pass"><br/>
    
   </div>
   <button class="btn-info" name="submit">submit</button>
</form>

   </div>
   <!-- retrieve code -->
   <div class="col-sm-6 offset-sm-2">
  <?php
        $sql="select * from Login_form";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
         echo'<table class="table">';
         echo"<thead>";
         echo"<tr>"; 
               echo"<th>Id</th>"; 
               echo"<th>Name</th>";
               echo"<th>password</th>";
            
         echo"</tr>";
         echo"</thead>";
         echo"<tbody>";
          while($row=mysqli_fetch_assoc($result))
            {
            echo'<tr>';
               echo "<td>". $row['id']."</td>";
               echo"<td>".$row['name']."</td>";
               echo"<td>".$row['password']."</td>";
            
             echo"</tr> ";
            }
 
         echo"</tbody>";
         echo"</table>"; 
         }
      ?>
   </div>
   
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
  </body>
</html>