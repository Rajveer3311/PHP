<?php

 $conn=mysqli_connect("localhost","root","","form");
 if($conn)
 {
  echo("connecton successfully <br/>");
 }

 if (isset($_POST['delete'])) {
   $sql="DELETE FROM login_form WHERE id={$_POST['sub']}";
  $result=mysqli_query($conn,$sql);
     if ($result) {
      echo "data delete";
     }
    else
    {
        echo "no data delete";
    }
}    
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <?php
        $sql="select * from login_form";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
         echo'<table class="table">';
         echo"<thead>";
         echo"<tr>"; 
               echo"<th>Id</th>"; 
               echo"<th>Name</th>";
               echo"<th>Roll no</th>";
               echo"<th>Action</th>";
         echo"</tr>";
         echo"</thead>";
         echo"<tbody>";
          while($row=mysqli_fetch_assoc($result))
            {
            echo'<tr>';
               echo "<td>".$row['id']."</td>";
               echo"<td>".$row['name']."</td>";
               echo"<td>".$row['password']."</td>";
               echo '<td><form action=""method="POST"><input type="hidden"name="sub"value='.$row['id'].'><input type="submit"name="delete"value="delete"class=" btn btn-info btn-sm"></form></td>';
             '</tr>';
            }
 
         echo"</tbody>";
         echo"</table>"; 
         }
      ?>
    </div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>