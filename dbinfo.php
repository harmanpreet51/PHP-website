<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "presentation";

$con = mysqli_connect($host, $username, $password, $db);

if(!$con){
    die("Connection failed: ".mysqli_connect_error());
}

?>