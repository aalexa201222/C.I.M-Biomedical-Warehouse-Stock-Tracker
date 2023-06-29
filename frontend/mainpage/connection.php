<?php

$serverName = "localhost";
$userName = "root";
$password= "SPitfire100";
$dbName = "med3";



$con = mysqli_connect($serverName,$userName,$password,$dbName);
if(mysqli_connect_errno()){
    echo "failed";
    exit();
}
?>