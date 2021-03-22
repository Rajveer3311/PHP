<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width", initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>form submited </h><br/>
   <?php    
  extract($_POST);
  if (isset($submit)) 
  {
      $pattern="/^[A-Z].[a-z]+[0-9]*(@).[a-z]+(.com)$/";
      if(preg_match($pattern,$pass))
      {
          echo "string matched <br/> ";
          echo  $_POST["pass"];
          echo  "<br/>";
          echo $_POST["fname"];
      }
      else{
          echo "<h4>pasword must be 1 capital letter ,1 special character</h4>";
      }
  }
   ?>
</body>
</html>