<?php

$server = 'Localhost';
$user = 'root';
$password = '';
$db="work-life";

$con = mysqli_connect($server, $user,$password,$db);

if($con){
    echo "Successfully connected";
}
else{
    echo "Connection error ";
}
?>