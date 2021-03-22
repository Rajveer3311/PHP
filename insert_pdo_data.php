<?php

// if ($conn) {
// 	echo "connection successful";
// }
	
try{
	$conn=new PDO("mysql:host=localhost;dbname=form;","root","");        
   $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   echo "connection successful";  
   }
catch(PDOExceptiion $e){
    echo "NO connection successful".$e->getMessage();
   }  

$sql="INSERT INTO login_form (name,password) VALUES ('raveena','18ec21')";
$affected=$conn->exec($sql);
echo $affected."row insert";

?>