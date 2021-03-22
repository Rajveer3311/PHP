<?php
 $conn=mysqli_connect("localhost","root","","test-db");
 if($conn)
 {
 	echo("connecton successfully "."<br/>");
 	$name='ram';
 	$roll='18674';
 	$addre='jaipur';
 	$sql="UPDATE student SET name='$name',roll no='roll',address='$addre' WHERE id=1";
 	
 	if($result=mysqli_query($conn,$sql))
 	{
 		echo "data update";
 	}
 	else
 	{
 		echo "no data update";
 		
 	}


 } 
 ?>
  