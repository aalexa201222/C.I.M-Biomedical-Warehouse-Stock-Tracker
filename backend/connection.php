<?php

$serverName = "localhost";
$userName = "root";
$password= " ";
$dbName = "med2";

$con = mysqli_connect($serverName,$userName,$password,$dbName);
if(mysqli_connect_errno()){
    echo "failed";
    exit();
}
echo "success";
?>