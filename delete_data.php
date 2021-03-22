<?php
 $conn=mysqli_connect("localhost","root","","form");

 	$sql="DELETE FROM login_form WHERE id=7";
 	$result=mysqli_query($conn,$sql);
     if ($result) {
     	echo "data delete";
     }
    else
    {
    		echo "no data delete";
    }
 ?>