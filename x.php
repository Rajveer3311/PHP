
<?php
$conn=mysqli_connect("localhost","root","","geeta_transport") ;
if(!$conn)
{
  die("connection failed") ;
}
echo " connection sucess <br/>";
if(isset($_POST['submit'])) 
{
	 if (($_POST['inp']=="")||($_POST['select']=="") )
      {
      	echo" <p style='color:red;'>"."fill your form"."</p>";
      }
      else
      {
      	$name=$_POST['inp'];
      	$number=$_POST['select'];
      
        $sql="INSERT INTO geeta_form2(name,message)VALUES('$name','$number')";
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



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport"content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible"content="ie-edge">
  <link rel="stylesheet"  href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="geeta.css">

  
  <title>Geeta Transport</title>
</head>
<body>
   <form class="form-border"action=""method="POST">
   	<input type="text"class="form-control" name="inp">
   	<select type="text"class="form-control" name="select">
   		<option>select</option>
   		<option>h</option>
   		<option>v</option>
   		<option>b</option>
   	</select>
   	<button class="btn btn-lg btn-info"name="submit">submit</button>
   </form>



  <script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>

 </body>
</html> 