<?php
 $conn=mysqli_connect("localhost","root","","test-db");
 if($conn)
 {
 	echo("connecton successfully <br/>");
 	$sql="INSERT INTO student(name,roll no,address) VALUES('ram','18it44','pune')";
 	$result=mysqli_query($conn,$sql);

  } 
   while($row=mysqli_fetch_assoc($result))
    {
   echo "data inserted";
   }
 
 ?>