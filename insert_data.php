<?php
 $conn=mysqli_connect("localhost","root","","test-db");

 	$sql="INSERT INTO student(name,roll no,address) VALUE('ram','18it44','pune')";
 	$result=mysqli_query($conn,$sql);
 	$row=mysqli_fetch_assoc($result);
   while($row)
    {
   echo "success";
   echo "id: ",$row["id"]."   name:",$row["name"]."roll:",$row["roll no"]."adress:",$row["address"]."<br/>";
   }
   echo mysqli_error($conn);

 
 ?>