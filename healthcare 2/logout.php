<?php 
session_start();

if(isset($_SESSION['name'])){
    session_destroy();
    unset($_SESSION['name']);
    header("location:home.php");
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>