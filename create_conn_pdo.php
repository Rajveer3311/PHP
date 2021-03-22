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

$sql="SELECT * FROM login_form";
$result=$conn->query($sql);

// echo "<pre>".print_r($row)."</pre>"  ;  
while ($row=$result->fetch(PDO::FETCH_ASSOC)) {
     echo "<br/>"."id:".$row['id']."name:".$row['name']."password:".$row['password'];
}
?>