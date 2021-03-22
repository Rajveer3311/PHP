<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["check1"])){
    echo $_POST["check1"];
    }
    if (isset($_POST['check2'])){
    echo $_POST["check2"];
    }
    ?>
</body>
</html>