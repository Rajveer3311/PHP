<?php
 $conn= mysqli_connect("localhost","root","","rajveer");
 if(!$conn)
 {
 	echo(" no connecton successfully <br/>");
 }
 else
 {
 echo("connecton successfully <br/>");
$sql="CREATE TABLE rajveer_table(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    ROLL INT,
    address TEXT)";
if(($sql)==TRUE)
{
	echo "table  created successfully";
}
else{
		echo " no table created ";
}

}

?>