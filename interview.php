<?php 
$conn=mysqli_connect("localhost","root","","interview");
if (!$conn) {
  die("connection_lost");
}
else{
  echo "connection successful"."<br/>";

    }

 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"content="ie-edge">
    <link rel="stylesheet"  href="css/bootstrap.min.css">
    
    <title>Interview question</title>
</head>
<body>
      
     <div class="container mt-4">
        <div class="row ">
            <div class="col-sm-4">
        <select class="form-control"id="select"onchange="select(this);">
            <option value="ajmer">ajmer</option>
            <option value="jodhpur">jodhpur</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Alwar">Alwar</option>
            <option value="up">UP</option>
        </select>
        </div>
       

        
            <div class="col-sm-4">
                <form class="" action=""method="POST">
                
                <textarea id="city"name="city"class="form-control"></textarea>   
            
                <button class="btn btn-primary"name='search'>search</button>
                </form>
            </div>
            <div class="col-sm-4">
                <?php
                 if (isset($_POST['search'])) {
                     if (($_POST['city']=="") )
                         {
                          echo" <p style='color:red;'>"."fill your form"."</p>";
                         }
                    else{ 
                 
                    $city=$_POST["city"];
                 
                    $sql="select * from inter where city='$city'" ;
                    $result=mysqli_query($conn,$sql);
                    if (mysqli_num_rows($result)>0)
                     {
                        echo '<table class="table">';
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>NAME</th>";
                        echo "<th>ADDRESS</th>";
                        echo "<th>CITY</th>";
                        
                        
                        echo "</tr>";
                        echo "</thead>";
                        echo  "<tbody>";
                        while($row=mysqli_fetch_assoc($result))
                        {
                             echo "<tr>";
                             echo "<td>".$row["id"]."</td>";
                             echo "<td>".$row['name']."</td>";
                             echo "<td>".$row['adress']."</td>";
                             echo "<td>".$row['city']."</td>";
                               
                            echo "</tr>";
                        }
                        echo  "<tbody>";
                        echo "</table>";
                     }
                 }
                 }
                ?>
            </div>      
         
     </div>
     <script type="text/javascript">
        function select(element){
                 var x=element.value;
                 document.getElementById("city").innerHTML=x;
        }
     </script>

    <script src="js/jquery.js"></script>
   <script src="js/bootstrap.min.js"></script>
</body>   

</html>