<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "authentication";

$connection = mysqli_connect($server, $username, $password, $database);

if(!$connection){
    die("Connection not Connected" .  mysqli_connect_error());
}else{
    // echo "Connection Successfully";
}

?>