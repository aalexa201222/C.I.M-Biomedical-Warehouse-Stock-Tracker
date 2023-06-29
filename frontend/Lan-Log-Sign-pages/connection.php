<?php
//all the details about my connection with mySql
$serverName = "localhost";
$userName = "root";
$password= "";
$dbName = "med2";
//Connect
$con = mysqli_connect($serverName,$userName,$password,$dbName); 
if(mysqli_connect_errno()){
    echo "failed";
    exit();
}

?>