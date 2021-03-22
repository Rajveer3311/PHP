<?php
 $conn=new mysqli("localhost","root","","test-db");
 if(!$conn)
 {
 	echo(" no connecton successfully <br/>");
 }
 else
 {
 echo("connecton successfully <br/>");
$sql="CREATE DATABASE rajveer";
if(($sql)==TRUE)
{
	echo "database created successfully";
}
else{
		echo " no database created ";
}

}

?>