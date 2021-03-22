<?php
 $conn=mysqli_connect("localhost","root","","test-db");
 if($conn)
 {
 	echo("connecton successfully <br/>");
 	$sql="select * from student";
 	$result=mysqli_query($conn,$sql);

  } 
   while (    $row=mysqli_fetch_assoc($result))
    {
   	echo "id: ",$row["id"]."   name:",$row["name"]."roll:",$row["roll no"]."adress:",$row["address"]."<br/>";
   }
 
 ?>