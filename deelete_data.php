<?php
 $conn=mysqli_connect("localhost","root","","test-db");

 	$sql="DELETE FROM login_form WHERE id=7";
 	$result=mysqli_query($conn,$sql);
     if (mysqli_query($result)) {
     	echo "data delete";
     }
    else
    {
    		echo "no data delete";
    }
 ?>